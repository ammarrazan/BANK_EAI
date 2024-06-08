<?php

use App\Http\Controllers\Api\hotelController;
use App\Http\Controllers\Api\rentalController;
use App\Http\Controllers\Api\asuransiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ObjWisataController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/obj-wisata', ObjWisataController::class);
Route::apiResource('/hotel',hotelController::class);
Route::apiResource('/RentalMobil',rentalController::class);
Route::apiResource('/asuransi',asuransiController::class);