<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AdminController::class)->prefix('admin')->group(function () {
    Route::get('', 'index')->name('admin.index');

    Route::post('', 'store')->name('admin.store');
});
