<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\User\UserController;


Route::group(['prefix' => 'user', 'as' => 'user.','middleware' => ['auth','user']], function () {
    Route::get('/', [UserController::class, 'index'])->name('/');
    Route::get('/', [UserController::class, 'panel'])->name('panel');
});

