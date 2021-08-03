<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\Dashboard\ShopController;
use App\Http\Controllers\Backend\Manager\ManagerController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\Item\ItemController;

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.','middleware' => ['auth','dashboard']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('/');
    Route::get('/profile', [DashboardController::class, 'profile_index'])->name('profile');
    Route::resource('manager', ManagerController::class);

    Route::resource('user', UserController::class);

    Route::resource('shop', ShopController::class);

    Route::resource('category', CategoryController::class);

    Route::resource('item', ItemController::class);


});

