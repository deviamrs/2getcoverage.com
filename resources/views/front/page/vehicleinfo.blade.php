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
               <input class="info-input" type="radio" name="car_year"><label class="">{{ $i - 1 }}</label>
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
               <input class="info-input" type="radio" name="vehicle_maker"><label class="">Cheverolet</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker"><label class="">Dodge</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker"><label class="">Ford</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker"><label class="">GMC</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker"><label class="">Honda</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker"><label class="">Hyundai</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker"><label class="">Jeep</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker"><label class="">Kia</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker"><label class="">Mercedez-Benz</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker"><label class="">Nissan</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker"><label class="">Subaru</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_maker"><label class="">Toyoto</label>
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
               <input class="info-input" type="radio" name="vehicle_model"><label class="">4 Runner</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_model"><label class="">Avabar</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_model"><label class="">86</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_model"><label class="">Avalaon</label>
            </div>    

         </div>
         
       </div>
 {{-- info compoment 4--}}

       <div class="info-component component-4">
         <div class="info-input-inline">
            <label for="" class="info-label">Select Your Vehicle Trim</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_trin"><label class="">L SEDAN</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_trin"><label class="">LE SEDAN</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="vehicle_trin"><label class="">SE SEDAN</label>
            </div>    
         
         </div>
      
       </div>
 {{-- info compoment 5--}}

       <div class="info-component component-5">

         <div class="info-input-inline">
            <label for="" class="info-label">Add Second Vehicle ? (Save Addtional 20%)</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="park_at_home"><label class="">Yes</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="park_at_home" checked><label class="">No</label>
            </div>    
         </div>

       </div>

       {{-- info compoment 6 --}}

       <div class="info-component component-6">
         {{-- <h2 class="info-head text-center">YOUR LICENSE</h2> --}}
         
        
         <div class="info-input-inline">
            <label for="" class="info-label">Have you had auto insurance in the past 30 days ?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="has_insurance"><label class="">Yes</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="has_insurance" checked><label class="">No</label>
            </div>    
         </div>
        
       </div>
       {{-- info compoment 7 --}}

       <div class="info-component component-7">

         <div class="info-input-inline">
            <label for="" class="info-label">Current Auto Insurance </label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance"><label class="">All State</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" checked><label class="">American Family</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" checked><label class="">GEICO</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" checked><label class="">Farmers Ins</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" checked><label class="">Liberty Mutual</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" checked><label class="">Nation Wide</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" checked><label class="">Progressive</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" checked><label class="">State Farm</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" checked><label class="">Travelers</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" checked><label class="">USAA</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="current_insurance" checked><label class="">Other</label>
            </div>    
         </div>
         
       </div>
       {{-- info compoment 8 --}}

       <div class="info-component component-8">
         <div class="info-input-inline">
            <label for="" class="info-label">How long have you continuously had auto insurance ? </label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="insurance_duration"><label class="">Less Than A Year</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="insurance_duration" checked><label class="">1 to 2 years</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="insurance_duration" checked><label class="">2 to 3 years</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="insurance_duration" checked><label class="">4 + years</label>
            </div>    
              
         </div>
         
       </div>
       {{-- info compoment 9--}}

       <div class="info-component component-9">
        
         
        
         <div class="info-input-inline">
            <label for="" class="info-label">Gender</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="make_payments"><label class="">Male</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="make_payments"><label class="">Female</label>
            </div>       
         </div>  

       </div>
       {{-- info compoment 10--}}

       <div class="info-component component-10">
         
         <div class="info-input-inline">
            <label for="" class="info-label">Married ?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="is_married"><label class="">Yes</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="is_married"><label class="">No</label>
            </div>       
         </div>  
       </div>

       <div class="info-component component-11">
         
         <div class="info-input-inline">
            <label for="" class="info-label">Home Owner</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="is_married"><label class="">Own</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="is_married"><label class="">Rent</label>
            </div>       
         </div>  
       </div> 
       <div class="info-component component-12">
         
         <div class="info-input-inline">
            <label for="" class="info-label">Would you like to recieve renters insurance policy quotes ? You may able to bundle and save even more on your auto policy</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="recieve_renter_qoute"><label class="">Yes</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="recieve_renter_qoute"><label class="">No</label>
            </div>       
         </div>  
       </div> 
       <div class="info-component component-13">
         <div class="info-input-inline">
            <label for="" class="info-label">Has any one on this policy had :</label> <br>
            <label for="" class="info-label">An at-fault accident in the past <strong>three (3) years </strong> ?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="at_fault_accident"><label class="">Yes</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="at_fault_accident" checked><label class="">No</label>
            </div>       
         </div>  

         <div class="info-input-inline">
            
            <label for="" class="info-label"> <strong>Two (2) Or more</strong>  tickets in the past <strong>three (3) years </strong> ?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="is_ticketed"><label class="">Yes</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="is_ticketed" checked><label class="">No</label>
            </div>       
         </div>  

         <div class="info-input-inline">
            
            <label for="" class="info-label">A DUI convinction in the past <strong>three (3) years </strong> ?</label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="dui_convinction"><label class="">Yes</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="dui_convinction" checked><label class="">No</label>
            </div>       
         </div>  

       </div> 

       <div class="info-component component-14">
         
         <div class="info-input-inline">
            <label for="" class="info-label">Are either you or your spouse active member , or an honourably discharged veteran of the US military </label>

            <div class="info-input-box">
               <input class="info-input" type="radio" name="is_members_of_us_army"><label class="">Yes</label>
            </div>    
            <div class="info-input-box">
               <input class="info-input" type="radio" name="is_members_of_us_army"><label class="">No</label>
            </div>       
         </div>  
       </div>
       <div class="info-component component-15">
         
         <div class="info-input-inline">
            <label for="" class="info-label">Birthdate</label>
            <div class="grid-1fr-1fr">
              <div class="grid-text-item">
                 <div class="info-input-box">
                   <input class="info-input-text full" type="text" name="birthday" placeholder="mm/dd/yyyy" pattern="mm/dd/yyyy">
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
                     <input class="info-input-text full" type="text" name="first_name">
                  </div>
               </div>
               <div class="grid-text-item">
                  <label for="" class="info-label">Last Name</label>
                  <div class="info-input-box">
                     <input class="info-input-text full" type="text" name="last_name">
                  </div>
               </div>
            </div>
         </div>
      
         <div class="info-input-inline">
            <label for="" class="info-label">Email</label>
            <div class="grid-1fr-1fr">
               <div class="grid-text-item">
                  <div class="info-input-box d-block">
                     <input class="info-input-text full" type="email" name="email" placeholder="email address">
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
                     <input class="info-input-text full" type="text" name="street_address">
                  </div>
               </div>
               <div class="grid-text-item">
                  <label for="" class="info-label">Phone Number</label>
                  <div class="info-input-box">
                     <input class="info-input-text full" type="text" name="last_name">
                  </div>
               </div>
            </div>
         </div>

         <div class="btn-cennter-wrap mt-4" >
            <button id="save-button" class="btn btn-primary ">Get My Auto Quotes <i class="fas fa-arrow-right"></i></button>
         </div>
      </div>

</div>
@endsection
