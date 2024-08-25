<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'long_description',
        'price',
        'price_old',
        'category_sub_id'
    ];

//    public function categorySub()
//    {
//        return $this->belongsTo(CategorySub::class);
//    }
    public function images() {
        return $this->hasMany(ProductImage::class);
    }

    public function scopeProductCategorySub($query, $category_sub) {
        return $query->whereIn('category_sub_id', $category_sub);
    }

    public function getProductImage() {
        return $this->images();
    }

    public function scopeSearch($query, $data)
    {
        iF(isset($data['priceStart']) && isset($data['priceEnd'])) {
            $query->where('price', '>=', (int)$data['priceStart'])->where('price', '<=', (int)$data['priceEnd']);
        }
        if(isset($data['time'])) {
            $query->orderBy('created_at', $data['time']);
        } else if(isset($data['price'])) {
            $query->orderBy('price', $data['price']);
        } else {
            $query->orderBy('created_at', 'DESC');
        }
        return $query;
    }
}
