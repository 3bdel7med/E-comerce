<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Product::all();
        $category=Category::all();
        return view('admin.products.index', compact('data','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
       return view('admin.products.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     /*   $this->validate($request,[
            'cat_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'small_description' => 'required',
            'original_price' => 'required',
            'selling_price' => 'required',
            'image' => 'required',
            'qty' => 'required',
            'tax' => 'required',
            'status' => 'required',
            'trending' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',


        ]);*/

        $featured = $request->image;
        $featured_new_name =time().$featured->getClientOriginalName();
        $featured->move('images/products',$featured_new_name);


        $product=Product::create([
            'cat_id'=>$request->cat_id,
            'name'=>$request->name,
            'small_description'=>$request->small_description,
            'description'=>$request->description,
            'original_price'=>$request->original_price,
            'selling_price'=>$request->selling_price,
            'tax'=>$request->tax,
            'qty'=>$request->qty,
            'status'=>$request->status ==TRUE ? '1':'0',
           'trending'=>$request->trending,
           'meta_title'=>$request->meta_title,
            'meta_description'=>$request->imeta_description,
           'meta_keywords'=>$request->meta_keywords,

           'image'=>'images/products'.$featured_new_name



        ]);
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $product=Product::find($id);
    $product->delete();
    }
}
