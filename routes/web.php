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
        Route::get('branding', [SettingsController::class, 'branding'])->name('branding');
        Route::post('branding', [SettingsController::class, 'brandingUpdate'])->name('branding.update');
        Route::get('carousel', [SettingsController::class, 'carousel'])->name('carousel');
        Route::post('carousel', [SettingsController::class, 'carouselUpdate'])->name('carousel.update');
        Route::get('ceo-photo', [SettingsController::class, 'ceoPhoto'])->name('ceo');
        Route::post('ceo-photo', [SettingsController::class, 'ceoPhotoUpdate'])->name('ceo.update');
        Route::get('subsidiaries', [SettingsController::class, 'subsidiaries'])->name('subsidiaries');
        Route::post('subsidiaries', [SettingsController::class, 'subsidiariesUpdate'])->name('subsidiaries.update');
        Route::get('hero-backgrounds', [SettingsController::class, 'hero'])->name('hero');
        Route::post('hero-backgrounds', [SettingsController::class, 'heroUpdate'])->name('hero.update');
        Route::get('csr-images', [SettingsController::class, 'csr'])->name('csr');
        Route::post('csr-images', [SettingsController::class, 'csrUpdate'])->name('csr.update');
        Route::get('photo-gallery', [SettingsController::class, 'gallery'])->name('gallery');
        Route::post('photo-gallery', [SettingsController::class, 'galleryUpdate'])->name('gallery.update');
    });
});
