<x-mail::message>
# {{$email_data['name']}}<br>
Email Address : {{$email_data['email']}}<br> 
Phone No : {{$email_data['phone']}}<br>
Message:<br>
{{$email_data['message']}}



Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
