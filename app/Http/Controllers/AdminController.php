<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminService;
use App\Models\Order;

class AdminController extends Controller
{
    protected $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function view_category()
    {
        $data = $this->adminService->getAllCategories();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $this->adminService->addCategory($request->category);
        toastr()->timeOut(10000)->closeButton()->addSuccess('Category Added Successfully');
        return redirect()->back();
    }

    public function delete_category($id)
    {
        $this->adminService->deleteCategory($id);
        toastr()->timeOut(10000)->closeButton()->addSuccess('Category Deleted Successfully');
        return redirect()->back();
    }

    public function edit_category($id)
    {
        $data = $this->adminService->getCategoryById($id);
        return view('admin.edit_category', compact('data'));
    }

    public function update_category(Request $request, $id)
    {
        $this->adminService->updateCategory($id, $request->category);
        toastr()->timeOut(10000)->closeButton()->addSuccess('Category Updated Successfully');
        return redirect('/view_category');
    }

    public function add_product()
    {
        $category = $this->adminService->getCategoriesForProduct();
        return view('admin.add_product', compact('category'));
    }

    public function upload_product(Request $request)
    {
        $this->adminService->addProduct($request);
        toastr()->timeOut(10000)->closeButton()->addSuccess('Product Uploaded Successfully');
        return redirect()->back();
    }

    public function view_product()
    {
        $product = $this->adminService->getPaginatedProducts();
        return view('admin.view_product', compact('product'));
    }

    public function delete_product($id)
    {
        $this->adminService->deleteProduct($id);
        toastr()->timeOut(10000)->closeButton()->addSuccess('Product Deleted Successfully');
        return redirect()->back();
    }

    public function update_product($id)
    {
        $data = $this->adminService->getProductById($id);
        return view('admin.update_page', compact('data'));
    }

    public function edit_product(Request $request, $id)
    {
        $this->adminService->updateProduct($request, $id);
        toastr()->timeOut(10000)->closeButton()->addSuccess('Product Updated Successfully');
        return redirect('/view_product');
    }

    public function product_search(Request $request)
    {
        $product = $this->adminService->searchProducts($request->search);
        return view('admin.view_product', compact('product'));
    }

    public function view_orders()
    {
        $data = $this->adminService->getAllOrders();
        return view('admin.order', compact('data'));
    }

    public function on_the_way($id)
    {
        $data = Order::find($id);
    
        $data->status = 'On the way';
        $data->save();
    
        return redirect('/view_orders');
    }
    public function delivered($id)
    {
        $data = Order::find($id);
    
        $data->status = 'Delivered';
        $data->save();
    
        return redirect('/view_orders');
    }
    
}
