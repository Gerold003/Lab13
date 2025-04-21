<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Registration routes
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

// Login routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login'); // Add name here
Route::post('/login', [AuthController::class, 'login']);

// Logout route with authentication middleware
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Redirect root URL to the dashboard
Route::get('/', function () {
    return redirect('/dashboard');
});

// Dashboard route, accessible only to authenticated users
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');