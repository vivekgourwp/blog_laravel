@extends('admin.layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <!-- Main Form Area -->
        <div class="col-md-9">
            <h4>Edit Product</h4>
            <form method="POST" action="{{ route('products.update', $product->id) }}">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="productName" name="name" value="{{ old('name', $product->name) }}" placeholder="Enter product name">
                </div>

                <div class="mb-3">
                    <label for="productDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="productDescription" name="description" rows="4" placeholder="Enter product description">{{ old('description', $product->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="regular_price" class="form-label">Regular Price</label>
                    <input type="number" class="form-control" id="regular_price" name="regular_price" value="{{ old('regular_price', $product->regular_price) }}" placeholder="Enter regular price">
                </div>

                <div class="mb-3">
                    <label for="sale_price" class="form-label">Sale Price</label>
                    <input type="number" class="form-control" id="sale_price" name="sale_price" value="{{ old('sale_price', $product->sale_price) }}" placeholder="Enter sale price">
                </div>

                <div class="mb-3">
                    <label for="stock_quantity" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" value="{{ old('stock_quantity', $product->stock_quantity) }}" placeholder="Enter stock quantity">
                </div>

                <div class="mb-3">
                    <label for="sku" class="form-label">SKU</label>
                    <input type="text" class="form-control" id="sku" name="sku" value="{{ old('sku', $product->sku) }}" placeholder="Enter SKU">
                </div>

                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>
        </div>

        <!-- Sidebar Area (if needed) -->
        <div class="col-md-3">
            <!-- You can include additional fields or information here if needed -->
        </div>
    </div>
</div>

@endsection
