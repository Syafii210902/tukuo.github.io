<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function __invoke()
    {
        $categories = Category::get();
        $products = Product::all();
        return view('index', compact('categories', 'products'));
    }
    public function detail()
    {
        return view('product-detail');
    }
}
