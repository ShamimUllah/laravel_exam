<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Coupon extends Model
{
    protected $fillable = ['code', 'discount', 'start_date', 'end_date', 'status'];
    protected $table = 'coupons';

    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'category_coupon', 'coupon_id', 'category_id');
    }
}
