<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::resource('home',homeController::class);

Route::resource('about',AboutController::class);

Route::resource('contact',ContactController::class);