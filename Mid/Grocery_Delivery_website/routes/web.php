<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagescontroller;
use App\Http\Controllers\ProductController;
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

Route::get('/', [pagescontroller::class, 'Home'])->name('home');

Route::get('/help', [pagescontroller::class, 'Help'])->name('help');

Route::get('/profile', [pagescontroller::class, 'Profile'])->name('profile');

Route::get('/contact', [pagescontroller::class, 'Contact'])->name('contact');
Route::post('/contact', [pagescontroller::class, 'contactUs'])->name('contact');


//Product.................
Route::get('/productCreate', [ProductController::class, 'Pro_create'])->name('productCreate');
Route::post('/productCreate', [ProductController::class, 'ProductCreate'])->name('productCreate');
Route::get('/productList', [ProductController::class, 'ProductList'])->name('productList');
// ProductList








