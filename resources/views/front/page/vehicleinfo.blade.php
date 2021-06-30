@extends('layouts.front')

@section('page_title')
    {{ $zipCode .' Get Vehicle Info' }}
@endsection

@section('front_content')

<div id="get-vehicleinfo">
   
   <div class="vehicle-info-container">
       
       <div class="progress-container">
            {{-- <div class="progress-count-wrap">
               <div class="progress-count">Car</div>
               <div class="progress-count">Drivers</div>
               <div class="progress-count">Insurance</div>
               <div class="progress-count">Qoutes</div>
            </div> --}}

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
       <form method="POST" action="{{ route('front.storeInsuranceLead') }}">
         @csrf
       <div class="info-component component-1">
         {{-- <h2 class="info-head text-center" > Let's get started with your car information</h2> --}}
         {{-- <div class="model-detail-box">
            <div class="vehicle-m text-white bg-primary " id="model-year"><span class="v-m-m-m" class="">2022</span><span class="v-del"><i class="far fa-times-circle"></i></span></div>
            <div class="vehicle-m text-white bg-primary" id="model-company"><span class="v-m-m-m" class="">Acura</span><span class="v-del"><i class="far fa-times-circle"></i></span></div>
            <div class="vehicle-m text-white bg-primary" id="model-name"><span class="v-m-m-m" class="">MDX</span><span class="v-del"><i class="far fa-times-circle"></i></span></div>
            <div class="vehicle-m text-white bg-primary" id="model-trim"><span class="v-m-m-m" class="">BASE MODEL</span><span class="v-del"><i class="far fa-times-circle"></i></span></div>
         </div> --}}
         <div class="info-input-inline">
            <label for="" class="info-label">Select Car Year</label>
            @for ($i = date('Y'); $i > 1981; --$i)
            <div class="info-input-box">
               <input class="info-input" type="radio" name="car_year" value="{{ $i - 1 }}"><label class="">{{ $i - 1 }}</label>
            </div>    
            @endfor  
         </div>
  
         {{-- <div class="btn-cennter-wrap mt-4" >
            <button id="save-button" class="btn btn-primary btn-hero-input">Continue <i class="fas fa-arrow-right"></i></button>
         </div> --}}
       </div>
      

       {{-- info compoment 2 --}}

       <div class="info-component component-2">     
         <div class="info-input-inline">
            <label for="" class="info-label">Select Your Vehicle Make</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker" value="Cheverolet"><label class="">Cheverolet</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker" value="Dodge"><label class="">Dodge</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker" value="Ford"><label class="">Ford</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker" value="GMC"><label class="">GMC</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker" value="Honda"><label class="">Honda</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker" value="Hyundai"><label class="">Hyundai</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker" value="Jeep"><label class="">Jeep</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker" value="Kia"><label class="">Kia</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker" value="Mercedez-Benz"><label class="">Mercedez-Benz</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker" value="Nissan"><label class="">Nissan</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker" value="Subaru"><label class="">Subaru</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker" value="Toyoto"><label class="">Toyoto</label>
            </div>    


         </div>
          
         <div class="input-type-select">
            <select name="vehicle_maker_other" id="" class="global-select-box">
               <option value="other" selected>Other Make</option>
               <option value="Toyoto" >Toyoto</option>
            </select>
         </div>

       </div>

       {{-- info compoment 3--}}

       <div class="info-component component-3">
         <div class="info-input-inline">
            <label for="" class="info-label">Select Your Vehicle Model</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_model" value="4 Runner"><label class="">4 Runner</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_model" value="Avabar"><label class="">Avabar</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_model" value="86"><label class="">86</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_model" value="Avalaon"><label class="">Avalaon</label>
            </div>    

         </div>
         
       </div>
 {{-- info compoment 4--}}

       <div class="info-component component-4">
         <div class="info-input-inline">
            <label for="" class="info-label">Select Your Vehicle Trim</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_trin" value="L SEDAN"><label class="">L SEDAN</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_trin" value="LE SEDAN"><label class="">LE SEDAN</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_trin" value="SE SEDAN"><label class="">SE SEDAN</label>
            </div>    
         
         </div>
      
       </div>
 {{-- info compoment 5--}}

       <div class="info-component component-5">

         <div class="info-input-inline">
            <label for="" class="info-label">Add Second Vehicle ? (Save Addtional 20%)</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="park_at_home" value="1"><label class="">Yes</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="park_at_home" value="0" checked><label class="">No</label>
            </div>    
         </div>

       </div>

       {{-- info compoment 6 --}}

       <div class="info-component component-6">
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

       <div class="info-component component-7">

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

       <div class="info-component component-8">
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

       <div class="info-component component-9">
        
         
        
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

       <div class="info-component component-10">
         
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

       <div class="info-component component-11">
         
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
       <div class="info-component component-12">
         
         <div class="info-input-inline">
            <label for="" class="info-label">Would you like to recieve renters insurance policy quotes ? You may able to bundle and save even more on your auto policy</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="recieve_renter_qoute" value="1"><label class="">Yes</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="recieve_renter_qoute" value="0"><label class="">No</label>
            </div>       
         </div>  
       </div> 
       <div class="info-component component-13">
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

       <div class="info-component component-14">
         
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
       <div class="info-component component-15">
         
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

      <div class="info-component component-16">
      
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
      <div class="info-component component-17">
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
