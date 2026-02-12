<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HobbiesController;
use App\Http\Controllers\SkillsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [AboutController::class, 'index']);
Route::get('/hobbies', [HobbiesController::class, 'index']);
Route::get('/skills', [SkillsController::class, 'index']);