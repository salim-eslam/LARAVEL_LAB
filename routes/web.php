<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::delete('/delete/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/edit/{id}', [\App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::put('/update/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('product.update');



Route::resource('/category', '\App\Http\Controllers\CategoriesController');

Route::resource('/user', '\App\Http\Controllers\UserController');




// get
// post
// delete
// put
