<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/newlayout', function () {
    return view('newLayout');
});

Route::get('/tes', function () {
    return view('testailwind');
});
