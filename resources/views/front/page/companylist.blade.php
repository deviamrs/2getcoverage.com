@extends('layouts.front')

@section('page_title')
    {{ 'Company List' }}
@endsection



@section('front_content')


<div id="company-list-page">
    
    @includeIf('front.partials.breadcrumb', ['pagename' => 'Companies' , 'pagecontent' => 'Companies That Can Save You Money.'])

    <div class="container-small">
        @include('front.partials.startCompare')
    </div>
   
    <div class="company-list">
        <div class="company-list--inner">
           <div class="company-cards pt-4 pb-4 ">
               <div class="company-cards--inner container">
                    {{-- <h3 class="text-gradient-blue heading "></h3> --}}
                    <div class="company-cards--wrp auto-comp-grid mt-3"> 
                        @foreach ($companies as $company)
                            @includeIf('front.globalcard.companycard2', ['company' => $company])
                        @endforeach

                    </div>
               </div>
               
            </div>
        </div>
      </div>


</div>




@endsection