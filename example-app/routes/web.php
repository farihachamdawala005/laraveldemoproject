<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('welcome');
});

//register
//Route::get('register', [AuthController::class, 'register'])->name('register');
//Route::post('register', [AuthController::class, 'register'])->name('register');
Route::match(['get','post'],'register', [AuthController::class, 'register'])->name('register');
//login
//Route::get('login', [AuthController::class, 'login'])->name('login');
Route::match(['get','post'],'login', [AuthController::class, 'login'])->name('login');
//dashboard
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
//profile
//Route::get('profile', [AuthController::class, 'profile'])->name('profile');
Route::match(['get','post'],'profile', [AuthController::class, 'profile'])->name('profile');
//logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
