<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
    ];

    public function product(){
        return $this->hasMany(Product::class,'product_id');
    }

    public function categorytype(){
        return $this->hasMany(Categorytype::class,'categorytype_id');
    }

    public function category(){
        return $this->hasMany(Category::class,'category_id');
    }
}
