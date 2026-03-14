<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locale Selector Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <style>
        body {
            padding: 20px;
            background: #f5f5f5;
        }
        .test-container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            max-width: 500px;
            margin: 0 auto;
        }
        h1 { 
            margin-bottom: 20px;
        }
        .test-section {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="test-container">
        <h1>🧪 Locale Selector Test</h1>
        
        <div class="test-section">
            <h3>Desktop Version</h3>
            <div style="padding: 20px; border: 1px solid #ddd; border-radius: 4px;">
                <x-locale-switcher />
            </div>
        </div>

        <div class="test-section">
            <h3>Current Locale</h3>
            <p>{{ app()->getLocale() }}</p>
        </div>

        <div class="test-section">
            <h3>Test Links</h3>
            <ul>
                <li><a href="{{ route('locale.switch', 'en') }}">Switch to English</a></li>
                <li><a href="{{ route('locale.switch', 'id') }}">Switch to Indonesian</a></li>
                <li><a href="{{ route('locale.switch', 'ar') }}">Switch to Arabic</a></li>
                <li><a href="{{ route('locale.switch', 'es') }}">Switch to Spanish</a></li>
            </ul>
        </div>

        <div class="test-section">
            <h3>Debugging Info</h3>
            <pre style="background: #f0f0f0; padding: 10px; border-radius: 4px; overflow-x: auto;">
Session Locale: {{ session('locale') }}
App Locale: {{ app()->getLocale() }}
            </pre>
        </div>

        <div class="test-section">
            <p><a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a></p>
        </div>
    </div>

    <script>
        console.log('Page loaded');
        console.log('Locale switcher elements:', document.querySelectorAll('[data-locale-switcher="true"]').length);
    </script>
</body>
</html>
