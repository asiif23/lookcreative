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

Route::get('/', [App\Http\Controllers\Web\WebController::class, 'index'])->name('home');
Route::get('/services', [App\Http\Controllers\Web\ServiceController::class, 'index'])->name('service');
Route::get('/about', [App\Http\Controllers\Web\AboutController::class, 'index'])->name('About');
Route::get('/blog', [App\Http\Controllers\Web\BlogController::class, 'index'])->name('Blog');
Route::get('/contact', [App\Http\Controllers\Web\ContactController::class, 'index'])->name('Contact');
Route::get('/portfolio', [App\Http\Controllers\Web\PortfolioController::class, 'index'])->name('Portfolio');

Auth::routes();
