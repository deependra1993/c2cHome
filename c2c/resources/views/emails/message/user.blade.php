@component('mail::message')
hey

welcome

@component('mail::button', ['url' => 'laravel.app'])
send-mail
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
