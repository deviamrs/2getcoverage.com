@extends('layouts.front')

@section('page_title')
    {{ 'Contact Us' }}
@endsection

@section('front_content')


<div id="contact-us">
 

   @includeIf('front.partials.breadcrumb', ['pagename' => 'Contact Us' , 'pagecontent' => 'How Can We Help?'])

   <div class="container-small">
      @include('front.partials.startCompare')
   </div>


<div class="contact">
    <div class="contact--inner container-small ">
          <h3 class="text-gradient-blue heading ">For Specific Questions:</h3>
           <div class="content mb-4">
                    <p>We know life isn’t easy. Sometimes, it can feel like the deck of life is stacked against you. But we believe you deserve a level playing field, and we are committed to working with you to recognize your struggles, lighten your burden, and empower you on your journey. We strive to help you navigate the world and make smart, informed decisions that will help you win a game that seems rigged against you.
                       <br>
                       <br>
                    At 2GetCoverage.com, our mission is to provide solutions that help you take small steps to make big decisions. We’re here to empower you to get ahead today and build toward a brighter tomorrow by putting money back in your pocket.</p>
                 </div>
          <h3 class="text-gradient-blue">Contact Us By Mail:</h3>
            <div class="content mb-4">
                <p>
                      Email:
                      <a href="mailto:contact@2getcoverage.com" class="link"> Contact@2getcoverage.com</a>
                </p>       
            </div>
          <h3 class="text-gradient-blue">Contact Us By Phone:</h3>
            <div class="content mb-4">
              <p>Please feel free to call us if you're having a technical or customer service issue that's preventing you from getting a quote online.
                  
                <br>
              </p>
                <p>
                      Phone:
                      <a href="tel:9012665507" class="link">+91-9012665507</a>
                </p>       
            </div>

            <div class="fomr-wrp">
                <h3 class="text-gradient-blue heading">Share Your Thoughts with Us:</h3>

                @includeIf('front.partials.contactform')
            </div>
    </div>
</div>

</div>



@endsection