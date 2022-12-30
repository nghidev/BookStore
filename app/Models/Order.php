<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // use HasFactory;
    protected $fillable = [
        'id', 
        'users_id', 
        'code', 
        'total', 
        'consignee_name',
        'consignee_phone' ,
        'consignee_address', 
        'status', 
        'payment_method', 
        'note'
    ];
    public function detail(){
        return $this->hasMany(OrderDetail::class);
    }
}
