@component('mail::message')
# Dear {{ $user->name }}

You need to activate you company.

@component('mail::button', ['url' => '', 'color' => 'company-activation'])
Activate
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent