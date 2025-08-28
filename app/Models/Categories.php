<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Coupon;

class Categories extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'status'];

    public function coupons()
    {
        return $this->belongsToMany(Coupon::class, 'category_coupon', 'category_id', 'coupon_id');
    }

}