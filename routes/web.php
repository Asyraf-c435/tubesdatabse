
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

Route::get('/login-page', function () {
    return view('login');
});

Route::get('/register-page', function () {
    return view('register');
});

Route::get('/elements', function () {
    return view('elements');
});

Route::get('/profile', function () {
    return view('profile');
});


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

Route::get('/profile-settings', function () {
   return view('dashboard.profilesettings');
});

Route::get('/change-data', function () {
   return view('dashboard.profilesettemailps');
});

Route::get('/submission', function () {
   return view('dashboard.submission');
});

Route::get('/submission-certificate', function () {
   return view('dashboard.submissioncertifiicate');
});

Route::get('/submission-ribbons', function () {
   return view('dashboard.submissionribbons');
});

Route::get('/market-tubes', function () {
   return view('dashboard.market');
});

Route::get('/job-dashboard', function () {
   return view('dashboard.job-dashboard');
});

Route::get('/pro', function () {
   return view('dashboard.pro-dashboard');
});

Route::get('/update-submission', function () {
   return view('dashboard.update-submission');
});


Route::get('/course', function () {
   return view('dashboard.course');
});


Route::get('/post-job', function () {
   return view('dashboard.post-job');
});


Route::get('/vote', function () {
   return view('vote');
});



Route::get('/vote-in', function () {
   return view('votein');
});

