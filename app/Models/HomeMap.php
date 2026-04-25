<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeMap extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'homemap';

    protected $fillable = [
        'description',
        'title',
        'image',
        'state_image',
        'cat_type',
    ];
}
