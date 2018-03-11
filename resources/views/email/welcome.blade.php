@component('mail::message')
# Introduction

Hello!Laravel5.5!

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
