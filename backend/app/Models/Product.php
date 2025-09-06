<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'qty', 'price',
     'desc', 'thumbnail', 'first_image', 'second_image', 'third_image', 'status'];
    
    
    // relationship(many)
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }
    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
    // each product will have one or more reviews
    public function reviews()
    {
        return $this->hasMany(Review::class)->with('user')->where('approved', 1)->latest();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
