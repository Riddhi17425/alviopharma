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
        'name',
        'url',
        'short_description',
        'description',
        'front_image',
        'meta_title',
        'meta_description'
    ];

    public function brand() {
    return $this->belongsTo(Brand::class);
}
}
