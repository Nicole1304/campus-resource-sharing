<?php

use App\Http\Controllers\ResourceController;
use App\Http\Controllers\BorrowRequestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Root URL → go straight to login (no more Laravel welcome page)
Route::get('/', function () {
    return redirect()->route('login');
});

// 2. Completely disable Register (you don’t want it)
Route::get('/register', fn() => redirect('/login'))->name('register');
Route::post('/register', fn() => redirect('/login'));

// 3. Breeze authentication routes (login + logout only)
require __DIR__.'/auth.php';

// 4. All protected routes (only for logged-in users)
Route::middleware('auth')->group(function () {

    // Home page
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    // Make /dashboard also go to home (Breeze creates this by default)
    Route::get('/dashboard', fn() => redirect('/home'))->name('dashboard');

    // Resources CRUD
    Route::resource('resources', ResourceController::class)->except(['show']);

    // Borrow request
    Route::post('/resources/{resource}/request', [BorrowRequestController::class, 'store'])
         ->name('borrow.request');

    Route::get('/my-requests', [BorrowRequestController::class, 'myRequests'])
         ->name('borrow.myrequests');

    // Static pages
    Route::view('/about', 'about')->name('about');
    Route::view('/contact', 'contact')->name('contact');
});