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

Route::get('/', Home::class)->name('home');
Route::get('/login', Login::class)->name('login');
Route::get('/counter', Counter::class);


Route::get('/comment', [App\Http\Controllers\Frontend\CommentController::class, 'index'])->name('comment.index');
