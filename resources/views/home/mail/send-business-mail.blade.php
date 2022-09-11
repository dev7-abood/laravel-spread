@component('mail::message')

<div style="display: flex; justify-content: space-between">
    <p>{{$data->email}}</p>
    <p>:{{__('mail.Sender')}}</p>
</div>

<div style="display: flex; justify-content: space-between">
    <p>{{$data->name}}</p>
    <p>:{{__('mail.The name')}}</p>
</div>

<div style="display: flex; justify-content: space-between">
    <p>{{$data->telephone}}</p>
    <p>:{{__('mail.Phone number')}}</p>
</div>

<div style="display: flex; justify-content: space-between">
    <p>{{$data->comp_name}}</p>
    <p>:{{__('mail.Company name')}}</p>
</div>

<div style="display: flex; justify-content: space-between">
    <p>{{$data->target_segment}}</p>
    <p>:{{__('mail.Target segment')}}</p>
</div>

@endcomponent
