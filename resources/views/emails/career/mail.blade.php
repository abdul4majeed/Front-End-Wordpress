@component('mail::message')
# New Person Applied

You have received new cv form {{$career->name}}

@component('mail::button', ['url' => @route('career.show',$career->id)])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
