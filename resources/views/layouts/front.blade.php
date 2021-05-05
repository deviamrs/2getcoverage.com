<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <title> @yield('page_title') | {{ env('APP_NAME') }}  </title>

   {{-- meta tags goes here --}}

   @yield('meta_tags')

   {{-- style sheets begins from here  --}}
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <link rel="stylesheet" href="{{ asset('public/frontAsset/css/style.css') }}">
   
</head>
<body>
   @include('front.partials.header')
      
   @yield('front_content')

   @include('front.partials.footer')
</body>
</html>