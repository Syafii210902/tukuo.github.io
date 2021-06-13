<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

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
        return view('posts.create', [
            'post' => new Product(),
            'categories' => Category::get(),
            'tags' => Tag::get(),
        ]);
    }

    public function store(PostRequest $request)
    {
        $attr = $request->all();
        $attr['slug'] = \Str::slug(request('title'));
        Product::create($attr);
        session()->flash('success', 'The post was created');
        return redirect('posts');
    }

    public function edit(Product $product)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(PostRequest $request, Product $product)
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
        session()->flash('success', 'post telah dihapus');
        return redirect('posts');
    }
}
