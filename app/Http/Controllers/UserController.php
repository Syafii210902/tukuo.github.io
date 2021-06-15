<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $attr = $request->all();
        mkdir(asset('/asset/img/seller/' . 'tess'));
        Seller::create($attr);
        return redirect('/dashboard/products');
    }
}
