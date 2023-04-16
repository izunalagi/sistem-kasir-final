<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
    //post
    Route::get('/home/post', [PostController::class,'index'])->name('post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/post/{id}', [PostController::class, 'update'])->name('post.edit');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');

    //dashboard
    Route::get('/dashboard/admin', [DashboardController::class,'dashboard'])->name('dashboard.admin');
    Route::get('/dashboard/admin/post', [DashboardController::class,'post'])->name('dashboard.post');
    Route::get('/dashboard/admin/index', [DashboardController::class,'index'])->name('dashboard.index');
    Route::get('/dashboard/admin/data', [PostController::class,'data'])->name('post.data');


    // buyer
    Route::get('/home/buyer', [BuyerController::class,'index'])->name('buyer.index');
    Route::get('/buyer/create', [BuyerController::class,'create'])->name('buyer.create');
    Route::post('/buyer/store', [BuyerController::class, 'store'])->name('buyer.store');
    Route::get('/buyer/{id}/edit', [BuyerController::class, 'edit'])->name('buyer.edit');
    Route::put('/buyer/{id}', [BuyerController::class, 'update'])->name('buyer.edit');
    Route::delete('/buyer/{id}', [BuyerController::class, 'destroy'])->name('buyer.destroy');

    //category
    Route::get('/home/category', [CategoryController::class,'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.edit');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('/category/detail/{id}', [CategoryController::class,'detail'])->name('category.detail');

    //transaction
    //  Route::get('/home/transaction', [TransactionController::class,'index'])->name('transaction.index');

     //product
     Route::get('/home/product', [ProductController::class,'index'])->name('product.index');
     Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
     Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
     Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
     Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.edit');
     Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
