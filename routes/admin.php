<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\StripeController;
/*
|--------------------------------------------------------------------------
| afmin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth','admin'])->group(function(){
     Route::get('/dashboard', function () {
        return view('admin.index');

});
Route::get('/user', [UsersController::class,'index'])->name('user');
Route::get('/makeadmin/{id}', [UsersController::class,'admin'])->name('makeadmin');

Route::get('/deleteadmin/{id}', [UsersController::class,'notadmin'])->name('deleteadmin');
Route::get('/user/delete/{id}', [UsersController::class,'destroy'])->name('deleteadmin');


// route of Category
Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
Route::get('/categories', [CategoryController::class,'index'])->name('categories');
Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class,'update'])->name('category.update');


//route of products
Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
Route::get('/products', [ProductController::class,'index'])->name('products');
Route::post('/product/store', [ProductController::class,'store'])->name('product.store');
Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class,'update'])->name('product.update');
});
