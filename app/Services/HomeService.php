<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeService
{
    public function getProductList()    //Get a list of all available products in the store.
    {
        return Product::all();
    }

    public function getCartCount()  //Get the total number of items in the logged-in user's cart.
    {
        if (Auth::id()) {
            $userId = Auth::user()->id;
            return Cart::where('user_id', $userId)->count();
        }
        return '';
    }

    public function getProductDetails($id)  //Fetch details of a specific product by its ID.
    {
        return Product::find($id);
    }

    public function addToCart($productId)   //Add a product to the logged-in user's cart.
    {
        $userId = Auth::user()->id;
        
        $cartItem = new Cart;
        $cartItem->user_id = $userId;
        $cartItem->product_id = $productId;
        $cartItem->save();
        
        return $cartItem;
    }

    public function getUserCart()   //Get all items currently in the logged-in user's cart.
    {
        $userId = Auth::user()->id;
        return Cart::where('user_id', $userId)->get();
    }

    public function deleteCartItem($id) //Remove a specific item from the cart.
    {
        $cartItem = Cart::find($id);
        if ($cartItem) {
            $cartItem->delete();
        }
    }

    public function placeOrder($name, $address, $phone) //Place an order for all items in the user's cart.
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
    public function getDashboardStats()         // statistics backend code
    {
        return [
            'user' => User::where('usertype', 'user')->count(),     // user count
            'product' => Product::count(),          // product count
            'order' => Order::count(),              //order count
            'delivered' => Order::where('status', 'Delivered')->count(),    //counting delivered orders
            'on_the_way' => Order::where('status', 'On the way')->count(),  //couting on the way orders
            'prog' => Order::where('status', 'in progress')->count(),       // counting in progress orders
        ];
    }
    public function getUserOrders()
    {
        $userId = Auth::id();

        return [
            'count' => Cart::where('user_id', $userId)->count(),
            'order' => Order::where('user_id', $userId)->get(),
        ];
    }
}
