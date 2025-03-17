@component('mail::message')
# The series {{ $name }} has been created

Click in the button bellow to open details:

@component('mail::button', ['url' => route('series.index')])
    Open
@endcomponent

@endcomponent