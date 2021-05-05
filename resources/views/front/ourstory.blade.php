@extends('layouts.front')

@section('page_title')
    {{ 'Company List' }}
@endsection

@section('front_content')

<div id="our-story">
   
   @includeIf('front.partials.breadcrumb', ['pagename' => 'Our Story' , 'pagecontent' => 'Why the You needs us'])

<div class="container-small">
   @include('front.partials.startCompare')
</div>

<div class="our">
    <div class="our--inner container-small ">
          <h3 class="text-gradient-blue heading ">A Simple Solution</h3>
           <div class="content mb-4">
                    <p>At 2GetCoverage.com, out of a desire to make finding the best much easier, much quicker process. Before, if you wanted to find the best , you'd have to fill out multiple forms on several different provider websites and that could take you a while. The  pros at 2GetCoverage.com knew there was a better way to get quotes and compare , so they set out to make it a reality.
                       <br>
                       <br>
                    At 2GetCoverage.com, our mission is to provide solutions that help you take small steps to make big decisions. We’re here to empower you to get ahead today and build toward a brighter tomorrow by putting money back in your pocket.</p>
                 </div>
                 <h3 class="text-gradient-blue heading ">The Importance of Comparison</h3>
                 <div class="content mb-4">
                    <p>We know life isn’t easy. Sometimes, it can feel like the deck of life is stacked against you. But we believe you deserve a level playing field, and we are committed to working with you to recognize your struggles, lighten your burden, and empower you on your journey. We strive to help you navigate the world and make smart, informed decisions that will help you win a game that seems rigged against you.
                       <br>
                       <br>
                    At 2GetCoverage.com, our mission is to provide solutions that help you take small steps to make big decisions. We’re here to empower you to get ahead today and build toward a brighter tomorrow by putting money back in your pocket.</p>
                 </div>
    </div>
</div>

</div>



@endsection
