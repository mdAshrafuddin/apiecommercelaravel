<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
