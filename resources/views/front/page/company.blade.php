@extends('layouts.front')

@section('page_title')
{{  $company->name  }}
@endsection



@section('front_content')
<div id="company-page">
 

    @includeIf('front.partials.breadcrumb', ['pagename' => $company->name , 'pagecontent' => 'We work with the most reliable.'])

    <div class="container-small">
        <div class="company">
            <div class="company--inner">
                <div class="c-detail-card">
                    <div class="c-top auto-comp-grid">
                        
                        @isset($company)
                            
                           @if ($company->carddetails()->whereStatus(1)->get()->count() > 0)
                              
                               @foreach ($company->carddetails()->whereStatus(1)->get() as $card)
                                    <div class="t-card bg-white"  @if ($card->card_width)  style ="grid-column:1/-1"  @endif>
                                        <h3 class="c-text text-gradient-blue heading">
                                           {{ $card->heading }}
                                        </h3>
                                        @if ($card->card_content !=null)
                                            <div class="global-read-content">
                                                 {!! $card->card_content !!}
                                             </div>   
                                        @endif
                                    </div>
                               @endforeach
                           @endif
                        @endisset
                    </div>
                    {{-- <div class="c-bottom mt-2">
                        <div class="a-card bg-white">
                            <ul class="">
                                <li class="ml-2">
                                    <img class="img-full img-contain icon-crd" src="{{asset('public/frontAsset/images/icon/icon1.png')}}"
                                        alt="" />
                                    <a href="tel:" class="link-crd text-grey font-400"><span class="font-700">Customer
                                            Service: </span>
                                        +91-9999-999-999</a>
                                </li>
                                <li class="ml-2">
                                    <img class="img-full img-contain icon-crd" src="{{asset('public/frontAsset/images/icon/icon2.png')}}"
                                        alt="" />
                                    <a href="tel:" class="link-crd text-grey font-400"><span class="font-700">Location:
                                        </span> No.399/407,
                                        No.399/407 Nsr Road, Street Name Colony</a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>

                <div class="company--detail pb-3 pt-3 mb-4">
                     @if ($company->companysections()->whereStatus(1)->get()->count() > 0)
                         @foreach ($company->companysections()->whereStatus(1)->get() as $content)
                         <div class="global-read-content">
                               {!! $content->company_content !!}
                           </div>
                         @endforeach
                     @endif 

                    

                </div>
            </div>
        </div>

        @include('front.partials.startCompare')
    </div>
</div>


@endsection