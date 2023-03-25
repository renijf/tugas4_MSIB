<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[\App\Http\Controllers\ProductController::class, 'index'] );

// CATEGORY
Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [\App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{id}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('category.show')->whereNumber('id');
Route::get('/category/{id}/edit', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit')->whereNumber('id');
Route::put('/category/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('category.update')->whereNumber('id');
Route::get('/category/{id}/delete', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.destroy')->whereNumber('id');


// PRODUCT
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::post('/product', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show')->whereNumber('id');
Route::get('/product/{id}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit')->whereNumber('id');
Route::put('/product/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('product.update')->whereNumber('id');
Route::get('/product/{id}/delete', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy')->whereNumber('id');


// CART
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::get('/cart/create', [\App\Http\Controllers\CartController::class, 'create'])->name('cart.create');
Route::post('/cart', [\App\Http\Controllers\CartController::class, 'store'])->name('cart.store');
// Route::get('/cart/{id}', [\App\Http\Controllers\CartController::class, 'show'])->name('cart.show')->whereNumber('id');
Route::get('/cart/{id}/edit', [\App\Http\Controllers\CartController::class, 'edit'])->name('cart.edit')->whereNumber('id');
Route::put('/cart/{id}', [\App\Http\Controllers\CartController::class, 'update'])->name('cart.update')->whereNumber('id');
Route::get('/cart/{id}/delete', [\App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy')->whereNumber('id');
