@extends('shared.LayoutPage')

@section('title', 'View Product')

@section('content')

<!-- view product form -->
<div class="container">
    <h1 class="text-center my-5">Product Details</h1>
    <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Product Name</th>
                    <td>{{ $product->productName }}</td>
                </tr>
                <tr>
                    <th scope="row">Price</th>
                    <td>{{ $product->price }}</td>
                </tr>
                <tr>
                    <th scope="row">Stock</th>
                    <td>{{ $product->stock }}</td>
                </tr>
                <tr>
                    <th scope="row">Long Description</th>
                    <td>{{ $product->longDescription }}</td>
                </tr>
                <tr>
                    <th scope="row">Expiry Date</th>
                    <td>{{ $product->expiry_date }}</td>
                </tr>
                <tr>
                    <th scope="row">Inserted at</th>
                    <td>{{ $product->created_at }}</td>
                </tr>
                <tr>
                    <th scope="row">Updated at</th>
                    <td>{{ $product->updated_at }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection