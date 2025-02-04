<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('shop.main',compact('product')); 
    }

    public function searchProducts(Request $request)
    {
        $searchTerm = $request->input('text');

        if ($searchTerm) {
            $product = Product::where('title', 'like', '%' . $searchTerm . '%')->get();
        } else {
            $product = Product::all();
        }

        return view('shop.main', compact('product'));
    }

}
