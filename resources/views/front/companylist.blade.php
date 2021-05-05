@extends('layouts.front')

@section('page_title')
    {{ 'Company List' }}
@endsection



@section('front_content')


<div id="company-list-page">
    
    @includeIf('front.partials.breadcrumb', ['pagename' => 'Companies' , 'pagecontent' => 'We work with the most reliable.'])

    <div class="container-small">
        @include('front.partials.startCompare')
    </div>
   
    <div class="company-list">
        <div class="company-list--inner">
          <div class="content container-small pb-4 text-grey">
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint
              corrupti dolorum quis est eum in, ipsam adipisci neque voluptate
              nobis doloribus soluta vitae pariatur dolorem illo qui tempore
              beatae error.
  
              <br />
  
              <br />
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam
              eligendi autem unde saepe tempore blanditiis ipsum voluptas, quam
              officia porro dignissimos necessitatibus iure minus tenetur
              distinctio accusamus reprehenderit? Quam, dolorum?
            </p>
  
          </div>
  
           <div class="company-cards pt-4 pb-4 ">
               <div class="company-cards--inner container">
                    <h3 class="text-gradient-blue heading ">Companies That Can Save You Money</h3>
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