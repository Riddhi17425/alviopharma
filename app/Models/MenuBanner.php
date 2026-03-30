<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuBanner extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'menubanner';

    protected $fillable = [
        'url',
        'description',
        'title',
        'image',
    ];
}
