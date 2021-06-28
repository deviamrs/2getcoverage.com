<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.company.index')->withEntries(Company::orderByDesc('id')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.company.create');
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

            'name' => 'required|min:6|max:25',
            'front_details' => 'required|min:3|max:300',
            'image' => 'required|mimes:jpg,png,webp|max:250',
            'status' => 'required',
            'front_status' => 'required'

        ]);

        $data['name'] = $request->name;
        $data['slug'] = Str::slug($data['name']);
        $data['front_details'] = $request->front_details;
        $data['status']  = $request->status;
        $data['front_status'] = $request->front_status;   

        $image_name = time().$request->image->getClientOriginalName();
   
        $image_path = Storage::putFileAs('backend/companyImages', $request->image , $image_name); 
           
        $data['image'] = $image_path;
    
        Company::create($data);

        return redirect(route('company.index'))->withSuccess('Company Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {


        //

        return view('admin.company.create')->withCompany($company);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //

        $request->validate([

            'name' => 'required|min:6|max:25',
            'front_details' => 'required|min:3|max:300',
            'status' => 'required',
            'front_status' => 'required'
      
        ]);


        $data['name'] = $request->name;
        $data['slug'] = Str::slug($data['name']);
        $data['front_details'] = $request->front_details;
        $data['status']  = $request->status;
        $data['front_status'] = $request->front_status;  

        
        if ($request->has('image')) {

            $request->validate(['image' => 'required|mimes:jpg,png,webp|max:250'])   ;

            $image_name = time().$request->image->getClientOriginalName();
   
            $image_path = Storage::putFileAs('backend/companyImages', $request->image , $image_name); 
          
            $data['image'] = $image_path;

            try {
                 if (Storage::exists($company->image)) {
                     Storage::delete($company->image);
                 }

            } catch (\Throwable $th) {        }
              
            
        }

     
        $company->update($data);

        return redirect(route('company.index'))->withSuccess('Company Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //   
        try {
            if (Storage::exists($company->image)) {
                Storage::delete($company->image);
            }

       } catch (\Throwable $th) {        }

       if ($company->carddetails->count() > 0) {
           $company->carddetails()->delete();
       }
       if ($company->companysections->count() > 0) {
           $company->companysections()->delete();
       }
      
       $company->delete();

       return redirect(route('company.index'))->withSuccess('Company Removed Successfully');
    }
}
