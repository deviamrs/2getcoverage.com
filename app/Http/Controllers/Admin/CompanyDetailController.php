<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyDetailCard;
use Illuminate\Http\Request;

class CompanyDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Company $company)
    {
        //
        return view('admin.companydetailcard.index')->withEntries(CompanyDetailCard::whereCompanyId($company->id)->get())->withCompany($company);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Company $company)
    {
        //
        return view('admin.companydetailcard.create')->withCompany($company);
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
        $request->validate([
            'heading' => 'required|min:10',
            'card_content' => 'required',
            'status' => 'required',
            'card_width' => 'required', 
        ]);

        CompanyDetailCard::create([
           
            'company_id' => $company->id,
            'heading' => $request->heading,
            'card_content' => $request->card_content,
            'status' => $request->status,
            'card_width' => $request->card_width,

        ]);
        
        return redirect(route('companyDetailCard.index' , $company->id))->withSuccess('Faq Added Successfully To '. $company->name); 


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyDetailCard  $companyDetailCard
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company, CompanyDetailCard $companyDetailCard)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyDetailCard  $companyDetailCard
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company, CompanyDetailCard $companyDetailCard)
    {
        //
        return view('admin.companydetailcard.create')->withCompany($company)->withCompanyDetailCard($companyDetailCard);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanyDetailCard  $companyDetailCard
     * @return \Illuminate\Http\Response
     */
    public function update(Company $company, Request $request, CompanyDetailCard $companyDetailCard)
    {
        //

        $request->validate([
            'heading' => 'required|min:10',
            'card_content' => 'required',
            'status' => 'required',
            'card_width' => 'required', 
        ]);

        $companyDetailCard->update([
           
            'heading' => $request->heading,
            'card_content' => $request->card_content,
            'status' => $request->status,
            'card_width' => $request->card_width,

        ]);
        
        return redirect(route('companyDetailCard.index' , $company->id))->withSuccess('Faq Added Successfully To '. $company->name); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyDetailCard  $companyDetailCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company, CompanyDetailCard $companyDetailCard)
    {
        //

        $companyDetailCard->delete();

        return redirect(route('companyDetailCard.index' , $company->id))->withSuccess('Faq Added Successfully To '. $company->name); 
    }
}
