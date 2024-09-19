<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index(Request $request)
    {
//        dd($request->all());
        if(isset($request['start']) && isset($request['end'])) {
            $orders = Order::whereBetween('created_at', [$request['start'], $request['end']])->orderBy('created_at', 'asc')->get();
        } else {
            $orders = Order::orderBy('created_at', 'asc')->get();
        }
//        dd($orders);
        // Sản phẩm bán chạy
        $hot_products = Product::select('products.id', DB::raw('SUM(order_detail.quantity) as total_quantity'))
            ->join('product_variants', 'products.id', '=', 'product_variants.product_id')
            ->join('order_detail', 'product_variants.id', '=', 'order_detail.product_variant_id')
            ->groupBy('products.id')
            ->orderBy('total_quantity', 'desc')
            ->get();
        // Doanh thu
        $prices = 0;
        $dates = [];
        $price_list = [];
        foreach ($orders as $item) {
            $prices += $item->total($item['order_code'])['total'];
            $date = Carbon::parse($item['created_at'])->format('m/d/Y');
            if(!in_array($date, $dates)) {
                $dates[] = $date;
            }
            if(isset($price_list[$date])) {
                $price_list[$date] = (int)$price_list[$date] + (int)$item->total($item['order_code'])['total'];
            } else {
                $price_list[$date] = (int)$item->total($item['order_code'])['total'];
            }
        }
        $price_list = array_values($price_list);
//        dd($price_list);
        $quantity = count($orders);
        return view('admin.report', compact('prices', 'quantity', 'hot_products', 'dates', 'price_list'));
    }
}
