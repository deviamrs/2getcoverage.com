   <footer class="footer " id="footer">
          <div class="container footer-wrap ">
            @isset($insureCategories)
               @if ($insureCategories->count() > 0)
                    @foreach ($insureCategories as $category)
                    <div class="footer-box">
                        <h3 class="footer-head text-primary">{{ $category->category_name }}</h3>
                        <div class="footer-links text-grey">
                             @if ($category->insurancetypes()->whereStatus(1)->get()->count() > 0)
                                 @foreach ($category->insurancetypes()->whereStatus(1)->get() as $insuranceType)
                                          <a href="{{ route('front.singleinsuranceType' , [$category->slug , $insuranceType->slug] ) }}" class="footer-link text-grey" title="{{ $insuranceType->name  }}">{{ $insuranceType->name  }}</a>
                                 @endforeach
                             @endif
                        </div>
                    </div>
                    @endforeach
               @endif
            @endisset
        </div>
        <div class="footer-social-icons container">
                
            <ul class="social-links">
                <a href="" class="social-link"><i class="fab fa-facebook"></i></a>
                <a href="" class="social-link"><i class="fab fa-instagram-square"></i></a>
                <a href="" class="social-link"><i class="fab fa-linkedin"></i></a>
                <a href="" class="social-link"><i class="fab fa-youtube"></i></a>
            </ul>
        
        </div>
        <div class="footer-copy-right text-center text-white bg-primary">
            &copy; Copyright {{ date('Y') }} {{ env('APP_NAME') }}.com All Right Reserved 
        </div>
       </footer>


