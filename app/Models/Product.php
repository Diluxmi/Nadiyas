<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'brand',
        'size',
        'colour',
        'sleeve',
        'material',
        'material_style',
        'type',
        'price',
        'colour',
        'department_id',
        'category_id',
        'image',
        'actual_filename',
        'extension',
    ];

    public function department(){
        return $this->belongsTo(Department::class,'department_id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function orderitem(){
        return $this->hasMany(Orderitem::class,'order_id');
    }
}
