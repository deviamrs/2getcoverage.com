<div class="company-list-wrap">


    @foreach ($companies as $company)
            @includeIf('front.globalcard.companycard', ['company' => $company ])
    @endforeach




</div>