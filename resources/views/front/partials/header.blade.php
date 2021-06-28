<div class="header" id="header">
   <div class="container header-wrapper h-100">
      <a href="{{ route('front.home') }}" class="header-logo"> 
             <img src="{{ asset('public/frontAsset/images/logo/logo1.png') }}" alt="2 Get Coverage Logo" class="header-logo-img">
      </a>
     
      <ul class="header-list" id="header-list" >
         <li class="header-list-item">
             <a href="javascript:void(0)" class="header-link">Insurance</a>
             <ul class="header-sub-list">

                 <li class="header-sub-list-item">
                     <a href="{{ route('front.policytiplist') }}" class="header-sub-link text-grey">Insurance Tips</a>
                 </li>
                 <li class="header-sub-list-item">
                     <a href="" class="header-sub-link text-grey">Home Insurance</a>
                 </li>
                 <li class="header-sub-list-item">
                     <a href="" class="header-sub-link text-grey">Life Insurance</a>
                 </li>
                 <li class="header-sub-list-item">
                     <a href="" class="header-sub-link text-grey">Health Insurance</a>
                 </li>
                 <li class="header-sub-list-item">
                     <a href="" class="header-sub-link text-grey">Renters</a>
                 </li> 
                 <li class="header-sub-list-item">
                     <a href="" class="header-sub-link text-grey">Other Insurance</a>
                 </li>
             </ul>  

         </li>
         <li class="header-list-item">
             <a href="javascript:void(0)" class="header-link">About</a>
             <ul class="header-sub-list">
                 <li class="header-sub-list-item">
                     <a  href="{{ route('front.about') }}" class="header-sub-link text-grey">About Us</a>
                 </li>
                 <li class="header-sub-list-item">
                     <a   href="{{ route('front.ourstory') }}" class="header-sub-link text-grey">Our Story</a>
                 </li>
                 <li class="header-sub-list-item">
                     <a   href="{{ route('front.leadership') }}" class="header-sub-link text-grey">Leadership</a>
                 </li>
                 <li class="header-sub-list-item">
                     <a href="{{ route('front.careers') }}" class="header-sub-link text-grey">Careers</a>
                 </li>
                 <li class="header-sub-list-item">
                      <a href="{{ route('front.companylist') }}" class="header-sub-link text-grey">Company List</a>
                 </li>
                 <li class="header-sub-list-item">
                     <a href="{{ route('front.privacy') }}" class="header-sub-link text-grey">Privacy</a>
                 </li>
                 <li class="header-sub-list-item">
                     <a href="{{ route('front.faqs') }}" class="header-sub-link text-grey">FAQs</a>
                 </li>
              
                 <li class="header-sub-list-item">
                     <a href="" class="header-sub-link text-grey">Licensing Info</a>
                 </li>
                 <li class="header-sub-list-item">
                     <a href="" class="header-sub-link text-grey">Retrieve Last Quote</a>
                 </li>
                 <li class="header-sub-list-item">
                     <a href="" class="header-sub-link text-grey">Terms and Conditions</a>
                 </li>
                 <li class="header-sub-list-item">
                     <a href="" class="header-sub-link text-grey">Your Advertising Choices</a>
                 </li>
             </ul>  
         
         </li>
         <li class="header-list-item"><a href="{{ route('front.whyus') }}" class="header-link">Why Us</a></li>
         <li class="header-list-item"><a href="{{ route('front.contact') }}"  class="header-link text-grey">Contact Us</a></li>
             
         <li class="header-list-item"><a href="" class="btn btn-primary btn-menu">Agent Login</a></li>
      </ul>
      <div id="hamburger" class="hamburger" onclick="document.querySelector('#header-list').classList.toggle('active')">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
      </div>
   </div>
   </div>



   