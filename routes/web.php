<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('register-form', [AuthController::class, 'registerForm'])->name('registerForm');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('login-form', [AuthController::class, 'loginForm'])->name('loginForm');
Route::post('login', [AuthController::class, 'login'])->name('login');