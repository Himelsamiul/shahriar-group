<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    // guest routes
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.attempt')->middleware('throttle:5,1');

    // authenticated routes
    Route::middleware('auth')->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/', DashboardController::class)->name('dashboard');
        Route::get('logo', [SettingsController::class, 'edit'])->name('settings');
        Route::post('logo', [SettingsController::class, 'update'])->name('settings.update');
    });
});
