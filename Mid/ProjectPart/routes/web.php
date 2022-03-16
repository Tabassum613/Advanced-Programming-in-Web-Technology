<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorAuthController;
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
Route::get('/', [VendorAuthController::class, 'Home'])->name('home');
Route::get('/help', [VendorAuthController::class, 'Help'])->name('help');
Route::get('/registration', [VendorAuthController::class, 'Registration'])->name('registration');
Route::get('/login', [VendorAuthController::class, 'Login'])->name('login');
Route::post('/registervendor', [VendorAuthController::class, 'RegisterVendor'])->name('registervendor');
Route::post('/loginvendor', [VendorAuthController::class, 'LoginVendor'])->name('loginvendor');
Route::get('/dashboard', [VendorAuthController::class, 'Dashboard'])->name('dashboard');
Route::get('/logout', [VendorAuthController::class, 'Logout'])->name('logout');



//CRUD

 Route::get('/addproduct', [ProductController::class, 'Pro_Add'])->name('addproduct');
Route::post('/addproduct', [ProductController::class, 'Addproduct'])->name('addproduct');
Route::get('/productlist', [ProductController::class, 'Productlist'])->name('productlist');





// Route::get('/', function () {
//     return view('welcome');
// });
