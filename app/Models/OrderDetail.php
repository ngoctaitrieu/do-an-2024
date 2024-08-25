<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_detail';

    protected $fillable = [
        'order_code',
        'product_variant_id',
        'quantity',
        'price'
    ];

    public function scopeOrderTotal($query, $order_code)
    {
        return $query->where('order_code', $order_code)->selectRaw('SUM(price * quantity) as total');
    }

}
