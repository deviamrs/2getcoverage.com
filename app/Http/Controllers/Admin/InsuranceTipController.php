<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InsuranceTip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InsuranceTipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         
        return view('admin.insurancetip.index')->withTips(InsuranceTip::orderByDesc('id')->get());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.insurancetip.create');
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
        $request->validate([

            'tip_name' => 'required|min:6|unique:insurance_tips',
            'image' => 'required|mimes:jpg,png,webp|max:250',
            

        ]);

        $data['tip_name'] = $request->tip_name;
      
        $image_name = time().$request->image->getClientOriginalName();
   
        $image_path = Storage::putFileAs('backend/insuranceTips', $request->image , $image_name); 
           
        $data['image'] = $image_path;
      
        $data['tip_sub_head']  = $request->tip_sub_head; 

        if ($request->slug != null) {
             
            $request->validate(   ['slug' => 'required|unique:insurance_tips']     );
            $data['slug'] =  Str::slug($request->slug);
        }
        else{
            
            $data['slug'] = Str::slug($request->tip_name);
        }

        if ($request->status) {  $data['status'] = $request->status;        }

        if ($request->front_status) {  $data['front_status'] = $request->front_status;        }
           
        InsuranceTip::create($data);

        return redirect(route('insuranceTip.index'))->withSuccess('Tip Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InsuranceTip  $insuranceTip
     * @return \Illuminate\Http\Response
     */
    public function show(InsuranceTip $insuranceTip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InsuranceTip  $insuranceTip
     * @return \Illuminate\Http\Response
     */
    public function edit(InsuranceTip $insuranceTip)
    {
        //
       
        return view('admin.insurancetip.create')->withInsuranceTip($insuranceTip);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InsuranceTip  $insuranceTip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InsuranceTip $insuranceTip)
    {
        //

        $request->validate([  'tip_name' => 'required|min:6' ]);

        $data['tip_name'] = $request->tip_name;
        
        if ($request->has('image')) {

            $request->validate(['image'=> 'required|mimes:jpg,png,webp|max:250']);
             
            $image_name = time().$request->image->getClientOriginalName();
   
            $image_path = Storage::putFileAs('backend/insuranceTips', $request->image , $image_name); 
               
            $data['image'] = $image_path;

        }

        $data['tip_sub_head']  = $request->tip_sub_head; 

        if ($request->slug != null) {
            
            $data['slug'] =  Str::slug($request->slug);
        }
        else{

            $data['slug'] = Str::slug($request->tip_name);
        }

        if ($request->has('status')) {  $data['status'] = $request->status;        }

        if ($request->has('front_status')) {  $data['front_status'] = $request->front_status;        }
           
        $insuranceTip->update($data);

        return redirect(route('insuranceTip.index'))->withSuccess('Tip Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InsuranceTip  $insuranceTip
     * @return \Illuminate\Http\Response
     */
    public function destroy(InsuranceTip $insuranceTip)
    {
        //
        if ($insuranceTip->tipsections->count() > 0) {
             $insuranceTip->tipsections()->delete();
     
             try {
                if (Storage::exists($insuranceTip->image)) {
                    Storage::delete($insuranceTip->image);
                }
    
           } catch (\Throwable $th) {        }

             $insuranceTip->delete();
        }
        else{
            try {
                if (Storage::exists($insuranceTip->image)) {
                    Storage::delete($insuranceTip->image);
                }
    
           } catch (\Throwable $th) {        }
            $insuranceTip->delete();
        }

        return redirect(route('insuranceTip.index'))->withSuccess('Tip Deleted Successfully');

    }
}
