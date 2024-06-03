<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ObjWisataController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/obj-wisata', ObjWisataController::class);
// Route::post('/obj-wisata', [ObjWisataController::class, 'store']);
