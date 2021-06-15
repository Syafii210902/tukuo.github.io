@extends('layouts.app-user')
@section('content')

<!-- Page content -->
<div class="container-fluid mt--6">
    @if(Auth::user()->transactions->count()<1) <div class="card text-center p-5">
        <div class="text-center pb-2">
            <h1><i class=" fa fa-info-circle "></i> </h1>Your Download will be here
        </div>
        <p>Or</p>
        <div class="">
            <a href="/products/kategori1" class="btn button-primaryk">Explore Template</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Become Author
            </button>
        </div>
</div>
@else
@include('user.card-product')
@endif

<!-- Modal -->
<form action="/seller/store" method='post'>
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Account for Author</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NRP</label>
                        <input name="nrp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNoTlp">No.Telphone</label>
                        <input name="no_telp" class="form-control" id="exampleInputNoTlp" placeholder="085xxx-xxx-xxx">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNoReg">No.Rekening</label>
                        <input name="no_reg" class="form-control" id="exampleInputNoReg" placeholder="112-31-XX-XXXXX">
                    </div>
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>


</div>



@endsection
