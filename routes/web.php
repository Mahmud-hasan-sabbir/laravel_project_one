<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/product',[HomeController::class,'product'])->name('product');
Route::get('/product-details/{id}',[HomeController::class,'productDetails'])->name('details.product');


