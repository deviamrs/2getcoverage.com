@extends('layouts.front')

@section('page_title')
    {{ 'Careers' }}
@endsection

@section('front_content')

<div id="why-us">
   
  

   @includeIf('front.partials.breadcrumb', ['pagename' => 'News' , 'pagecontent' => ''])


   <section class="container news-section ">
      @include('front.globalsection.bloglist')
   </section>


<div class="container-small" style="margin-top: 5rem">
   @include('front.partials.startCompare')
</div>
</div>
@endsection
