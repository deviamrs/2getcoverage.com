<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>{{ env('APP_NAME') }}</title>
   @livewireStyles
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
@livewireStyles
</head>
<body>
    
     @includeIf('adminlayout.includes.header')
   <div class="row mt-5">
      <div class="col-md-2">
         @includeIf('adminlayout.includes.sidebar')   
      </div>
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
          @yield('admin_content')
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
{{-- @livewireScripts --}}
</body>
</html>