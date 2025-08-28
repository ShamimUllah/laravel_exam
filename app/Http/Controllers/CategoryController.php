<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    
    public function index(){
        $categories = Categories::where('status',true)->get();
        return view('categories.index', compact('categories'));
    }
}
