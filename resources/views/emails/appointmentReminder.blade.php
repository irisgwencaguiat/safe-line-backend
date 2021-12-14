@component('mail::message')
# Safe Line Appointment Reminder

Your Appointment time is {{ $appointment['time'] }}.<br>
Your Zoom Link is: <br>
{{ $appointment['link'] }}. <br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
