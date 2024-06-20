<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Jobs\JobsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/jobs/single/{id}', [JobsController::class, 'single'])->name('single.job');
