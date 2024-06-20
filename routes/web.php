<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AboutMeController;
use App\http\Controllers\SkillsController;
use App\http\Controllers\HobbiesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutMe', function () {
    return view('aboutMe');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/hobbies', function () {
    return view('hobbies');
});

Route::get('/aboutMe', [AboutMeController::class, 'index'])->name('aboutMe');
Route::get('/skills', [SkillsController::class, 'index'])->name('skills');
Route::get('/hobbies', [HobbiesController::class, 'index'])->name('hobbies');