@extends('layouts.app-main')
@section('content')


<!------------------------------------------
    Page Header
    ------------------------------------------->
<section class="breadcrumb-section pb-3 pt-3">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
    </div>
</section>
<section class="shoping-cart spad">
    {{-- {{dd(Auth::user()->transactions->where('status', '0'))}} --}}
    @if (Auth::user()->transactions->where('status', '0')->count() > 0)
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                {{-- <th>Quantity</th>
                                    <th>Total</th> --}}
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->transactions->where('status','0') as $item)
                            <tr>
                                <td class="shoping__cart__item d-flex align-items-center">
                                    <img src="{{'/assets/img/seller/'.$item->product->main_image}}" alt=""
                                        style='height:100px'>
                                    <div>
                                        <h5><span class=" text-blue">Name :</span> {{$item->product->name}}</h5><br>
                                        <small><span class=" text-blue">Author :</span>
                                            {{$item->product->seller->user->name}}</small>
                                    </div>
                                </td>
                                <td class="shoping__cart__price">
                                    RP. {{$item->product->price}},00
                                </td>
                                {{-- <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty"><span class="dec qtybtn">-</span>
                                            <input type="text" value="1">
                                            <span class="inc qtybtn">+</span></div>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    $110.00
                                </td> --}}
                                <td class="shoping__cart__item__close">
                                    <span class="icon_close"></span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        {{-- <li>Subtotal <span>$454.98</span></li> --}}
                        <li>Total <span>RP. - ,00</span></li>
                    </ul>
                    <a href="#" class="primary-btn" onclick="checkOut()">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="container-fluid mt--6">
        <div class="card text-center p-5">
            <div class="text-center pb-2">
                <h2>
                    <i class=" fa fa-info-circle "></i> Your Cart is Empt
                </h2>
            </div>
            <p>Come on</p>
            <div class="">
                <a href="/products/kategori1" class="btn btn-primary">Explore Template</a>
            </div>
        </div>
    </div>
    @endif
</section>
@endsection
