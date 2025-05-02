<?php

use App\Htpp\Controllers\PostContoroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/create', [PostController::class, 'create']);