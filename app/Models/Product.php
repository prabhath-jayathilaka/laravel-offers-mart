<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, string $string1, string $string2)
 */
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'old_price',
        'quantity',
        'categories',
        'attributes',
        'primary_image',
        'images',
        'specifications',
        'shipping',
    ];
    protected $casts = [

        'categories' => 'array',
        'attributes' => 'array',
        'images' => 'array',
        'reviews' => 'array',
        'specifications' => 'array',
        'shipping' => 'array',
    ];
}
