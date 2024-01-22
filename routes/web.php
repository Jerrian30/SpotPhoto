<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnestudioController;
use App\Http\Controllers\TwostudioController;
use App\Http\Controllers\ThreestudioController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('onestudios', OnestudioController::class);
Route::get('/allstudio1', [OnestudioController::class, 'indexall'])->name('onestudios.indexall');

Route::resource('twostudios', TwostudioController::class);
Route::get('/allstudio2', [TwostudioController::class, 'indexall'])->name('twostudios.indexall');

Route::resource('threestudios', ThreestudioController::class);
Route::get('/allstudio3', [ThreestudioController::class, 'indexall'])->name('threestudios.indexall');