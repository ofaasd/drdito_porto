<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="keyword" content="resume, portfolio, personal portfolio, cv, template, responsive, html5, css3, creative, clean">
    <meta name="description" content="Login - Dr.Dito Anurogo Resume">
    <meta name="author" content="Themearray">

    <!-- Site Title
    ================================================== -->
    <title>Login - Dr.Dito Anurogo</title>
    
    <!-- Site Favicon
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon/logoDA.png') }}">

    <!-- Google Fonts
    ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap">

    <!-- All CSS Here
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontAwesome5Pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Login Custom CSS
    ================================================== -->
    <style>
        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-container {
            width: 100%;
            max-width: 450px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(255, 255, 255, 0.9) 100%);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 50px 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .login-header .logo {
            margin-bottom: 25px;
        }

        .login-header .logo img {
            max-width: 80px;
            height: auto;
        }

        .login-header h1 {
            font-size: 28px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 10px;
            letter-spacing: -0.5px;
        }

        .login-header p {
            font-size: 14px;
            color: #666;
            margin: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 8px;
            text-transform: capitalize;
        }

        .form-group input {
            width: 100%;
            padding: 12px 16px;
            font-size: 14px;
            border: 2px solid #e6e6e6;
            border-radius: 10px;
            transition: all 0.3s ease;
            background: #f9f9f9;
            font-family: 'Sora', sans-serif;
        }

        .form-group input:focus {
            outline: none;
            border-color: #ff6b35;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(255, 107, 53, 0.1);
        }

        .form-group input::placeholder {
            color: #999;
        }

        .form-group.error input {
            border-color: #cc0000;
        }

        .invalid-feedback {
            display: block;
            color: #cc0000;
            font-size: 12px;
            margin-top: 5px;
        }

        .form-check {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            gap: 8px;
        }

        .form-check input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #ff6b35;
        }

        .form-check label {
            font-size: 13px;
            color: #666;
            cursor: pointer;
            margin: 0;
            font-weight: 500;
        }

        .form-check a {
            color: #ff6b35;
            text-decoration: none;
            transition: color 0.3s ease;
            margin-left: auto;
            margin-bottom: 0;
        }

        .form-check a:hover {
            color: #ff5722;
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;
            padding: 14px 20px;
            font-size: 15px;
            font-weight: 600;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #ff6b35 0%, #ff5722 100%);
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 10px 30px rgba(255, 107, 53, 0.3);
            margin-bottom: 15px;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(255, 107, 53, 0.4);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .back-link {
            text-align: center;
            margin-top: 25px;
        }

        .back-link a {
            color: #ff6b35;
            text-decoration: none;
            font-size: 13px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: all 0.3s ease;
        }

        .back-link a:hover {
            gap: 10px;
        }

        .alert {
            padding: 12px 16px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 14px;
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-danger {
            background: #ffe5e5;
            color: #cc0000;
            border: 1px solid #ffcccc;
        }

        .alert-success {
            background: #e5ffe5;
            color: #009900;
            border: 1px solid #ccffcc;
        }

        /* Dark Mode Support */
        @media (prefers-color-scheme: dark) {
            .login-container {
                background: linear-gradient(135deg, rgba(30, 30, 30, 0.95) 0%, rgba(30, 30, 30, 0.9) 100%);
            }

            .login-header h1 {
                color: #fff;
            }

            .login-header p {
                color: #aaa;
            }

            .form-group label {
                color: #fff;
            }

            .form-group input {
                background: #2a2a2a;
                border-color: #444;
                color: #fff;
            }

            .form-group input:focus {
                border-color: #ff6b35;
                background: #333;
            }

            .form-group input::placeholder {
                color: #666;
            }

            .form-check label {
                color: #aaa;
            }
        }

        /* Responsive */
        @media (max-width: 576px) {
            .login-container {
                padding: 40px 25px;
            }

            .login-header h1 {
                font-size: 24px;
            }

            .form-group input {
                padding: 11px 14px;
                font-size: 13px;
            }

            .btn-login {
                padding: 12px 15px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Preloader Start
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="preloader">
        <div class="preShape1"></div>
        <div class="preShape2"></div>
        <h4 class="content">loading</h4>
    </div>
    <!--~~./ Preloader End ~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    main body content start here
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <main>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Login Section Start Here
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="login-wrapper">
            <div class="login-container">
                
                <!-- Login Header -->
                <div class="login-header">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/favicon/logoDA.png') }}" alt="Dr.Dito Anurogo Logo" style="max-width: 100px;">
                        </a>
                    </div>
                    <h1>Welcome Back</h1>
                    <p>Sign in to continue to your dashboard</p>
                </div>

                <!-- Alert Messages -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Login Failed!</strong>
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}" id="loginForm">
                    @csrf
                    
                    <!-- Email Field -->
                    <div class="form-group @error('email') error @enderror">
                        <label for="email">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            placeholder="Enter your email"
                            required
                            value="{{ old('email') }}"
                        >
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="form-group @error('password') error @enderror">
                        <label for="password">Password</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            placeholder="Enter your password"
                            required
                        >
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="form-check">
                        <input 
                            type="checkbox" 
                            id="remember" 
                            name="remember"
                        >
                        <label for="remember">Remember me</label>
                        
                    </div>

                    <!-- Login Button -->
                    <button type="submit" class="btn-login">Sign In</button>

                </form>

                <!-- Back to Home -->
                <div class="back-link">
                    <a href="{{ route('home') }}">
                        <i class="fal fa-arrow-left"></i>
                        Back to Home
                    </a>
                </div>

            </div>
        </section>
        <!--~~./ Login Section End~~-->

    </main>
    <!--~~./ main body content end here ~~-->

    <!-- All The JS Files
    ================================================== -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- Login Page Script -->
    <script>
        // Form validation
        const loginForm = document.getElementById('loginForm');
        if (loginForm) {
            loginForm.addEventListener('submit', function(e) {
                const email = document.getElementById('email');
                const password = document.getElementById('password');

                // Basic email validation
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email.value)) {
                    e.preventDefault();
                    alert('Please enter a valid email address');
                    email.focus();
                    return false;
                }

                // Password validation
                if (password.value.length < 6) {
                    e.preventDefault();
                    alert('Password must be at least 6 characters long');
                    password.focus();
                    return false;
                }
            });
        }
    </script>

</body>
</html>
