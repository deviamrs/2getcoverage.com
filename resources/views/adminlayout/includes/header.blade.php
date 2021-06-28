<div class="container-fluid">
  <nav class="navbar sticy-top navbar-light bg-light">
  
      <a class="navbar-brand" href="{{ route('front.home') }}">2 Get Coverage</a>
 
  
   
    @auth
    <a class="btn btn-link" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
     {{ __('Logout') }}
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
  </form>
    @endauth  
     
   
  </nav>
</div>

