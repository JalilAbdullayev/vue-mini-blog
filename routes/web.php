<?php

use App\Http\Controllers\CategoryShowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostShowController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('articles/{post:slug}', PostShowController::class)->name('post.show');
Route::get('categories/{category:slug}', CategoryShowController::class)->name('category.show');
