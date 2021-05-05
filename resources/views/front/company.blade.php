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
                        <div class="t-card bg-white">
                            <h3 class="c-text text-gradient-blue heading">
                                Why choose Insurance?
                            </h3>
                            <ul class="mt-1 mb-4 ml-3">
                                <li class="ml-2">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Sit!
                                </li>
                                <li class="ml-2">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Sit!
                                </li>
                                <li class="ml-2">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Sit!
                                </li>
                            </ul>
                        </div>
                        <div class="t-card bg-white">
                            <h3 class="c-text text-gradient-blue heading">
                                Why choose Insurance?
                            </h3>
                            <ul class="mt-1 mb-4 ml-3">
                                <li class="ml-2">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Sit!
                                </li>
                                <li class="ml-2">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Sit!
                                </li>
                                <li class="ml-2">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Sit!
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="c-bottom mt-2">
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
                    </div>
                </div>

                <div class="company--detail pb-3 pt-3 mb-4">
                    <div class="content container-small text-grey">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint
                            corrupti dolorum quis est eum in, ipsam adipisci neque voluptate
                            nobis doloribus soluta vitae pariatur dolorem illo qui tempore
                            beatae error.

                            <br />

                            <br />
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam
                            eligendi autem unde saepe tempore blanditiis ipsum voluptas,
                            quam officia porro dignissimos necessitatibus iure minus tenetur
                            distinctio accusamus reprehenderit? Quam, dolorum?
                        </p>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint
                            corrupti dolorum quis est eum in, ipsam adipisci neque voluptate
                            nobis doloribus soluta vitae pariatlour dolorem illo qui tempore
                            beatae error. Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Ipsum quas consectetur atque nostrum culpa quos
                            reprehenderit? Explicabo ut delectus minima, nemo pariatur natus
                            soluta dolores itaque, neque at ex deleniti.

                            <br />

                            <br />
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam
                            eligendi autem unde saepe tempore blanditiis ipsum voluptas,
                            quam officia porro dignissimos necessitatibus iure minus tenetur
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore
                            accusantium et esse adipisci ipsam hic fuga. Necessitatibus
                            expedita consequuntur consequatur quo quis cum dolor veritatis
                            odit nulla sunt. Quo, aliquid! Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Tenetur libero, ipsum distinctio
                            non, quae neque labore voluptate, eius vero rem ex magni sunt
                            unde officia architecto exercitationem culpa voluptates
                            recusandae? distinctio accusamus reprehenderit? Quam, dolorum?
                        </p>
                    </div>
                </div>
            </div>
        </div>

        @include('front.partials.startCompare')
    </div>
</div>


@endsection