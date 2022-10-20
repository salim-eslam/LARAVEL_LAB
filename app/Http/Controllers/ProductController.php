<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index()
    {
        $products =  Product::get();
        $age = 27;
        return view('products.index', ['products' => $products, 'age' => $age]);
    }
    function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
    function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
    }
    function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('product.index');
    }
}
