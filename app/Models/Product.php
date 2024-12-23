<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'sku',
        'description',
        'sizes',
        'cover_image',
        'thumb_images',
    ];

    protected $casts = [
        'sizes' => 'array', // Cast the sizes field as an array
        'thumb_images' => 'array', // Cast the thumb_images field as an array
    ];
}

