<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\CustomerController;

Route::get('dashboard/customer', [CustomerController::class, 'customerDashboard'])->name('customer');
Route::get('/dashboard/customer/fetchDataRecord', [CustomerController::class, 'fetchCustomerRecord'])->name('fetchCustomerRecord');
Route::post('/dashboard/customer/createCustomerRecord', [CustomerController::class, 'createCustomerRecord'])->name('createCustomerRecord');
Route::delete('/dashboard/customer/deleteCustomerRecord/{id}', [CustomerController::class, 'deleteCustomerRecord'])->name('deleteCustomerRecord');
Route::post('/dashboard/customer/updateCustomerRecord', [CustomerController::class, 'updateCustomerRecord'])->name('updateCustomerRecord');


