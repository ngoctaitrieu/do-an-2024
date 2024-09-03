<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.orders.index', compact('orders'));
    }

    public function edit($order_code)
    {
        $order = Order::where('order_code', $order_code)->first();
        $order_detail = OrderDetail::where('order_code', $order->order_code)->get();
        return view('admin.orders.edit', compact('order', 'order_detail'));
    }

    public function update($order_code, Request $request)
    {
        $order = Order::where('order_code', $order_code)->first();
        if(!$order['order_code']) {
            return redirect()->back()->with('error', 'Không tìm thấy đơn hàng cần cập nhật');
        }
        if($order->update([
            'status' =>  $request['status'],
            'payment_status' => $request['payment_status']
        ])) {
            return redirect()->back()->with('status', 'Cập nhật đơn hàng thành công');
        }
        return redirect()->back()->with('error', 'Đã có lỗi xảy ra. Vui lòng thử lại sau');
    }
}
