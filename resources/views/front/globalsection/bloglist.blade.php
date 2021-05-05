<ul class="news-list">
   
   @foreach ($blogs as $item)
          @includeIf('front.globalcard.blogcard', ['blogdata' => $item ])
   @endforeach

  

</ul>