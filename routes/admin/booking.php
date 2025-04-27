<?php

use App\Http\Controllers\Dashboard\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\CustomerController;

Route::get('dashboard/booking', [BookingController::class, 'bookingDashboard'])
    ->name('booking');
