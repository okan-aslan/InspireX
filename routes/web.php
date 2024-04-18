<?php

use App\Http\Controllers\DashboradController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboradController::class, 'index'])->name('dashboard.index');
