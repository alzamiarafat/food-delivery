<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Manager\ManagerController;


Route::group(['prefix' => 'manager', 'as' => 'manager.','middleware' => ['auth','manager']], function () {
    Route::get('/', [ManagerController::class, 'manager_panel'])->name('/');
});
