<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

// Welcome page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// About page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Auth routes
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/forgot-password', [AuthController::class, 'showForgot'])->name('forgot');
Route::post('/forgot-password', [AuthController::class, 'sendResetLink']);

Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

// add route name 'dashboard'
Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');


Route::middleware('auth')->group(function () {
    Route::post('/events/store', [EventController::class, 'store'])->name('events.store');
    Route::get('/events/browse', [EventController::class, 'browse'])->name('events.browse');
    Route::get('/events/bookmarked', [EventController::class, 'bookmarked'])->name('events.bookmarked');
    Route::post('/events/{id}/bookmark', [EventController::class, 'bookmark'])->name('events.bookmark');
});
