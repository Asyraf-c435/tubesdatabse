<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/directory', function () {
    return view('directory');
})->name('directory');

Route::get('/academy', function () {
    return view('academy');
})->name('academy');

Route::get('/job', function () {
    return view('job');
})->name('job');   


Route::get('/sitesnms', function () {
    return view('sitesbynamenms');
});


Route::get('/sites', function () {
    return view('sites');
});

Route::get('/websites', function () {
    return view('isianexplore');
});

Route::get('/profile-user', function () {
    return view('profileuser');
});

Route::get('/submit-web', function () {
    return view('submit');
});