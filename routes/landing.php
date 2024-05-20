<?php

use App\Http\Controllers\landing\LandingController;
use Illuminate\Support\Facades\Route;

// Route::get('/landing', [LandingController::class, 'index']);
Route::get('/', [App\Http\Controllers\landing\LandingController::class, 'index'])->name('landing');
