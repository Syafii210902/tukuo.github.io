<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //

    public function cart()
    {
        $user = Auth::user();
        if ($user !== null) {
            return view('cart', compact('user'));
        } else {
            return view('auth.login');
        }
    }

    public function addToCart(Product $product)
    {
        Transaction::create([
            'user_id' => Auth::user()->id,
            'product_id' => $product->id,
            'status' => '0',
        ]);
        return redirect('/cart/');
    }
}
