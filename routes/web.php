<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Public Landing Page
|--------------------------------------------------------------------------
| Guests will see the landing page, authenticated users will go straight
| to the bookings dashboard.
*/
Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('bookings.index');
    }
    return view('landing'); // <-- create resources/views/landing.blade.php
})->name('landing');

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    Route::resource('bookings', BookingController::class);
});

/*
|--------------------------------------------------------------------------
| Dashboard Redirect
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return redirect()->route('bookings.index');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Auth & Profile Routes (Breeze)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
require __DIR__.'/profile.php';
