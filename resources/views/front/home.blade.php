@extends('layouts.front')

@section('page_title')
    {{ 'Home' }}
@endsection



@section('front_content')
 
<div id="landing-page">
   <section class="section hero-section">
   <span class="hero-section-left-image animate-tilt-left-right"><img src="{{ asset('public/frontAsset/images/heror_left_image.jpg')}}" alt="hero left image"></span>
    <div class="container-large hero-section-wrap">
      
       <div class="left" >
           <div class="head-container">
               <h1 class="heading heading-big">
                  Preparing you for all of  <br>
                  <span class="text-success">life’s
                     surprises</span> 
               </h1>
           </div> 

           <div class="buttons-container">
               
              @include('front.partials.startCompare')
               

               <div class="btn-group-start-right">
                   
                   
                   
              <a href="" class="btn btn-success">Choose Coverage</a>      
             </div>       

              
               <!-- <a href="" class="btn btn-success">Contact Us</a> -->

           </div>


       </div>
       <div class="right hero-img" >
           <img src="{{ asset('public/frontAsset/images/hero_img.webp')}}" alt="health insurance image " class="img-cover img-full">
       </div>
    </div> 
</section> 


<section class="section company-list">
   <div class="container">
      <div class="global-head-content">
         <h3 class="global-head" >Top Insurance Providers</h3>
         <p class="text-grey">We work with over 50 top auto insurance companies to find the policy that fits you best.</p>
      </div>
      
      @include('front.globalsection.companylist')
          
      <div class="btn-cennter-wrap text-center">
         <a href="{{ route('front.companylist') }}" class="btn btn-primary">See All Companies</a>
      </div>

   </div>
</section>


<section class="section news-section">
   <div class="container">
      <div class="global-head-content">
         <h3 class="global-head" >Insurance News</h3>
      </div>

      @include('front.globalsection.bloglist')

      <div class="btn-cennter-wrap text-center">
         <a  href="" class="btn btn-primary">See All News</a>
      </div>
   </div>
 
</section>

<section class="section">
   <div class="container">
      <div class="global-head-content">
         <h3 class="global-head" >  Insurance tips </h3>
      </div>
      <ul class="auto-grid-list">
          <div class="tips-card">
             <div class="tips-card-img-wrap">
                 <img src="{{ asset('public/frontAsset/images/insure_category/37132.jpg')}}" alt="" class="tips-card-image">
             </div>
             <a href="" class="tips-card-link"><h3 class="text-grey">Home Insurance Tips</h3></a>
             <a href="" class="btn btn-secondary">Read More</a>
          </div>
          <div class="tips-card">
             <div class="tips-card-img-wrap">
                 <img src="{{ asset('public/frontAsset/images/insure_category/40419.jpg')}}" alt="" class="tips-card-image">
             </div>
              <a href="" class="tips-card-link"><h3 class="text-grey">Health Insurance Tips</h3></a>
             <a href="" class="btn btn-secondary">Read More</a>
          </div>
          <div class="tips-card">
             <div class="tips-card-img-wrap">
                 <img src="{{ asset('public/frontAsset/images/insure_category/43023.jpg')}}" alt="" class="tips-card-image">
             </div>
             <a href="" class="tips-card-link"><h3 class="text-grey">Car Insurance Tips</h3></a>
             <a href="" class="btn btn-secondary">Read More</a>
          </div>
      </ul>
      <div class="btn-cennter-wrap text-center">
         <a href="" class="btn btn-secondary">Read More Tips</a>
      </div>

    
   </div>
</section>

<section class="section">
   <div class="container">
      <div class="global-head-content">
         <h3 class="global-head" > Companies Rating and Reviews  </h3>
      </div>
      <div class="auto-grid-list">
          <div class="review-card">
               <div class="content-box">
                   <h3 class="text-grey review-card-head">Lisa (TX)</h3>
                   <p>
                     "This is a great site, it was fast & offered me many options. I will recommend this site to all of my family & friends. I've wasted so much time & wish I'd found this site much sooner!!! Great job!!!"
                   </p>

                  
               </div> 
               
               <div class="review-stars-wrap text-center" >
                   <span class="star star-full text-primary"><i class="fas fa-star"></i></span>
                   <span class="star star-full text-primary"><i class="fas fa-star"></i></span>
                   <span class="star star-full text-primary"><i class="fas fa-star"></i></span>
                   <span class="star star-hal text-primary"><i class="fas fa-star-half-alt"></i></span>
                   <span class="star star-empty text-secondary"><i class="far fa-star"></i></span>
               </div>

          </div>
          <div class="review-card">
               <div class="content-box">
                   <h3 class="text-grey review-card-head" >James (CA)</h3>
                   <p>
                     This site is amazing. It literally took me 7 minutes to get different quotes. Definitely recommend this site.
                   </p>

                 
               </div> 
               
              <div class="review-stars-wrap text-center" >
                   <span class="star star-full text-primary"><i class="fas fa-star"></i></span>
                   <span class="star star-full text-primary"><i class="fas fa-star"></i></span>
                   <span class="star star-full text-primary"><i class="fas fa-star"></i></span>
                   <span class="star star-hal text-primary"><i class="fas fa-star-half-alt"></i></span>
                   <span class="star star-empty text-secondary"><i class="far fa-star"></i></span>
               </div>

          </div>
          <div class="review-card">
               <div class="content-box">
                   <h3 class="text-grey review-card-head">Denise (CA)</h3>
                   <p>
                     Convenient & easy to use. Site asks all pertinent info & gives many different options to select from unlike other sites or insurance brand name sites...
                   </p>

                  
               </div> 
               
              <div class="review-stars-wrap text-center" >
                   <span class="star star-full text-primary"><i class="fas fa-star"></i></span>
                   <span class="star star-full text-primary"><i class="fas fa-star"></i></span>
                   <span class="star star-full text-primary"><i class="fas fa-star"></i></span>
                   <span class="star star-hal text-primary"><i class="fas fa-star-half-alt"></i></span>
                   <span class="star star-empty text-secondary"><i class="far fa-star"></i></span>
               </div>

          </div>
      </div>

      <div class="btn-cennter-wrap text-center">
         <a href="" class="btn btn-primary">See All Reviews</a>
      </div>
    
   </div>
</section>
<section class="section about-us-section">
   <div class="container">
      <div class="global-head-content">
         <h3 class="global-head" >About Us</h3>
      </div>
      <div class="about-us-section-wrap auto-grid-list">
          <div class="left-section about-img-wrap">
              <img src="{{ asset('public/frontAsset/images/insure_category/35225.jpg')}}" alt="about us image">
          </div>
          <div class="right-section">
              <h1 class="text-gradient-blue heading ">Our Purpose</h1>
              <div class="content">
                  <p>We know life isn’t easy. Sometimes, it can feel like the deck of life is stacked against you. But we believe you deserve a level playing field, and we are committed to working with you to recognize your struggles, lighten your burden, and empower you on your journey. We strive to help you navigate the world and make smart, informed decisions that will help you win a game that seems rigged against you.

                 </p>
                 <p> At 2GetCoverage.com, our mission is to provide solutions that help you take small steps to make big decisions. We’re here to empower you to get ahead today and build toward a brighter tomorrow by putting money back in your pocket.</p>
              </div>
              <a href="" class="btn btn-primary">Read More</a>
          </div> 

      </div>
    

    
   </div>
</section>
</div>
     

@endsection