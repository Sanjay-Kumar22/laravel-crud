<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/register',[RegisterController::class , "Register"])->name('user.register');
Route::post('/ProcessValidate',[RegisterController::class , "ProcessValidate"])->name('user.validate');

Route::get('user/login',[RegisterController::class , "LoginUser"])->name('user.login');
// Route::get('/dashboard',[RegisterController::class , "dashboard"])->name('user.dashboard');
Route::post('user/dashboard',[RegisterController::class ,"LoginAuthenticate"])->name('dashboard');
Route::get('user/dashboard', function () {
    return view('dashboard');
});


//  Route for curd operatin for product 

Route::get('/add-product', [ProductController::class, 'addproduct'])->name('add.product');
Route::post('/store-product', [ProductController::class, 'store'])->name('store.product');
Route::get('/store-product', [ProductController::class, 'view'])->name('store.product');

Route::get('/product-details', [ProductController::class, 'ProductDetails'])->name('product.details');

Route::get('/products/{id}/delete', [ProductController::class, 'destroy'])->name('products.destroy');

Route::PUT('/products/{id}', [ProductController::class ,'update'])->name('product.update');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');



