<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\Dashboard\ShopController;


Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.','middleware' => ['auth','dashboard']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('/');

    Route::resource('shop', ShopController::class);
});

