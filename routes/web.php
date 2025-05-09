<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/sites', function () {
    return view('sitesbynamenms');
});

