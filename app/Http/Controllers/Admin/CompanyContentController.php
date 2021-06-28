<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyContent;
use Illuminate\Http\Request;

class CompanyContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Company $company)
    {
        //
        return view('admin.companycontent.index')->withEntries(CompanyContent::whereCompanyId($company->id)->get())->withCompany($company);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Company $company)
    {  
        //
        return view('admin.companycontent.create')->withCompany($company);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Company $company,Request $request)
    {
        //

        $request->validate([    'company_content' => 'required' , 'status' => 'required'  ]);

        CompanyContent::create([
            'company_id' => $company->id,
            'company_content' => $request->company_content,
            'status' =>  $request->status,
        ]);

        return redirect(route('companyContent.index' , $company->id))->withSuccess('Content Added Successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyContent  $companyContent
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyContent $companyContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyContent  $companyContent
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company,CompanyContent $companyContent)
    {
        //
        return view('admin.companycontent.create')->withCompany($company)->withCompanyContent($companyContent);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanyContent  $companyContent
     * @return \Illuminate\Http\Response
     */
    public function update(Company $company,Request $request, CompanyContent $companyContent)
    {
        //

        $request->validate([    'company_content' => 'required' , 'status' => 'required'  ]);

        $companyContent->update([
            'company_content' => $request->company_content,
            'status' =>  $request->status,
        ]);

        return redirect(route('companyContent.index' , $company->id))->withSuccess('Content Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyContent  $companyContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company,CompanyContent $companyContent)
    {
        //
        $companyContent->delete();

        return redirect(route('companyContent.index' , $company->id))->withSuccess('Content Removed Successfully');
    }
}
