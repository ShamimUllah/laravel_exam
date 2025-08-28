<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Product extends Model
{
    protected $fillable = ['name', 'sku', 'price', 'status'];
    protected $table = 'products';

    public function categories()
    {
        return $this->belongsToMany(Categories::class, 'category_product', 'product_id', 'category_id');
    }

}
