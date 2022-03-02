<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagescontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [pagescontroller::class, 'Home'])->name('home');
Route::get('/teams', [pagescontroller::class, 'Teams'])->name('teams');
Route::get('/contact', [pagescontroller::class, 'Contact'])->name('contact');
Route::get('/aboutus', [pagescontroller::class, 'About'])->name('aboutus');
Route::get('/product', [pagescontroller::class, 'Product'])->name('product');