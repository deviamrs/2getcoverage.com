<div class="tips-card">
   <div class="tips-card-img-wrap">
       <img src="{{ asset('public/'.$tip->image)}}" alt="" class="tips-card-image" alt="tip image">
   </div>
   <a href="{{ route('front.singletip' , $tip->slug) }}" class="tips-card-link" title="{{ $tip->tip_name }}"><h3 class="text-grey">{{ $tip->tip_name }}</h3></a>
   <a href="{{ route('front.singletip' , $tip->slug) }}" class="btn btn-secondary" title="{{ $tip->tip_name }}">Read More</a>
</div>