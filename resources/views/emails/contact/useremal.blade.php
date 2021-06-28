@component('mail::message')

<p>
   Thankyou {{ $emailData['name'] }} For Contacting Us <br>
   One Of Our Members Will be In Touch With You 
</p>



@component('mail::button', ['url' => route('front.home')])
Discover More
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
