<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function addproduct(){
        return view('products.index');
    }

    public function store(Request $request){
         $product = new Product();
         $product->product_name = $request->product_name;
         $product->quantity = $request->quantity;
         $product->price = $request->price;

         $product->save();

         return redirect()->route('add.product')->with('success', 'Product added successfully!');
    }

    public function ProductDetails(){

        $products = product::all();
        return view ('products.store',compact('products'));
    }

    public function destroy($id) {
        $product = Product::findOrFail($id);
        $product->delete();
    
        return redirect()->route('product.details')->with('success', 'Product deleted successfully!');
    }

    public function update(Request $request, $id)
    {
      $request->validate([
        'product_name' => 'required|max:255',
        'quantity' => 'required',
        "amount"=>'amount'
      ]);

      $Product = Product::find($id);
      $Product->update($request->all());
      return redirect()->route('product.details')->with('success', 'Product deleted successfully!');
    }

    public function edit($id)
    {
      $Product = Product::find($id);
      return view('products.edit', compact('Product'));
    }
}
