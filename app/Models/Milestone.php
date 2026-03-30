<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class milestone extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'milestone';

    protected $fillable = [
        'title',
        'short_description',
        'description',
        
        'year',
    ];
}
