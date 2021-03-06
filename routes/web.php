<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\CartController;
use App\Http\Controllers\Backend\User\OrderController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/cart/store', [CartController::class, 'store'])->name('cart.store');
Route::get('/cart/increase', [CartController::class, 'increase'])->name('cart.increase');
Route::get('/cart/decrease', [CartController::class, 'decrease'])->name('cart.decrease');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/checkout', [OrderController::class, 'checkout_index'])->name('checkout.index');
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');

Auth::routes();


require __DIR__ . '/dashboard.php';
require __DIR__ . '/user.php';
require __DIR__ . '/manager.php';



