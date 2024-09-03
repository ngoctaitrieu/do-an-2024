<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    public function index()
    {
        $variants = Variant::all();
        return view('admin.variants.index', compact('variants'));
    }

    public function create()
    {
        return view('admin.variants.add');
    }

    public function store(Request $request)
    {
        $variant = Variant::where('name', strtolower($request['name']))->count();
        if($variant) {
            return redirect()->back()->with('error', 'Biến thể đã tồn tại');
        }
        if(Variant::create([
            'name' =>  $request['name'],
        ])) {
            return redirect()->back()->with('status', 'Thêm biến thể mới thành công');
        }
        return redirect()->back()->with('error', 'Đã có lỗi xảy ra. Vui lòng thử lại sau');
    }

    public function edit($id)
    {
        $variant = Variant::find($id);
        return view('admin.variants.edit', compact('variant'));
    }

    public function update($id, Request $request)
    {
        $variant = Variant::find($id);
        if(!$variant['id']) {
            return redirect()->back()->with('error', 'Không tìm thấy biến thể cần cập nhật');
        }

        if($variant->update([
            'name' =>  $request['name'],
        ])) {
            return redirect()->back()->with('status', 'Cập nhật biến thể thành công');
        }
        return redirect()->back()->with('error', 'Đã có lỗi xảy ra. Vui lòng thử lại sau');
    }

    public function delete(Request $request)
    {
        $variant = Variant::find($request['variant_id']);
        if(!$variant['id']) {
            return response()->json([
                'status' => 0,
                'message' => 'Không tìm thấy biến thể cần xóa'
            ]);
        }
        if($variant->delete()) {
            return response()->json([
                'status' => 1,
                'message' => 'Thành công'
            ]);
        }
        return response()->json([
            'status' => 0,
            'message' => 'Đã có lỗi xảy ra. Vui lòng thử lại sau'
        ]);
    }
}
