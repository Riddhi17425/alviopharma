<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OurProduction extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'ourproduction';

    protected $fillable = [
        'description',
        'title',
        'cat_type',
        'image',
    ];
}
