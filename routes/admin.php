<?php

use App\Http\Middleware\EnsureAuthAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

Route::middleware(EnsureAuthAdmin::class)->group(function () {
    //product
    Route::get('/home/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    //post
    Route::get('/home/post', [PostController::class, 'index'])->name('post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('post.destroy');


    //dashboard
    Route::get('/dashboard/admin', [DashboardController::class, 'dashboard'])->name('dashboard.admin');
    Route::get('/dashboard/admin/post', [DashboardController::class, 'post'])->name('dashboard.post');
    Route::get('/dashboard/admin/index', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard/admin/data', [PostController::class, 'data'])->name('post.data');
});
