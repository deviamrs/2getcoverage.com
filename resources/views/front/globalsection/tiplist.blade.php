<ul class="auto-grid-list">  
   @isset($tips)  
     @if ($tips->count() > 0)
        @foreach ($tips as $tip)
             @includeIf('front.globalcard.tipcard', ['tip' => $tip])
        @endforeach
     @endif
   @endisset
</ul>