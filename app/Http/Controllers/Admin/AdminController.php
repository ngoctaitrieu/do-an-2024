<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategorySub;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use App\Models\Variant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.index', compact('products'));
    }

    public function productDetail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $variants = Variant::all();
        $product_variant = ProductVariant::where('product_id', $product['id'])->get();
        $category_sub = CategorySub::all();
        return view('admin.product-detail', compact('product', 'variants', 'product_variant', 'category_sub'));
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $url = asset('images/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }

    public function updateProduct(Request $request)
    {
        $product = Product::find($request['product_id']);
        if(!$product) {
            return redirect()->back()->with('error', 'Không tìm thấy sản phẩm cần cập nhật');
        }
        // Lấy product_variant
        $product_variant = ProductVariant::where('product_id', $product['id'])->get();
        // Kiểm tra xem variant có trùng khớp không. Nếu không trùng khớp thì xóa các bản ghi của variant cũ
        if(count($product_variant)) {
            if($product_variant[0]['variant_id'] != $request['variants']) {
                ProductVariant::where('product_id', $product['id'])->delete();
            } else {
                // Xóa những bản ghi không dùng
                foreach ($product_variant as $item) {
                    if(!in_array($item['name'], $request['product_variant']['name'])) {
                        ProductVariant::where('id', $item['id'])->delete();
                    }
                }
            }
        }
//        dd(1);
        // Cập nhật thông tin
        foreach ($request['product_variant']['name'] as $key => $item) {
            if(!$item || !$request['product_variant']['quantity'][$key]) {
                continue;
            }
            ProductVariant::updateOrCreate(
                ['product_id' => $product['id'], 'variant_id' => $request['variants'], 'name' => $item],
                ['quantity' => $request['product_variant']['quantity'][$key]]
            );
        }
        $product['title'] = $request['title'];
        $product['slug'] = $request['slug'];
        $product['long_description'] = $request['description'];
        $product['price_old'] = $request['price_old'];
        $product['price'] = $request['price'];
        $product['category_sub_id'] = $request['category_sub'];
        $product->save();
        return redirect()->back()->with('status', 'Cập nhật thông tin sản phẩm thành công');
    }

    public function updateProductImage(Request $request)
    {
        if($files = $request->file('images')) {
            $images = [];
            $product = Product::find($request['product_id']);
            if(!$product) {
                return response()->json(['images' => []]);
            }
            foreach ($files as $key => $file) {
                $originName = $file->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $fileName = $fileName . '_' . $key . '_' . time() . '.' . $extension;

                $file->move(public_path('images'), $fileName);
                $url = asset('images/' . $fileName);
                // Cập nhật hình ảnh
                $product_image = ProductImage::create([
                   'image_url' => $url,
                   'product_id' => $product['id']
                ]);
                if($product_image) {
                    $images[] = [
                        'id' => $product_image['id'],
                        'url' => $url
                    ];
                }
            }
            return response()->json(['images' => $images]);
        }
    }

    public function deleteProductImage(Request $request)
    {
        $product_image = ProductImage::find($request['product_image_id']);
        if($product_image) {
            $product_image->delete();
            return response()->json(['status' => 1]);
        }
    }
}
