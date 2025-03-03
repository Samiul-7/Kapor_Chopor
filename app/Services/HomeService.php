<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class HomeService
{
    public function getProductList()
    {
        return Product::all();
    }

    public function getCartCount()
    {
        if (Auth::id()) {
            $userId = Auth::user()->id;
            return Cart::where('user_id', $userId)->count();
        }
        return '';
    }

    public function getProductDetails($id)
    {
        return Product::find($id);
    }

    public function addToCart($productId)
    {
        $userId = Auth::user()->id;
        
        $cartItem = new Cart;
        $cartItem->user_id = $userId;
        $cartItem->product_id = $productId;
        $cartItem->save();
        
        return $cartItem;
    }

    public function getUserCart()
    {
        $userId = Auth::user()->id;
        return Cart::where('user_id', $userId)->get();
    }

    public function deleteCartItem($id)
    {
        $cartItem = Cart::find($id);
        if ($cartItem) {
            $cartItem->delete();
        }
    }

    public function placeOrder($name, $address, $phone)
    {
        $userId = Auth::user()->id;
        $cartItems = Cart::where('user_id', $userId)->get();
        
        foreach ($cartItems as $cartItem) {
            $order = new Order;
            $order->name = $name;
            $order->rec_address = $address;
            $order->phone = $phone;
            $order->user_id = $userId;
            $order->product_id = $cartItem->product_id;
            $order->save();
        }

        // Remove cart items after order
        Cart::where('user_id', $userId)->delete();
    }
}
