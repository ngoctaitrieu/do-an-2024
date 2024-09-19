<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategorySub;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
//use App\Models\ProductVariantQuantity;
use App\Models\Review;
use App\Models\User;
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
        // Đánh giá sản phẩm
//        $product_reviews = $product->productReviews->sum('star');
        // Sản phẩm khác
        $product_list = Product::whereNotIn('id', [$product['id']])->limit(6)->get();
        return view('product-detail', compact('product', 'product_variant', 'variant', 'product_images', 'product_list'));
    }

    public function create(Request $request)
    {
        // Kiểm tra người dùng hiện tại đã đánh giá về sản phẩm hay chưa
        $product = Product::find($request['product_id']);
        $userReviewed = $product->userReviewed()->count();
        if($userReviewed) {
            return response()->json([
                'status' => 0,
                'message' => 'Bạn đã đánh giá về sản phẩm này.'
            ]);
        }
        $review = Review::insert([
           'product_id' =>  $request['product_id'],
            'user_id' => auth()->id(),
            'star' => $request['star'],
            'comment' => $request['comment']
        ]);
        $html = '';
        if($review) {

            $html = '<div class="list-comment__item">
                    <div class="rate">
                        <div class="star">';
            for($i = 1 ; $i <= $request['star']; $i++) {
                $html .= '<i class="fas fa-star yellow"></i>';
            }
            for($i = $request['star'] + 1 ; $i <= 5; $i++) {
                $html .= '<i class="fas fa-star"></i>';
            }
            $html .= '</div>
                        <div class="date-time"><span>';
            $html .= date('d/m/Y H:i:s');
            $html .= '</span></div>
                    </div>
                    <h3>';
            $html .= auth()->user()->name;
            $html .= '</h3>
                    <p>';
            $html .= $request['comment'];
            $html .= '</p>
                </div>';
        }
        return response()->json([
            'status' => 1,
            'html' => $html,
            'message' => 'Đánh giá sản phẩm đã được gửi.'
        ]);
    }
}
