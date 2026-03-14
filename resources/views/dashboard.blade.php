<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Dr.Dito Anurogo</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontAwesome5Pro.css') }}">
    <style>
        body {
            font-family: 'Sora', sans-serif;
            background: #f5f5f5;
        }
        .navbar {
            background: linear-gradient(135deg, #ff6b35 0%, #ff5722 100%);
            padding: 1rem 0;
        }
        .navbar a {
            color: white !important;
            text-decoration: none;
        }
        .container-main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        .welcome-card {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .welcome-card h1 {
            color: #1a1a1a;
            margin-bottom: 10px;
        }
        .welcome-card p {
            color: #666;
            font-size: 16px;
        }
        .btn-logout {
            background: linear-gradient(135deg, #ff6b35 0%, #ff5722 100%);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }
        .btn-logout:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container-fluid d-flex justify-content-between align-items-center px-4">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="{{ asset('assets/img/favicon/logoDA.png') }}" alt="Logo" style="max-width: 50px;">
            </a>
            <div class="d-flex align-items-center gap-3">
                <span>{{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-main">
        <div class="welcome-card">
            <h1>Welcome, {{ Auth::user()->name }}!</h1>
            <p>You are successfully logged in to your dashboard.</p>
            <p>Email: {{ Auth::user()->email }}</p>
            
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary" style="margin-top: 20px;">
                <i class="fal fa-home"></i> Back to Home
            </a>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</body>
</html>
