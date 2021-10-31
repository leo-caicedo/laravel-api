<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;

 //V1
//Route::apiResource('v1/posts', PostV1::class)
    //->middleware('auth:sanctum');
 //V2
//Route::apiResource('v2/posts', PostV2::class)
    //->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    // V1
    Route::apiResource('v1/posts', PostV1::class);
    // V2
    Route::apiResource('v2/posts', PostV2::class);
});

Route::post('login', [
    App\Http\Controllers\Api\LoginController::class,
    'login'
]);
