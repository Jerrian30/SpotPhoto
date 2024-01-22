<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\PerbandinganStudio;
use App\Charts\PendapatanTotalChart;
use App\Models\Onestudio;
use App\Models\Twostudio;
use App\Models\Threestudio;

class HomeController extends Controller
{
    public function index(PerbandinganStudio $allstudio, PendapatanTotalChart $total)
    {
        return view('home',
        [
            'allstudio' =>$allstudio->build(),
            'studio1' =>$total->build(),

        ]);
    }
}
