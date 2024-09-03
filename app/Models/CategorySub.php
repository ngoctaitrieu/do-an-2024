<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategorySub extends Model
{
    use HasFactory;
    protected $table = 'category_sub';

    protected $fillable = [
        'name',
        'slug',
        'image',
        'category_id'
    ];

//    public function products()
//    {
//        return $this->hasMany(Product::class);
//    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeCategorySub($query, $category_id) {
        return $query->where('category_id', $category_id);
    }
    public function scopeGetCategoryBySlug($query, $slug) {
        return $query->where('slug', $slug);
    }
}
