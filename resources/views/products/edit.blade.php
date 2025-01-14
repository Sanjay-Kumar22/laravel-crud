@extends('dashboard')

@section('title', 'Add Product')

@section('content')
    <div class="container">
    
        
        <!-- Product Creation Form -->
        <div class="row justify-content-center">

                @if(session('success'))
                      <div class="alert alert-success">
                        {{ session('success') }}
                      </div>
                @endif
            <div class="col-lg-6 col-md-8 col-12">
                <form action="{{route('product.update',$Product->id)}}" method="post" class="shadow-lg p-4 rounded bg-white">
                    @csrf
                    @method('PUT')
            
                    <h3 class=" text-center">update New Product</h3>
                  
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="product_name" value="{{$Product->product_name}}" placeholder="Enter Product Name" required>
                    </div>

                    <!-- Price Field -->
                    <div class="mb-3">
                        <label for="price" class="form-label">Quantity</label>
                        <input type="number" class="form-control" name="quantity" value="{{$Product->quantity}}" placeholder="Enter quantity" required>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" value="{{$Product->price}}" placeholder="Enter Price" required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100">Add Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
