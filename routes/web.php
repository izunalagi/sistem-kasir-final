<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Middleware\EnsureAuthCustomer;

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

Route::middleware(EnsureAuthCustomer::class)->group(function () {




    // buyer
    Route::get('/home/buyer', [BuyerController::class, 'index'])->name('buyer.index');
    Route::get('/buyer/create', [BuyerController::class, 'create'])->name('buyer.create');
    Route::post('/buyer/store', [BuyerController::class, 'store'])->name('buyer.store');
    Route::get('/buyer/{id}/edit', [BuyerController::class, 'edit'])->name('buyer.edit');
    Route::put('/buyer/{id}', [BuyerController::class, 'update'])->name('buyer.edit');
    Route::delete('/buyer/{id}', [BuyerController::class, 'destroy'])->name('buyer.destroy');

    //category
    Route::get('/home/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.edit');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('/category/detail/{id}', [CategoryController::class,'detail'])->name('category.detail');

    //transaction

    Route::get('/home/transaction', [TransactionController::class, 'index'])->name('transaction.index');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //  Route::get('/home/transaction', [TransactionController::class,'index'])->name('transaction.index');

   
});

Auth::routes();
