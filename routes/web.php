<?php

use App\Livewire\Comment;
use App\Livewire\Counter;
use App\Livewire\Home;
use App\Livewire\Login;
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

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\Frontend\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::get('/shop', [App\Http\Controllers\Frontend\ShopController::class, 'index'])->name('shop');

Route::get('product/{sug}', [App\Http\Controllers\Frontend\ProductController::class, 'show'])->name('product.show');


Route::get('/comment', [App\Http\Controllers\Frontend\CommentController::class, 'index'])->name('comment.index');
