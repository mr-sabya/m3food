<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('admin.')->group(function () {
    Route::get('/login', [App\Http\Controllers\Backend\Auth\LoginController::class, 'showLoginForm'])->name('login');

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('dashboard');

        Route::get('categories', [App\Http\Controllers\Backend\CategoryController::class, 'index'])->name('category.index');
        Route::get('category/create', [App\Http\Controllers\Backend\CategoryController::class, 'create'])->name('category.create');
        Route::get('category/edit/{id}', [App\Http\Controllers\Backend\CategoryController::class, 'edit'])->name('category.edit');

        // banners
        Route::get('banners', [App\Http\Controllers\Backend\BannerController::class, 'index'])->name('banner.index');

        // tags
        Route::get('tags', [App\Http\Controllers\Backend\TagController::class, 'index'])->name('tag.index');

        // products
        Route::get('products', [App\Http\Controllers\Backend\ProductController::class, 'index'])->name('product.index');
        Route::get('product/create', [App\Http\Controllers\Backend\ProductController::class, 'create'])->name('product.create');
    });
});
