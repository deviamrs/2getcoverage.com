@component('mail::message')

<h5>Contact Form Enquiry</h5> 

<p> <strong>Full Name:</strong> {{ $emailData['name'] }}</p>
<p> <strong>Email:</strong> {{ $emailData['email'] }}</p>
<p> <strong>Phone:</strong> {{ $emailData['phone'] }}</p>
<p> <strong>Message:</strong> {{ $emailData['message'] }}</p>



@component('mail::button', ['url' => route('front.home')])
Discover More
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent