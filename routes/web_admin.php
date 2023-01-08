<?php

use App\Http\Controllers\Admin\CargoController;
use App\Http\Controllers\Admin\CargoProcessController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CourierController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\SpecialtyController;
use App\Http\Controllers\Admin\TransportController;
use App\Http\Controllers\Admin\UserAgentController;
use App\Http\Controllers\Admin\VisitorController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::middleware('guest')
    ->group(function () {
        Route::get('/register', [RegisterController::class, 'create'])
            ->name('register');

        Route::post('/register', [RegisterController::class, 'store'])
            ->middleware(ProtectAgainstSpam::class);

        Route::get('/login', [LoginController::class, 'create'])
            ->name('login');

        Route::post('/login', [LoginController::class, 'store'])
            ->middleware(ProtectAgainstSpam::class);
    });

Route::middleware('auth')
    ->group(function () {
        Route::post('/logout', [LoginController::class, 'destroy'])
            ->middleware(ProtectAgainstSpam::class)
            ->name('logout');
    });

Route::middleware('auth')->prefix('admin')->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::controller(ContactController::class)->prefix('contacts')->name('contacts.')
            ->group(function () {
                Route::get('/index', 'index')->name('index');
                Route::delete('/{id}/delete', 'delete')->name('delete')->where('id', '[0-9]+');
            });

        Route::controller(CargoController::class)->prefix('cargos')->name('cargos.')
            ->group(function () {
                Route::get('/index', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/edit', 'edit')->name('edit')->where('id', '[0-9]+');
                Route::put('/{id}/update', 'update')->name('update')->where('id', '[0-9]+');
                Route::delete('/{id}/delete', 'delete')->name('delete')->where('id', '[0-9]+');
            });

        Route::controller(CargoProcessController::class)->prefix('cargo/processes')->name('cargo.processes.')
            ->group(function () {
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/edit', 'edit')->name('edit')->where('id', '[0-9]+');
                Route::put('/{id}/update', 'update')->name('update')->where('id', '[0-9]+');
                Route::delete('/{id}/delete', 'delete')->name('delete')->where('id', '[0-9]+');
            });

        Route::controller(CourierController::class)->prefix('couriers')->name('couriers.')
            ->group(function () {
                Route::get('/index', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/edit', 'edit')->name('edit')->where('id', '[0-9]+');
                Route::put('/{id}/update', 'update')->name('update')->where('id', '[0-9]+');
                Route::delete('/{id}/delete', 'delete')->name('delete')->where('id', '[0-9]+');
            });

        Route::controller(LocationController::class)->prefix('locations')->name('locations.')
            ->group(function () {
                Route::get('/index', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/edit', 'edit')->name('edit')->where('id', '[0-9]+');
                Route::put('/{id}/update', 'update')->name('update')->where('id', '[0-9]+');
                Route::delete('/{id}/delete', 'delete')->name('delete')->where('id', '[0-9]+');
            });

        Route::controller(TransportController::class)->prefix('transports')->name('transports.')
            ->group(function () {
                Route::get('/index', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/edit', 'edit')->name('edit')->where('id', '[0-9]+');
                Route::put('/{id}/update', 'update')->name('update')->where('id', '[0-9]+');
                Route::delete('/{id}/delete', 'delete')->name('delete')->where('id', '[0-9]+');
            });

        Route::controller(SpecialtyController::class)->prefix('specialties')->name('specialties.')
            ->group(function () {
                Route::get('/index', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::get('/{id}/edit', 'edit')->name('edit')->where('id', '[0-9]+');
                Route::put('/{id}/update', 'update')->name('update')->where('id', '[0-9]+');
                Route::delete('/{id}/delete', 'delete')->name('delete')->where('id', '[0-9]+');
            });

        Route::controller(UserAgentController::class)->prefix('user-agents')->name('userAgents.')
            ->group(function () {
                Route::get('/index', 'index')->name('index');
            });

        Route::controller(VisitorController::class)->prefix('visitors')->name('visitors.')
            ->group(function () {
                Route::get('/index', 'index')->name('index');
            });
    });