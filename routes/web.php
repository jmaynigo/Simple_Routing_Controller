<?php

use Illuminate\Support\Facades\Route;

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