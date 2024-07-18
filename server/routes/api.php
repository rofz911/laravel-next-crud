<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SparePartController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('services')->group(function () {
        Route::get('/', [ServiceController::class, 'index']);
        Route::post('/', [ServiceController::class, 'store']);
        Route::get('/{service}', [ServiceController::class, 'show']);
        Route::put('/{service}', [ServiceController::class, 'update']);
        Route::delete('/{service}', [ServiceController::class, 'destroy']);
    });

    Route::prefix('spare-parts')->group(function () {
        Route::get('/', [SparePartController::class, 'index']);
        Route::post('/', [SparePartController::class, 'store']);
        Route::get('/{sparePart}', [SparePartController::class, 'show']);
        Route::put('/{sparePart}', [SparePartController::class, 'update']);
        Route::delete('/{sparePart}', [SparePartController::class, 'destroy']);
    });
});

Route::prefix('api')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('register', RegisterController::class);
        Route::post('login', LoginController::class);
        Route::post('logout', LogoutController::class);
    });
});
