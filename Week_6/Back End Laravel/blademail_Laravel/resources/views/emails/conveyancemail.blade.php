@component('mail::message')
{{-- <!DOCTYPE html> --}}

<h3>Dear Sir / Ma'am {{$conveyanceuser['name']}}</h3> 

<p>Your Request for Conveyance Bill for {{$conveyanceinfo['conveyance_type']}} on {{$conveyanceinfo['application_date']}} from {{$conveyanceinfo['in_time']}} to {{$conveyanceinfo['out_time']}} has been submitted succesfully & pending for approval.</p>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}
<br>
<p>
Thanks & Regards,<br>
ADN EMS <br>
</p>

<p>ADN Technologies LTD. <br>RCC Tower (2nd Floor), <br>17 Mohakhali, C/A, Dhaka-1212 <br> Mobile: +880 1819 412285
    </p>


{{-- {{ config('app.name') }} --}}
@endcomponent
