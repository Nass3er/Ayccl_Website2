<div style="font-family: Arial, sans-serif; line-height:1.6;">
    <h2 style="margin:0 0 10px 0;">{{ $title ?? 'New Submission' }}</h2>
    <p>{{ $intro ?? 'A new form was submitted on the website.' }}</p>

    <h3 style="margin-top:20px;">Submitted Data</h3>
    <ul>
        @foreach(($data ?? []) as $k => $v)
            <li><strong>{{ $k }}:</strong> {{ is_array($v) ? json_encode($v) : $v }}</li>
        @endforeach
    </ul>

    <p style="margin-top:20px;">This email was sent automatically by {{ config('app.name') }}.</p>
</div>


