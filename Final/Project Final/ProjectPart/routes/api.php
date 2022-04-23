<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorAuthController;   //API
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/registration/{id?}', [VendorAuthController::class, 'ShowVendor']);
Route::post('/registervendor', [VendorAuthController::class, 'addVendor']);
Route::put('/updateVendor/{id?}', [VendorAuthController::class, 'updateVendor']);
Route::delete('/deleteVendor/{id?}', [VendorAuthController::class, 'deleteVendor']);


//crud
Route::get('/product/{id?}', [ProductController::class, 'Showproducts']);
Route::post('/addproduct', [ProducController::class, 'addProducts']);
Route::put('/update_product/{id?}', [ProductController::class, 'update_product']);
Route::delete('/deleteProduct/{id?}', [ProductController::class, 'deleteProduct']);


