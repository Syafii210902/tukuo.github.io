@extends('layouts.app-main')
@section('content')
<!------------------------------------------
    Page Header
    ------------------------------------------->
<section class="breadcrumb-section pb-3 pt-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
        </ol>
    </div>
</section>
<section class="products-grid pb-4 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <div class="widget-title">
                            <h3>Categories</h3>
                        </div>
                        <div class="widget-content widget-categories">
                            <ul>
                                @foreach ($categoriesList as $item)
                                <li><a href={{'/products/'.$item->name}} class={{$item->id==$category->id ? '
                                        text-blue' : ''}}>{{$item->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="products-top">
                            <div class="products-top-inner">
                                <div class="products-found">
                                    <p><span>25</span> products found of <span>1.342</span></p>
                                </div>
                                <div class="products-sort">
                                    <span>Sort By : </span>
                                    <select>
                                        <option>Default</option>
                                        <option>Price</option>
                                        <option>Recent</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{-- {{dd($category->products-)}} --}}
                    @foreach ($category->products as $item)
                    <div class="col-lg-6 col-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href={{'/product-detail/'.$item->id}}>
                                    <img src="/assets/img/products/p5.png" class="img-fluid" />
                                </a>
                            </div>
                            <div class="product-content">
                                <h3><a href={{'/product-detail/'.$item->id}}>{{$item->name}}</a></h3>
                                <div class="product-desc">
                                    <span>{{$item->description}}</span>
                                </div>
                                <div class="d-flex product-button">
                                    <a href="#" class=" demo"><span><i class="fa fa-desktop"></i> Demo</span></a>
                                    <a href={{'/product-detail/'.$item->id}} class=" download"><span><i
                                                class="fa fa-download"></i>
                                            Download</span></a>
                                    <a href="#" class=" buy" onclick="checkOut()"><span><i
                                                class="fa fa-shopping-cart"></i> Buy</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fa fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
