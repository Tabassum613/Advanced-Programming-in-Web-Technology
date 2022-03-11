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

Route::get('/registration', [pagescontroller::class, 'Registration'])->name('registration');
Route::get('/contact', [pagescontroller::class, 'Contact'])->name('contact');
Route::get('/login', [pagescontroller::class, 'Login'])->name('login');
Route::post('/registration', [pagescontroller::class, 'register'])->name('registration');
Route::post('/login', [pagescontroller::class, 'loginData'])->name('login');
Route::post('/contact', [pagescontroller::class, 'contactUs'])->name('contact');