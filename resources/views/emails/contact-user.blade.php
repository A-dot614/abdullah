<div style="font-family:Arial,sans-serif;color:#111;line-height:1.6;">
    <h1>Thanks for reaching out!</h1>
    <p>Hi {{ $data['name'] }},</p>
    <p>Thank you for your message. I received your inquiry and will respond within 24-48 hours.</p>

    <p><strong>Message summary:</strong></p>
    <div style="padding:1rem;background:#f5f5f5;border-radius:8px;white-space:pre-wrap;">{{ $data['message'] }}</div>

    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    <p><strong>Budget Range:</strong> {{ $data['budget'] ?? 'N/A' }}</p>

    <p>If you need to update anything, reply to this email and I will get back to you.</p>
    <p>Best,<br>Abdullah</p>
</div>
