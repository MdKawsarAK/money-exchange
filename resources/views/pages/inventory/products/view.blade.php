@extends('layouts.master')
@section('main-page')
    <div class="container mt-5">
        <!-- Page Header -->
        <div class="card bg-primary mb-3 p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-item-center ">
                    <h3 class=" card-title text-white d-flex align-items-center  m-0">Product Details</h3>
                    <button class="btn btn-light btn-sm" title="Create New Product">
                        <i class="fa fa-arrow-left mr-1"></i>
                        Back
                    </button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row no-gutters">
                <!-- Product Image -->
                <div class="col-md-4">
                    <img src="/img/{{ $product->photo }}" class="card-img" alt="Watch">
                </div>

                <!-- Product Info -->
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">{{ $product->name }}</h3>
                        <p class="text-muted mb-1">
                            <i class="fa fa-barcode"></i>
                            Barcode: {{ $product->barcode }}
                        </p>
                        <p class="text-muted mb-1">
                            <i class="fa fa-industry"></i>
                            Manufacturer ID: {{ $product->manufacturer_id }}
                        </p>

                        <hr>

                        <h5 class="text-primary">Price Details</h5>
                        <p>Regular Price: <del>₱ 5,454.00</del></p>
                        <p>Offer Price: <strong>₱ 4,500.00</strong></p>
                        <p>Discount: <span class="badge badge-success">12% OFF</span></p>

                        <hr>

                        <h5 class="text-primary">Product Details</h5>
                        <p><i class="fa fa-cube"></i> Product Type ID: 1</p>
                        <p><i class="fa fa-list"></i> Category ID: 6</p>
                        <p><i class="fa fa-sitemap"></i> Section ID: 1</p>
                        <p><i class="fa fa-balance-scale"></i> Weight: 25.0 g</p>
                        <p><i class="fa fa-cogs"></i> UOM ID: 1, Unit ID: 1</p>

                        <hr>

                        <h5 class="text-primary">Flags</h5>
                        <p>
                            <span class="badge badge-info">Featured</span>
                            <span class="badge badge-warning">Brand</span>
                            <span class="badge badge-success">★ Star Product</span>
                        </p>

                        <hr>

                        <h5 class="text-primary">Description</h5>
                        <p>This</p>

                        <hr>

                        <p class="text-muted small">Created: 2025-04-08 15:33:11</p>
                        <p class="text-muted small">Last Updated: 2025-04-08 15:33:11</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
