<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public function __invoke()
    {
        $categories = Category::get();
        $products = Product::all();
        // $cart = Auth::user()->transactions->where('status', '0');
        // session()
        return view('index', compact('categories', 'products'));
    }
    public function detail()
    {
        return view('product-detail');
    }
}
