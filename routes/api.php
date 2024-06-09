<?php

use App\Http\Controllers\Api\hotelController;
use App\Http\Controllers\Api\rentalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ObjWisataController;
use App\Http\Controllers\Api\BiroTourController;
use App\Http\Controllers\Api\asuransiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/obj-wisata', ObjWisataController::class);
Route::get("/fetch/obj-wisata", [ObjWisataController::class, 'getFetch']);
Route::get("/fetch/{id}/obj-wisata", [ObjWisataController::class, 'getFetchDetail']);
Route::apiResource('/biro-tour', BiroTourController::class);
Route::apiResource('/hotel',hotelController::class);
Route::apiResource('/RentalMobil',rentalController::class);
Route::apiResource('/asuransi',asuransiController::class);