<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PropertyCategoryController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyImageController;

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


Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::post('/', [FrontendController::class, 'search'])->name('search');

Route::prefix('admin')->middleware(['auth'])->group(
    function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/social', [DashboardController::class, 'store'])->name('social.store');
        Route::post('/social/{id}/destroy', [DashboardController::class, 'destroy'])->name('social.destroy');

        Route::resource('proprety/category', PropertyCategoryController::class);
        Route::resource('proprety', PropertyController::class);
        Route::resource('image', PropertyImageController::class);
        Route::resource('news', NewsController::class);
        Route::get('news/{id}/set-status', [NewsController::class . 'setstatus'])->name('setstatus');
    }
);

require __DIR__ . '/auth.php';
