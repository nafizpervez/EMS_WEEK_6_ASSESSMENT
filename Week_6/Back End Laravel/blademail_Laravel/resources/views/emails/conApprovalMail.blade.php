@component('mail::message')
{{-- <!DOCTYPE html> --}}

<h3>Congratulation! Sir / Ma'am {{$conApprovalUser['name']}}</h3> 

<p>Your Request for Conveyance Bill for {{$conApprovalInfo['conveyance_type']}} on {{$conApprovalInfo['application_date']}} from {{$conApprovalInfo['in_time']}} to {{$conApprovalInfo['out_time']}} has been approved.</p>

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
