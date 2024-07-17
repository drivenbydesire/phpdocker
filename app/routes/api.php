<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\BeforeMiddleware;

Route::get('/', function (Request $request) {
    return 'log-in api to get';
})->name('login')->middleware([BeforeMiddleware::class]);

Route::get('/myapi', function (Request $request) {
    return 'test';
})->middleware('auth:sanctum');

Route::get('login/', function (Request $request) {
    return 'log-in to get';
})->name('login')->middleware([BeforeMiddleware::class]);

# Default: Register, Login, Logout, Forgot
# Use private apis for OTP, Email, SMS, Two-Factor, 