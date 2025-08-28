<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::with('categories')
            ->where('status', true)
            ->where('start_date', '>', now())
            ->where('end_date', '<', now())
            ->get();
        return view('coupons.index');
    }

    
}
