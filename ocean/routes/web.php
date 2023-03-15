<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
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
// Client 
Route::get('/', [HomeController::class, 'show']);
Route::get('/home', [HomeController::class, 'show']);
Route::get('/shop', [ShopController::class, 'show']);
Route::get('/blog', [BlogController::class, 'show']);
Route::get('/blog-detail/{id}', [BlogController::class, 'blogDetail']);
Route::get('/contact', [ContactController::class, 'show']);
Route::get('/product-detail/{id}', [ProductController::class, 'showDetail']);
Route::get('/cart', [CartController::class, 'show']);
Route::get('/checkout', [CheckoutController::class, 'show']);
Route::get('/checkout', [CheckoutController::class, 'show']);
Route::get('/product/category/{id}', [ProductController::class, 'showProductsByCategory']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);

// Admin
Route::get('admin', [DashboardAdminController::class, 'index']);