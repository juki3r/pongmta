<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
Route::post('/appointments', [AppointmentController::class, 'store']);
