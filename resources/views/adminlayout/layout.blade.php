<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <title>{{ env('APP_NAME') }}</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
@yield('custom_Css')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    
    body{
      font-size: 14px;
    }

    .btn-group-sm>.btn, .btn-sm {
    padding: .25rem .5rem;
    font-size: .7rem;
    border-radius: .2rem;
    }

</style>


</head>
<body class="">
  <div class="container-fluid">
     @includeIf('adminlayout.includes.header')
   
    <div class="row mt-5">
      @auth
      <div class="col-md-2">
         @includeIf('adminlayout.includes.sidebar')   
      </div>
      @endauth
      <div class="col-md-10">
         @if (session('success'))
         <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
            <div class="toast show align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true" ata-bs-delay="5000">
               <div class="d-flex">
                 <div class="toast-body">
                 {{ session('success') }}
                 </div>
                 <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
               </div>
             </div>
         </div>  
          @endif

        
          @if (session()->has('warning'))
          <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
            <div class="toast show align-items-center text-white bg-warning border-0" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true" ata-bs-delay="5000">
               <div class="d-flex">
                 <div class="toast-body">
                 {{ session('warning') }}
                 </div>
                 <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
               </div>
             </div>
         </div>  
          @endif 
          @if (session()->has('danger'))
          <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
            <div class="toast show align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true" ata-bs-delay="5000">
               <div class="d-flex">
                 <div class="toast-body">
                 {{ session('danger') }}
                 </div>
                 <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
               </div>
             </div>
         </div>  
          @endif 
 

          @yield('admin_content')
         </div>
     </div>  
  
  </div>  
     
 
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
 
 var toastElList = [].slice.call(document.querySelectorAll('.toast'))
var toastList = toastElList.map(function (toastEl) {
  return new bootstrap.Toast(toastEl)
})


</script>

@yield('custom_JS')


{{-- @livewireScripts --}}
</body>
</html>