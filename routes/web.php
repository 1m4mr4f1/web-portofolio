<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth', [authController::class, "index"]);

Route::get('/auth/redirect', [authController::class, "redirect"]);

Route::get('/auth/callback', [authController::class, "callback"]);

Route::get('dashboard', function() {
    return 'selamat '.Auth::user()->name.', anda masuk ke halaman dashboard';
});
