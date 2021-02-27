<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\Pages\PostController;
Route::resource('/posts', PostController::class,
    ['parameters' => ['posts' => 'id']]);
