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
                            @foreach ($user->transactions->where('status','1') as $item)
                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="assets/img/products/p5.png" alt="">
                                    <h5>{{$item->product->name}}</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    {{$item->product->price}}
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
                        <li>Total <span>$454.98</span></li>
                    </ul>
                    <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
