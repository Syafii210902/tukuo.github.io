<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Models\Transaction;
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

Route::get('/admin', function () {
    return view('admin.index', ['transaction' => Transaction::all()]);
});

Route::post('/seller/store', [UserController::class, 'store']);

Route::get('product/create', [ProductController::class, 'create']);
Route::post('product/store', [ProductController::class, 'store']);
Route::get('product/{product:id}/delete', [ProductController::class, 'destroy']);

Route::get('products', [ProductController::class, 'product']);
Route::get('products/{category:name}', [ProductController::class, 'product']);
Route::get('product-detail/{product:id}', [ProductController::class, 'productDetail']);

// Route::patch('product/edit', [ProductController::class, 'edit']);

Route::get('cart', [TransactionController::class, 'cart']);
Route::get('cart/{product:id}', [TransactionController::class, 'addToCart']);
Route::get('cart/{transaction:id}/delete', [TransactionController::class, 'destroy']);
Route::patch('cart/buy/{transaction:id}', [TransactionController::class, 'buy']);

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('dashboard', function () {
    return view('user.index');
});
Route::get('dashboard/downloads', function () {
    return view('user.downloads');
});
Route::get('dashboard/products', function () {
    return view('user.products');
});
Route::get('dashboard/transactions', function () {
    return view('user.transactions');
});

Route::patch('transaction/status/{transaction:id}', [TransactionController::class, 'changeStatus']);
