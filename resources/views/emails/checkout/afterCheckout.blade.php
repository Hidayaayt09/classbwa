<x-mail::message>
# Register Camp: {{$checkout->Camp->title}}

Hello {{$checkout->User->name}}!
<br>
Thank you for register on <b>{{$checkout->Camp->title}}</b>, please you payment by click button here.

<x-mail::button :url="route('user.dashboard')">
Get Invoice
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
