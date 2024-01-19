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
        // Mengambil total "people" dari model Onestudio pada hari ini
        $onestudioPeople = Onestudio::whereDate('day', now())->sum('people');

        // Mengambil total "people" dari model Twostudio pada hari ini
        $twostudioPeople = Twostudio::whereDate('day', now())->sum('people');

        // Mengambil total "people" dari model Threestudio pada hari ini
        $threestudioPeople = Threestudio::whereDate('day', now())->sum('people');


        return $this->chart->lineChart()
            ->setTitle('Perbandingan Jumlah People di Setiap Studio (Hari Ini)')
            ->setSubtitle('Studio 1 vs Studio 2 vs Studio 3')
            ->addData('Studio 1', [$onestudioPeople])
            ->addData('Studio 2', [$twostudioPeople])
            ->addData('Studio 3', [$threestudioPeople])
            ->setXAxis(['Hari Ini']);
    }
}
