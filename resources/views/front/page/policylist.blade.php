@extends('layouts.front')

@section('page_title')
    {{ 'Insurance Tips' }}
@endsection

@section('front_content')

<div id="policy-tips">
   
   @includeIf('front.partials.breadcrumb', ['pagename' => 'Insurance Tips' , 'pagecontent' => 'Insurance Tips Listing'])


<div class="container">
    
   @includeIf('front.globalsection.tiplist', ['tips' => $tips])
   

</div>

<div class="container-small" style="margin-top: 5rem">
   @include('front.partials.startCompare')
</div>
</div>
@endsection
