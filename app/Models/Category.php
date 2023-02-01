<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'department_id',
        'categorytype_id',
        'subcategory',
    ];

   
    public function setSubCategoryAttribute($value){
        $this->attributes['subcategory'] = json_encode($value);
    }

    public function getSubCategoryAttribute($value){
        return $this->attributes['subcategory'] =json_decode($value);
    }
    
    public function product(){
        return $this->hasMany(Product::class,'product_id');

    }

    public function department(){
        return $this->belongsTo(Department::class,'department_id');
    }
    public function categorytype(){
        return $this->belongsTo(Categorytype::class,'categorytype_id');
    }
}
