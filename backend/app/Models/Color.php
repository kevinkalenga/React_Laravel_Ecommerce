<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = ['name'];
    
    // each product belongs to many colors and each color belongs to many product
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
