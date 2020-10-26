@component('mail::message')
# Introduction
this is message from {{ $name }}
and the message is {{ $message }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
