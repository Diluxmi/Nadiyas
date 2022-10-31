<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Men extends Model
{
    use HasFactory;
    protected $fillable=[
        'category',
        'size',
        'brand',
        'material',
        'colour',
        'price',
        'image',
        'actual_filename',
    ]
}
