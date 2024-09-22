<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('services', ServiceController::class);
Route::resource('reservations', ReservationController::class);

route::get('/', [HomeController::class, "index"])->name('home');
Route::get('reservations/create/{serviceId?}', [ReservationController::class, 'create'])->name('reservations.create');

// Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard/reservations/{reservation}', [UserDashboardController::class, 'show'])->name('dashboard.reservations.show');
    Route::delete('/dashboard/reservations/{reservation}', [UserDashboardController::class, 'destroy'])->name('dashboard.reservations.destroy');
});
route::view('/about', 'pages.about')->name('about');
route::view('/contact', 'pages.contact')->name('contact');
