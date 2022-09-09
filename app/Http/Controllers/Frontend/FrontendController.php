<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $data=Category::orderBy('created_at','desc')->take(5)->get();
        $products=Product::orderBy('created_at','desc')->take(5)->get();
        return view('frontend.index', compact('data','products'));
    }
    public function category(){
        $data=Category::all();
        return view('frontend.category', compact('data'));
    }
    public function category_view($slug){
        if(Category::where('slug',$slug)->exists()){

        $category=Category::where('slug',$slug)->first();
        $data=Product::where('cat_id',$category->id)->get();
        return view('frontend.category_view', compact('data','category'));
        }
    }
    public function product_view($id){
        $product=Product::where('id',$id)->first();
        return view('frontend.product_view', compact('product'));
    }
}
