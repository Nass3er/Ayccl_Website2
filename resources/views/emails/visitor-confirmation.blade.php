<div style="font-family: Arial, sans-serif; line-height:1.6;">
    <h2 style="margin:0 0 10px 0;">{{ $title ?? 'Thank you' }}</h2>
    <p>{{ $intro ?? 'Your message was sent successfully. We will contact you soon.' }}</p>

    <h3 style="margin-top:20px;">{{ __('Details you submitted') }}</h3>
    <ul>
        @foreach(($data ?? []) as $k => $v)
            <li><strong>{{ $k }}:</strong> {{ is_array($v) ? json_encode($v) : $v }}</li>
        @endforeach
    </ul>

    <p style="margin-top:20px;">{{ __('Best regards,') }}<br>{{ config('mail.from.name') }}</p>
</div>


