@component('mail::message')
# New Message Received

**Name:** {{ $message->name }}
**Phone No:** {{ $message->contactno ?? 'N/A' }}
**Email:** {{ $message->email }}
**Subject:** {{ $message->subject ?? 'N/A' }}
**Message:**
{{ $message->message }}

Thanks,
{{ config('app.name') }}
@endcomponent
