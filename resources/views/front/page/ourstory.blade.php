@extends('layouts.front')

@section('page_title')
@isset($page)
{{ $page->page_name }}
@endisset
@endsection



@section('front_content')

<div id="general-page">


    @includeIf('front.partials.breadcrumb', ['pagename' => $page->heading , 'pagecontent' => $page->sub_heading])
    <section>
        <div class="container-small">
            <div class="global-read-content">
                {!! $page->page_content !!}
            </div>
        </div>


     </section>

<div class="container-small">
    @include('front.partials.startCompare')
</div>



</div>


@endsection
