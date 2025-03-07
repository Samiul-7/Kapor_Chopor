<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminService
{
    /**
     * Get all categories
     */
    public function getAllCategories()
    {
        return Category::all();
    }

    /**
     * Add a new category
     */
    public function addCategory($categoryName)
    {
        $category = new Category();
        $category->category_name = $categoryName;
        $category->save();
    }

    /**
     * Delete a category by ID
     */
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->delete();
        }
    }

    /**
     * Get a category by ID
     */
    public function getCategoryById($id)
    {
        return Category::find($id);
    }

    /**
     * Update category
     */
    public function updateCategory($id, $categoryName)
    {
        $category = Category::find($id);
        if ($category) {
            $category->category_name = $categoryName;
            $category->save();
        }
    }

    /**
     * Get all categories for products
     */
    public function getCategoriesForProduct()
    {
        return Category::all();
    }

    /**
     * Add a new product
     */
    public function addProduct(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->qty;
        $product->catrgory = $request->category;
        $product->image = $request->image; // Assuming URL is stored directly
        $product->save();
    }

    /**
     * Paginate products
     */
    public function getPaginatedProducts($perPage = 3)
    {
        return Product::paginate($perPage);
    }

    /**
     * Delete a product by ID
     */
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if ($product) {
            $imagePath = public_path('products/' . $product->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $product->delete();
        }
    }

    /**
     * Get product by ID
     */
    public function getProductById($id)
    {
        return Product::find($id);
    }

    /**
     * Update a product
     */
    public function updateProduct(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->title = $request->title;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            $product->catrgory = $request->category;
            
            if ($request->image) {
                $product->image = $request->image; // Assuming URL is stored directly
            }

            $product->save();
        }
    }

    /**
     * Search for products
     */
    public function searchProducts($searchTerm, $perPage = 3)
    {
        if ($searchTerm) {
            return Product::where('title', 'like', '%' . $searchTerm . '%')
                ->orWhere('catrgory', 'like', '%' . $searchTerm . '%')
                ->paginate($perPage);
        }

        return Product::paginate($perPage);
    }
    public function getAllOrders()
    {
        return Order::all();
    }

    public function deleteOrder($id)
    {
        $order = Order::find($id);
        if ($order) {
            $imagePath = public_path('orders/' . $order->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $order->delete();
        }
    }
    public function markOrderAsOnTheWay($orderId)
    {
        $order = Order::find($orderId);

        if ($order) {
            $order->status = 'On the way';
            $order->save();
            return true; // Indicates success
        }

        return false; // Order not found
    }
    
    public function markOrderAsDelivered($orderId)
    {
        $order = Order::find($orderId);

        if ($order) {
            $order->status = 'Delivered';
            $order->save();
            return true; // Order updated successfully
        }

        return false; // Order not found
    }
}
