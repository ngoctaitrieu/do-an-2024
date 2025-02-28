<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';

    protected $fillable = [
        'name',
        'slug',
    ];

    public function categories()
    {
        return $this->hasMany(CategorySub::class);
    }
    public function scopeGetCategoryBySlug($query, $slug) {
        return $query->where('slug', $slug);
    }

    public function categorySub()
    {
        return $this->categories();
    }
}
