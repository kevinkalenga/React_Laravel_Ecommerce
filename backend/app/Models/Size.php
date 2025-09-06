<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = ['name'];
    
    // each size belongs to many product and each product belongs to many size
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
