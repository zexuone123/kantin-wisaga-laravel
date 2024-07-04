<!-- // File: resources/views/admin/products/index.blade.php

@extends('admin')

@section('content')
    <h1>Products</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('admin.products.edit', $product->id) }}">Edit</a>
                    <a href="{{ route('admin.products.destroy', $product->id) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

// File: resources/views/products.blade.php

<section class="product-list">
    @foreach($products as $product)
        <div class="product">
            <img src="{{ $product->image }}">
            <h3>{{ $product->name }}</h3>
            <p>Rp {{ $product->price }}</p>
            <form action="{{ route('cart.add') }}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button>Tambah ke Keranjang</button>
            </form>
        </div>
    @endforeach
</section> -->