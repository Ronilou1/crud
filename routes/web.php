<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);

// Route::get('/product', function () {
//    return view('products.products');
//});

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
 //   return view('welcome');
//});

//Route::get('/', function () {
//    return view('welcome');
//});
