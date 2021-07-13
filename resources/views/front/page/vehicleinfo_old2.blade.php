@extends('layouts.front')

@section('page_title')
    {{ $zipCode .' Get Vehicle Info' }}
@endsection

@section('front_content')

<div id="get-vehicleinfo">

   <div class="vehicle-info-container">

       <div class="progress-container">
            <div class="progress-count-wrap">
               <div class="progress-count">Car</div>
               <div class="progress-count">Drivers</div>
               <div class="progress-count">Insurance</div>
               <div class="progress-count">Qoutes</div>
            </div>
            <div class="progress-bar">
                <span class="progress-percent"></span>
            </div>


       </div>

       <a href="javascript:void(0)" title="go to prev question" class="d-block text-secondary mb-2 mt-2"><i class="fas fa-arrow-left"></i>  Previous Question </a>
       @if(session()->has('message'))
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       <script>
               swal("Good job!","{{ session()->get('message') }}", "success");
         </script>
            @endif

         @if ($errors->any())
         <div class="alert alert-danger">
            <ul style="color: red;
            font-size: 14px;">
               @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
         @endif
       <form method="POST" action="{{ route('front.storeInsuranceLead') }}" id="vehicle-info-global-form">
         @csrf

       <div class="info-component component">
         <h2 class="info-head text-center"  id="form-heading"> Let's get started with your car information</h2>
         <div class="model-detail-box">
            <div class="vehicle-m text-white bg-primary " id="model-year"><span class="v-m-m-m" class="">2022</span><span class="v-del"><i class="far fa-times-circle"></i></span></div>
            <div class="vehicle-m text-white bg-primary" id="model-company"><span class="v-m-m-m" class="">Acura</span><span class="v-del"><i class="far fa-times-circle"></i></span></div>
            <div class="vehicle-m text-white bg-primary" id="model-name"><span class="v-m-m-m" class="">MDX</span><span class="v-del"><i class="far fa-times-circle"></i></span></div>
            <div class="vehicle-m text-white bg-primary" id="model-trim"><span class="v-m-m-m" class="">BASE MODEL</span><span class="v-del"><i class="far fa-times-circle"></i></span></div>
         </div>

         <div class="info-input-inline">
            <label for="" class="info-label">Select Car Year</label>
            <div class="info-select-box">
                <select name="car_year"  id="car-year" class="select-box">
                    @for ($i = date('Y'); $i > 1981; --$i)
                    <option value="{{ $i - 1 }}">{{ $i - 1 }}</option>
                    @endfor
                </select>
            </div>
         </div>

       </div>


       {{-- info compoment 2 --}}

       <div class="info-component component">



         <div class="info-input-inline">
            <label for="vehicle-maker" class="info-label">Select Your Vehicle Make</label>
            <div class="info-select-box">
                <select name="vehicle_maker"  id="vehicle-maker" class="select-box">

                    <option value="Cheverolet">Cheverolet</option>
                    <option value="Dodge">Dodge</option>
                    <option value="Dodge">Dodge</option>
                    <option value="Ford">Ford</option>

                </select>
            </div>
         </div>

         <div class="input-type-select">
            <select name="vehicle_maker_other" id="" class="global-select-box">
               <option value="other" selected>Other Make</option>
               <option value="Toyoto" >Toyoto</option>
            </select>
         </div>

       </div>



       <div class="info-component component">
         <div class="info-input-inline">
            <label for="" class="info-label">Select Your Vehicle Model</label>

            <div class="info-select-box">
               <select name="vehicle_maker_other" id="" class="select-box">
                  <option value="MDX" selected>MDX</option>
                  <option value="NSX" >NSX</option>
               </select>
            </div>

         </div>

       </div>


 <div class="info-component component">
    <div class="info-input-inline">
       <label for="" class="info-label">Select Your Vehicle Trim</label>

       <div class="info-select-box">
          <select name="vehicle_maker_other" id="" class="select-box">
             <option value="Base Model" selected>Base Model</option>
             <option value="Touring" >Touring</option>
          </select>
       </div>

    </div>

  </div>


       <div class="info-component component">

         <div class="info-input-inline">
            <label for="" class="info-label">Do you own or lease this car?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="park_at_home" value="own"><label class="">Own</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="park_at_home" value="lease" checked><label class="">Lease</label>
            </div>
         </div>

       </div>




       <div class="info-component component">

        <div class="info-input-inline">
           <label for="" class="info-label">How many years have you had this car?</label>

           <div class="info-input-box">
              <input class="info-input" type="radio" name="recieve_renter_qoute" value="<1"><label class="">&#60; 1</label>
           </div>
           <div class="info-input-box">
              <input class="info-input" type="radio" name="recieve_renter_qoute" value="1"><label class="">1</label>
           </div>
        </div>
      </div>

      <div class="info-component component">

         <h2 class="info-head text-left" > Let's get started with your car information</h2>

         <div class="info-input-inline">
            <label for="" class="info-label">What is this car's primary use?</label>

            <div class="info-input-box">

               <input class="info-input" type="radio" name="recieve_renter_qoute" value="commuting">
                  <label class="">
                     <div class="icon">
                        <i class="fas fa-map-marked-alt"></i>
                     </div> Commuting
                  </label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="recieve_renter_qoute" value="Personal">
               <label class="">
                  <div class="icon">
                     <i class="fas fa-car"></i>
                  </div> Personal
               </label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="recieve_renter_qoute" value="Personal">
               <label class="">
                  <div class="icon">
                     <i class="fas fa-car-side"></i>
                  </div> Business
               </label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="recieve_renter_qoute" value="Personal">
               <label class="">
                  <div class="icon">
                     <i class="fas fa-truck-pickup"></i>
                  </div> Farming
               </label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="recieve_renter_qoute" value="Personal">
               <label class="">
                  <div class="icon">
                     <i class="fas fa-map-signs"></i>
                  </div> Others
               </label>
            </div>
         </div>
       </div>

       <div class="info-component component">

         <div class="info-input-inline">
            <label for="" class="info-label">About how many miles each way?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="recieve_renter_qoute" value="<5"><label class="">&#60; 5</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="recieve_renter_qoute" value="5"><label class="">5</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="recieve_renter_qoute" value="10"><label class="">10</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="recieve_renter_qoute" value="15"><label class="">15</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="recieve_renter_qoute" value="20"><label class="">20</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="recieve_renter_qoute" value="25"><label class="">25</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="recieve_renter_qoute" value="30"><label class="">30+</label>
            </div>
         </div>
       </div>


       <div class="info-component component">


         <div class="info-input-inline">
            <label for="" class="info-label">Annual Milage</label>

            <input class="info-input-text" type="text" name="recieve_renter_qoute" value="30"><label for="" class="label-small">miles</label>

         </div>
       </div>


       <div class="info-component component">
         {{-- <h2 class="info-head text-center">YOUR LICENSE</h2> --}}


         <div class="info-input-inline">
            <label for="" class="info-label">Do you park this car at your home address?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="has_insurance" value="1"><label class="">Yes</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="has_insurance" value="0" checked><label class="">No</label>
            </div>
         </div>

       </div>

       <div class="info-component component">

         <div class="info-input-inline">
            <label for="" class="info-label">Where do you keep your car?</label>

            <div class="grid-1fr-1fr">
               <div class="grid-text-item">
                  <label for="" class="label-small">Street Address</label>
                  <div class="info-input-inline">
                     <input class="info-input-text full" type="text" name="street_address" required="">
                  </div>
               </div>
               <div class="grid-text-item">
                  <label for="" class="label-small">Apt #</label>
                  <div class="info-input-inline">
                     <input class="info-input-text full" type="text" name="street_address" required="">
                  </div>
               </div>
            </div>


            <div class="grid-3fr-1fr-1fr">

               <div class="grid-text-item">
                  <label for="" class="label-small">City</label>
                  <div class="info-input-inline">
                     <input class="info-input-text full" type="text" name="street_address" required="">
                  </div>
               </div>

               <div class="grid-text-item">
                  <label for="" class="label-small">State</label>
                  <div class="info-input-inline">
                     <input class="info-input-text full" type="text" name="street_address" required="">
                  </div>
               </div>

               <div class="grid-text-item">
                  <label for="" class="label-small">Zip Code</label>
                  <div class="info-input-inline">
                     <input class="info-input-text full" type="text" name="street_address" readonly value="{{$zipCode}}">
                  </div>
               </div>

            </div>



         </div>


      </div>

      <div class="info-component component">
         <h2 class="info-head text-left" > About You</h2>

         <div class="info-input-inline">
            <label for="" class="info-label">Name</label>

            <div class="grid-1fr-1fr">
               <div class="grid-text-item">
                  <label for="" class="label-small">First Name</label>
                  <div class="info-input-inline">
                     <input class="info-input-text full" type="text" name="street_address" required="">
                  </div>
               </div>
               <div class="grid-text-item">
                  <label for="" class="label-small">Last Name</label>
                  <div class="info-input-inline">
                     <input class="info-input-text full" type="text" name="street_address" required="">
                  </div>
               </div>
            </div>
         </div>


         <div class="info-input-inline">
            <label for="" class="info-label">Birthdate</label>
            <div class="grid-1fr-1fr">
              <div class="grid-text-item">
                 <div class="info-input-box">
                   <input class="info-input-text full" type="date" name="birthday" placeholder="mm/dd/yyyy" pattern="mm/dd/yyyy" required="">
                 </div>
               </div>
           </div>
        </div>

         <div class="info-input-inline">
            <label for="" class="info-label">Gender</label>
            <div class="info-input-box">

               <input class="info-input" type="radio" name="recieve_renter_qoute" value="commuting">
                  <label class="">
                     <div class="icon">
                        <i class="fas fa-mars"></i>
                     </div> Male
                  </label>
            </div>
            <div class="info-input-box">

               <input class="info-input" type="radio" name="recieve_renter_qoute" value="commuting">
                  <label class="">
                     <div class="icon">
                        <i class="fas fa-venus"></i>
                     </div> Female
                  </label>
            </div>
        </div>

        <div class="info-input-inline">
            <label for="" class="info-label">Marital Status</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Single"><label class="">Single (never married)</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Married " checked><label class="">Married</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value=" Divorced" checked><label class="">Divorced</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Widowed" checked><label class="">Widowed</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Civil Union" checked><label class="">Civil Union</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value=" Seperated" checked><label class="">Seperated</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Domestic Partner " checked><label class="">Domestic Partner</label>
            </div>

         </div>

      </div>


      <div class="info-component component">
         <h2 class="info-head text-left" > EDUCATION & EMPLOYMENT</h2>



        <div class="info-input-inline">
            <label for="" class="info-label">What is the highest level of education you have completed?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value=" High School"><label class="">High School </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Associate "><label class="">Associate </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value=" Bachelors"><label class="">Bachelors </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Less than high school "><label class="">Less than high school </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Vocational "><label class=""> Vocational</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Masters "><label class="">Masters </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Medical school "><label class="">Medical school </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value=" Law school"><label class="">Law school </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Doctorate "><label class="">Doctorate </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="+ Show More "><label class="">+ Show More </label>
            </div>




         </div>

         <div class="info-input-inline">
            <label for="" class="info-label">What's your current employment status?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Employed"><label class="">Employed </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Self-Employed "><label class="">Self-Employed </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Retired "><label class=""> Retired</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Full Time Student - High School "><label class=""> Full Time Student - High School</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Full Time Student - Trade School "><label class=""> Full Time Student - Trade School</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Full Time Student - Undergraduate "><label class="">Full Time Student - Undergraduate </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value=" Full Time Student - Graduate"><label class=""> Full Time Student - Graduate</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value=" Unemployed"><label class="">Unemployed </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Other "><label class=""> Other</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Military "><label class=""> Military</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Retired Military "><label class="">Retired Military </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Homemaker "><label class="">Homemaker </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="+ Show More "><label class="">+ Show More </label>
            </div>

         </div>

         <div class="info-input-inline">
            <label for="" class="info-label">Occupation</label>
            <label class="label-small">Start typing and select the option from the dropdown list that best fits your occupation. If it is not listed, try using a generic title or job category. </label>
            <div class="info-input-box block">
                  <input class="info-input-text full" type="text" name="first_name" required placeholder="Start Type Your Search">
            </div>
         </div>

         <div class="info-input-inline">
            <label for="" class="info-label">Have you or your current spouse ever honorably served in the military?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="has_insurance" value="1"><label class="">Yes</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="has_insurance" value="0" checked><label class="">No</label>
            </div>
         </div>

         <div class="info-input-inline">
            <label for="" class="info-label">Do you have a B average or higher?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="has_insurance" value="1"><label class="">Yes</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="has_insurance" value="0" checked><label class="">No</label>
            </div>
         </div>

         <div class="info-input-inline">
            <label for="" class="info-label">Former Military Branch</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name=" Army" value="1"><label class="">Army </label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name=" Navy" value="0" checked><label class="">Navy</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name=" Air Force" value="0" checked><label class="">Air Force</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name=" Marines" value="0" checked><label class="">Marines</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name=" Coast Guard" value="0" checked><label class="">Coast Guard</label>
            </div>
         </div>


         <div class="info-input-inline">
            <label for="" class="info-label">Former Military Rank</label>

            <div class="info-select-box">
               <select name="vehicle_maker_other" id="" class="select-box">
                  <option value="Select" selected="">Select</option>
                  <option value="Touring">Touring</option>
               </select>
            </div>

         </div>

      </div>



      <div class="info-component component">
         <h2 class="info-head text-left" >YOUR HOME</h2>

         <div class="info-input-inline">
            <label for="" class="info-label">Where do you keep your car?</label>

            <div class="grid-1fr-1fr">
               <div class="grid-text-item">
                  <label for="" class="label-small">Street Address</label>
                  <div class="info-input-inline">
                     <input class="info-input-text full" type="text" name="street_address" required="">
                  </div>
               </div>
               <div class="grid-text-item">
                  <label for="" class="label-small">Apt #</label>
                  <div class="info-input-inline">
                     <input class="info-input-text full" type="text" name="street_address" required="">
                  </div>
               </div>
            </div>


            <div class="grid-3fr-1fr-1fr">

               <div class="grid-text-item">
                  <label for="" class="label-small">City</label>
                  <div class="info-input-inline">
                     <input class="info-input-text full" type="text" name="street_address" required="">
                  </div>
               </div>

               <div class="grid-text-item">
                  <label for="" class="label-small">State</label>
                  <div class="info-input-inline">
                     <input class="info-input-text full" type="text" name="street_address" required="">
                  </div>
               </div>

               <div class="grid-text-item">
                  <label for="" class="label-small">Zip Code</label>
                  <div class="info-input-inline">
                     <input class="info-input-text full" type="text" name="street_address" readonly="" value="12345">
                  </div>
               </div>

            </div>



         </div>

         <div class="info-input-inline">
            <label for="" class="info-label">How long have you lived at this residence? </label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Less than 6 months"><label class="">Less than 6 months</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="1 Year"><label class="">1 Year</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="2 Year"><label class="">2 Year</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="3 Year"><label class="">3 Year</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="4 Year"><label class="">4 Year</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="5 Year"><label class="">5 Year</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="6+ Year"><label class="">6+ Year</label>
            </div>

         </div>
         <div class="info-input-inline">
            <label for="" class="info-label">Do you rent or own your home? </label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Own "><label class="">Own </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value=" Rent"><label class="">Rent </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Other "><label class="">Other </label>
            </div>

         </div>

      </div>


      <div class="info-component component">
         <h2 class="info-head text-left" >YOUR LICENSE</h2>



         <div class="info-input-inline">
            <label for="" class="info-label">Do you have a valid U.S. license? </label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Yes"><label class="">Yes</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="No"><label class="">No</label>
            </div>

         </div>

         <div class="info-input-inline">
            <label for="" class="info-label">What's your current license status? </label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Suspended "><label class=""> Suspended</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Non-licensed "><label class=""> Non-licensed</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value=" Permit"><label class=""> Permit</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Valid commercial license "><label class="">Valid commercial license </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value=" Valid Canadian License"><label class="">Valid Canadian License </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Other valid foreign license "><label class="">Other valid foreign license </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Expired "><label class=""> Expired</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value=" Restricted"><label class="">Restricted </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value=" Surrendered"><label class=""> Surrendered</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Permanently revoked "><label class="">Permanently revoked </label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="+ Show More "><label class="">+ Show More </label>
            </div>



         </div>


         <div class="info-input-inline">
            <label for="" class="info-label">How old were you when you first got your license in the U.S. or Canada? </label>

            <div class="info-input-box">
               <div class="info-input-inline">
                  <input class="info-input-text full" type="text" name="" required="" placeholder="16">
               </div>
            </div>


         </div>

         <div class="info-input-inline">
            <label for="" class="info-label">Have you completed any voluntary driver training classes in the past 3 years? </label>

            <label for="" class="label-small">(Since July 2018)</label>
            <br>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Yes"><label class="">Yes</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="No"><label class="">No</label>
            </div>

         </div>



      </div>

      <div class="info-component component">
         <h2 class="info-head text-left" >YOUR DRIVING HISTORY</h2>



         <div class="info-input-inline">
            <label for="" class="info-label">Has your license been suspended or revoked in the last 5 years?</label>
            <label for="" class="label-small">(Since July 2016)</label>
            <br>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Yes"><label class="">Yes</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="No"><label class="">No</label>
            </div>

         </div>

         <div class="info-input-inline">
            <label for="" class="info-label">Has your license been suspended or revoked in the last 3 years?</label>
            <label for="" class="label-small">(Since July 2018)</label>
            <br>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Yes"><label class="">Yes</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="No"><label class="">No</label>
            </div>

         </div>


         <div class="info-input-inline">
            <label for="" class="info-label">Are you required to have an SR-22 or other Financial Responsibility document?</label>

            <label for="" class="label-small">If you don't know what an SR-22 is, then select no.</label>
            <br>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Yes"><label class="">Yes</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="No"><label class="">No</label>
            </div>

         </div>

         <div class="info-input-inline">
            <label for="" class="info-label">Have you had any accidents, moving violations, or claims in the last 5 years? </label>

            <label for="" class="label-small">(Since July 2016)</label>
            <br>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Yes"><label class="">Yes</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="No"><label class="">No</label>
            </div>

         </div>



      </div>

      <div class="info-component component">
         <h2 class="info-head text-left" >CURRENT INSURANCE</h2>

         <div class="info-input-inline">
            <label for="" class="info-label">Do you currently have car insurance?</label>


            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Yes"><label class="">Yes</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="No"><label class="">No</label>
            </div>

         </div>

         <div class="info-input-inline">
            <label for="" class="info-label">Tell us more</label>


            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="I have my own policy"><label class="">I have my own policy</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="On another's policy with proof of insurance"><label class="">On another's policy with proof of insurance</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="On another's policy without proof of insurance"><label class="">On another's policy without proof of insurance</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="I've been deployed overseas"><label class="">I've been deployed overseas</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="I just acquired a car"><label class="">I just acquired a car</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="My policy expired more than 30 days ago"><label class="">My policy expired more than 30 days ago</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="My policy expired less than 30 days ago"><label class="">My policy expired less than 30 days ago</label>
            </div>

         </div>


         <div class="info-input-inline">
            <label for="" class="info-label">Have you been uninsured at any time in the past 3 years?
            </label>


            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="I have my own policy"><label class="">I have my own policy</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="No, I was continuously insured"><label class="">No, I was continuously insured</label>
            </div>


            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Yes, within the last 6 months"><label class="">Yes, within the last 6 months</label>
            </div>


            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Yes, within the last 3 Years"><label class="">Yes, within the last 3 Years</label>
            </div>



         </div>

         <div class="info-input-inline">
            <label for="" class="info-label">
               How long were you uninsured?
            </label>


            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="1-7 days"><label class="">1-7 days</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="8-30 days"><label class="">8-30 days</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="31-60 days"><label class="">31-60 days</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="61-90 days"><label class="">61-90 days</label>
            </div>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="+90 days"><label class="">90+ days</label>
            </div>





         </div>

      </div>



      <div class="info-component component">
         <h2 class="info-head text-left" >INSURANCE HISTORY</h2>

         <div class="info-input-inline">
            <label for="" class="info-label">Who is your current insurance company?</label>

            <div class="info-input-inline">
               <div class="info-select-box">
                  <select name="vehicle_maker_other" id="" class="select-box">
                     <option value="Select" selected="">Select</option>
                     <option value="Touring">AIG</option>
                  </select>
               </div>
            </div>

            <div class="info-input-inline">
               <label for="" class="info-label">How long have you been with your current insurance company? </label>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value="Less than 6 months"><label class="">Less than 1 Year</label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value="1 Year"><label class="">1 Year</label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value="2 Year"><label class="">2 Year</label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value="3 Year"><label class="">3 Year</label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value="4 Year"><label class="">4 Year</label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value="5 Year"><label class="">5 Year</label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value="6-10 Year"><label class="">6-10 Year</label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value="11-15 Year"><label class="">11-15 Year</label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value="16-20 Year"><label class="">16-20 Year</label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value="21+ Year"><label class="">21+ Year</label>
               </div>

            </div>


            <div class="info-input-inline">
               <label for="" class="info-label">How many months have you been with your current insurance company? </label>


               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value="1 "><label class="">1 </label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value="2 "><label class="">2 </label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value="3 "><label class="">3 </label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value="4 "><label class="">4 </label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value=" 5"><label class=""> 5</label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value=" 6"><label class="">6 </label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value=" 7"><label class="">7 </label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value=" 8"><label class="">8 </label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value=" 9"><label class="">9 </label>
               </div>


               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value=" 10"><label class="">10 </label>
               </div>


               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value="11"><label class="">11 </label>
               </div>


            </div>


            <div class="info-input-inline">
               <label for="" class="info-label">What are your current Bodily Injury (BI) limits?</label>

               <label for="" class="label-small">If you don't know, try your best guess.</label>
               <br>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value=" Minimum limit"><label class=""> Minimum limit</label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value=" Greater than minimum but less than 50/100"><label class=""> Greater than minimum but less than 50/100</label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value=" 50/100 or greater but less than 100/300"><label class=""> 50/100 or greater but less than 100/300</label>
               </div>

               <div class="info-input-box">
                  <input class="info-input" type="radio" name="current_insurance" value=" 100/300 or greater"><label class=""> 100/300 or greater</label>
               </div>



            </div>

         </div>
      </div>

      <div class="info-component component">
         <h2 class="info-head text-left" >YOUR NEW POLICY</h2>

         <div class="info-input-inline">
            <label for="" class="info-label">When does your current policy expire?</label>
            <label for="" class="label-small">If you're not sure, enter your best estimate.</label>
            <div class="grid-1fr-1fr">
              <div class="grid-text-item">
                 <div class="info-input-box">
                   <input class="info-input-text full" type="date" name="birthday" placeholder="mm/dd/yyyy" pattern="mm/dd/yyyy" required="">
                 </div>
               </div>
           </div>
        </div>

        <div class="info-input-inline">
            <label for="" class="info-label">When do you want your new policy to start?</label>
            <label for="" class="label-small">It has to start on the same day or before your current policy expires</label>
            <br>
            <div class="grid-1fr-1fr">
               <div class="grid-text-item">
                  <div class="info-input-box">
                     <input class="info-input" type="radio" name="current_insurance" value="Today"><label class="">Today</label>
                  </div>

                  <div class="info-input-box">
                     <input class="info-input" type="radio" name="current_insurance" value="Tomorrow"><label class="">Tomorrow</label>
                  </div>
                </div>
            </div>
        </div>

        <div class="info-input-inline">
         <label for="" class="info-label">Are you willing to sign and receive insurance policy documents electronically?
         </label>

         <div class="info-input-box">
            <input class="info-input" type="radio" name="current_insurance" value="Yes"><label class="">Yes</label>
         </div>
         <div class="info-input-box">
            <input class="info-input" type="radio" name="current_insurance" value="No"><label class="">No</label>
         </div>
        </div>
      </div>

      <div class="info-component component">
         <h2 class="info-head text-left" >CONTACT INFO</h2>

         <div class="info-input-inline">
            <div class="grid-1fr">
               <div class="grid-text-item">
                  <label for="" class="info-label">Where would you like to receive a copy of your quotes?</label>
                  <div class="info-input-box">
                     <input class="info-input-text full" type="text" name="Email Address" placeholder="Email Address" required="">

                  </div>
               </div>
               <div class="info-input-inline">
                  <input class="info-input-text" type="checkbox" name="" required="">
                  <label for="label-small">Yes, I would also like to receive occasional emails with price alerts and updates.</label>
               </div>
               <div class="grid-text-item">
                  <label for="" class="info-label">Phone number</label>
                  <div class="info-input-box">
                     <input class="info-input-text full" type="" name="Phone" placeholder="(____)___ ____" required="">
                  </div>
               </div>

               <div class="info-input-inline">
                  <input class="info-input-text" type="checkbox" name="" required="">
                  <label for="label-small">Yes, I would like to receive reminders about my auto insurance quote via text message.</label>
               </div>
            </div>
         </div>
      </div>

       <div class="info-component component">
         {{-- <h2 class="info-head text-center">YOUR LICENSE</h2> --}}


         <div class="info-input-inline">
            <label for="" class="info-label">Have you had auto insurance in the past 30 days ?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="has_insurance" value="1"><label class="">Yes</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="has_insurance" value="0" checked><label class="">No</label>
            </div>
         </div>

       </div>
       {{-- info compoment 7 --}}

       <div class="info-component component">

         <div class="info-input-inline">
            <label for="" class="info-label">Current Auto Insurance </label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="All State"><label class="">All State</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="American Family" checked><label class="">American Family</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="GEICO" checked><label class="">GEICO</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Farmers Ins" checked><label class="">Farmers Ins</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Liberty Mutual" checked><label class="">Liberty Mutual</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Nation Wide" checked><label class="">Nation Wide</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Progressive" checked><label class="">Progressive</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="State Farm" checked><label class="">State Farm</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Travelers" checked><label class="">Travelers</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="USAA" checked><label class="">USAA</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" value="Other" checked><label class="">Other</label>
            </div>
         </div>

       </div>
       {{-- info compoment 8 --}}

       <div class="info-component component">
         <div class="info-input-inline">
            <label for="" class="info-label">How long have you continuously had auto insurance ? </label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="insurance_duration" value="Less Than A Year" ><label class="">Less Than A Year</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="insurance_duration" value="1 to 2 years"  checked><label class="">1 to 2 years</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="insurance_duration" value="2 to 3 years"  checked><label class="">2 to 3 years</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="insurance_duration" value="4 + years"  checked><label class="">4 + years</label>
            </div>

         </div>

       </div>
       {{-- info compoment 9--}}

       <div class="info-component component">



         <div class="info-input-inline">
            <label for="" class="info-label">Gender</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="gender"  value="0"><label class="">Male</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="gender" value="1"><label class="">Female</label>
            </div>
         </div>

       </div>
       {{-- info compoment 10--}}

       <div class="info-component component">

         <div class="info-input-inline">
            <label for="" class="info-label">Married ?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="is_married"  value="1"><label class="">Yes</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="is_married"  value="0"><label class="">No</label>
            </div>
         </div>
       </div>

       <div class="info-component component">

         <div class="info-input-inline">
            <label for="" class="info-label">Home Owner</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="home_owner"  value="0"><label class="">Own</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="home_owner"  value="1"><label class="">Rent</label>
            </div>
         </div>
       </div>

       <div class="info-component component3">
         <div class="info-input-inline">
            <label for="" class="info-label">Has any one on this policy had :</label> <br>
            <label for="" class="info-label">An at-fault accident in the past <strong>three (3) years </strong> ?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="at_fault_accident" value="1"><label class="">Yes</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="at_fault_accident" value="0" checked><label class="">No</label>
            </div>
         </div>

         <div class="info-input-inline">

            <label for="" class="info-label"> <strong>Two (2) Or more</strong>  tickets in the past <strong>three (3) years </strong> ?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="is_ticketed" value="1" ><label class="">Yes</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="is_ticketed"  value="0"checked><label class="">No</label>
            </div>
         </div>

         <div class="info-input-inline">

            <label for="" class="info-label">A DUI convinction in the past <strong>three (3) years </strong> ?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="dui_convinction" value="1"><label class="">Yes</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="dui_convinction" value="0" checked><label class="">No</label>
            </div>
         </div>

       </div>

       <div class="info-component component">

         <div class="info-input-inline">
            <label for="" class="info-label">Are either you or your spouse active member , or an honourably discharged veteran of the US military </label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="is_members_of_us_army" value="1"><label class="">Yes</label>
            </div>
            <div class="info-input-box">
               <input class="info-input" type="radio" name="is_members_of_us_army" value="0"><label class="">No</label>
            </div>
         </div>
       </div>
       <div class="info-component component">

         <div class="info-input-inline">
            <label for="" class="info-label">Birthdate</label>
            <div class="grid-1fr-1fr">
              <div class="grid-text-item">
                 <div class="info-input-box">
                   <input class="info-input-text full" type="date" name="birthday" placeholder="mm/dd/yyyy" pattern="mm/dd/yyyy" required>
                 </div>
               </div>
           </div>
        </div>
       </div>

      <div class="info-component component">

         <div class="info-input-inline">
            <div class="grid-1fr-1fr">
               <div class="grid-text-item">
                  <label for="" class="info-label">First Name</label>
                  <div class="info-input-box">
                     <input class="info-input-text full" type="text" name="first_name" required>
                  </div>
               </div>
               <div class="grid-text-item">
                  <label for="" class="info-label">Last Name</label>
                  <div class="info-input-box">
                     <input class="info-input-text full" type="text" name="last_name" required >
                  </div>
               </div>
            </div>
         </div>

         <div class="info-input-inline">
            <label for="" class="info-label">Email</label>
            <div class="grid-1fr-1fr">
               <div class="grid-text-item">
                  <div class="info-input-box d-block">
                     <input class="info-input-text full" type="email" name="email" placeholder="email address" required>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="info-component component">
         <h2 class="info-head"> <span>Bill</span> Last Step ! </h2>
         <div class="info-input-inline">
            <div class="grid-1fr-1fr">
               <div class="grid-text-item">
                  <label for="" class="info-label">Street Address</label>
                  <div class="info-input-box">
                     <input class="info-input-text full" type="text" name="street_address" required>
                  </div>
               </div>
               <div class="grid-text-item">
                  <label for="" class="info-label">Phone Number</label>
                  <div class="info-input-box">
                     <input class="info-input-text full" type="text" name="mobile" required>
                  </div>
               </div>
            </div>
         </div>

         <div class="btn-cennter-wrap mt-4" >
            <button id="save-button" class="btn btn-primary ">Get My Auto Quotes <i class="fas fa-arrow-right"></i></button>
         </div>
      </div>
   </form>

</div>


@endsection



@section('custom_JS')

 <script src="{{ asset('public/frontAsset/js/vehicleInfo.js') }}"></script>


@endsection
