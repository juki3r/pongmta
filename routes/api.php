<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/ping', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'pong',
    ]);
});

//Register and Login PONG Mobile App
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

//Verify OTP
Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);
//Resend OTP
Route::post('/resend-otp', [AuthController::class, 'resendOtp']);
