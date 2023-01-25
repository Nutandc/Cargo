<?php

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\CargoController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/language/{key}', [HomeController::class, 'language'])
    ->name('language')
    ->where('key', '[a-z]+');

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact/store', 'store')->name('contact.store');
});

Route::controller(AboutController::class)->group(function () {
        Route::get('/about', 'index')->name('about');
    });

Route::controller(CargoController::class)
    ->prefix('cargo')
    ->name('cargo.')
    ->group(function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/show', 'show')->name('show'); // ?q=20220426-1918
    });