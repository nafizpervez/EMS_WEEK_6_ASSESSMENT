@component('mail::message')
<!DOCTYPE html>

<h3>Dear Sir / Ma'am {{$pruser['name']}}</h3> 

<p>Your Request for PR Application with ID {{$prinfo['serial_id']}} has been Submitted.</p>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks & Regards,<br>
<p>{{$pruser['name']}} <br> {{$pruser['designation']}}</p>
<br><br>
<p>ADN Technologies LTD. <br>RCC Tower (2nd Floor), <br>17 Mohakhali, C/A, Dhaka-1212 <br> Mobile: +880 1819 412285
    </p>


{{ config('app.name') }}
@endcomponent
