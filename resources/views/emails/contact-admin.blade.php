<div style="font-family:Arial,sans-serif;color:#111;line-height:1.6;">
    <h1>New Contact Request</h1>
    <p>A client submitted the contact form. Details are below:</p>

    <ul>
        <li><strong>Name:</strong> {{ $data['name'] }}</li>
        <li><strong>Email:</strong> {{ $data['email'] }}</li>
        <li><strong>Phone:</strong> {{ $data['phone'] ?? 'N/A' }}</li>
        <li><strong>Company:</strong> {{ $data['company'] ?? 'N/A' }}</li>
        <li><strong>Subject:</strong> {{ $data['subject'] }}</li>
        <li><strong>Budget Range:</strong> {{ $data['budget'] ?? 'N/A' }}</li>
        <li><strong>Found via:</strong> {{ $data['source'] ?? 'N/A' }}</li>
    </ul>

    <p><strong>Message</strong></p>
    <div style="padding:1rem;background:#f5f5f5;border-radius:8px;white-space:pre-wrap;">{{ $data['message'] }}</div>

    <p>Please respond to the client at {{ $data['email'] }} as soon as possible.</p>
</div>
