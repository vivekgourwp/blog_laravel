<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// routes/web.php
// Route::get('/users', function () {
//     return view('admin.users.users');
// })->name('users');


Route::resource('users', UserController::class);

