<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Empleados\EmpleadoController; 


Route::get('/', function () {
    return redirect()->route('login');
});
 

Route::middleware(['auth'])->group(function () {
    Route::get('/empleados', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('empleados', EmpleadoController::class);
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


Route::fallback(function () {
    return view('errors.error404');
});