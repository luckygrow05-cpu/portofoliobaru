<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // Ini untuk file index.blade.php
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details'); // Ini untuk file portfolio-details.blade.php
});

Route::get('/service-details', function () {
    return view('service-details'); // Ini untuk file service-details.blade.php
});

Route::get('/starter-page', function () {
    return view('starter-page'); // Ini untuk file starter-page.blade.php
});
