<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InsuranceLeads;
use Illuminate\Http\Request;

class InsuranceLeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lead = InsuranceLeads::latest()->get();
        return view('admin.insuranceleads.index',compact('lead'));
    }
    public function show($id)
    {
        $l=InsuranceLeads::find($id);
        return view('admin.insuranceleads.show',compact('l'));
    }

    
}
