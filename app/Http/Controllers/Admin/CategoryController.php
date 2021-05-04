<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       return view('admin.category.index')->withCategories(Category::orderBy('id' , 'desc')->get());


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  

        return view('admin.category.create');


        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
            $request->validate([ 'name' => 'required|unique:categories|max:50' ]);  

            Category::create([ 'name' => $request->name , 'slug'  => Str::slug($request->name , '-')  ]);
              
            return redirect()->route('category.index')->with('success' , 'Category Added Successfully');
    
        
       

      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
          return view('admin.category.create')->withCategory($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([ 'name' => 'required|unique:categories|max:50' ]);  
        
        $category->update([ 'name' => $request->name , 'supercategory_id' => $request->supercategory_id , 'slug'  => Str::slug($request->name , '-')  ]);
          
        return redirect()->route('category.index')->with('success' , 'category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $postcount = $category->posts()->count();
        
        if ( $postcount <= 0) {
            $category->delete();
        } else {
           return redirect()->back()->with('warning' , 'This category is affiliated with '.$postcount .' posts , so this can not be deleted');
        } 
    }
}
