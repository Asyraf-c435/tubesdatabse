<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/directory', function () {
    return view('directory');
})->name('directory');

Route::get('/academy', function () {
    return view('academy');
})->name('academy');

Route::get('/job', function () {
    return view('job');
})->name('job');   

Route::get('/sites/{slug}', function ($slug) {
    return view('sitesbynamenms');
})->name('site');

Route::get('/sites', function () {
    return view('sites');
})->name('sites');

Route::get('/websites', function () {
    return view('isianexplore');
})->name('website');

Route::get('/profile-user', function () {
    return view('profileuser');
});

Route::get('/submit-web', function () {
    return view('submit');
});

Route::get('/login-page', [UserController::class, 'login'])->name('login');

Route::post('/login-page', [UserController::class, 'actionlogin'])->name('actionlogin');

Route::get('/register-page', [UserController::class, 'register'])->name('register');

Route::post('/register-page', [UserController::class, 'store'])->name('store');

Route::get('/elements', function () {
    return view('elements');
});

Route::get('/profile/{id}', [UserController::class, 'show'])->name('profile');

Route::get('/collections', function () {
    return view('collections');
});

Route::get('/notification', function () {
    return view('notification');
});

Route::get('/per-notification', function () {
   return view('insidenotification');

});

Route::get('/dashboard', function () {
   return view('dashboard');
});