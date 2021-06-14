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
                    <a href="#" class="btn btn-sm btn-neutral btn-round btn-icon" onclick="$('#form-product').toggle()">
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
                    <tr>
                        {{-- {{dd(Auth::user()->seller->products)}} --}}
                        @foreach (Auth::user()->seller->products as $index => $item)
                        <td class="table-user">
                            <b>{{$index+1}}</b>
                        </td>
                        <td>
                            <a href="#" class="font-weight-bold">{{$item->name}}</a>
                        </td>
                        <td>
                            <span class="text-muted">{{$item->created_at}}</span>
                        </td>
                        <td class="table-actions text-right">
                            <a href="#" class="table-action">
                                <i class="fas fa-edit"> Edit</i>
                            </a>
                            <a href="#" class="table-action table-action-delete">
                                <i class="fa fa-trash"> Delete</i>
                            </a>
                            <a href="#" class="table-action">
                                <i class="fas fa-arrow-alt-circle-up"> Preview</i>
                            </a>
                        </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('user.form-product')

@endsection
