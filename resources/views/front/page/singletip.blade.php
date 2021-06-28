@extends('layouts.front')

@section('page_title')
    {{ $tipDetail->tip_name }}
@endsection

@section('front_content')

<div id="policy-tips">
   
   @includeIf('front.partials.breadcrumb', ['pagename' => $tipDetail->tip_name , 'pagecontent' => $tipDetail->tip_sub_head])


<div class="container">
     @if ( $tipDetail->tipsections()->whereStatus(1)->get()->count()  > 0)
         @foreach ($tipDetail->tipsections()->whereStatus(1)->get() as $tipContent)
             <div class="global-read-content">
                  {!! $tipContent->tip_content !!}
             </div>
         @endforeach
     @endif
</div>

<div class="container-small" style="margin-top: 5rem">
   @include('front.partials.startCompare')
</div>
</div>
@endsection
