<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategorySub;
use Illuminate\Http\Request;

class CategorySubController extends Controller
{
    public function create()
    {
        $category = Category::all();
        return view('admin.category.sub-add', compact('category'));
    }

    public function store(Request $request)
    {
        // Kiểm tra danh mục đã tồn tại hay chưa
        $category_slug = CategorySub::where('slug', $request['slug'])->count();
        if($category_slug) {
            return redirect()->back()->with('error', 'Đường dẫn danh mục đã tồn tại');
        }
        $category_name = CategorySub::where('name', strtolower($request['title']))->count();
        if($category_name) {
            return redirect()->back()->with('error', 'Tên danh mục đã tồn tại');
        }
        $url = '';
        if ($request->hasFile('image')) {
            $originName = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('image')->move(public_path('images'), $fileName);

            $url = asset('images/' . $fileName);
        }
        if(CategorySub::create([
            'name' =>  $request['title'],
            'slug' => $request['slug'],
            'image' => $url,
            'category_id' => $request['category']
        ])) {
            return redirect()->back()->with('status', 'Thêm danh mục mới thành công');
        }
        return redirect()->back()->with('error', 'Đã có lỗi xảy ra. Vui lòng thử lại sau');
    }

    public function edit($id)
    {
        $category = Category::all();
        $category_sub = CategorySub::find($id);
        return view('admin.category.sub-edit', compact('category_sub', 'category'));
    }

    public function update($id, Request $request)
    {
        $category_sub = CategorySub::find($id);
        if(!$category_sub['id']) {
            return redirect()->back()->with('error', 'Không tìm thấy danh mục cần cập nhật');
        }

        $url = $category_sub->image;
        if ($request->hasFile('image')) {
            $originName = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('image')->move(public_path('images'), $fileName);

            $url = asset('images/' . $fileName);
        }

        if($category_sub->update([
            'name' =>  $request['title'],
            'slug' => $request['slug'],
            'image' => $url,
            'category_id' => $request['category']
        ])) {
            return redirect()->back()->with('status', 'Cập nhật danh mục thành công');
        }
        return redirect()->back()->with('error', 'Đã có lỗi xảy ra. Vui lòng thử lại sau');
    }

    public function delete(Request $request)
    {
        $category_sub = CategorySub::find($request['category_sub_id']);
        if(!$category_sub['id']) {
            return response()->json([
                'status' => 0,
                'message' => 'Không tìm thấy danh mục cần xóa'
            ]);
        }
        if($category_sub->delete()) {
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
