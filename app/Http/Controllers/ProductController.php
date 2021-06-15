<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function product(Category $category)
    {
        $categoriesList = Category::all();
        return view('products', compact('category', 'categoriesList'));
    }

    public function productDetail(Product $product)
    {
        $productAll = Product::paginate('3');
        return view('product-detail', compact('product', 'productAll'));
    }

    public function show(Product $product)
    {
        return view('posts.show', compact('post'));
    }

    public function index()
    {
        return view('posts.index', [
            'posts' => Product::orderBy('id', 'desc')->paginate(3),
        ]);
    }

    public function create()
    {
        return view('product.create', [
            'product' => new Product(),
            'categories' => Category::get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'main_image' => 'mimes:jpeg,png,jpg,gif,svg'
        ]);

        $attr = $request->all();
        $imgName = Auth::user()->id . '-'  . time() . '-' . $request->main_image->getClientOriginalName();
        $imgName1 = Auth::user()->id . '-'  . time() . '-' . $request->slide_image1->getClientOriginalName();
        $imgName2 = Auth::user()->id . '-'  . time() . '-' . $request->slide_image2->getClientOriginalName();
        $imgName3 = Auth::user()->id . '-'  . time() . '-' . $request->slide_image3->getClientOriginalName();
        $attr['main_image'] = $imgName;
        $attr['slide_image1'] = $imgName1;
        $attr['slide_image2'] = $imgName2;
        $attr['slide_image3'] = $imgName3;

        // dd($attr['main_image']);
        $request->main_image->move(public_path('/assets/img/seller'), $imgName);
        $request->slide_image1->move(public_path('/assets/img/seller'), $imgName1);
        $request->slide_image2->move(public_path('/assets/img/seller'), $imgName2);
        $request->slide_image3->move(public_path('/assets/img/seller'), $imgName3);
        Product::create($attr);
        return redirect('/dashboard/products');
    }


    public function edit(Product $product)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Product $product)
    {
        $attr = $request->all();
        $product->update($attr);
        return redirect('posts');
    }

    public function validateRequest()
    {
        return request()->validate([
            'title' => 'required|min:3',
            'body' => 'required',
        ]);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/dashboard/products');
    }
}
