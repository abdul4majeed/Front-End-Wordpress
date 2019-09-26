@component('mail::message')
# Someone Made You an Admin

You are Added as a Admin of the DreamsTech Webstie.
Your Credentials are:
Email : {{$user->email}}
<br />
Click The Button Below To Reset The Password:

@component('mail::button', ['url' => '/admin/login'])
Login Page
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
