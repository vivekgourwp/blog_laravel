@extends('admin.layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
      <!-- Main Form Area -->
      <div class="col-md-9">
        <h4>Add New Product</h4>
        <form method="POST" action="{{ route('products.store') }}">
            @csrf  
          <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="productName" name="name" placeholder="Enter product name">
          </div>
          <div class="mb-3">
            <label for="productDescription" class="form-label">Description</label>
            <textarea class="form-control" id="productDescription" name="description"  rows="4" placeholder="Enter product description"></textarea>
          </div>
          <div class="mb-3">
            <label for="regular_price" class="form-label">Regular Price</label>
            <input type="number" class="form-control" id="regular_price" name="regular_price" placeholder="Enter regular price">
          </div>

          <div class="mb-3">
            <label for="sale_price" class="form-label">Sale Price</label>
            <input type="number" class="form-control" id="sale_price" name="sale_price" placeholder="Enter sale price">
          </div>

          <div class="mb-3">
            <label for="stock_quantity" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" placeholder="Enter stock quantity">
          </div>
          <div class="mb-3">
            <label for="sku" class="form-label">SKU</label>
            <input type="text" class="form-control" id="sku" name="sku" placeholder="Enter SKU">
          </div>
          {{-- <div class="mb-3">
            <label for="productContent" class="form-label">Content</label>
            <textarea class="form-control" id="productContent" rows="4" placeholder="Enter product content"></textarea>
          </div> --}}
          <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
      </div>

      <!-- Sidebar Area -->
      <div class="col-md-3">
        {{-- <div class="mb-3">
          <label for="productCategory" class="form-label">Category</label>
          <select id="productCategory" class="form-select">
            <option selected>Select category</option>
            <option value="1">Category 1</option>
            <option value="2">Category 2</option>
            <option value="3">Category 3</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="productTags" class="form-label">Tags</label>
          <input type="text" class="form-control" id="productTags" placeholder="Enter tags">
        </div>
        <div class="mb-3">
          <label for="productThumbnail" class="form-label">Thumbnail</label>
          <input class="form-control" type="file" id="productThumbnail">
        </div> --}}

      </div>
    </div>
  </div>



@endsection 