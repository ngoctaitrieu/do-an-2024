<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategorySub;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        // Sản phẩm mới
        $category = Category::all();
        $category_sub_arr = CategorySub::categorySub($category[0]['id'])->get()->pluck('id')->toArray();
        $products = Product::productCategorySub($category_sub_arr)->get();
        // Danh mục sản phẩm
        $category_sub = CategorySub::all();
        // Sản phẩm bán chạy
//        $order = OrderDetail::select('product_variant_id', DB::raw('SUM(quantity) as quantity'))->groupBy('product_variant_id')->get();
        $hot_products = Product::select('products.id', DB::raw('SUM(order_detail.quantity) as total_quantity'))
            ->join('product_variants', 'products.id', '=', 'product_variants.product_id')
            ->join('order_detail', 'product_variants.id', '=', 'order_detail.product_variant_id')
            ->groupBy('products.id')
            ->orderBy('total_quantity', 'desc')
            ->get();
        return view('home', compact('category', 'products', 'category_sub', 'hot_products'));
    }

    public function get(Request $request) {
        $category_sub = CategorySub::categorySub($request['id'])->get()->pluck('id')->toArray();
        $products = Product::productCategorySub($category_sub)->get();
        $html = '';
        if($products) {
            foreach ($products as $item) {
                $html .= '<div class="col-6 col-sm-4 col-xl-3 p-10">
                                    <div class="products">
                                        <div class="product">
                                            <div class="product__img">
                                                <a href="'. route('products.detail', $item->slug) .'" class="img">
                                                    <span class="label">25% OFF</span>
                                                    <figure><img src="'.$item->getProductImage[0]['image_url'].'" alt="pro-1"></figure>
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <div class="product__content__title">
                                                    <h3><a href="'. route('products.detail', $item->slug) .'">'.$item['title'].'</a>
                                                    </h3>
                                                </div>
                                                <div class="product__content__price">
                                                    <span class="price-old">'.number_format((int)$item['price'], 0, ',', '.').' đ</span>
                                                    <span class="price-sale">'.number_format((int)$item['price_old'], 0, ',', '.').' đ</span>
                                                </div>
                                                <div class="product__content__meta-info">
                                                    <a href="'. route('products.detail', $item->slug) .'">Mua ngay</a>
                                                    <div class="bnt-info">
                                                        <button class="d-none">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.13901 1.16663L3.02734 3.28413" stroke="#292B2E"
                                                                      stroke-width="1.2" stroke-miterlimit="10"
                                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M8.86133 1.16663L10.973 3.28413" stroke="#292B2E"
                                                                      stroke-width="1.2" stroke-miterlimit="10"
                                                                      stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path
                                                                        d="M1.16699 4.57914C1.16699 3.49998 1.74449 3.41248 2.46199 3.41248H11.5387C12.2562 3.41248 12.8337 3.49998 12.8337 4.57914C12.8337 5.83331 12.2562 5.74581 11.5387 5.74581H2.46199C1.74449 5.74581 1.16699 5.83331 1.16699 4.57914Z"
                                                                        stroke="#292B2E" stroke-width="1.2"></path>
                                                                <path d="M5.69336 8.16663V10.2375" stroke="#292B2E"
                                                                      stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path d="M8.37695 8.16663V10.2375" stroke="#292B2E"
                                                                      stroke-width="1.2" stroke-linecap="round"></path>
                                                                <path
                                                                        d="M2.04199 5.83337L2.86449 10.8734C3.05116 12.005 3.50033 12.8334 5.16866 12.8334H8.68616C10.5003 12.8334 10.7687 12.04 10.9787 10.9434L11.9587 5.83337"
                                                                        stroke="#292B2E" stroke-width="1.2" stroke-linecap="round">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                        <button class="add-to-favorite ';
                if($item->userFavorited->count()) {
                    $html .= 'user-favorited';
                }
                $html .= '" data-id="'. $item->id .'">
                                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.36199 12.1392C7.16366 12.2092 6.83699 12.2092 6.63866 12.1392C4.94699 11.5617 1.16699 9.15252 1.16699 5.06918C1.16699 3.26668 2.61949 1.80835 4.41033 1.80835C5.47199 1.80835 6.41116 2.32168 7.00033 3.11502C7.58949 2.32168 8.53449 1.80835 9.59033 1.80835C11.3812 1.80835 12.8337 3.26668 12.8337 5.06918C12.8337 9.15252 9.05366 11.5617 7.36199 12.1392Z"
                                                                    stroke="#292B2E" stroke-width="1.2" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
            }
        }
        return json_encode($html);
    }

    public function search(Request $request)
    {
        $keyword = $request['keyword'];
        $products = Product::where('title', 'like', '%' . $keyword . '%')->get();
        return view('search', compact('products', 'keyword'));
    }

    public function about()
    {
        return view('about');
    }

    public function faq()
    {
        return view('faq');
    }

    public function support()
    {
        return view('support');
    }
}
