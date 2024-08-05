<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
Route::get('/aa', function () {
    return view('home');
});

// Route::get('/admin', function () {
//     return view('admin.index');
// });

// routes/web.php
Route::get('/admin-deshbord', function () {
    return view('admin.index');
});

// routes/web.php
// Route::get('/users', function () {
//     return view('admin.users.users');
// })->name('users');


Route::resource('users', UserController::class);

Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('posts/store', [PostController::class, 'store'])->name('posts.store');

Route::get('posts/', [PostController::class, 'index'])->name('posts');