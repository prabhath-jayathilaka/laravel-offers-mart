<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'categories',
        'attributes',
        'primary_image',
        'images',
        'reviews',
    ];
    protected $casts = [

        'categories' => 'array',
        'attributes' => 'array',
        'images' => 'array',
        'reviews' => 'array',
    ];
}
