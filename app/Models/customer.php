<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 


class customer extends Model
{
    use HasFactory;
    protected $fillable= [
        'title',
        'name',
        'address',
        'phonenumber',
        'image',
        'actual_filename',
        'extension',

    ];

    public function user(){
      return $this->hasOne(User::class,'customer_id'); 
    }

    public function order(){
      return $this->hasMany(Order::class,'order_id'); 
    }

    
}
