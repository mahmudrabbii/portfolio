<div style="max-width:600px;margin:auto;font-family:Segoe UI,Arial,sans-serif;background:#ffffff;border:1px solid #eee;border-radius:8px;overflow:hidden;">

    <div style="background:#dd714d;color:#ffffff;padding:20px;text-align:center;">
        <h2 style="margin:0;">📩 New Query From Website</h2>
    </div>

    <div style="padding:25px;line-height:1.6;color:#333;">

        <p style="margin-bottom:12px;">
            <strong style="color:#555;">Email:</strong><br>
            <span style="background:#f8f8f8;padding:8px 12px;border-radius:4px;display:inline-block;">
                {{ $email }}
            </span>
        </p>

        <p style="margin-bottom:12px;">
            <strong style="color:#555;">Contact:</strong><br>
            <span style="background:#f8f8f8;padding:8px 12px;border-radius:4px;display:inline-block;">
                {{ $contact }}
            </span>
        </p>

        <p style="margin-bottom:6px;">
            <strong style="color:#555;">Description:</strong>
        </p>

        <div style="background:#f9f9f9;border-left:4px solid #dd714d;padding:12px 15px;border-radius:4px;">
            {{ $description }}
        </div>

    </div>

    <div style="background:#fafafa;padding:12px;text-align:center;font-size:12px;color:#888;">
        This message was sent from your website contact form.
    </div>

</div>