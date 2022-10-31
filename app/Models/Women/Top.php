<?php

namespace App\Models\Women;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Top extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'size',
        'material_style',
        'material',
        'price',
        'colour',
        'image',
        'actual_filename',
    ];
}
