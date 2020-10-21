<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;

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

Route::get('/',[HomeController::class, 'index']);

Route::get('/products',[Product::class, 'index']);
Route::get('/searchResult',[Product::class, 'search_p']);
Route::get('/products/{identifier}',[Product::class, 'show']);

Route::get('/cart',[CartController::class, 'index']);
Route::post('/cart',[CartController::class, 'store']);


