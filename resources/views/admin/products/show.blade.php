@extends('admin.layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <!-- Product Details Area -->
        <div class="col-md-12">
            <div class="pgtitle">
                <h3 class="mb-4">Product details</h3> 
                <a href="{{ route('products.create') }}" class="addnp_btn">Add new User</a>
            </div>
            <div class="card">
                <div class="card-header">
                    {{ $product->name }}
                </div>
                <div class="card-body">
                    <p><strong>Description:</strong> {{ $product->description }}</p>
                    <p><strong>Regular Price:</strong> ${{ number_format($product->regular_price, 2) }}</p>
                    <p><strong>Sale Price:</strong> ${{ number_format($product->sale_price, 2) }}</p>
                    <p><strong>Stock Quantity:</strong> {{ $product->stock_quantity }}</p>
                    <p><strong>SKU:</strong> {{ $product->sku }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('products') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
