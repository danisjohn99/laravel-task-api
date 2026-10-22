<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskController;


// Public Guest Routes
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Authenticated Routes (Protected by Sanctum)
Route::middleware('auth:sanctum')->group(function () {
    
    Route::apiResource('task', TaskController::class);
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);
    
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
