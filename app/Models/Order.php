<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable =[
        'item_count',
        'total_price',
        'delivery_date',
        'status',
        'is_paid',
        'payment_method',
        'customer_id',


    ];
    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function orderitem(){
        return $this->hasMany(Orderitem::class,'orderitem_id');
    }
}
