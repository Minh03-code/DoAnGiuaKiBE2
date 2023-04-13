<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('show', [CustomAuthController::class, 'getListUsersByPage'])->name('show');
Route::get('show-detail', [CustomAuthController::class, 'getUserByID'])->name('show-detail');