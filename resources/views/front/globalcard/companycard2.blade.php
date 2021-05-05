<div class="c-card bg-white">
    <div class="c-image mb-1">
        <img class="img-full img-cover img-contain" src="{{ asset('public/'.$company->image) }}" alt="" />
    </div>
    <h3 class="c-text text-gradient-blue heading">{{ $company->name }}</h3>
    <p class="mt-1 mb-4 c-content">
        {{ $company->front_details }}
    </p>
    <a href="" class="btn btn-sm btn-primary">Know More</a>
</div>