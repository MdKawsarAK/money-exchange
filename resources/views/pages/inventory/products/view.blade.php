@extends('layouts.master')
@section('main-page')
    <div class="container mt-5">
        <!-- Page Header -->
        <div class="card bg-primary mb-3 p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-item-center ">
                    <h3 class=" card-title text-white d-flex align-items-center  m-0">Product Details</h3>
                    <a href="/products" class="btn btn-light btn-sm" title="Create New Product">
                        <i class="fa fa-arrow-left mr-1"></i>
                        Back
                    </a>
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
                        <p>Regular Price: <del>₱ {{ $product->regular_price }}</del></p>
                        <p>Offer Price: <strong>₱ {{ $product->offer_price }}</strong></p>
                        <p>Discount: <span class="badge badge-success">{{ $product->discount }}% OFF</span></p>

                        <hr>

                        <h5 class="text-primary">Product Details</h5>
                        <p><i class="fa fa-cube"></i> Product Type ID: {{ $product->product_type_id }}</p>
                        <p><i class="fa fa-list"></i> Category ID: {{ $product->product_category_id }}</p>
                        <p><i class="fa fa-sitemap"></i> Section ID: {{ $product->product_section_id }}</p>
                        <p><i class="fa fa-balance-scale"></i> Weight: {{ $product->weight }}</p>
                        <p><i class="fa fa-cogs"></i> UOM ID:{{ $product->uom_id }}, Unit ID:
                            {{ $product->product_unit_id }}</p>

                        <hr>

                        <h5 class="text-primary">Flags</h5>
                        <p>
                            <span class="badge badge-info">Featured</span>
                            <span class="badge badge-warning">Brand</span>
                            <span class="badge badge-success">★ Star Product</span>
                        </p>

                        <hr>

                        <h5 class="text-primary">Description</h5>
                        <p>{{ $product->description }}</p>

                        <hr>

                        <p class="text-muted small">Created: {{ $product->created_at }}</p>
                        <p class="text-muted small">Last Updated: {{ $product->updated_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection