<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class,'show']);

//Route::post('/cart', [ProductController::class, 'store']);

Route::get('/cart', function () {
    return view('cart.index');
});
