<?php

namespace App\Models;

use Darryldecode\Cart\CartCollection;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatabaseStorageModel extends Model
{
    use HasFactory;
    protected $table = 'wishlist';
    
    protected $fillable = [
        'wishlist_data',
    ];
    
    
    /**
     * Mutator for wishlist_column
     * @param $value
     */
    public function setWishlistDataAttribute($value)
    {
        $this->attributes['wishlist_data'] = serialize($value);
    }
}
