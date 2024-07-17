<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\BeforeMiddleware;
use App\Http\Middleware\AfterMiddleware;

Route::get('/', function () {
    return view('login');
})->middleware([BeforeMiddleware::class, AfterMiddleware::class]);

Route::get('users/', function () {
    return view('users');
})->middleware([BeforeMiddleware::class]);

Route::get('login/', function (Request $request) {
    return 'log-in web to get';
});
?>