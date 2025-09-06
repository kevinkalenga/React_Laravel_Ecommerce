<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Coupon extends Model
{
     protected $fillable = ['name', 'discount', 'valid_until'];
    
    // convert the coupon name to uppercase
    public function setNameAttribute($value)
    {
        $this->attribute['name'] = Str::upper($value);
    }
    // check if the coupon is valid or not
    public function checkIfValid()
    {
        if($this->valid_until > Carbon::now()) {
            return true;
        } else {
            return false;
        }
    }
}
