<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InsureCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InsureCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
 
        return view('admin.insurecategory.index')->withEntries(InsureCategory::orderByDesc('id')->get());
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

         return view('admin.insurecategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([ 'category_name' => 'required|min:4|unique:insure_categories', ]);
                 
        $data['category_name'] = $request->category_name;
      
        $data['category_sub_head']  = $request->category_sub_head; 

        if ($request->slug != null) {
             
            $request->validate(   ['slug' => 'required|unique:insure_categories'] );
            $data['slug'] =  Str::slug($request->slug);
        }
        else{
            $data['slug'] = Str::slug($request->category_name);
        }

        if ($request->status) {  $data['status'] = $request->status;        }

        if ($request->front_status) {  $data['front_status'] = $request->front_status;        }
           
        InsureCategory::create($data);

        return redirect(route('insureCategory.index'))->withSuccess('Insurance Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InsureCategory  $insureCategory
     * @return \Illuminate\Http\Response
     */
    public function show(InsureCategory $insureCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InsureCategory  $insureCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(InsureCategory $insureCategory)
    {
        //
        return view('admin.insurecategory.create')->withInsureCategory($insureCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InsureCategory  $insureCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InsureCategory $insureCategory)
    {
        //

        $request->validate([  'category_name' => 'required|min:4' ]);

        $data['category_name'] = $request->category_name;
        

        $data['category_sub_head']  = $request->category_sub_head; 

        if ($request->slug != null) {
            
            $data['slug'] =  Str::slug($request->slug);
        }
        else{

            $data['slug'] = Str::slug($request->category_name);
        }

        if ($request->has('status')) {  $data['status'] = $request->status;  }

        if ($request->has('front_status')) {  $data['front_status'] = $request->front_status;  }
           
        $insureCategory->update($data);

        return redirect(route('insureCategory.index'))->withSuccess('Insurance Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InsureCategory  $insureCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(InsureCategory $insureCategory)
    {
        //

        if ($insureCategory->insurancetypes->count() > 0) {
            $insureCategory->insurancetypes()->delete();
        }
        
        $insureCategory->delete();

        return redirect(route('insureCategory.index'))->withSuccess('Insurance Category Updated Successfully');
    }
}
