<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Dashboard\DashboardController;


Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.','middleware' => ['auth','dashboard']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('/');
});

