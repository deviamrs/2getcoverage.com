<div class="news-card">
   <a href="{{ route('getsinglepost' , $blogdata->slug) }}" class="news-card-img"><img src="{{ asset('public/'.$blogdata->image) }}" alt="" class="news-card-image"></a>
   <a href="{{ route('getsinglepost' , $blogdata->slug) }}" class="news-card-title"> <h3 class="title text-grey">{{ $blogdata->title }}</h3> </a>
   <a href="{{ route('getsinglepost' , $blogdata->slug) }}" class="news-card-category">{{ $blogdata->category->name }} </a>
   <p class="news-card-des text-grey">{{ $blogdata->small_desc }} ..</p>
   <a href="{{ route('getsinglepost' , $blogdata->slug) }}" class="btn">+ Read More</a>
   <span class="news-card-date text-white">{{ Carbon\Carbon::parse($blogdata->publish_date)->format('d M Y')  }}</span> 
</div>