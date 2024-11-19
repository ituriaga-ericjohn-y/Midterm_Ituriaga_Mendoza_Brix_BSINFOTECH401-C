@extends('layout')

@section('content')
<div class="container mt-5">
    <!-- Page Header -->
    <h1 class="text-center mb-4">Products</h1>
    
    <!-- Add Product Button -->
    <div class="d-flex justify-content-end mb-4">
        <a href="{{ route('products.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Add Product
        </a>
    </div>
    
    <!-- Products Grid -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($products as $product)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <!-- Product Image -->
                <img 
                    src="{{ asset('images/' . $product->image) }}" 
                    class="card-img-top" 
                    alt="{{ $product->name }}" 
                    style="max-height: 200px; object-fit: cover;">
                
                <!-- Card Body -->
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text text-truncate">{{ $product->description }}</p>
                    <p class="card-text"><strong>${{ $product->price }}</strong></p>
                </div>
                
                <!-- Action Buttons -->
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection