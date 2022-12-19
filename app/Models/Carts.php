<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'id', 
        'name',
        'price',
        'qty',
        'user_id',
    ]; 
}
