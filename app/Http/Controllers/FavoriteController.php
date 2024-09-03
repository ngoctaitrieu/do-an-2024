<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function create(Request $request)
    {
        // Kiểm tra đã yêu thích sản phẩm hiện tại hay chưa
        $product = Product::find($request['product_id']);
        $user_favorited = $product->userFavorited()->count();
        if($user_favorited) {
            // Nếu đã yêu thích thì bỏ yêu thích
            Favorite::where('product_id', $request['product_id'])->where('user_id', auth()->id())->delete();
            return response()->json([
                'status' => 1
            ]);
        } else {
            // Nếu chưa yêu thích thì yêu thích
            Favorite::insert([
                'product_id' => $request['product_id'],
                'user_id' => auth()->id()
            ]);
            return response()->json([
                'status' => 1
            ]);
        }
    }

    public function index()
    {
//        dd(auth()->user()->userFavorite);
        $user_favorite = auth()->user()->userFavorite;
        return view('dashboard.favorite', compact('user_favorite'));
    }
}
