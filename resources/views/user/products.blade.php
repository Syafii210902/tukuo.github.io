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
                    <a href="tables.html#" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="tooltip"
                        data-original-title="Add Category">
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
                            <a href="tables.html#!" class="table-action table-action-delete" data-toggle="tooltip"
                                data-original-title="Delete product">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Add Categories -->
    <div class="mt--10">
        <div class="card">
            <div class="card-body">
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-6">
                            <label class="form-control-label" for="validationCustom01">Add Categories</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="Category name"
                                required>
                            <div class="invalid-feedback">
                                Fill in category name
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
