<?php

use App\Http\Controllers\Front\CargoController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/language/{key}', [HomeController::class, 'language'])
    ->name('language')
    ->where('key', '[a-z]+');

Route::controller(ContactController::class)
    ->prefix('contact')
    ->name('contact.')
    ->group(function () {
        Route::get('/', 'create')->name('create');
        Route::post('/', 'store')->name('store');
    });

Route::controller(CargoController::class)
    ->prefix('cargo')
    ->name('cargo.')
    ->group(function () {
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/show', 'show')->name('show'); // ?q=20220426-1918
    });