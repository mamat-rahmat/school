<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesan Kontak Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #f8f9fa;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 0 0 5px 5px;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #495057;
            display: block;
            margin-bottom: 5px;
        }
        .value {
            background-color: white;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 3px;
            word-wrap: break-word;
        }
        .message-content {
            min-height: 100px;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Pesan Kontak Baru</h1>
        <p>Website Sekolah</p>
    </div>
    
    <div class="content">
        <div class="field">
            <span class="label">Nama Pengirim:</span>
            <div class="value">{{ $contactData['name'] }}</div>
        </div>
        
        <div class="field">
            <span class="label">Email:</span>
            <div class="value">{{ $contactData['email'] }}</div>
        </div>
        
        <div class="field">
            <span class="label">Subjek:</span>
            <div class="value">{{ $contactData['subject'] }}</div>
        </div>
        
        <div class="field">
            <span class="label">Pesan:</span>
            <div class="value message-content">{{ $contactData['message'] }}</div>
        </div>
        
        <hr style="margin: 20px 0; border: none; border-top: 1px solid #dee2e6;">
        
        <p style="color: #6c757d; font-size: 14px; margin: 0;">
            <strong>Waktu Diterima:</strong> {{ now()->format('d F Y, H:i:s') }}<br>
            <strong>IP Address:</strong> {{ request()->ip() }}
        </p>
    </div>
</body>
</html>