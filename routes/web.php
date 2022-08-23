<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\ProductsController;

/**
 * Home route
 */
Route::get('/', [HomeController::class, 'index']);

/**
 * Auth routes
 */
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

/**
 * Client routes
 */
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/places', [PlacesController::class, 'index']);
