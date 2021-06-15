@extends('layouts.app-user')
@section('content')

<div class="container-fluid" id="form-product">
    <div class="mt--10">
        <div class="card">
            <div class="card-body">
                <form action="/product/update" method='post'>
                    @csrf
                    @include('product.form-control')
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
