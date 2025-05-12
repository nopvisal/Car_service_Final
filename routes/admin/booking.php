<?php

use App\Http\Controllers\Dashboard\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard/booking', [BookingController::class, 'bookingDashboard'])->name('booking');
Route::get('/dashboard/booking/fetchDataRecord', [BookingController::class, 'fetchBookingRecord'])->name('fetchBookingRecord');
Route::post('/dashboard/booking/createBookingRecord', [BookingController::class, 'createBookingRecord'])->name('createBookingRecord');
Route::delete('/dashboard/booking/deleteBookingRecord/{id}', [BookingController::class, 'deleteBookingRecord'])->name('deleteBookingRecord');
Route::post('/dashboard/booking/updateBookingRecord', [BookingController::class, 'updateBookingRecord'])->name('updateBookingRecord');


