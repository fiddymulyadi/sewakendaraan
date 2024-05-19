<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\SewaController;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('/customer',\App\Http\Controllers\PenyewaController::class);
Route::resource('/sewa',\App\Http\Controllers\SewaController::class);
