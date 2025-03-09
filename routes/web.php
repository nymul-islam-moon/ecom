<?php

use Illuminate\Support\Facades\Route;

// Route::fallback(function () {
//     return view('errors.404');
// });

// require __DIR__ . '/auth.php';

Route::get('/home', function () {
    dd('HOME');
    // return view('home'); // Return the home view or whatever page you want
})->name('home');
