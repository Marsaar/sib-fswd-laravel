<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;


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

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
//SignUp
Route::get('/signup', [SignupController::class, 'index'])->name('signup');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');

Route::middleware('auth')->group(function(){

//landing
Route::get('/', function () {
    return view('ecommerce.landing');
});
    //logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
    //Dasboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('ecommerce.dashboard');

    Route::middleware('role:Admin')->group(function(){
    //category
    Route::get('/category', [CategoriesController::class, 'index'])->name('ecommerce.category.index');
    Route::get('/category/create', [CategoriesController::class, 'create'])->name('ecommerce.category.create');
    Route::post('/category', [CategoriesController::class, 'store'])->name('ecommerce.category.store');
    });

    //Product
    Route::get('/product', [ProductsController::class, 'index'])->name('ecommerce.product.index');
    Route::get('/product/create', [ProductsController::class, 'create'])->name('ecommerce.product.create');
    Route::post('/product', [ProductsController::class, 'store'])->name('ecommerce.product.store');
    //User
    Route::get('/user', [UserController::class, 'index'])->name('ecommerce.user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('ecommerce.user.create');
    Route::post('/user', [UserController::class, 'store'])->name('ecommerce.user.store');
    //Role
    Route::get('/role', [RoleController::class, 'index'])->name('ecommerce.role.index');
    Route::get('/role/create', [RoleController::class, 'create'])->name('ecommerce.role.create');
    Route::post('/role', [RoleController::class, 'store'])->name('ecommerce.role.store');
});


Route::get('/crud', [UsersController::class, 'index'])->name('crud.tableuser');;

