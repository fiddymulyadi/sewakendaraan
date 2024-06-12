<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\KwitansiController;
use App\Http\Controllers\KendaraanController;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('/penyewa',\App\Http\Controllers\PenyewaController::class);
Route::resource('/sewa',\App\Http\Controllers\SewaController::class);
Route::resource('/kwitansi',\App\Http\Controllers\KwitansiController::class);
Route::resource('kendaraan', \App\Http\Controllers\KendaraanController::class);

