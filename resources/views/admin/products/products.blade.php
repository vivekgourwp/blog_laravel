@extends('admin.layouts.app')

@section('content')

<div class="container mt-5">
  <div class="pgtitle">
      <h3 class="mb-4">Products</h3> 
      <a href="{{ route('products.create') }}" class="addnp_btn">Add new product</a>
  </div>



  <!-- Products Table -->
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Image</th>
        <th scope="col">Product Name</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
        <th scope="col">SKU</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $item)
        <!-- Product Row 1 -->
        <tr>
          <th scope="row">{{$item->id}}</th>
          <th class="a_thumb_img" scope="row">            
            <img src="{{ $item->thumbnail_image ? asset('storage/' . $item->thumbnail_image) : asset('images/default-thumb-product.png') }}" alt="Product Image">
          </th>
          <td>
            {{$item->name}}
            <div class="action_btn">
              <div class="a_edit_btn"><a href="{{ route('products.edit', $item->id) }}"><span>Edit</span></a></div>
              <div class="view"><a href="{{ route('products.show', $item->id) }}"><span>View</span></a></div>
              <div class="delete">                
                  <form action="{{ route('products.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="a_delete_btn" onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
                  </form>
              </div>
            </div>
          </td>
          <td class="admin_price">
            <p class="admin_regular_price">{{$item->regular_price}}</p>
            <p class="admin_sale_price">{{$item->sale_price}}</p> 
          </td>
          <td>{{$item->stock_quantity}}</td>
          <td>{{$item->sku}}</td>
        </tr>
      @endforeach

      
    </tbody>
  </table>

  <!-- Pagination -->
  <nav aria-label="Page navigation">
    <ul class="pagination">
      <li class="page-item disabled">
        <span class="page-link">Previous</span>
      </li>
      <li class="page-item active" aria-current="page">
        <span class="page-link">1</span>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
  function confirmDelete(productId) {
    if (confirm('Are you sure you want to delete this product?')) {
      // Implement delete functionality here
      console.log('Product ID ' + productId + ' deleted');
    }
  }
</script>

@endsection