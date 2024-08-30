<x-mail::message>
# {{$email_data['name']}}<br>
Email Address : {{$email_data['email']}}<br> 
Question : {{$email_data['question']}}<br>
Message:<br>
{{$email_data['message']}}



Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
