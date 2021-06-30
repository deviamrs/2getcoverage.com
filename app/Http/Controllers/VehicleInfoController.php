<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsuranceLeads;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class VehicleInfoController extends Controller
{
    //

    public function getVehicleInfo($zipCode){
        return view('front.page.vehicleinfo')->withZipCode($zipCode);
    }
    public function storeInsuranceLead(Request $request){
        $validator = Validator::make($request->all(), [
            'car_year' => 'required',
            'vehicle_maker' => 'required',
            'vehicle_model' => 'required',
            'vehicle_trin' => 'required',
            'is_married' => 'required',
            'home_owner' => 'required',
            'birthday' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        InsuranceLeads::create($request->all());
        return redirect()->back()->with('message', 'Insurance data successfully submitted');

    }
}
