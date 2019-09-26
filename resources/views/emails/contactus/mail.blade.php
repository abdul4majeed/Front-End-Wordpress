@component('mail::message')
# An Query is Posted

You have received new message form {{$contact_us->name}}
@component('mail::button', ['url' => @route('contact_us.show',$contact_us->id) ])
View Message
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
