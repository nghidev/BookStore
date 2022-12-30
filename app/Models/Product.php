<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;
    protected $fillable = [
        'id', 
        'code', 
        'name', 
        'description', 
        'detail',
        'author' ,
        'real_price', 
        'sale_price', 
        'feature_image', 
        'inventory_number'
    ];
    public function cat(){
        return $this->belongsTo(Cat::class);
    }
}
