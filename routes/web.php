<?php

use Illuminate\Support\Facades\Config;
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

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, Config::get('app.locales'))) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});

Route::get('/tour-type/{id}', [\App\Http\Controllers\TourTypeController::class, 'index'])->name('tour-type');
Route::get('/tour/{id}', [\App\Http\Controllers\TourController::class, 'index'])->name('tour');
Route::get('/service', [\App\Http\Controllers\ServiceController::class, 'index'])->name('service');
Route::get('/contact-us', [\App\Http\Controllers\ContactUsController::class, 'index'])->name('contact-us');
Route::post('/contact-us', [\App\Http\Controllers\ContactUsController::class, 'post'])->name('contact-us.post');
Route::get('/about-us', [\App\Http\Controllers\AboutUsController::class, 'index'])->name('about-us');
