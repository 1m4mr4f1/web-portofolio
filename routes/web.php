<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('home','dashboard');

Route::get('/auth', [authController::class, "index"])->name('login')->middleware('guest');

Route::get('/auth/redirect', [authController::class, "redirect"])->middleware('guest');

Route::get('/auth/callback', [authController::class, "callback"])->middleware('guest');

Route::get('/auth/logout',[authController::class,"logout"]);

Route::get('dashboard', function() {
    return view('dashboard.index');
})
->middleware('auth');
