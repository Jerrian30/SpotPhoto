<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\PerbandinganStudio;
use App\Models\Onestudio;
use App\Models\Twostudio;
use App\Models\Threestudio;

class HomeController extends Controller
{
    public function index(PerbandinganStudio $allstudio)
    {
        return view('home',
        [
            'allstudio' =>$allstudio->build(),

        ]);
    }
}
