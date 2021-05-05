<div class="team-card shadow">
   <div class="image-wrp mb-1">
     <img class="img-full img-cover" src="{{asset('public/'.$member->image)}}" alt="">
   </div>
   <div class="name-wrp  mb-1">
    <h3 class="font-600 text-primary ">{{ $member->name }}</h3>
   </div>
   <div class="designation-wrp  mb-2">
     <h2 class="text-success font-400"> {{ $member->designation }}</h2>
   </div>
   <div class="content-wrp">
      {!! $member->description  !!}
   </div>
 </div>