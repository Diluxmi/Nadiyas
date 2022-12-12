<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderitem extends Model
{
    use HasFactory;
    protected $fillable =[
        'price',
        'quantity',
        'product_id',
        'order_id',

        ];

        public function product(){
            return $this->belongsTo(Product::class,'product_id');
        }

        public function order(){
            return $this->belongsTo(Order::class,'order_id');
        }
}
