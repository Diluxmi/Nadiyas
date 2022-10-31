<?php

namespace App\Models\Women;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pant extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'size',
        'materiyal',
        'material_style',
        'price',
        'colour',
        'image',
        'actual_filename',
    ];
}
