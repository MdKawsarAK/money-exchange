@extends('layouts.master')
@section('main-page')
    <!-- Page Header -->
    <div class="card bg-primary mb-3 p-4">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-item-center ">
                <h3 class=" card-title text-white d-flex align-items-center  m-0">Edit Details</h3>
                <button class="btn btn-light btn-sm" title="Back">
                    <i class="fa fa-arrow-left mr-1"></i> Back
                </button>
            </div>
        </div>
    </div>
    <div class="card p-5">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- You may need @method('PUT') if using PUT route -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name"><i class="fa fa-tag"></i> Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="T-Shirt">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="regular_price"><i class="fa fa-money"></i> Regular Price</label>
                            <input type="number" class="form-control" id="regular_price" name="regular_price" value="1500">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="offer_price"><i class="fa fa-money"></i> Offer Price</label>
                            <input type="number" class="form-control" id="offer_price" name="offer_price" value="1200">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="offer_discount"><i class="fa fa-percent"></i> Discount</label>
                            <input type="number" class="form-control" id="offer_discount" name="offer_discount" value="300">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="barcode"><i class="fa fa-barcode"></i> Barcode</label>
                            <input type="text" class="form-control" id="barcode" name="barcode" value="b40">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="star"><i class="fa fa-star"></i> Rating</label>
                            <input type="number" class="form-control" id="star" name="star" value="4" min="1" max="5">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="manufacturer_id"><i class="fa fa-industry"></i> Manufacturer</label>
                            <input type="number" class="form-control" id="manufacturer_id" name="manufacturer_id" value="2">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="product_category_id"><i class="fa fa-folder"></i> Category</label>
                            <input type="number" class="form-control" id="product_category_id" name="product_category_id"
                                value="10">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="product_section_id"><i class="fa fa-th-large"></i> Section</label>
                            <input type="number" class="form-control" id="product_section_id" name="product_section_id"
                                value="2">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="product_type_id"><i class="fa fa-list-alt"></i> Product Type</label>
                            <input type="number" class="form-control" id="product_type_id" name="product_type_id" value="1">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="photo"><i class="fa fa-picture-o"></i> Product Image</label><br>
                            <img src="/images/products/1-jpg.jpg" alt="Image" style="max-width: 100px;" class="mb-2"><br>
                            <input type="file" class="form-control-file" id="photo" name="photo">
                        </div>
                        <div class="col-md-6">
                            <div class="form-check ml-4">
                                <input type="checkbox" class="form-check-input" id="is_featured" name="is_featured"
                                    value="1" checked>
                                <label class="form-check-label" for="is_featured">Featured Product</label>
                            </div>
                            <div class="form-check ml-4">
                                <input type="checkbox" class="form-check-input" id="is_brand" name="is_brand" value="1">
                                <label class="form-check-label" for="is_brand">Branded</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description"><i class="fa fa-info-circle"></i> Description</label>
                        <textarea class="form-control" id="description" name="description"
                            rows="3">Soft Cotton T-Shirt</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3"><i class="fa fa-save"></i> Save Changes</button>
                </form>
            </div>
        </div>
    </div>
@endsection