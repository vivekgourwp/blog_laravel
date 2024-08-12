<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;


// Route::get('/home', function () {
//     return view('home');
// })->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');

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








// Products Route
Route::get('admin/products/', [ProductController::class, 'index'])->name('products');

Route::get('admin/products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('admin/products/store', [ProductController::class, 'store'])->name('products.store');

// Show the edit form for a specific product
Route::get('admin/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Handle the update form submission
Route::put('admin/products/{product}', [ProductController::class, 'update'])->name('products.update');

// Handle product deletion
Route::delete('admin/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// Show a specific product
Route::get('admin/products/{product}', [ProductController::class, 'show'])->name('products.show');