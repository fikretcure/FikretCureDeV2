<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('login', [\App\Http\Controllers\HomeController::class, 'login']);
Route::resource('repositories', \App\Http\Controllers\RepositoryController::class);
Route::resource('tags', \App\Http\Controllers\TagController::class);
Route::resource('gallery', \App\Http\Controllers\GalleryController::class);
Route::resource('contact', \App\Http\Controllers\ContactController::class);
Route::resource('statistics', \App\Http\Controllers\StatisticsController::class);


