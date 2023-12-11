
<html>
<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            color: #007BFF;
        }

        p {
            margin-bottom: 20px;
        }

        .greeting {
            font-size: 18px;
            font-weight: bold;
        }

        .closing {
            font-style: italic;
        }

        .emoji {
            font-size: 24px;
            margin-right: 5px;
        }
    </style>
</head>
<body>
<h1>Hello, {{ $data['name'] }}!</h1>

<p class="greeting">This is a automated sample email sent from CENTRALIZED VEHICLE RENTAL ADMINISTRATION SYSTEM.</p>

<p>We hope you're having a great day! <span class="emoji">😊</span></p>

<p class="closing">Thank you for using our service.</p>

<p class="closing">Best regards,<br>CVRA Team <br>
    <small>Tanvir Ahmed Pavel</small><br>
    <small>Shamim Ara Khan Kheya</small><br>
    <small>MD Mahabubur Rahman</small><br>
</p>
</body>
</html>
