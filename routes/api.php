<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\Api\ActorController;
use App\Http\Controllers\Api\DirectorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('movies', MovieController::class);
    // Route::post('movies', [MovieController::class, 'store']);
    // Route::put('movies/{movie}', [MovieController::class, 'update']);
    // Route::delete('movies/{movie}', [MovieController::class, 'destroy']);

    Route::apiResource('director', DirectorController::class);
    Route::post('director/{director}', [DirectorController::class]);

    Route::apiResource('actor', ActorController::class);
    Route::post('actor', [ActorController::class]);
});

