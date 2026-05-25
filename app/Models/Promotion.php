<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    protected static function booted()
    {
        static::deleting(function ($promotion) {

            if ($promotion->image_path) {
                Storage::disk('public')->delete($promotion->image_path);
            }

        });
    }
}
