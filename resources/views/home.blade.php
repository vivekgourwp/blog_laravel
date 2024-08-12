@extends('layouts.app')

@section('content')




<div class="row products-section">
    @foreach ($products as $item)
    <div class="col-lg-6 col-md-6 mb-5">
        <div class="blog-item">
            {{-- <img src="images/blog/1.jpg" alt="" class="img-fluid rounded"> --}}
            {{-- <img src="{{ $item->thumbnail_image ? asset('storage/' . $item->thumbnail_image) : asset('images/default-thumb-product.png') }}" alt="Product Image"> --}}
<img src="{{ $item->thumbnail_image ? asset('storage/' . $item->thumbnail_image) : asset('images/default-thumb-product.png') }}" alt="">
            <div class="blog-item-content bg-white p-4">
                <div class="blog-item-meta  py-1 px-2">
                    <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
                </div> 

                <h3 class="mt-3 mb-3"><a href="blog-single.html">{{$item->name }}</a></h3>
                <p class="mb-4">{{$item->description }}</p>
                <a href="blog-single.html" class="btn btn-small btn-main btn-round-full">add to cart</a>
            </div>
        </div>
    </div>     
    @endforeach

</div>

@endsection