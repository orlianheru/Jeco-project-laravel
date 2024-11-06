<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('index'); //merujuk ke file welcome.blade.php di folder resource view
// });

Route::get('/welcome', function () {
    return view('welcome'); //merujuk ke file welcome.blade.php di folder resource view
});

// Route::get('/login', function () {
//     return view('login'); //merujuk ke file welcome.blade.php di folder resource view
// });

// Route::get('/about', function () {
//     return view('about'); //merujuk ke file welcome.blade.php di folder resource view
// });

// Route::post('/about', function () {
//     return view('about'); //merujuk ke file welcome.blade.php di folder resource view
// });

route::get('/', [HomeController::class, 'index'])->name('home');
route::get('/skill', [HomeController::class, 'skill'])->name('skill');
route::get('/login', [HomeController::class, 'login'])->name('login');
route::get('/about', [HomeController::class, 'about'])->name('about');
