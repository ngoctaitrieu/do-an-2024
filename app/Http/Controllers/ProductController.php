<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategorySub;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
//use App\Models\ProductVariantQuantity;
use App\Models\Variant;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($category, $category_sub)
    {
        $data = \request()->all();
        $category = Category::getCategoryBySlug($category)->first();
        $category_sub = CategorySub::getCategoryBySlug($category_sub)->first();
        $products = Product::productCategorySub([$category_sub['id']])->search($data)->paginate(16);
        $category_sub_list = CategorySub::categorySub($category['id'])->get();
        return view('products', compact('products', 'category_sub', 'category', 'category_sub_list'));
    }

    public function index2($category)
    {
        $data = \request()->all();
        // Kiểm tra xem có phải là danh mục cấp 1 không
        $category = Category::getCategoryBySlug($category)->first();
        if(!$category) {
            return abort(404);
        }
        $category_sub = CategorySub::categorySub($category['id'])->get();
        $category_sub_arr = $category_sub->pluck('id')->toArray();
        $products = Product::productCategorySub($category_sub_arr)->search($data)->paginate(16);
        $category_sub_list = CategorySub::categorySub($category['id'])->get();

        return view('products', compact('products', 'category', 'category_sub_list'));
    }

    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        if(!$product) {
            return abort(404);
        }
        $product_variant = ProductVariant::where('product_id', $product['id'])->get();
        $variant = Variant::find($product_variant[0]['variant_id']);
        // Lấy hình ảnh sản phẩm
        $product_images = $product->getProductImage;
//        $product_variant_quantity = ProductVariantQuantity::where('product_id', $product_variant['product_id'])->where('variant_id', $product_variant['variant_id'])->get();

        return view('product-detail', compact('product', 'product_variant', 'variant', 'product_images'));
    }
}
