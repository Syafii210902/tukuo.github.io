@extends('layouts.app-user')
@section('content')

<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-0">Purchase History </h3>
                </div>
            </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Buyer</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{dd(Auth::user()->transactions)}} --}}
                    @foreach (Auth::user()->transactions as $index => $item)
                    <tr>
                        <td class="table-user">
                            <b>{{$index+1}}</b>
                        </td>
                        <td>
                            <a href="{{'/product-detail/'.$item->product->id}}" target='blank'
                                class="font-weight-bold">{{$item->product->name}}</a>
                        </td>
                        <td>
                            <span class="text-muted">{{$item->user->name}}</span>
                        </td>
                        <td>
                            <span class="text-muted">{{$item->product->created_at}}</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
