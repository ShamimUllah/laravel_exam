<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'total_amount',
        'discount_amount',
        'final_amount',
        'status',
    ];
    
}
