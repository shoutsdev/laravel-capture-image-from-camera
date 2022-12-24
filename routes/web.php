<?php

use App\Http\Controllers\WebcamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('webcam-capture',[WebcamController::class,'store'])->name('webcam.capture');
