<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/', HomeController::class);
Route::get('/', HomeController::class);


Route::get('products', [ProductController::class, 'product']);
Route::get('products/{category:name}', [ProductController::class, 'product']);
Route::get('product-detail/{product:id}', [ProductController::class, 'productDetail']);

Route::get('cart', [TransactionController::class, 'cart']);

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('seller', function () {
    return view('tables');
});


Route::get('dashboard', function () {
    return view('dashboard-seller');
});
