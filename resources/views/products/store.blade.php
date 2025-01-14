@extends('dashboard')  
@section('title', 'Product Details')  

@section('content') 
<head> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
    <style>              
        .thead, .tbody { 
            text-align: center !important; 
        }  
    </style> 
</head> 

<div class="container">              
    <!-- Product Table -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">
        <table id="tableID" class="display">
            <thead>
                <tr>
                    <th class="thead">ID</th>
                    <th class="thead">Product Name</th>
                    <th class="thead">Quantity</th>
                    <th class="thead">Amount</th>
                    <th class="thead">Operation </th>
                    
                
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="tbody">{{ $product->id }}</td>
                        <td class="tbody">{{ $product->product_name }}</td>
                        <td class="tbody">{{ $product->quantity }}</td>
                        <td class="tbody">${{ number_format($product->price, 2) }}</td>
                        <td class="tbody">
                            <!-- Edit Button -->
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('products.destroy', $product->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>

                             
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> 
@endsection        

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tableID').DataTable();
    });
</script>
