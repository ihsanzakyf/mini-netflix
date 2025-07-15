<x-mail::message>
# Hello!

Your membership has been expired

Expired Date: {{ $expiredDate }}

<x-mail::button :url="$renewUrl">
Renew Memberships
</x-mail::button>

Thanks, {{ $name }}<br>
{{ config('app.name') }}
</x-mail::message>
