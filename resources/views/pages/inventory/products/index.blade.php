@extends('layouts.master')
@section('main-page')
    <style>
        .input-group-prepend .input-group-text {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <div class="container my-3">
        <!-- Page Header -->
        <div class="card bg-primary mb-3 p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-item-center ">
                    <h3 class=" card-title text-white d-flex align-items-center  m-0">Product List</h3>
                    <button class="btn btn-light btn-sm" title="Create New Product"><i class="fa fa-plus mr-1"></i> Create New
                        Product</button>
                </div>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="card mb-3 p-4">
            <div class="row">
                <div class="col-12">
                    <div class="form-row">
                        <!-- Search Input with Icon -->
                        <div class="col-md-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text px-2 bg-primary text-white">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="search"
                                    placeholder="Search product by name">
                            </div>
                        </div>

                        <!-- Filter by Category -->
                        <div class="col-md-3">
                            <select class="form-control" id="filterCategory">
                                <option value="">Filter by Category</option>
                                <option value="1">Category 1</option>
                                <option value="2">Category 2</option>
                                <option value="5">Category 5</option>
                            </select>
                        </div>

                        <!-- Apply Filters Button -->
                        <div class="col-md-2">
                            <button class="btn btn-primary btn-block">Apply Filters</button>
                        </div>

                        <!-- Reset Filters Button -->
                        <div class="col-md-2">
                            <button class="btn btn-outline-danger btn-block">Reset Filters</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-3 p-4">
            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Product Name</th>
                            <th>Regular Price</th>
                            <th>Offer Price</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Row -->
                        <tr>
                            <td>1</td>
                            <td>Photo</td>
                            <td>Brown Borka</td>
                            <td>₱ 4000.00</td>
                            <td>₱ 2500.00</td>
                            <td>Category 5</td>
                            <td>
                                <button class="btn btn-info btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <!-- Repeat Rows as Needed -->
                        <tr>
                            <td>2</td>
                            <td>Another Product</td>
                            <td>₱ 3000.00</td>
                            <td>₱ 1500.00</td>
                            <td>Category 2</td>
                            <td>
                                <button class="btn btn-info btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                <button class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination (Optional) -->
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
