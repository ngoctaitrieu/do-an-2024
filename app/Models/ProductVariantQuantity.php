<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariantQuantity extends Model
{
    use HasFactory;
    protected $table = 'product_variants_quantity';
    protected $fillable = [
        'product_id',
        'variant_id',
        'quantity',
        'name',
    ];
}
