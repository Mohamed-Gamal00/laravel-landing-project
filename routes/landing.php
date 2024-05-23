<?php

use App\Http\Controllers\Landing\AboutController;
use App\Http\Controllers\Landing\ContactController;
use App\Http\Controllers\Landing\ProjectController;
use App\Http\Controllers\Landing\ServicesController;
use Illuminate\Support\Facades\Route;

// Route::get('/landing', [LandingController::class, 'index']);
Route::get('/', [App\Http\Controllers\landing\LandingController::class, 'index'])->name('landing');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/project/{id}', [ProjectController::class, 'show'])->name('project');
Route::get('/about', [AboutController::class, 'index'])->name('about');
