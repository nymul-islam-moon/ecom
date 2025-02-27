<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Vendor Registration Confirmation</title>
</head>

<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2>Vendor Registration Confirmation</h2>

    <p>Dear {{ $vendor->name }},</p>

    <p>Congratulations! Your vendor registration has been successfully processed.</p>

    <p><strong>Vendor Details:</strong></p>
    <ul>
        <li><strong>Name:</strong> {{ $vendor->name }}</li>
        <li><strong>Email:</strong> {{ $vendor->email }}</li>
        <li><strong>Phone:</strong> {{ $vendor->phone }}</li>
        <li><strong>Status:</strong> {{ ucfirst($vendor->status) }}</li>
    </ul>

    <p>You can now access our vendor portal using your registered email. If you have any questions, feel free to contact
        us.</p>

    <p>Best regards,</p>
    <p><strong>{{ config('app.name') }}</strong></p>
</body>

</html>
