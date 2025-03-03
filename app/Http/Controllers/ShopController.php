<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ShopService;

class ShopController extends Controller
{
    protected $shopService;

    public function __construct(ShopService $shopService)
    {
        $this->shopService = $shopService;
    }

    public function index()
    {
        $product = $this->shopService->getAllProducts();
        return view('shop.main', compact('product')); 
    }

    public function searchProducts(Request $request)
    {
        $searchTerm = $request->input('text');
        $product = $this->shopService->searchProducts($searchTerm);
        
        return view('shop.main', compact('product'));
    }
}
