<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;

// Authentication routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Task routes
Route::get('/tasks', [TaskController::class, 'index']); // Public
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/tasks', [TaskController::class, 'store']); // Requires auth
    Route::put('/tasks/{task}', [TaskController::class, 'update']); // Requires auth
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy']); // Requires auth
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
