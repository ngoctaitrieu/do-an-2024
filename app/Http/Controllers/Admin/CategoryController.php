<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategorySub;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $category_sub = CategorySub::all();
        return view('admin.category.category', compact('category', 'category_sub'));
    }

    public function create()
    {
        return view('admin.category.add');
    }

    public function store(Request $request)
    {
        // Kiểm tra danh mục đã tồn tại hay chưa
        $category_slug = Category::where('slug', $request['slug'])->count();
        if($category_slug) {
            return redirect()->back()->with('error', 'Đường dẫn danh mục đã tồn tại');
        }
        $category_name = Category::where('name', strtolower($request['title']))->count();
        if($category_name) {
            return redirect()->back()->with('error', 'Tên danh mục đã tồn tại');
        }

        if(Category::create([
            'name' =>  $request['title'],
            'slug' => $request['slug']
        ])) {
            return redirect()->back()->with('status', 'Thêm danh mục mới thành công');
        }
        return redirect()->back()->with('error', 'Đã có lỗi xảy ra. Vui lòng thử lại sau');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update($id, Request $request)
    {
        $category = Category::find($id);
        if(!$category['id']) {
            return redirect()->back()->with('error', 'Không tìm thấy danh mục cần cập nhật');
        }
        // Kiểm tra danh mục đã tồn tại hay chưa
        $category_slug = Category::where('slug', $request['slug'])->count();
        if($category_slug) {
            return redirect()->back()->with('error', 'Đường dẫn danh mục đã tồn tại');
        }
        $category_name = Category::where('name', strtolower($request['title']))->count();
        if($category_name) {
            return redirect()->back()->with('error', 'Tên danh mục đã tồn tại');
        }
        if($category->update([
            'name' =>  $request['title'],
            'slug' => $request['slug']
        ])) {
            return redirect()->back()->with('status', 'Cập nhật danh mục thành công');
        }
        return redirect()->back()->with('error', 'Đã có lỗi xảy ra. Vui lòng thử lại sau');
    }

    public function delete(Request $request)
    {
        $category = Category::find($request['category_id']);
        if(!$category['id']) {
            return response()->json([
                'status' => 0,
                'message' => 'Không tìm thấy danh mục cần xóa'
            ]);
        }
        if($category->delete()) {
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
