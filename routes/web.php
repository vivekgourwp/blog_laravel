<?php

use Illuminate\Support\Facades\Route;

Route::get('/aa', function () {
    return view('home');
});

// Route::get('/admin', function () {
//     return view('admin.index');
// });

// routes/web.php
Route::get('/a', function () {
    return view('admin.index');
});

