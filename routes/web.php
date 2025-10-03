<?php

use Illuminate\Support\Facades\Route;

// Welcome page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// About page
Route::get('/about', function () {
    return view('about');
})->name('about');
