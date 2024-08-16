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

Route::get('/signwithyoutube', [UserController::class, 'youtubeLogin'])->name('user.youtubelogin');

# REACT Routes
Route::get('react/', function () {
    return view('react');
});

Route::get('home/', function () { return view('react'); });
Route::get('terms/', function () { return view('react'); });
Route::get('privacy/', function () { return view('react'); });
Route::get('petitions/', function () { return view('react'); });
Route::get('youtubelogin/', function () { return view('youtubelogin'); });
# ----------
/*
 * user/login
 * user/list
 * user/signwithyoutube
 * user/logout
 * petition/list
 * petition/add
 * petition/edit/{id}
 * petition/del/{id}
 * misc/privacypolicy
 * misc/termsandconditions
 *
 */
?>
