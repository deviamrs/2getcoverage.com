<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsuranceLeads;
use Facade\FlareClient\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Response;
use DB;
use GuzzleHttp\Psr7\Response as Psr7Response;

class VehicleInfoController extends Controller
{
    //

    public function getVehicleInfo($zipCode){
        return view('front.page.vehicleinfo')->withZipCode($zipCode);
    }
    public function storeInsuranceLead(Request $request){
        // dd($request->all());
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
    public function VehicleInfoMaker(request $request){

        $validator = Validator::make($request->all(), [
            'car_year' => 'required',
            'vehicle_maker' => 'required'


        ]);
        if ($validator->fails()) {
            return Response::Json('required all data');
        }
        $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://ratingqa.itcdataservices.com/Webservices/imp/api/vehicles/".$request->car_year.'/'.$request->vehicle_maker,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: Basic MzAzNGIzZjAtNDQ5OC00MjdmLWE0YmMtMzE2NTZmNTVjMjI0OjMwMzRiM2YwLTQ0OTgtNDI3Zi1hNGJjLTMxNjU2ZjU1YzIyNA==",
                "cache-control: no-cache",
                "postman-token: 5ee6358a-fa87-5801-2522-dd1bd9aa237a"
            ),
            ));

            $data1 = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                 echo "cURL Error #:" . $err;
            } else {
                return json_decode($data1,true);
            }
           

    }
    public function VehicleInfoYear(request $request){
        
        $validator = Validator::make($request->all(), [
            'car_year' => 'required'
        ]);
        if ($validator->fails()) {
            return Response::Json('required all data');
        }

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://ratingqa.itcdataservices.com/Webservices/imp/api/vehicles/".$request->car_year,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: Basic MzAzNGIzZjAtNDQ5OC00MjdmLWE0YmMtMzE2NTZmNTVjMjI0OjMwMzRiM2YwLTQ0OTgtNDI3Zi1hNGJjLTMxNjU2ZjU1YzIyNA==",
                "cache-control: no-cache",
                "postman-token: 5ee6358a-fa87-5801-2522-dd1bd9aa237a"
            ),
            ));

            $data1 = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
            echo "cURL Error #:" . $err;
            } else {
            
            return json_decode($data1,true);
            }
            // $data1 = InsuranceLeads::where('car_year','=',$request->car_year)->get('vehicle_maker');
    }
    public function VehicleInfoOther(request $request){

        $validator = Validator::make($request->all(), [

            'vehicle_maker_other'=>'required'


        ]);
        if ($validator->fails()) {
            return Response::Json('required all data');
        }

            $data = InsuranceLeads::where('vehicle_maker_other','=',$request->vehicle_maker_other)->get('vehicle_model');
            return Response::Json($data);

    }
    public function VehicleInfoModel(request $request){

        $validator = Validator::make($request->all(), [

            'vehicle_model'=>'required'


        ]);
        if ($validator->fails()) {
            return Response::Json('required all data');
        }

            $data = InsuranceLeads::where('vehicle_model','=',$request->vehicle_model)->get('vehicle_trin');
            return Response::Json($data);

    }
    public function VehicleInfoInsurance(request $request){
        
        $validator = Validator::make($request->all(), [
            
            'current_insurance'=>'required'
            
            
        ]);
        if ($validator->fails()) {
            return Response::Json('required all data');
        }
        
        $data = InsuranceLeads::where('current_insurance','=',$request->current_insurance)->get('insurance_duration');
        return Response::Json($data);
        
    }

    public function VehicleInfoTrin(request $request){
         $validator = Validator::make($request->all(), [
            'year'=>'required',
            'brand'=>'required',
            'model'=>'required'
        ]);
        if ($validator->fails()) {
            return Response::Json('required all data');
        }
    //    dd("https://ratingqa.itcdataservices.com/Webservices/imp/api/vehicles/".$request->year."/".$request->brand."/".$request->model);
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://ratingqa.itcdataservices.com/Webservices/imp/api/vehicles/".$request->year."/".$request->brand."/".str_replace(' ','%20',$request->model),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "authorization: Basic MzAzNGIzZjAtNDQ5OC00MjdmLWE0YmMtMzE2NTZmNTVjMjI0OjMwMzRiM2YwLTQ0OTgtNDI3Zi1hNGJjLTMxNjU2ZjU1YzIyNA==",
            "cache-control: no-cache",
            "postman-token: 1ae57ad0-e787-d2f9-8af2-2697780ba45f"
        ),
        ));

        $data1 = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        return json_decode($data1,true);
        }
            // $data = InsuranceLeads::where('vehicle_trin','=',$request->vehicle_trin)->get('current_insurance');
            // return Response::Json($data);
    
    }
}
