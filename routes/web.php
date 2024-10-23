<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); //merujuk ke file welcome.blade.php di folder resource view
});

Route::get('/welcome', function () {
    return view('welcome'); //merujuk ke file welcome.blade.php di folder resource view
});

Route::get('/login', function () {
    return view('login'); //merujuk ke file welcome.blade.php di folder resource view
});

Route::get('/about', function () {
    return view('about'); //merujuk ke file welcome.blade.php di folder resource view
});