<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 40px 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #0f172a;
            font-size: 24px;
            margin: 0;
        }
        .header p {
            color: #64748b;
            font-size: 14px;
            margin: 5px 0 0;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: 600;
            color: #1f2937;
            font-size: 14px;
            margin-bottom: 4px;
        }
        .field-value {
            color: #0f172a;
            font-size: 16px;
            background: #f8fafc;
            padding: 10px 14px;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            word-wrap: break-word;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #e5e7eb;
            color: #94a3b8;
            font-size: 12px;
        }
        .badge {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Submission</h1>
            <p><span class="badge">TheLifeCents</span></p>
        </div>
        
        <div class="field">
            <div class="field-label">Name</div>
            <div class="field-value">{{ $data['name'] }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Email</div>
            <div class="field-value">{{ $data['email'] }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Service Required</div>
            <div class="field-value">{{ $data['service'] }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Message</div>
            <div class="field-value">{{ $data['message'] }}</div>
        </div>
        
        <div class="footer">
            <p>This email was sent from TheLifeCents Contact Form</p>
            <p>&copy; {{ date('Y') }} TheLifeCents. All rights reserved.</p>
        </div>
    </div>
</body>
</html>