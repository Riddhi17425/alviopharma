<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product';

    protected $fillable = [
        'brand_id',
        'category_url',
        "divisions_url",
        'name',
        'url',
        'short_description',
        'key_ingredients',
        'top_sellers',
        'status',
        'description',
        'front_image',
        'detail_images',
        'meta_title',
        'meta_description'
    ];

    public function brand() {
        return $this->belongsTo(Brand::class , 'brand_id' , 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_url', 'url');
    }
    public function divisions(){
        return $this->belongsTo(Divisions::class, 'divisions_url' , 'url');
    }
    public function keyIngredients()
    {
        $ids = json_decode($this->key_ingredients, true) ?? [];

        return KeyIngredient::whereIn('id', $ids);
    }
}
