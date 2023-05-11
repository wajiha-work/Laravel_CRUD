@extends('shared.LayoutPage')

@section('title', 'All Products')

@section('content')

<!-- list -->
<div class="container">
    <h1 class="text-center my-5">All Products</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-sm align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Expiry Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

            @foreach($products as $item)
                <tr>
                    <th scope="row"><img src="logo.png" width="50"></th>
                    <td>{{ $item->productName }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>{{ $item->expiry_date }}</td>
                    <td class="">
                        <a href="{{ route('products.edit', $item->id) }}" class="mx-2 action-icon"><i class="fa-solid fa-pen-to-square"></i></a>

                        <form class="icon-form" action="{{ route('products.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="mx-2 action-icon"><i class="fa-solid fa-trash"></i></button>
                        </form>


                        
                        <a href="{{ route('products.show', $item->id) }}" class="mx-2 action-icon"><i class="fa-solid fa-eye"></i></a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection