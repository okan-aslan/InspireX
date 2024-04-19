<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboradController;
use App\Http\Controllers\TweetController;
use App\Models\Tweet;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboradController::class, 'index'])->name('dashboard.index');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'store']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('/tweets', TweetController::class)->except('index', 'create', 'show')->middleware('auth');

Route::resource('/tweets', TweetController::class)->only('show');

Route::post('/tweets/{tweet}/store', [CommentController::class, 'store'])->name('tweets.comments.store')->middleware('auth');
Route::post('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy')->middleware('auth');

