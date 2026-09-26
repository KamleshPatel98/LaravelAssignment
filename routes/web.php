<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('register-form', [AuthController::class, 'registerForm'])->name('registerForm');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('login-form', [AuthController::class, 'loginForm'])->name('loginForm');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::resource('products', ProductController::class);
    Route::get('/products/subcategories/{category}', [ProductController::class, 'getSubCategories'])
        ->name('products.subcategories');
    Route::get('/products/states/{country}', [ProductController::class, 'getStates'])
        ->name('products.states');
    Route::get('/products/cities/{state}', [ProductController::class, 'getCities'])
        ->name('products.cities');
    Route::get('/products/areas/{city}', [ProductController::class, 'getAreas'])
        ->name('products.areas');
});