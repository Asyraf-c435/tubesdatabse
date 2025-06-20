<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BadgeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/create/users', [UserController::class, 'create'])->name('register');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{slug}', [UserController::class, 'show'])->name('users.show');

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{slug}', [CourseController::class, 'show'])->name('courses.show');

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/edit/users/{slug}', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{slug}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{slug}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/create/courses', [CourseController::class, 'create'])->name('courses.create');
    Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
    Route::get('/edit/courses/{slug}', [CourseController::class, 'edit'])->name('courses.edit');
    Route::put('/courses/{slug}', [CourseController::class, 'update'])->name('courses.update');
    Route::delete('/courses/{slug}', [CourseController::class, 'destroy'])->name('courses.destroy');
    Route::post('/enroll/courses/{slug}', [CourseController::class, 'enroll'])->name('courses.enroll');
    Route::post('/vote/courses/{slug}', [CourseController::class, 'vote'])->name('courses.vote');
    Route::post('/rate/courses/{slug}', [CourseController::class, 'rate'])->name('courses.rate');

    Route::get('/create/lessons/{course_slug}',[LessonController::class, 'create'])->name('lessons.create');
    Route::post('/lessons/{course_slug}',[LessonController::class, 'store'])->name('lessons.store');
    Route::get('/lessons/{course_slug}/{slug}',[LessonController::class, 'show'])->name('lessons.show');
    Route::get('/edit/lessons/{course_slug}/{slug}', [LessonController::class, 'edit'])->name('lessons.edit');
    Route::put('/lessons/{course_slug}/{slug}', [LessonController::class, 'update'])->name('lessons.update');
    Route::delete('/lessons/{course_slug}/{slug}', [LessonController::class, 'destroy'])->name('lessons.destroy');
    Route::post('/finish/lessons/{course_slug}/{slug}', [LessonController::class, 'finish'])->name('lessons.finish');
    Route::post('/vote/lessons/{course_slug}/{slug}', [LessonController::class, 'vote'])->name('lessons.vote');
    Route::post('/rate/lessons/{course_slug}/{slug}', [LessonController::class, 'rate'])->name('lessons.rate');

    Route::get('/create/badges/{slug}', [BadgeController::class, 'create'])->name('badges.create');
    Route::post('/badges/{slug}', [BadgeController::class, 'store'])->name('badges.store');
    Route::get('/edit/badges/{slug}/{id}', [BadgeController::class, 'edit'])->name('badges.edit');
    Route::put('badges/{slug}/{id}', [BadgeController::class, 'update'])->name('badges.update');
    Route::delete('badges/{slug}/{id}', [BadgeController::class, 'destroy'])->name('badges.destroy');
    Route::get('/claim/badges/{slug}/{id}', [BadgeController::class, 'claim'])->name('badges.claim');

    Route::get('/create/comments', [CommentController::class, 'create'])->name('comments.create');
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/edit/comments/{id}', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
    Route::post('/vote/comments/{id}', [CommentController::class, 'vote'])->name('comments.vote');
    Route::delete('/comments/{id}', [CommentController::class])->name('comments.destroy');

    Route::get('/create/reports', [ReportController::class, 'create'])->name('reports.create');
    Route::post('/reports', [ReportController::class, 'store'])->name('reports.store');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
    Route::put('/state/reports/{id}', [ReportController::class, 'updateState'])->name('reports.update.state');
});