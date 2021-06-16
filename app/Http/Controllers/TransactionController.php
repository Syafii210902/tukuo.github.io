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

    public function buy(Request $request, Transaction $transaction)
    {
        // $request->validate([
        //     'payment' => 'mimes:jpeg,png,jpg,gif,svg'
        // ]);
        // dd($request->payment);
        $imgName = Auth::user()->id . '-'  . time() . '-' . $request->payment->getClientOriginalName();
        // $transaction->update([
        //     'payment' => '$imgName'
        // ]);
        $transaction->payment = $imgName;
        $transaction->save();
        $request->payment->move(public_path('/assets/img/payment'), $imgName);
        return redirect('/cart/');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect('/cart/');
    }
    public function changeStatus(Transaction $transaction)
    {
        $transaction->status = '1';
        $transaction->save();
        return redirect('/admin');
    }
}
