<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Onestudio;
use App\Models\Twostudio;
use App\Models\Threestudio;

class PendapatanTotalChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $dataOne = Onestudio::selectRaw('MONTH(day) as month, SUM(price) as total_price')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $dataTwo = Twostudio::selectRaw('MONTH(day) as month, SUM(price) as total_price')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $dataThree = Threestudio::selectRaw('MONTH(day) as month, SUM(price) as total_price')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $months = [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ];

        $totalPrices = [];
        foreach ($months as $index => $month) {
            $totalPrices[$index] = 0; // Inisialisasi total harga untuk setiap bulan
        }

        foreach ($dataOne as $item) {
            $totalPrices[$item->month - 1] += $item->total_price;
        }

        foreach ($dataTwo as $item) {
            $totalPrices[$item->month - 1] += $item->total_price;
        }

        foreach ($dataThree as $item) {
            $totalPrices[$item->month - 1] += $item->total_price;
        }

        // Format angka besar (e.g., 1000 menjadi 1K, 1000000 menjadi 1M)
        $formattedTotalPrices = [];
        foreach ($totalPrices as $totalPrice) {
            $formattedTotalPrices[] = $this->formatNumber($totalPrice);
        }

        return $this->chart->lineChart()
            ->setTitle('Total Pendapatan per Bulan')
            ->addData('Total Pendapatan', $formattedTotalPrices)
            ->setXAxis($months);
    }

    private function formatNumber($number)
    {
        $suffix = '';

        if ($number >= 1000000000) {
            $number = $number / 1000000000;
            $suffix = 'B';
        } elseif ($number >= 1000000) {
            $number = $number / 1000000;
            $suffix = 'M';
        } elseif ($number >= 1000) {
            $number = $number / 1000;
            $suffix = 'K';
        }

        return number_format($number, 2) . $suffix;
    }
}
