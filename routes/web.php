<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('show');
Route::get('/discounts', [ProductController::class, 'discounts'])->name('discounts');
Route::get('/locale/{locale}', [HomeController::class, 'locale'])->name('locale')->whereIn('locale', [ 'ru', 'en']);
