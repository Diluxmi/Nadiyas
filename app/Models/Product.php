<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'department',
        'category',
        'brand',
        'size',
        'collar',
        'sleeve',
        'material',
        'type',
        'price',
        'colour',
        'image',
        'actual_filename',
    ];
}
