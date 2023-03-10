<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected  $fillable =[
       'title',
       'name',
       'designation',
       'joiningdate',
       'location',
       'phonenumber',

    ];

  

      public function user(){
        
        return $this->hasOne(User::class,'employee_id');
    }
}
