

@extends('layouts.front')

@section('page_title')
    {{ 'Leadership' }}
@endsection

@section('front_content')

 <div id="leadership-page">
  
   @includeIf('front.partials.breadcrumb', ['pagename' => 'Leadership' , 'pagecontent' => 'Meet the leadership team at 2GETCOVERAGE']) 
   <div class="team">
       
      @includeIf('front.globalsection.teamsection')

   </div>

   <div class="container-small">
      @include('front.partials.startCompare')
   </div>

</div>