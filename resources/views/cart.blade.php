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
                    <table class="w-100 m-0">
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
                                </td> --}}
                                <td class="shoping__cart__item__close">
                                    <a href="/cart/{{$item->id}}/delete">
                                        <span class=" fa fa-trash pr-6"></span></a>
                                </td>
                                <td class="shoping__cart__total">
                                    <a href="#" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal">Check Out</a>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="/cart/buy/{{$item->id}}" method='post'
                                            enctype="multipart/form-data">
                                            @method('patch')
                                            @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload Payment</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <div>Bayar ke rekening berikut :</div>
                                                <h3><b>0112-322-1454555</b></h3>

                                                <div class=" form-group p-6 text-center">
                                                    <label class="form-label" for="customFile4">Upload bukti
                                                        pembayaran</label>
                                                    <input name="payment" type="file"
                                                        class="form-control btn btn-outline-primary" id="customFile4" />
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save
                                                    changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-lg-6">
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Subtotal <span>$454.98</span></li>
                        <li>Total <span>RP. - ,00</span></li>
                    </ul>
                    <a href="#" class="primary-btn" data-toggle="modal" data-target="#exampleModal">PROCEED TO
                        CHECKOUT</a>
                </div>
            </div>
        </div> --}}
    </div>
    @else
    <div class=" container-fluid mt--6">
        <div class="card text-center p-5">
            <div class="text-center pb-2">
                <h2>
                    <i class=" fa fa-info-circle "></i> Your Cart is Empty
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
