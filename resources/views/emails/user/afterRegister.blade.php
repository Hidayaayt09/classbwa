<x-mail::message>
# Welcome guys!

Hello {{$user->name}}!
<br>
Welcome to Laracamp, Guys enjoys to here!

<x-mail::button :url="route('welcome')">
Login Here
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
