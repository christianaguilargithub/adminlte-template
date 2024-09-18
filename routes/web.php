<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Apply auth middleware to ensure users are logged in
Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');
});
