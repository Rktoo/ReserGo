<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('services', ServiceController::class);
Route::resource('reservations', ReservationController::class);

route::view('/about', 'pages.about')->name('about');
route::view('/contact', 'pages.contact')->name('contact');