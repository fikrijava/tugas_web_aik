<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tata-cara-sholat', [HomeController::class, 'guide'])->name('guide');
Route::get('/video-stream', [HomeController::class, 'streamVideo'])->name('video.stream');
