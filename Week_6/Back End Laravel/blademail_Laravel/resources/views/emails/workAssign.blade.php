@component('mail::message')
{{-- <!DOCTYPE html> --}}

<h3>Dear Sir / Ma'am {{$workAssignUser['name']}}</h3> 

<p>Please be informed that our sir {{$workAssignee['name']}} has assigned you to do {{$workAssignee['work_type']}} within {{$workAssignee['ending_date']}} by {{$workAssignee['end_time']}}. Please be ensured to submit your progress.</p>

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
