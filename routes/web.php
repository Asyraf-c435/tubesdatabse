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

