<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;

Route::middleware(['auth', 'role:admin|administrator'])->group(function () {
    Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard');
    Route::resource('/penyewa',\App\Http\Controllers\PenyewaController::class);
    Route::resource('/kwitansi',\App\Http\Controllers\KwitansiController::class);
    Route::resource('/kendaraan', \App\Http\Controllers\KendaraanController::class);
    Route::resource('/invoice', \App\Http\Controllers\invoiceController::class);
    Route::resource('/sewa',\App\Http\Controllers\SewaController::class);
});

Route::middleware(['auth', 'role:administrator'])->group(function () {
    Route::resource('/users', \App\Http\Controllers\UserController::class);
});



require __DIR__.'/auth.php';
