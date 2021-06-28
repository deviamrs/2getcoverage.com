<div class="text-center p-5">
   <div class="text-info">
      <i class="fas fa-sad-tear" style="font-size: 10vw"></i> 
   </div>
    <h3>{{ $data }}</h3>
    <div>
        @isset($route_name)
        <a href="{{ route(  $route_name.'.create') }}" class="btn btn-primary btn-sm text-capitalize"><i class="fas fa-pen"></i> Add {{ $route_name }} </a>  
        @endisset
      </div> 
</div>