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
                  Protecting What <br>
                  <span class="text-success">Matters Most</span> 
               </h1>
           </div> 

           <div class="buttons-container">
               
              @include('front.partials.startCompare')
               

               <div class="btn-group-start-right">
                   
                   
                   
              {{-- <a href="" class="btn btn-success">Choose Coverage</a>       --}}
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
         <a  href="{{ route('front.news') }}" class="btn btn-primary">See All News</a>
      </div>
   </div>
 
</section>

<section class="section">
   <div class="container">
      <div class="global-head-content">
         <h3 class="global-head" >  Insurance tips </h3>
      </div>
  
      @includeIf('front.globalsection.tiplist', ['tips' => $tips])

      <div class="btn-cennter-wrap text-center">
         <a href="{{ route('front.policytiplist') }}" class="btn btn-secondary">Read More Tips</a>
      </div>

    
   </div>
</section>

<section class="section">
   <div class="container">
      <div class="global-head-content">
         <h3 class="global-head" > Companies Rating and Reviews  </h3>
      </div>
      <div class="auto-grid-list">
           
         @isset($reviews)
             @if ($reviews->count() > 0)
                 @foreach ($reviews as $review)
                     @includeIf('front.globalcard.reviewcard', ['review' => $review])
                 @endforeach
             @endif
         @endisset

         
         
      </div>

      {{-- <div class="btn-cennter-wrap text-center">
         <a href="" class="btn btn-primary">See All Reviews</a>
      </div> --}}
    
   </div>
</section>
@isset($aboutSection)
<section class="section about-us-section">
   <div class="container">
      <div class="global-head-content">
         <h3 class="global-head" >{{ $aboutSection->heading }}</h3>
      </div>
      <div class="about-us-section-wrap auto-grid-list">
          <div class="left-section about-img-wrap">
              <img src="{{ asset('public/'.$aboutSection->image)}}" alt="about us image">
          </div>
          <div class="right-section">
              <h1 class="text-gradient-blue heading ">{{ $aboutSection->sub_heading }}</h1>
              
              <div class="global-read-content">
                 {!! $aboutSection->section_content !!}
              </div>

              <a href="{{ route('front.about') }}" class="btn btn-primary">Read More</a>
          </div> 

      </div>
    

    
   </div>
</section>
@endisset

</div>
     

@endsection