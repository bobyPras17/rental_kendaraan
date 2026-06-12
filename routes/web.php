<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiRentalController;
use App\Http\Controllers\PengembalianController;

Route::get('/login', [LoginController::class,'login'])
    ->name('login');

Route::post('/login', [LoginController::class,'prosesLogin']);

Route::get('/logout', [LoginController::class,'logout']);

Route::middleware('auth')->group(function () {

    Route::get('/', [DashboardController::class,'index']);

    Route::resource(
        'kendaraan',
        KendaraanController::class
    );

    Route::resource(
        'pelanggan',
        PelangganController::class
    );

    Route::resource(
        'transaksi',
        TransaksiRentalController::class
    );

    Route::resource(
        'pengembalian',
        PengembalianController::class
    );

});