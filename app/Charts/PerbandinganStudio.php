<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Onestudio;
use App\Models\Twostudio;
use App\Models\Threestudio;
use Carbon\Carbon;

class PerbandinganStudio
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        // Mengambil data total "people" dari model Onestudio selama 7 hari terakhir
        $onestudioPeople = Onestudio::whereDate('day', '>=', now()->subDays(6))->groupBy('day')->orderBy('day')->pluck(\DB::raw('SUM(people)'))->toArray();

        // Mengambil data total "people" dari model Twostudio selama 7 hari terakhir
        $twostudioPeople = Twostudio::whereDate('day', '>=', now()->subDays(6))->groupBy('day')->orderBy('day')->pluck(\DB::raw('SUM(people)'))->toArray();

        // Mengambil data total "people" dari model Threestudio selama 7 hari terakhir
        $threestudioPeople = Threestudio::whereDate('day', '>=', now()->subDays(6))->groupBy('day')->orderBy('day')->pluck(\DB::raw('SUM(people)'))->toArray();

        // Membuat array untuk sumbu x (X-axis) dengan tanggal selama 7 hari terakhir
        $dates = Onestudio::whereDate('day', '>=', now()->subDays(6))->groupBy('day')->orderBy('day')->pluck('day')->toArray();

        return $this->chart->lineChart()
            ->setTitle('Perbandingan Jumlah People di Setiap Studio (7 Hari Terakhir)')
            ->setSubtitle('Studio 1 vs Studio 2 vs Studio 3')
            ->addData('Studio 1', $onestudioPeople)
            ->addData('Studio 2', $twostudioPeople)
            ->addData('Studio 3', $threestudioPeople)
            ->setXAxis($dates);
    }
}
