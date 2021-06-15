@extends('layouts.app-user')
@section('content')
<div class="container-fluid mt--6">
    @if(Auth::user()->transactions->count()<1) <div class="card text-center p-5">
        <div class="text-center pb-2">
            <h1><i class=" fa fa-info-circle "></i> </h1>Your Download will be here
        </div>
        <p>Or</p>
        <div class="">
            <a href="/products/kategori1" class="btn btn-primary">Explore Template</a>
        </div>
</div>
@else
@include('user.card-product')
@endif
</div>

@endsection
