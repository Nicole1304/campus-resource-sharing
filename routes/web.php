<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/resources', [SiteController::class, 'resources'])->name('resources');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/login', [SiteController::class, 'login'])->name('login');
Route::get('/register', [SiteController::class, 'register'])->name('register');