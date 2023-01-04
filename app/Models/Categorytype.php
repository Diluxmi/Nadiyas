<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorytype extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'department_id',
    ];


    public function product(){
        return $this->hasMany(Product::class,'product_id');

    }

    public function department(){
        return $this->belongsTo(Department::class,'department_id');
    }
}
