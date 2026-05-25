<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = [
        'title',
        'image_path',
        'description',
        'slug',
        'is_active',
        'start_date',
        'end_date',
        'sort_order',
    ];
}
