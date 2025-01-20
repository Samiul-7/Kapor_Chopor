<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


route::get('/',[HomeController::class,'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('admin/dashboard',[HomeController::class,'index']);
Route::get('/shop', [ShopController::class, 'index'])->name('shop');

Route::get('view_category',[AdminController::class,'view_category'])->name('category');
Route::post('add_category',[AdminController::class,'add_category'])->name('category');
Route::get('delete_category/{id}',[AdminController::class,'delete_category'])->name('category');
Route::get('edit_category/{id}',[AdminController::class,'edit_category'])->name('category');
Route::post('update_category/{id}',[AdminController::class,'update_category'])->name('category');
Route::get('add_product',[AdminController::class,'add_product'])->name('category');
Route::post('upload_product',[AdminController::class,'upload_product'])->name('category');
Route::get('view_product',[AdminController::class,'view_product'])->name('category');