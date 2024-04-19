<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboradController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboradController::class, 'index'])->name('dashboard.index');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'store']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/tweets', [TweetController::class, 'index'])->name('tweets.index');

// Route::resource('/tweets', TweetController::class)->except('index');

Route::post('/tweets', [TweetController::class, 'store'])->name('tweets.store');

Route::get('/tweets/{tweet}', [TweetController::class, 'show'])->name('tweets.show');

Route::get('/tweets/{tweet}/edit', [TweetController::class, 'edit'])->name('tweets.edit');

Route::put('/tweets/{tweet}', [TweetController::class, 'update'])->name('tweets.update');

Route::delete('/tweets/{tweet}', [TweetController::class, 'destroy'])->name('tweets.destroy');


