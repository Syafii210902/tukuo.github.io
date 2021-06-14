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
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-user">
                            <b>1</b>
                        </td>
                        <td>
                            <a href="tables.html#!" class="font-weight-bold">Argon Dashboard PRO</a>
                        </td>
                        <td>
                            <span class="text-muted">10/09/2018</span>
                        </td>
                        <td class="table-actions text-right">
                            <a href="tables.html#!" class="table-action" data-toggle="tooltip"
                                data-original-title="Edit product">
                                <i class="fas fa-user-edit"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
