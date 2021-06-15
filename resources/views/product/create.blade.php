@extends('layouts.app-user')
@section('content')

<div class="container-fluid mt--6" id="form-product">
    <div class="card">
        <div class="card-body">
            <form action="/product/store" method='post' enctype="multipart/form-data">
                @csrf
                @include('product.form-control')
            </form>
        </div>
    </div>
</div>

@endsection
