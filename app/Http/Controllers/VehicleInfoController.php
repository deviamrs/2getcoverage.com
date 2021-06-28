<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleInfoController extends Controller
{
    //

    public function getVehicleInfo($zipCode){

        return view('front.page.vehicleinfo')->withZipCode($zipCode);


    }
}
