<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\LoginAdminController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CategorySubController;
use App\Http\Controllers\Admin\VariantController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ReportController;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Đăng ký
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'create'])->name('register.create');
// Đăng nhập
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');
// Lấy danh sách sản phẩm dựa trên category_id
Route::get('/home/get', [HomeController::class, 'get'])->name('home.get');
Route::get('/products/{slug}', [ProductController::class, 'detail'])->name('products.detail');
Route::get('/search', [HomeController::class, 'search'])->name('home.search');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/faq', [HomeController::class, 'faq'])->name('home.faq');
Route::get('/support', [HomeController::class, 'support'])->name('home.support');
// Dashboard
Route::middleware([\App\Http\Middleware\IsLogin::class])->group(function () {
    Route::get('/logout', [DashboardController::class, 'logout'])->name('dashboard.logout');
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
    Route::post('/review/create', [ProductController::class, 'create'])->name('products.create');
    // Yêu thích sản phẩm
    Route::post('/favorite/create', [FavoriteController::class, 'create'])->name('favorite.create');
    Route::get('/favorite', [FavoriteController::class, 'index'])->name('favorite.index');
});
// Admin
Route::get('/admin/login', [LoginAdminController::class, 'index'])->name('admin.login.index');
Route::post('/admin/login', [LoginAdminController::class, 'login'])->name('admin.login.login');
Route::middleware([\App\Http\Middleware\IsAdminLogin::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    // Upload ảnh của ckeditor
    Route::post('ckeditor/upload', [AdminController::class, 'upload'])->name('ckeditor.upload');
    Route::post('/admin/product/update', [AdminController::class, 'updateProduct'])->name('admin.product.update');
    // Thêm sản phẩm
    Route::get('/admin/product/create', [AdminController::class, 'create'])->name('admin.product.create');
    Route::post('/admin/product/store', [AdminController::class, 'store'])->name('admin.product.store');
    // Xóa sản phẩm
    Route::post('/admin/product/delete', [AdminController::class, 'delete'])->name('admin.product.delete');
    // Cập nhật hình ảnh sản phẩm
    Route::post('/admin/product/image/update', [AdminController::class, 'updateProductImage'])->name('admin.product.update.image');
    // Xóa hình ảnh sản phẩm
    Route::post('/admin/product/image/delete', [AdminController::class, 'deleteProductImage'])->name('admin.product.delete.image');

    Route::get('/admin/products/{slug}', [AdminController::class, 'productDetail'])->name('admin.product.detail');
    // Danh mục sản phẩm
    Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category');
    // Danh mục cha
    Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::post('/admin/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::post('/admin/category/delete', [CategoryController::class, 'delete'])->name('admin.category.delete');
    // Danh mục con
    Route::get('/admin/category-sub/create', [CategorySubController::class, 'create'])->name('admin.category-sub.create');
    Route::post('/admin/category-sub/store', [CategorySubController::class, 'store'])->name('admin.category-sub.store');
    Route::get('/admin/category-sub/edit/{id}', [CategorySubController::class, 'edit'])->name('admin.category-sub.edit');
    Route::post('/admin/category-sub/update/{id}', [CategorySubController::class, 'update'])->name('admin.category-sub.update');
    Route::post('/admin/category-sub/delete', [CategorySubController::class, 'delete'])->name('admin.category-sub.delete');
    // Biến thể sản phẩm
    Route::get('/admin/variants', [VariantController::class, 'index'])->name('admin.variants');
    Route::get('/admin/variants/create', [VariantController::class, 'create'])->name('admin.variants.create');
    Route::post('/admin/variants/store', [VariantController::class, 'store'])->name('admin.variants.store');
    Route::get('/admin/variants/edit/{id}', [VariantController::class, 'edit'])->name('admin.variants.edit');
    Route::post('/admin/variants/update/{id}', [VariantController::class, 'update'])->name('admin.variants.update');
    Route::post('/admin/variants/delete', [VariantController::class, 'delete'])->name('admin.variants.delete');
    // Đơn hàng
    Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders');
    Route::get('/admin/orders/edit/{order_code}', [OrderController::class, 'edit'])->name('admin.orders.edit');
    Route::post('/admin/orders/update/{order_code}', [OrderController::class, 'update'])->name('admin.orders.update');
    // Báo cáo, thống kê
    Route::get('/admin/reports', [ReportController::class, 'index'])->name('admin.reports.index');
});
// Hiển thị danh sách sản phẩm của một danh mục
Route::get('/{category}/{category_sub}', [ProductController::class, 'index'])->name('products.index');
Route::get('/{category}', [ProductController::class, 'index2'])->name('products.index2');