@extends('layouts.app-main')
@section('content')
<!------------------------------------------
    Page Header
    ------------------------------------------->
<section class="breadcrumb-section pb-3 pt-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href={{'/products/'.$product->category->name}}>Products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
        </ol>
    </div>
</section>
<section class="product-page pb-4 pt-4">
    <div class="container">
        <div class="row product-detail-inner">
            <div class="col-lg-8 col-12">
                <div id="product-images" class="carousel slide" data-ride="carousel">
                    <!-- slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active"> <img src='{{"/assets/img/seller/".$product->main_image}}'
                                alt="Product 1" style='height:400px'>
                        </div>
                        <div class="carousel-item"> <img src='{{"/assets/img/seller/".$product->slide_image1}}'
                                alt="Product 2" style='height:400px'> </div>
                        <div class="carousel-item"> <img src='{{"/assets/img/seller/".$product->slide_image2}}'
                                alt="Product 3" style='height:400px'> </div>
                        <div class="carousel-item"> <img src='{{"/assets/img/seller/".$product->slide_image3}}'
                                alt="Product 4" style='height:400px'> </div>
                    </div>
                    <!-- Left right -->
                    <a class="carousel-control-prev" href="#product-images" data-slide="prev"> <span
                            class="carousel-control-prev-icon"></span> </a>
                    <a class="carousel-control-next" href="#product-images" data-slide="next"> <span
                            class="carousel-control-next-icon"></span> </a>
                    <!-- Thumbnails -->
                    <ol class="carousel-indicators list-inline">
                        <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0"
                                data-target="#product-images"> <img src='{{"/assets/img/seller/".$product->main_image}}'
                                    class="img-fluid" style='height:70px'>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#product-images"> <img
                                    src='{{"/assets/img/seller/".$product->slide_image1}}' class="img-fluid"
                                    style='height:70px'> </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-2" data-slide-to="2" data-target="#product-images"> <img
                                    src='{{"/assets/img/seller/".$product->slide_image2}}' class="img-fluid"
                                    style='height:70px'> </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-3" data-slide-to="3" data-target="#product-images"> <img
                                    src='{{"/assets/img/seller/".$product->slide_image3}}' class="img-fluid"
                                    style='height:70px'> </a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="single-sidebar">
                    <div class="single-buttons">
                        <a href="{{$product->link}}" target="blank" class="demo"><span><i class="fa fa-desktop"></i>
                                Demo</span></a>
                        <a href="/cart/{{$product->id}}" class="download bg-green">
                            <span><i class="fa fa-download"></i>Buy</span>
                        </a>
                    </div>
                    <div class="version-details">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                    <h2>{{$product->name}}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul>
                                    <li><strong>Price</strong><span> Rp. {{$product->price}},00</span></li>
                                    <li><strong>Category</strong><span> {{$product->category->name}}</span></li>
                                    <li><strong>Downloads</strong><span>{{$product->transactions->count()}}</span>
                                    </li>
                                    <li><strong>Last Update</strong><span>{{$product->created_date}}</span></li>
                                    <li><strong>License</strong><span>Licensing information</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-details">
                    <div class="nav-wrapper">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                                    href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                    href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                    aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                                    aria-labelledby="tabs-icons-text-1-tab">
                                    <p>{{$product->description}}</p>
                                </div>
                                <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                                    aria-labelledby="tabs-icons-text-2-tab">
                                    <div class="review-form">
                                        <h3>Write a review</h3>
                                        <form>
                                            <div class="form-group">
                                                <label>Your Name</label>
                                                <input type="text" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label>Your Review</label>
                                                <textarea cols="4" class="form-control"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="other-products pb-4 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            @foreach ($productAll as $item)
            <div class="col-lg-4 col-md-6 col-12">
                @include('product-card')
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
