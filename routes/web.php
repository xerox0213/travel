<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\NoAuth;
use App\Http\Middleware\Auth;
use App\Http\Controllers\SearchsController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home.get');

Route::get('/flights', [FlightsController::class, 'index'])
    ->name('flights.get');

Route::get('/searchs', [SearchsController::class, 'index'])
    ->name('searchs.get')
    ->middleware([NoAuth::class]);

Route::post('/flights', [FlightsController::class, 'getFlights'])
    ->name('flights.post');

Route::get('/login', [LoginController::class, 'index'])
    ->name('login.get')
    ->middleware([Auth::class]);

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.post');
