<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InsuranceType;
use App\Models\InsureCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InsuranceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(InsureCategory $insureCategory)
    {
        //
        return view('admin.insurancetype.index')->withEntries(InsuranceType::whereInsureCategoryId($insureCategory->id)->get())->withInsureCategory($insureCategory);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(InsureCategory $insureCategory)
    {
        //
        return view('admin.insurancetype.create')->withInsureCategory($insureCategory);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsureCategory $insureCategory,Request $request)
    {
        //

        $request->validate([ 'name' => 'required|min:4', ]);
         
        $data['insure_category_id'] = $insureCategory->id;
        
        $data['name'] = $request->name;
      
        $data['sub_heading']  = $request->sub_heading; 

        if ($request->slug != null) {
             
            $request->validate(   ['slug' => 'required'] );
            $data['slug'] =  Str::slug($request->slug);
        }
        else{
            $data['slug'] = Str::slug($request->name);
        }

        if ($request->status) {  $data['status'] = $request->status;        }

        if ($request->insurance_content) {  $data['insurance_content'] = $request->insurance_content;        }

       
           
        InsuranceType::create($data);

        return redirect(route('insuranceType.index' , $insureCategory->id))->withSuccess('Insurance Type Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InsuranceType  $insuranceType
     * @return \Illuminate\Http\Response
     */
    public function show(InsuranceType $insuranceType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InsuranceType  $insuranceType
     * @return \Illuminate\Http\Response
     */
    public function edit(InsureCategory $insureCategory,InsuranceType $insuranceType)
    {
        //
        return view('admin.insurancetype.create')->withInsureCategory($insureCategory)->withInsuranceType($insuranceType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InsuranceType  $insuranceType
     * @return \Illuminate\Http\Response
     */
    public function update(InsureCategory $insureCategory, Request $request, InsuranceType $insuranceType)
    {
        //

        $request->validate([ 'name' => 'required|min:4', ]);
         
        $data['name'] = $request->name;
      
        $data['sub_heading']  = $request->sub_heading; 

        if ($request->slug != null) {
             
            $request->validate(   ['slug' => 'required'] );
            $data['slug'] =  Str::slug($request->slug);
        }
        else{
            $data['slug'] = Str::slug($request->name);
        }

        if ($request->status) {  $data['status'] = $request->status;        }

        if ($request->insurance_content) {  $data['insurance_content'] = $request->insurance_content;        }

       
           
        $insuranceType->update($data);

        return redirect(route('insuranceType.index' , $insureCategory->id))->withSuccess('Insurance Type Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InsuranceType  $insuranceType
     * @return \Illuminate\Http\Response
     */
    public function destroy(InsureCategory $insureCategory,InsuranceType $insuranceType)
    {
        //
        $insuranceType->delete();
        
        return redirect(route('insuranceType.index' , $insureCategory->id))->withSuccess('Insurance Type Deleted Successfully');
    }
}
