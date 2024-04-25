<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        $product = $request->input('product');

        // Return the view with products data
        return view('product.index', compact('product'));
    }
    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('product.detail', ['product' => $product]);
    }
    public function showRequestForm()
    {
        return view('product.request');
    }

   

    
    
        
}
