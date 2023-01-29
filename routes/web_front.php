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
Route::get('/cargos', [HomeController::class, 'search'])->name('cargos');
Route::get('/cargo/{id}', [HomeController::class, 'search'])->name('cargo')->where('id', '[0-9]+');

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact/store', 'store')->name('contact.store');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'index')->name('about');
});

Route::controller(CargoController::class)->group(function () {
    Route::post('/cargos/store', 'store')->name('cargos.store');
    Route::get('/cargos/create', 'create')->name('cargos.create');
    Route::get('/cargo/{id}', 'show')->name('cargo')->where('id', '[0-9]+'); // ?q=20220426-1918
});