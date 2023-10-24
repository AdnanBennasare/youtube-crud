<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


// Route::resource('/', ProductController::class);
Route::get('/', function (){
return view('welcome');
});

// route to the index page f index all() 
Route::get('/product', [ProductController::class, 'index'])->name('product.index');

// route to the create page view('products.create');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

// route to the function that validate and store the data in th db 
Route::post('/product', [ProductController::class, 'store'])->name('product.store');

// route to the edit page view('products.edit');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');

// route to the function that validate and update the data in th db 
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');

Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');




