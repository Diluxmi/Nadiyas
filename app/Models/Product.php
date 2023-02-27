<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'brand',
        'size',
        'colour',
        'description',
        'sleeve',
        'material',
        'material_style',
        'type',
        'price',
        'colour',
        'department_id',
        'categorytype_id',
        'category_id',
        'image',
        'actual_filename',
        'extension',
    ];

    public $sortable = ['id', 'name', 'details', 'created_at', 'updated_at'];

    public function department(){
        return $this->belongsTo(Department::class,'department_id');
    }

    public function categorytype(){
        return $this->belongsTo(Categorytype::class,'categorytype_id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function photo(){
        return $this->hasMany(Photo::class,'product_id');
    }
    public function size(){
        return $this->hasMany(Size::class,'product_id');
    }
   

    public function orderitem(){
        return $this->hasMany(Orderitem::class,'order_id');
    }

    public function stock(){
        return $this->hasMany(Stock::class,'product_id');
    }
}
