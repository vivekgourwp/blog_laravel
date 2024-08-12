@extends('admin.layouts.app')

@section('content')
<form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
<div class="container mt-5">
    <div class="row">
      <!-- Main Form Area -->
      <div class="col-md-9">
        <h4>Add New Product</h4>
 
        

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


            @csrf  
          <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="productName" name="name" placeholder="Enter product name" value="{{ old('name') }}">
          </div>
          <div class="mb-3">
            <label for="productDescription" class="form-label">Description</label>
            <textarea class="form-control" id="productDescription" name="description"  rows="4" placeholder="Enter product description" value="">{{ old('description') }}</textarea>
          </div>
          <div class="mb-3">
            <label for="regular_price" class="form-label">Regular Price</label>
            <input type="number" class="form-control" id="regular_price" name="regular_price" placeholder="Enter regular price" value="{{ old('regular_price') }}">
          </div>

          <div class="mb-3">
            <label for="sale_price" class="form-label">Sale Price</label>
            <input type="number" class="form-control" id="sale_price" name="sale_price" placeholder="Enter sale price" value="{{ old('sale_price') }}">
          </div>

          <div class="mb-3">
            <label for="stock_quantity" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" placeholder="Enter stock quantity" value="{{ old('stock_quantity') }}">
          </div>
          <div class="mb-3">
            <label for="sku" class="form-label">SKU</label>
            <input type="text" class="form-control" id="sku" name="sku" placeholder="Enter SKU" value="{{ old('sku') }}">
          </div>
          {{-- <div class="mb-3">
            <label for="productContent" class="form-label">Content</label>
            <textarea class="form-control" id="productContent" rows="4" placeholder="Enter product content"></textarea>
          </div> --}}
          <button type="submit" class="btn btn-primary">Add Product</button>

      </div>

      <!-- Sidebar Area -->
      <div class="col-md-3">
        <div class="mb-3">
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
          <input type="text" class="form-control" id="productTags" placeholder="Enter tags" >
        </div>
        <div class="mb-3">
          <label for="thumbnail_image" class="form-label">Thumbnail</label>
          <input class="form-control" type="file" id="thumbnail_image" name="thumbnail_image" value="{{ old('thumbnail_image') }}">
        </div>

      </div>
    </div>
  </div>
</form>


@endsection 