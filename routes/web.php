<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('services', ServiceController::class);
Route::resource('reservations', ReservationController::class);

route::get('/', [HomeController::class, "index"])->name('home');
Route::get('reservations/create/{serviceId?}', [ReservationController::class, 'create'])->name('reservations.create');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
route::view('/about', 'pages.about')->name('about');
route::view('/contact', 'pages.contact')->name('contact');
