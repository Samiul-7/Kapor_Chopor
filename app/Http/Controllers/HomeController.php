<?php

namespace App\Http\Controllers;

use App\Services\HomeService;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $homeService;

    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }

    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {
        $product = $this->homeService->getProductList();
        $count = $this->homeService->getCartCount();

        return view('home.index', compact('product', 'count'));
    }

    public function login_home()
    {
        $product = $this->homeService->getProductList();
        $count = $this->homeService->getCartCount();

        return view('home.index', compact('product', 'count'));
    }

    public function product_details($id)
    {
        $data = $this->homeService->getProductDetails($id);
        $count = $this->homeService->getCartCount();

        return view('home.product_details', compact('data', 'count'));
    }

    public function add_cart($id)
    {
        $this->homeService->addToCart($id);
        toastr()->timeOut(10000)->closeButton()->addSuccess('Product Added Successfully');
        
        return redirect()->back();
    }

    public function mycart()
    {
        $count = $this->homeService->getCartCount();
        $cart = $this->homeService->getUserCart();

        return view('home.mycart', compact('count', 'cart'));
    }

    public function delete_cart($id)
    {
        $this->homeService->deleteCartItem($id);
        toastr()->timeOut(10000)->closeButton()->addSuccess('Product Deleted Successfully From Cart');
        
        return redirect()->back();
    }

    public function confirm_order(Request $request)
    {
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;

        $this->homeService->placeOrder($name, $address, $phone);

        toastr()->timeOut(10000)->closeButton()->addSuccess('Product Ordered Successfully');
    
        return redirect()->back();
    }

    public function myorders()
    {
        $user = Auth::user()->id;

        $count = Cart::where('user_id', $user)->get()->count();

        $order = Order::where('user_id',$user)->get();
        
        return view('home.order', compact('count','order'));
        
    }
}
