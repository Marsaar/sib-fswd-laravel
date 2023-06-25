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
use App\Http\Controllers\SliderController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BrandController;
use App\Models\Product;

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

Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('ecommerce.product.show');

Route::middleware('auth')->group(function(){

    //landing
    Route::get('/', [LandingController::class, 'index'])->name('ecommerce.landing');
    //logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
    //Dasboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('ecommerce.dashboard');

    Route::middleware('role:Admin')->group(function(){
    //category
    Route::get('/category', [CategoriesController::class, 'index'])->name('ecommerce.category.index');
    Route::get('/category/create', [CategoriesController::class, 'create'])->name('ecommerce.category.create');
    Route::post('/category', [CategoriesController::class, 'store'])->name('ecommerce.category.store');
    Route::delete('/category/{id}', [CategoriesController::class, 'destroy'])->name('category.destroy');
    Route::get('/category/edit/{id}', [CategoriesController::class, 'edit'])->name('ecommerce.category.edit');
    Route::put('/category/{id}', [CategoriesController::class, 'update'])->name('category.update'); 
    });

    //Brand
    Route::get('/brand', [BrandController::class, 'index'])->name('ecommerce.brand.index');
    Route::get('/brand/create', [BrandController::class, 'create'])->name('ecommerce.brand.create');
    Route::post('/brand', [BrandController::class, 'store'])->name('ecommerce.brand.store');
    Route::delete('/brand/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');
    Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('ecommerce.brand.edit');
    Route::put('/brand/{id}', [BrandController::class, 'update'])->name('brand.update'); 

    //Product
    Route::get('/product', [ProductsController::class, 'index'])->name('ecommerce.product.index');
    Route::get('/product/create', [ProductsController::class, 'create'])->name('ecommerce.product.create');
    Route::post('/product', [ProductsController::class, 'store'])->name('ecommerce.product.store');
    Route::delete('/product/{id}', [ProductsController::class, 'destroy'])->name('product.destroy');
    Route::get('/product/edit/{id}', [ProductsController::class, 'edit'])->name('ecommerce.product.edit');
    Route::put('/product/{id}', [ProductsController::class, 'update'])->name('product.update');
     
    //User
    Route::get('/user', [UserController::class, 'index'])->name('ecommerce.user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('ecommerce.user.create');
    Route::post('/user', [UserController::class, 'store'])->name('ecommerce.user.store');
    //Role
    Route::get('/role', [RoleController::class, 'index'])->name('ecommerce.role.index');
    Route::get('/role/create', [RoleController::class, 'create'])->name('ecommerce.role.create');
    Route::post('/role', [RoleController::class, 'store'])->name('ecommerce.role.store');
    //Slider
    Route::get('/slider', [SliderController::class, 'index'])->name('ecommerce.slider.index');
    Route::get('/slider/create', [SliderController::class, 'create'])->name('ecommerce.slider.create');
    Route::post('/slider', [SliderController::class, 'store'])->name('ecommerce.slider.store');
    Route::delete('/slider/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');
    Route::get('/slider/edit/{id}', [SliderController::class, 'edit'])->name('ecommerce.slider.edit');
    Route::put('/slider/{id}', [SliderController::class, 'update'])->name('slider.update'); 
});


Route::get('/crud', [UsersController::class, 'index'])->name('crud.tableuser');;

