<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\DataCustomers;
use App\Models\OneStudio;
use App\Models\TwoStudio;
use App\Models\ThreeStudio;

class HomeController extends Controller
{
    public function index(DataCustomers $chart)
    {
        return view('home', ['chart' => $chart->build()]);
    }
}
