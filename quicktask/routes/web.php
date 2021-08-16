<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::group(['middleware' => 'SetLocale'], function() {
    Route::get('change-language/{language}', [HomeController::class, 'changeLanguage'])
        ->name('change-language');

    Route::get('trang-chu', [HomeController::class, 'getIndex'])->name('trang-chu');

    Route::get('chi-tiet/{id}', [HomeController::class, 'getChitiet'])->name('chitiet');

    Route::get('category/{type}', [HomeController::class, 'getLoai'])->name('theloai');

    Route::get('them', [HomeController::class, 'getCreate'])->name('create');

	Route::post('them', [HomeController::class, 'postCreate'])->name('store');

	Route::get('sua/{id}', [HomeController::class, 'getEdit'])->name('edit');

	Route::post('sua/{id}', [HomeController::class, 'postUpdate'])->name('update');

	Route::get('xoa/{id}', [HomeController::class, 'getDelete'])->name('delete');
});
