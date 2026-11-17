<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Register User
Route::post('/register', [AuthController::class, 'register']);

// Protected Profile Route
Route::middleware('auth:api')->get('/profile', function (Request $request) {
    return response()->json([
        'message' => 'Authenticated Successfully',
        'user' => $request->user()
    ]);
});