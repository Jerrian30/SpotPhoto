<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Onestudio;
use App\Models\Twostudio;
use App\Models\Threestudio;

class DataCustomers
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        // Mengambil data dari model Onestudio
        $onestudioData = Onestudio::get();
    
        // Mengambil data dari model Twostudio
        $twostudioData = Twostudio::get();
    
        // Mengambil data dari model Threestudio
        $threestudioData = Threestudio::get();
    
        // Mengambil data "people" dari tiap studio
        $onestudioPeople = $onestudioData->sum('people');
        $twostudioPeople = $twostudioData->sum('people');
        $threestudioPeople = $threestudioData->sum('people');
    
        return $this->chart->donutChart()
            ->setTitle('Perbandingan Jumlah Pelanggan di Setiap Studio')
            ->setSubtitle('Hari Ini')
            ->addData([$onestudioPeople, $twostudioPeople, $threestudioPeople])
            ->setLabels(['Studio 1', 'Studio 2', 'Studio 3'])
            ->setColors(['#FF5733', '#33FF57', '#5733FF']) ;// Atur warna sesuai keinginan
            $chart->setConfig([
                'dataLabels' => [
                    'enabled' => true,
                    'percentage' => true, // Menampilkan persentase
                    'formatter' => "function (val, opts) { return opts.w.globals.labels[opts.seriesIndex] + ': ' + val + '%'; }",
                ],
            ]);
        
            return $chart;
    }
}    