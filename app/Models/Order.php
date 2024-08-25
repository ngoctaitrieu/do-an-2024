<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'order_code';
    protected $keyType = 'string';

    protected $fillable = [
        'order_code',
        'customer_name',
        'customer_phone',
        'customer_address',
        'user_id',
        'status',
        'payment_method',
        'payment_status'
    ];


    public function scopeExistOrderCode($query, $order_code)
    {
        return $query->where('order_code', $order_code);
    }

    public function paymentMethodText($payment_method)
    {
        if($payment_method == 1) {
            return 'Thanh toán khi nhận hàng';
        } else {
            return 'Thanh toán với thẻ';
        }
    }

    public function statusText($status)
    {
        if($status == 1) {
            return 'Chờ xác nhận';
        } else if($status == 2) {
            return 'Chờ lấy hàng';
        } else if($status == 3) {
            return 'Đang giao hàng';
        } else if($status == 4) {
            return 'Đã giao hàng';
        } else {
            return 'Đã hủy';
        }
    }

    public function total($order_code)
    {
        return OrderDetail::orderTotal($order_code)->first();
    }
}
