<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index() {

        return view('dashboard.index');
    }

    public function cart() {
        return view('dashboard.cart');
    }

    public function confirm() {
        return view('dashboard.confirm');
    }

    public function order(Request $request) {
        $customer_information = $request['customer'];
        $selected_item = $request['selectedItem'];
        $payment_method = (int)$request['payment_method'];
        if(empty($selected_item)) {
            return response()->json(array(
                'status' => 0,
                'message' => 'Đã có lỗi xảy ra. Không tìm thấy sản phẩm.'
            ));
        }
        // Kiểm tra số lượng sản phẩm đã đặt có còn hay không và tính lại giá tiền
        $total = 0;
        foreach ($selected_item as $item) {
            // Lấy thông tin sản phẩm
            $product = Product::find($item['product_id']);
            if(empty($product)) {
                return response()->json([
                   'status' => 0,
                    'message' => 'Không tìm thấy thông tin sản phẩm bạn cần mua.'
                ]);
            }
            $product_variant = ProductVariant::where('product_id', $product['id'])->first();
            // Kiểm tra xem số lượng có đủ không
            if((int)$product_variant['quantity'] < (int)$item['quantity']) {
                return response()->json([
                    'status' => 0,
                    'message' => 'Số lượng sản phẩm trong kho không đủ.'
                ]);
            }
            $total += (float)$product['price'] * (int)$item['quantity'];
        }
        // Tạo mã đơn hàng
        $order_code = Str::random(10);
        while (Order::existOrderCode($order_code)->first()) {
            $order_code = Str::random(10);
        }
        // Lưu dữ liệu
        $order = Order::create([
            'order_code' => strtoupper($order_code),
            'customer_name' => $customer_information['customer_name'],
            'customer_phone' => $customer_information['customer_phone'],
            'customer_address' => $customer_information['customer_address'],
            'user_id' => auth()->user()->id,
            'status' => 1,
            'payment_method' => $payment_method,
            'payment_status' => 1
        ]);
        if(!$order) {
            return response()->json([
                'status' => 0,
                'message' => 'Đã có lỗi xảy ra khi tạo đơn hàng của bạn.'
            ]);
        }
        foreach ($selected_item as $item) {
            $product = Product::find($item['product_id']);
            $product_variant = ProductVariant::where('product_id', $product['id'])->first();
            $order_detail = OrderDetail::create([
                'order_code' => strtoupper($order_code),
                'product_variant_id' => $item['product_variant_id'],
                'quantity' => (int)$item['quantity'],
                'price' => (float)$product['price']
            ]);
        }
        return response()->json([
            'status' => 1,
            'message' => 'Đặt hàng thành công.'
        ]);
    }

    public function success()
    {
        return view('dashboard.success');
    }

    public function orderManagement()
    {
        $orders = Order::where('user_id', auth()->user()->id)->get();
//        $total = OrderDetail::orderTotal($orders[0]['order_code'])->first();
        return view('dashboard.order-management', compact('orders'));
    }

    public function orderDetail($order_code)
    {
        $order = Order::where('order_code', $order_code)->first();
        $order_detail = OrderDetail::where('order_code', $order_code)->get();
        return view('dashboard.order-detail', compact('order', 'order_detail'));
    }

    public function cancel(Request $request)
    {
        // Kiểm tra người dùng hiện tại có quyền hủy đơn hàng này hay không
        $order = Order::where('order_code', $request['order_code'])->first();
        if($order['user_id'] != auth()->user()->id) {
            return response()->json([
                'status' => 0,
                'message' => 'Bạn không có quyền hủy đơn hàng này.'
            ]);
        }
        $order->update(['status' => 5, 'payment_status' => 3]);
        return response()->json([
            'status' => 1,
            'message' => 'Bạn đã hủy đơn hàng thành công.'
        ]);
    }

    public function changePassword(Request $request)
    {
        $user = auth()->user();
        // Kiểm tra mật khẩu cũ có trùng không
        if(Hash::check($request['current_password'], $user->password)) {
            $user['password'] = Hash::make($request['new_password']);
            $user->save();
            return response()->json([
                'status' => 1,
                'message' => 'Thay đổi mật khẩu thành công.'
            ]);
        }
        return response()->json([
            'status' => 0,
            'message' => 'Mật khẩu hiện tại không chính xác.'
        ]);
    }

    public function updateInformation(Request $request)
    {
        $user = auth()->user();
        $user['name'] = $request['name'];
        $user['date_of_birth'] = $request['date_of_birth'];
        $user['gender'] = $request['gender'];
        $user->save();
        return response()->json([
            'status' => 1,
            'message' => 'Cập nhật thông tin thành công.'
        ]);
    }
}
