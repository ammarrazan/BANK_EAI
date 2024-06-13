<?php

use App\Http\Controllers\Api\DataNasabahController;
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
Route::get("/fetch/biro-tour", [BiroTourController::class, 'getFetch']);
Route::get("/fetch/{id}/biro-tour", [BiroTourController::class, 'getFetchDetail']);
Route::apiResource('/hotel',hotelController::class);
Route::get("/fetch/hotel", [hotelController::class, 'getFetch']);
Route::get("/fetch/{id}/hotel", [hotelController::class, 'getFetchDetail']);
Route::apiResource('/RentalMobil',rentalController::class);
Route::get("/fetch/RentalMobil", [rentalController::class, 'getFetch']);
Route::get("/fetch/{id}/RentalMobil", [rentalController::class, 'getFetchDetail']);
Route::apiResource('/DataNasabah',DataNasabahController::class);
Route::get("/fetch/goverment", [DataNasabahController::class, 'getFetch']);
Route::get("/fetch/{id}/goverment", [DataNasabahController::class, 'getFetchDetail']);
Route::apiResource('/asuransi',asuransiController::class);
Route::get("/fetch/asuransi", [asuransiController::class, 'getFetch']);
Route::get("/fetch/{id}/asuransi", [asuransiController::class, 'getFetchDetail']);

