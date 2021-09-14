<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'thumbnail',
        'category',
        'category2',
        'badge',
        'price',
        'sku',
        'tags',
        'description',
    ];
}
