<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', function () {
    return view('ecommerce.landing');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('ecommerce.dashboard');
Route::get('/category', [CategoriesController::class, 'index'])->name('ecommerce.category.index');
Route::get('/product', [ProductsController::class, 'index'])->name('ecommerce.product.index');


Route::get('/crud', [UsersController::class, 'index'])->name('crud.tableuser');;

