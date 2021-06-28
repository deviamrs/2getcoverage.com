@extends('layouts.front')

@section('page_title')
@isset($pageData)
{{ $pageData->name }}
@endisset
@endsection



@section('front_content')

<div id="general-page">
    @includeIf('front.partials.breadcrumb', ['pagename' => $pageData->name , 'pagecontent' => $pageData->sub_heading])
    <section>
        <div class="container-small">
            <div class="global-read-content">
                {!! $pageData->insurance_content !!}
            </div>
        </div>
     </section>

<div class="container-small">
    @include('front.partials.startCompare')
</div>



</div>


@endsection
