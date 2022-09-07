<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/tour-type/{id}', [\App\Http\Controllers\TourTypeController::class, 'index'])->name('tour-type');
Route::get('/service', [\App\Http\Controllers\ServiceController::class, 'index'])->name('service');
