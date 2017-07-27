@component('mail::message')
# Introduction

你好啊！LaravelChen!

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
