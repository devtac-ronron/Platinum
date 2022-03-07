<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/dashboard', function () {
    return view('components.home');
});

Route::get('/users', function () {
    return view('components.home');
});