<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/registration-details', function () {
    return view('registration');
})->name('registration');
