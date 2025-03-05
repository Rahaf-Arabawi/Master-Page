<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('layout.layout');
});

Route::get('/test', function () {
    return view('test');
});
