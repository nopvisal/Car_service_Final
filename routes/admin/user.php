<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\UserController;

Route::get('dashboard/user', [UserController::class, 'index'])->name('user');
Route::get('/dashboard/user/fetchDataRecord', [UserController::class, 'fetchUserRecord'])->name('fetchDataRecord');
Route::post('/dashboard/user/createUserRecord', [UserController::class, 'createUserRecord'])->name('createUserRecord');
Route::delete('/dashboard/user/deleteUserRecord/{id}', [UserController::class, 'deleteUserRecord'])->name('deleteUserRecord');
Route::post('/dashboard/user/updateUserRecord', [UserController::class, 'updateUserRecord'])->name('updateUserRecord');

Route::get('/dashboard/user/fetchUserRole', [UserController::class, 'fetchUserRole'])->name('fetchUserRole');
Route::get('/dashboard/user/fetchUserStatus', [UserController::class, 'fetchUserStatus'])->name('fetchUserStatus');
Route::get('/dashboard/user/fetchUserLanguage', [UserController::class, 'fetchUserLanguage'])->name('fetchUserLanguage');
