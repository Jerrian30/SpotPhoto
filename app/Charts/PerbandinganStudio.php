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
        
        $onestudioPeople = Onestudio::whereDate('day', '>=', now()->subDays(6))->groupBy('day')->orderBy('day')->pluck(\DB::raw('SUM(people)'))->toArray();


        $twostudioPeople = Twostudio::whereDate('day', '>=', now()->subDays(6))->groupBy('day')->orderBy('day')->pluck(\DB::raw('SUM(people)'))->toArray();

        
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
