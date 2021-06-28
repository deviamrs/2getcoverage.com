<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InsuranceTip;
use App\Models\TipContent;
use Illuminate\Http\Request;

class TipContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(InsuranceTip $insuranceTip)
    {
        

        return view('admin.tipcontent.index')->withTipContents(TipContent::whereInsuranceTipId($insuranceTip->id)->get())->withInsuranceTip($insuranceTip);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(InsuranceTip $insuranceTip)
    {
        //
        return view('admin.tipcontent.create')->withInsuranceTip($insuranceTip);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsuranceTip $insuranceTip, Request $request)
    {
        //
         
        $request->validate([    'tip_content' => 'required' , 'status' => 'required'  ]);

        TipContent::create([
            'insurance_tip_id' => $insuranceTip->id,
            'tip_content' => $request->tip_content,
            'status' =>  $request->status,
        ]);
        
        return redirect(route('insuranceTip.index'))->withSuccess('Section Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipContent  $tipContent
     * @return \Illuminate\Http\Response
     */
    public function show(TipContent $tipContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipContent  $tipContent
     * @return \Illuminate\Http\Response
     */
    public function edit(InsuranceTip $insuranceTip, TipContent $tipContent)
    {
        //
        return view('admin.tipcontent.create')->withInsuranceTip($insuranceTip)->withTipContent($tipContent);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipContent  $tipContent
     * @return \Illuminate\Http\Response
     */
    public function update(InsuranceTip $insuranceTip, Request $request, TipContent $tipContent)
    {
        //
        $request->validate([    'tip_content' => 'required' , 'status' => 'required'  ]);

        $tipContent->update([
            'tip_content' => $request->tip_content,
            'status' =>  $request->status,
        ]);
        
        return redirect(route('tipContent.index' , $insuranceTip->id))->withSuccess('Section Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipContent  $tipContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(InsuranceTip $insuranceTip, TipContent $tipContent)
    {
        //

        $tipContent->delete();

        return redirect(route('tipContent.index' , $insuranceTip->id))->withSuccess('Section Deleted Successfully');
    }
}
