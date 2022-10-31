<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Women extends Model
{
    use HasFactory;
    protected $fillable =[
        'category',
        'size',
        'style',
        'material',
        'materialstyle',
        'colour',
        'price',
        'image',
        'actual_filename',
        
    ];
}
