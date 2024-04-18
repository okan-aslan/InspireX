<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboradController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboradController::class, 'index'])->name('dashboard.index');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'store']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
