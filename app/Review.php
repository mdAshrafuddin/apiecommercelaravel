<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'star','customer','review'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
