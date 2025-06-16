<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebsiteController;

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

Route::get('/sites/{id}', [WebsiteController::class, 'show'])->name('sites');

Route::get('/websites/{id}', [WebsiteController::class, 'index'])->name('websites');

Route::get('/profile-user', function () {
    return view('profileuser');
});

Route::get('/submit-web', function () {return view('submit');})->name('submit');
Route::post('/submit-web', [WebsiteController::class,'store'])->name('submit.store');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/register', [UserController::class, 'store'])->name('store');

Route::get('/elements', function () {
    return view('elements');
});

Route::get('/profile/{id}', [UserController::class, 'show'])->name('profile');

Route::get('/collections', function () {
    return view('collections');
})->name('collections');

Route::get('/notification', function () {
    return view('notification');
})->name('notification');

Route::get('/per-notification', function () {
   return view('insidenotification');

})->name('notification.show');

Route::get('/dashboard', function () {
   return view('dashboard');
})->name('dashboard');

Route::get('/profile-settings', function () {
   return view('profilesettings');
})->name('user.edit1');

Route::put('/profile-settings', [UserController::class, 'update'])->name('user.update1');

Route::get('/change-data', function () {
   return view('profilesettemailps');
})->name('user.edit2');

Route::put('/change-data', [UserController::class, 'update'])->name('user.update2');

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