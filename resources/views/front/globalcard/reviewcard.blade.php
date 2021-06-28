<div class="review-card">
    <div class="content-box">
        <h3 class="text-grey review-card-head">{{ $review->name }}
            @if ($review->location != null )
            ({{ $review->location }})
            @endif
        </h3>
        <p>
            {{ $review->content }}
        </p>


    </div>

    <div class="review-stars-wrap text-center">

        @for ($i = 0; $i < $review->full_stars; $i++)
         <span class="star star-full text-primary"><i class="fas fa-star"></i></span>           
         @endfor
       @if ($review->half_stars == 1) <span class="star star-hal text-primary"><i class="fas fa-star-half-alt"></i></span> @endif
                    
      @if ( $review->empty_stars > 0)
      @for ($i = 0; $i < $review->empty_stars; $i++) 
      <span class="star star-empty text-secondary"><i  class="far fa-star"></i></span>
      @endfor 
      @endif                 
                



    </div>

</div>