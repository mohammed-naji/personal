<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/resume', [MainController::class, 'resume'])->name('resume');
Route::get('/projects', [MainController::class, 'projects'])->name('projects');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::post('/contact', [MainController::class, 'contact_data'])->name('contact_data');
