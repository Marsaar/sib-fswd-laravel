<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;


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

//Dasboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('ecommerce.dashboard');
//category
Route::get('/category', [CategoriesController::class, 'index'])->name('ecommerce.category.index');
Route::get('/category/create', [CategoriesController::class, 'create'])->name('ecommerce.category.create');
Route::post('/category', [CategoriesController::class, 'store'])->name('ecommerce.category.store');
//Product
Route::get('/product', [ProductsController::class, 'index'])->name('ecommerce.product.index');
//User
Route::get('/user', [UserController::class, 'index'])->name('ecommerce.user.index');
//Role
Route::get('/role', [RoleController::class, 'index'])->name('ecommerce.role.index');


Route::get('/crud', [UsersController::class, 'index'])->name('crud.tableuser');;

