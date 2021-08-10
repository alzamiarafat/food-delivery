<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Backend\User\OrderController;


Route::group(['prefix' => 'user', 'as' => 'user.','middleware' => ['auth','user']], function () {

    Route::get('/', [UserController::class, 'panel'])->name('panel');

    Route::resource('order', OrderController::class);

    Route::get('/invoice', [OrderController::class, 'invoice_print'])->name('invoice.print');

});

