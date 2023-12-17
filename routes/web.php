<?php

use App\Http\Controllers\addUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\UpdateController;

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
Route::get('/admin',[adminController::class, 'index']);

// store product
Route::get('/add_product',[adminController::class, 'add_New'])->name('add_product');
Route::post('/add_product',[adminController::class, 'store'])->name('store');
//store user
Route::get('/add_user',[adminController::class, 'add_user'])->name('add_user');
Route::post('/store_user',[adminController::class, 'store_user'])->name('store_user');
//update
Route::get('/update' , [UpdateController::class, 'update'])->name('update');
Route::post('/store_update' , [UpdateController::class, 'update_product'])->name('update_product');


