<?php

namespace App\Http\Controllers;

use App\Models\InsuranceType;
use App\Models\InsureCategory;
use Illuminate\Http\Request;

class FrontControllerTwo extends Controller
{
    //

    public function singleinsuranceType(InsureCategory $insureCategory , InsuranceType $insuranceType){
   
        return view('front.page.insuranceType')->withPageData(InsuranceType::whereInsureCategoryId($insureCategory->id)->whereSlug($insuranceType->slug)->first());  

    }
}
