<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
class ShopController extends Controller
{
    public function index(){
        $category=Category::all();
        $product=Product::all();
return view('frontend.shop', compact('category','product'))->withCount('reviews')
;;
    }

}
