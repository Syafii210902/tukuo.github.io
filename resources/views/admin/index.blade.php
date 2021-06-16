@extends('layouts.app-user')
@section('content')

<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-0">Verify Purchase</h3>
                </div>
                <div class="col-6 text-right">
                </div>
            </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Seller</th>
                        <th>Buyer</th>
                        <th>Email Buyer</th>
                        <th>Tanggal Pembelian</th>
                        <th>Harga Produk</th>
                        <th>Bukti Pembayaran</th>
                        <th>Verify</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaction as $index => $item)
                    <tr>
                        <td class="table-user">
                            <b>{{$index+1}}</b>
                        </td>
                        <td>
                            <a href="{{'/product-detail/'.$item->product->id}}" target='blank'
                                class="font-weight-bold">{{$item->product->name}}</a>
                        </td>
                        <td>
                            <a href="#" class="font-weight-bold">{{$item->product->seller->user->name}}</a>
                        </td>
                        <td>
                            <a href="#" class="font-weight-bold">{{$item->user->name}}</a>
                        </td>
                        <td>
                            <span class="text-muted">{{$item->user->email}}</span>
                        </td>
                        <td>
                            <span class="text-muted">{{$item->product->created_at}}</span>
                        </td>
                        <td>
                            <span class="text-muted">{{$item->product->price}}</span>
                        </td>
                        <td>
                            <a href="{{'/assets/img/payment/'.$item->payment}}"
                                target="blank">{{Str::limit($item->payment,25, $end='.......')??'Belum dibayar'}}</a>
                        </td>
                        <td>
                            <form action='{{"/transaction/status/".$item->id}}' method='post'>
                                @method('patch')
                                @csrf
                                <div class=" d-flex align-items-center">
                                    <label class="custom-toggle mr-0">
                                        <input type="checkbox" name="status" {{$item->status==='1'? 'checked':''}}>
                                        <span class="custom-toggle-slider rounded-circle" data-label-off="No"
                                            data-label-on="Yes"></span>
                                    </label>
                                    <input type="submit" class=" btn btn-sm btn-outline-primary ml-3" value="Cek">
                                </div>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
