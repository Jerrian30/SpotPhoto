<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class DataBulananPelangganChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->chart->lineChart()
            ->setTitle('Sales during 2021.')
            ->setSubtitle('Physical sales vs Digital sales.')
            ->addData('Studio 1', [10, 5, 30, 15, 50, 25])
            ->addData('Studio 2', [30, 45, 25, 17, 22, 43])
            ->addData('Studio 3', [15, 15, 17, 30, 16, 17])
            ->setXAxis(['Senin', 'Selasa', 'Rabu', 'Kamis', "Jum'at", 'Sabtu', 'Minggu']);
    }
}
