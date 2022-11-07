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
Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/analytics', function () {
            return view('admin.dashboard.analytics.index', [
                'title' => 'Analytics'
            ]);
        })->name('analytics');
        Route::get('/accounting', function () {
            return view('admin.dashboard.accounting.index', [
                'title' => 'Accounting'
            ]);
        })->name('accounting');
    });
    Route::name('admin.blogs.')->group(function () {
        Route::prefix('blogs')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('dashboard');
            Route::get('/categories', [App\Http\Controllers\Admin\BlogController::class, 'category'])->name('categories');
            Route::get('/etc/analytics', [App\Http\Controllers\Admin\BlogController::class, 'analytics'])->name('analytics');
            Route::get('/etc/status', [App\Http\Controllers\Admin\BlogController::class, 'status'])->name('status');
        });
    });
    Route::name('admin.konten.')->group(function () {
        Route::prefix('konten')->group(function () {
            Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'konten'])->name('dashboard');
            Route::get('/services', [App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('services');
            Route::get('/portfolio', [App\Http\Controllers\Admin\PortfolioController::class, 'index'])->name('portfolio');
            Route::get('/portfolio/categories', [App\Http\Controllers\Admin\PortfolioController::class, 'categories'])->name('portfolio.categories');
            Route::get('/portfolio/status', [App\Http\Controllers\Admin\PortfolioController::class, 'status'])->name('portfolio.status');
        });
    });
    Route::name('admin.resource.')->group(function () {
        Route::prefix('resource')->group(function () {
            Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('users');
        });
    });
});
Auth::routes();
