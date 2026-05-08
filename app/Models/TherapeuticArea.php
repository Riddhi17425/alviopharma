<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TherapeuticArea extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'therapeutic_areas';

    protected $fillable = [
        'category_id',
        'title',
        'sub_title',
        'sort_description',
        'approach_description',
        'button_text',
        'status',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
