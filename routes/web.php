<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProviderController;

Route::get('/', [ProviderController::class, 'index']);

// ==================JENIS NASABAH================

Route::get('/nasabah', [ProviderController::class, 'getAllJenisNasabah']);
Route::get('/nasabah/{id}', [ProviderController::class, 'getJenisNasabah']);

// ==================JENIS PEMBAYARAN================

Route::get('/pembayaran', [ProviderController::class, 'getAllJenisPembayaran']);
Route::get('/pembayaran/{id}', [ProviderController::class, 'getJenisPembayaran']);

// ==================JENIS TABUNGAN================

Route::get('/tabungan', [ProviderController::class, 'getAllJenisTabungan']);
Route::get('/tabungan/{id}', [ProviderController::class, 'getJenisTabungan']);

// ==================JENIS KARTU KREDIT================

Route::get('/kartu-kredit', [ProviderController::class, 'getAllJenisKartuKredit']);
Route::get('/kartu-kredit/{id}', [ProviderController::class, 'getJenisKartuKredit']);
