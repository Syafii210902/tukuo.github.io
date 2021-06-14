<?php

namespace App\Http\Controllers;

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
}
