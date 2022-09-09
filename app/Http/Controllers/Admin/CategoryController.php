<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Category::all();
        return view('admin.categories.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $featured = $request->image;
        $featured_new_name =time().$featured->getClientOriginalName();
        $featured->move('images/category',$featured_new_name);



        $category = Category::create([
            "name"    => $request->name,
            "slug"  => $request->slug,
            "description"  => $request->description,
            "image" => 'images/category'.$featured_new_name,
            "popular"    => $request->popular  ==TRUE ? '1':'0',
            "status"    => $request->status ==TRUE ? '1':'0',
            "meta_title"  => $request->meta_title,
            "meta_descrip"  => $request->meta_descrip,
            "meta_keywords"  => $request->meta_keywords,
        ]);
       return redirect()->back()->with('status', 'category created succfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category=Category::find($id);
        return view('admin.categories.edit', compact('category'));
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
        $category=Category::find($id);


        if ( $request->hasFile('image')  ) {
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('images/category/',$image_new_name);
            $category->image ='images/category/'.$image_new_name;

        }
        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->description=$request->description;
        $category->status=$request->status ==TRUE ? '1':'0';
        $category->popular=$request->popular ==TRUE ? '1':'0';
        $category->meta_title=$request->meta_title;

        $category->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
    }
}
