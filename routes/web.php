<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\LoginAdminController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Đăng ký
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'create'])->name('register.create');
// Đăng nhập
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');
// Lấy danh sách sản phẩm dựa trên category_id
Route::get('/home/get', [HomeController::class, 'get'])->name('home.get');
// Dashboard
Route::middleware([\App\Http\Middleware\IsLogin::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/cart', [DashboardController::class, 'cart'])->name('dashboard.cart');
    Route::get('/confirm', [DashboardController::class, 'confirm'])->name('dashboard.confirm');
    Route::post('/order', [DashboardController::class, 'order'])->name('dashboard.order');
    Route::get('/success', [DashboardController::class, 'success'])->name('dashboard.success');
    Route::get('/order-management', [DashboardController::class, 'orderManagement'])->name('dashboard.orderManagement');
    Route::get('/order/{order_code}', [DashboardController::class, 'orderDetail'])->name('dashboard.orderDetail');
    Route::post('/cancel', [DashboardController::class, 'cancel'])->name('dashboard.cancel');
    Route::post('/change-password', [DashboardController::class, 'changePassword'])->name('dashboard.changePassword');
    Route::post('/update-information', [DashboardController::class, 'updateInformation'])->name('dashboard.updateInformation');
});
// Admin
Route::get('/admin/login', [LoginAdminController::class, 'index'])->name('admin.login.index');
Route::post('/admin/login', [LoginAdminController::class, 'login'])->name('admin.login.login');
Route::middleware([\App\Http\Middleware\IsAdminLogin::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    // Upload ảnh của ckeditor
    Route::post('ckeditor/upload', [AdminController::class, 'upload'])->name('ckeditor.upload');
    Route::post('/admin/product/update', [AdminController::class, 'updateProduct'])->name('admin.product.update');
    // Cập nhật hình ảnh sản phẩm
    Route::post('/admin/product/image/update', [AdminController::class, 'updateProductImage'])->name('admin.product.update.image');
    // Xóa hình ảnh sản phẩm
    Route::post('/admin/product/image/delete', [AdminController::class, 'deleteProductImage'])->name('admin.product.delete.image');

    Route::get('/admin/products/{slug}', [AdminController::class, 'productDetail'])->name('admin.product.detail');
});
// Hiển thị danh sách sản phẩm của một danh mục
Route::get('/products/{slug}', [ProductController::class, 'detail'])->name('products.detail');
Route::get('/{category}/{category_sub}', [ProductController::class, 'index'])->name('products.index');
Route::get('/{category}', [ProductController::class, 'index2'])->name('products.index2');