@extends('layouts.front')

@section('page_title')
    {{ 'About' }}
@endsection



@section('front_content')

<div id="about-page">
   
   @includeIf('front.partials.breadcrumb', ['pagename' => 'About' , 'pagecontent' => '2GETCOVERAGE.com makes finding the best deal easy.'])
   <section>
        <div class="container-small">

               <h3 class="text-gradient-blue heading ">Our Purpose</h3>
               <div class="content">
                  <p>We know life isn’t easy. Sometimes, it can feel like the deck of life is stacked against you. But we believe you deserve a level playing field, and we are committed to working with you to recognize your struggles, lighten your burden, and empower you on your journey. We strive to help you navigate the world and make smart, informed decisions that will help you win a game that seems rigged against you.
                     <br>
                     <br>
                  At 2GetCoverage.com, our mission is to provide solutions that help you take small steps to make big decisions. We’re here to empower you to get ahead today and build toward a brighter tomorrow by putting money back in your pocket.</p>
               </div>
               <div class="about-s-cards auto-sm-grid">
                  <h3 class="scard heading ">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam illo corporis omnis.
                  </h3>
                  <h3 class="scard heading">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam illo corporis omnis.
                  </h3>
                  <h3 class="scard heading">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam illo corporis omnis.
                  </h3>
               </div>

                <div class="content">
                  <p>We know life isn’t easy. Sometimes, it can feel like the deck of life is stacked against you. But we believe you deserve a level playing field, and we are committed to working with you to recognize your struggles, lighten your burden, and empower you on your journey. We strive to help you navigate the world and make smart, informed decisions that will help you win a game that seems rigged against you.
                     <br>
                     <br>
                  At 2GetCoverage.com, our mission is to provide solutions that help you take small steps to make big decisions. We’re here to empower you to get ahead today and build toward a brighter tomorrow by putting money back in your pocket.</p>
               </div>

                  <div class="about-s-cards auto-sm-grid">
                  <div class="scard ">
                     <div class="s-img-wrp">
                          <img class="img-full img-cover" src="{{ asset('public/frontAsset/images/insure_category/40419.jpg')}}" alt="">
                     </div>

                     <h3 class="content text-green mb-1 mt-2 font-600">
                        Heading Name
                     </h3>

                     <p class="mb-4 content">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad cumque est odit.</p>   

                       <a href="" class="btn btn-sm btn-primary">Know More</a>
                  </div>
                  
                  <div class="scard ">
                     <div class="s-img-wrp">
                          <img class="img-full img-cover" src="{{ asset('public/frontAsset/images/insure_category/40419.jpg')}}" alt="">
                     </div>

                     <h3 class="content text-green mb-1 mt-2 font-600">
                        Heading Name
                     </h3>

                     <p class="mb-4 content">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad cumque est odit.</p>   

                       <a href="" class="btn btn-sm btn-primary">Know More</a>
                  </div>
                  
                  <div class="scard ">
                     <div class="s-img-wrp">
                          <img class="img-full img-cover" src="{{ asset('public/frontAsset/images/insure_category/40419.jpg')}}" alt="">
                     </div>

                     <h3 class="content text-green mb-1 mt-2 font-600">
                        Heading Name
                     </h3>


                     <p class="mb-4 content">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad cumque est odit.</p>   

                       <a href="" class="btn btn-sm btn-primary">Know More</a>
                  </div>
                  
               </div>
        </div>


   </section>  
    
    <div class="container-small">
      @include('front.partials.startCompare')
    </div>



</div>


@endsection