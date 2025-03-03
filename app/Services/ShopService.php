<?php

namespace App\Services;

use App\Models\Product;

class ShopService
{
    /**
     * Get all products.
     */
    public function getAllProducts()
    {
        return Product::all();
    }

    /**
     * Search products by title.
     *
     * @param string|null $searchTerm
     */
    public function searchProducts(?string $searchTerm)
    {
        if ($searchTerm) {
            return Product::where('title', 'like', '%' . $searchTerm . '%')->get();
        }
        return $this->getAllProducts();
    }
}
