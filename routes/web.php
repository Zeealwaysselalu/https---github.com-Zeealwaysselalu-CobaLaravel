<?php

use App\Http\Middleware\Ceklogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/layout', function () {
    return view('layout');
})->middleware(Ceklogin::class);

Route::get('/new', function () {
    return view('newLayout',["title" => "New Layout"]);
})->middleware(Ceklogin::class);

Route::get('/tes', function () {
    return view('home',["title" => "Home"]);
})->middleware(Ceklogin::class);

Route::get('next', function () {
    return view('nextpage',["title" => "Next Page"]);
})->middleware(Ceklogin::class);
