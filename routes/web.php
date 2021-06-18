<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeaturedProductController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PropertyCategoryController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SliderController;
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

Route::view('/test', 'welcome');

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/berita', [FrontendController::class, 'news'])->name('news');
Route::get('/berita/{id}', [FrontendController::class, 'newsdetail'])->name('news.detail');
Route::get('/property', [FrontendController::class, 'propety'])->name('propety');
Route::post('/property', [FrontendController::class, 'cari'])->name('propety.s');
Route::get('/property/{id}', [FrontendController::class, 'details'])->name('details.proprety');
Route::any('/search/proprety', [FrontendController::class, 'search'])->name('search');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontendController::class, 'sendMessage'])->name('sendMessage');

Route::prefix('admin')->middleware(['auth'])->group(
    function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/social', [DashboardController::class, 'store'])->name('social.store');
        Route::post('/social/{id}/destroy', [DashboardController::class, 'destroy'])->name('social.destroy');

        Route::resource('proprety/category', PropertyCategoryController::class);
        Route::resource('proprety', PropertyController::class);
        Route::resource('image', PropertyImageController::class);
        Route::resource('news', NewsController::class);
        Route::resource('slider', SliderController::class);
        Route::resource('product', FeaturedProductController::class);
        Route::resource('message', MessageController::class);
        Route::put('message/{id}/status', [MessageController::class, 'setStatus'])->name('message');

        Route::get('news/{id}/set-status', [NewsController::class . 'setstatus'])->name('setstatus');
    }
);

require __DIR__ . '/auth.php';
