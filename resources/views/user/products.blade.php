@extends('layouts.app-user')
@section('content')

<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-0">Your Product</h3>
                </div>
                <div class="col-6 text-right">
                    <a href="/product/create" class="btn btn-sm btn-neutral btn-round btn-icon">
                        <span class="btn-inner--icon"><i class="fas fa-plus-circle"></i></span>
                        <span class="btn-inner--text">Add</span>
                    </a>
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
                        <th>Created at</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    {{-- {{dd(Auth::user()->seller->products)}} --}}
                    @foreach (Auth::user()->seller->products as $index => $item)
                    <tr>
                        <td class="table-user">
                            <b>{{$index+1}}</b>
                        </td>
                        <td>
                            <a href="{{'/product-detail/'.$item->id}}" target='blank'
                                class="font-weight-bold">{{$item->name}}</a>
                        </td>
                        <td>
                            <span class="text-muted">{{$item->created_at}}</span>
                        </td>
                        <td class="table-actions text-right">
                            <a href="#" class="table-action">
                                <i class="fas fa-edit"> Edit</i>
                            </a>
                            <a href="/product/{{$item->id}}/delete" class="table-action table-action-delete">
                                <i class="fa fa-trash"> Delete</i>
                            </a>
                            <a href="#" class="table-action">
                                <i class="fas fa-arrow-alt-circle-up"> Preview</i>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
