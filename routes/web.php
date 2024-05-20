<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\KwitansiController;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('/penyewa',\App\Http\Controllers\PenyewaController::class);
Route::resource('/sewa',\App\Http\Controllers\SewaController::class);
Route::resource('/kwitansi',\App\Http\Controllers\KwitansiController::class);
