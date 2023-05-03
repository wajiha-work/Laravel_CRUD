@extends('shared.LayoutPage')

@section('title', 'Add Product')

@section('content')

   <!-- add product form -->
   <div class="container">
        <h1 class="text-center my-5">Add Product</h1>

        <form class="px-5" method="POST" action="{{ route('products.store') }}">
            @csrf
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Product name" name="productName">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Price" name="price">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" placeholder="Stock" name="stock">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Description" name="longDescription"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Expiry Date</label>
                <div class="col-sm-10">
                    <input type="datetime-local" class="form-control" placeholder="Expiry Date" name="expiry_date">
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-secondary">Add Product</button>
            </div>
        </form>
    </div>

@endsection