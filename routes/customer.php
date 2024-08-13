<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\CustomerDashboardController;

Route::get('/customer-login',[CustomerAuthController::class,'login'])->name('customer.login');
Route::post('/customer-login',[CustomerAuthController::class,'loginCheck'])->name('customer.login');
Route::get('/customer-register',[CustomerAuthController::class,'registration'])->name('customer.register');
Route::post('/customer-register',[CustomerAuthController::class,'newRegistration'])->name('customer.register');
Route::get('/customer-logout',[CustomerAuthController::class,'logout'])->name('customer.logout');

Route::get('/my-dashboard',[CustomerDashboardController::class,'index'])->name('customer.dashboard')->middleware('customer');
