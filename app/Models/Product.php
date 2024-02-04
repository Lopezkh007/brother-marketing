<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
        'capacity',
        'type',
        'category_id',
        'brand_id',
        'short_des',
        'des',
        'additional_info',
        'image',
        'image_back',
        'galleries',
        'status',
        'is_new',
        'is_feature',
        'is_hot',
        "price",
        "discount",
        "ordering"
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }
}
