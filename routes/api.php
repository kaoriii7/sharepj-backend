<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::post('/v1/user', UserController::class);

Route::apiResource('/v1/post', PostController::class)->only(['index', 'store', 'show', 'destroy']);
