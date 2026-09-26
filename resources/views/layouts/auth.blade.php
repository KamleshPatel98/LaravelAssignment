<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Marketplace')</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- <style>
        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background: #f5f7fb;
            font-family: Arial, sans-serif;
        }

        .auth-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 15px;
        }

        .auth-card {
            width: 100%;
            max-width: 1050px;
            background: #fff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.08);
        }

        /* LEFT PANEL */

        .auth-left {
            min-height: 600px;
            padding: 55px;
            color: #fff;

            display: flex;
            flex-direction: column;
            justify-content: center;

            position: relative;
            overflow: hidden;

            background: linear-gradient(
                135deg,
                #ff7a18,
                #ff9f43
            );
        }

        .auth-left::before,
        .auth-left::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.10);
        }

        .auth-left::before {
            width: 350px;
            height: 350px;
            top: -130px;
            right: -130px;
        }

        .auth-left::after {
            width: 250px;
            height: 250px;
            bottom: -100px;
            left: -100px;
        }

        .auth-content {
            position: relative;
            z-index: 2;
        }

        .brand {
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 35px;
        }

        .brand i {
            margin-right: 8px;
        }

        .auth-left h1 {
            font-size: 42px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .auth-left p {
            font-size: 16px;
            line-height: 1.7;
            opacity: 0.92;
            max-width: 450px;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 18px;
        }

        .feature-icon {
            width: 36px;
            height: 36px;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            background: rgba(255, 255, 255, 0.18);
        }

        /* RIGHT PANEL */

        .auth-right {
            min-height: 600px;
            padding: 55px;

            display: flex;
            align-items: center;
        }

        .auth-form {
            width: 100%;
            max-width: 430px;
            margin: auto;
        }

        .form-title {
            font-size: 30px;
            font-weight: 700;
            color: #212529;
            margin-bottom: 8px;
        }

        .form-subtitle {
            color: #6c757d;
            margin-bottom: 30px;
        }

        .form-label {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .form-control {
            height: 52px;
            border-radius: 11px;
            border: 1px solid #dee2e6;
            padding: 0 15px;
        }

        .form-control:focus {
            border-color: #ff7a18;
            box-shadow: 0 0 0 0.2rem rgba(255, 122, 24, 0.12);
        }

        .input-group-text {
            background: #fff;
            border-radius: 11px 0 0 11px;
            border-right: 0;
            padding-left: 15px;
        }

        .input-group .form-control {
            border-left: 0;
            border-radius: 0 11px 11px 0;
        }

        .password-toggle {
            border-radius: 0 11px 11px 0 !important;
            border-left: 0 !important;
            background: #fff;
        }

        .btn-auth {
            height: 52px;
            border: none;
            border-radius: 11px;

            background: #ff7a18;
            color: #fff;

            font-weight: 600;

            transition: all 0.2s ease;
        }

        .btn-auth:hover {
            background: #e9680d;
            color: #fff;
            transform: translateY(-1px);
        }

        .auth-link {
            color: #ff7a18;
            text-decoration: none;
            font-weight: 600;
        }

        .auth-link:hover {
            color: #e9680d;
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 15px;

            color: #adb5bd;
            font-size: 13px;

            margin: 25px 0;
        }

        .divider::before,
        .divider::after {
            content: "";
            height: 1px;
            background: #e9ecef;
            flex: 1;
        }

        /* MOBILE */

        @media (max-width: 991px) {

            .auth-left {
                min-height: 350px;
            }

            .auth-left h1 {
                font-size: 34px;
            }

            .auth-right {
                min-height: auto;
            }
        }

        @media (max-width: 767px) {

            .auth-wrapper {
                padding: 15px;
            }

            .auth-card {
                border-radius: 18px;
            }

            .auth-left {
                min-height: auto;
                padding: 35px 25px;
            }

            .auth-left h1 {
                font-size: 30px;
            }

            .brand {
                font-size: 24px;
                margin-bottom: 25px;
            }

            .auth-left p {
                font-size: 14px;
            }

            .feature {
                margin-top: 12px;
                font-size: 14px;
            }

            .auth-right {
                padding: 35px 25px;
            }

            .form-title {
                font-size: 26px;
            }
        }
    </style> --}}

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            background: #f5f7fb;
            font-family: Arial, sans-serif;
        }

        /* =========================================
        AUTH WRAPPER
        ========================================= */

        .auth-wrapper {
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 25px 15px;
        }

        /* =========================================
        AUTH CARD
        ========================================= */

        .auth-card {
            width: 100%;
            max-width: 850px;

            background: #ffffff;

            border-radius: 20px;
            overflow: hidden;

            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.07);
        }

        /* =========================================
        LEFT SIDE
        ========================================= */

        .auth-left {
            min-height: 520px;

            padding: 40px;

            color: #ffffff;

            display: flex;
            align-items: center;

            position: relative;
            overflow: hidden;

            background: linear-gradient(
                135deg,
                #ff7a18,
                #ff9f43
            );
        }

        /* Decorative circles */

        .auth-left::before {
            content: "";

            position: absolute;

            width: 300px;
            height: 300px;

            top: -120px;
            right: -120px;

            border-radius: 50%;

            background: rgba(255, 255, 255, 0.10);
        }

        .auth-left::after {
            content: "";

            position: absolute;

            width: 220px;
            height: 220px;

            bottom: -100px;
            left: -100px;

            border-radius: 50%;

            background: rgba(255, 255, 255, 0.10);
        }

        /* Left content */

        .auth-content {
            width: 100%;

            position: relative;
            z-index: 2;
        }

        /* Brand */

        .brand {
            font-size: 27px;
            font-weight: 700;

            margin-bottom: 28px;
        }

        .brand i {
            margin-right: 7px;
        }

        /* Left heading */

        .auth-left h1 {
            font-size: 36px;
            font-weight: 700;

            line-height: 1.2;

            margin-bottom: 15px;
        }

        /* Left description */

        .auth-left p {
            max-width: 360px;

            font-size: 15px;
            line-height: 1.7;

            margin-bottom: 20px;

            opacity: 0.92;
        }

        /* Features */

        .feature {
            display: flex;
            align-items: center;

            gap: 11px;

            margin-top: 13px;

            font-size: 14px;
        }

        .feature-icon {
            width: 34px;
            height: 34px;

            flex-shrink: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: rgba(255, 255, 255, 0.18);
        }

        /* =========================================
        RIGHT SIDE
        ========================================= */

        .auth-right {
            min-height: 520px;

            padding: 40px;

            display: flex;
            align-items: center;
        }

        /* Form container */

        .auth-form {
            width: 100%;
            max-width: 360px;

            margin: auto;
        }

        /* =========================================
        FORM TITLE
        ========================================= */

        .form-title {
            margin: 0 0 7px;

            font-size: 27px;
            font-weight: 700;

            color: #212529;
        }

        .form-subtitle {
            margin-bottom: 23px;

            color: #6c757d;

            font-size: 14px;
            line-height: 1.5;
        }

        /* =========================================
        LABEL
        ========================================= */

        .form-label {
            margin-bottom: 6px;

            font-size: 13px;
            font-weight: 600;

            color: #343a40;
        }

        /* =========================================
        INPUT
        ========================================= */

        .form-control {
            height: 46px;

            padding: 0 13px;

            border: 1px solid #dee2e6;

            border-radius: 10px;

            font-size: 14px;
        }

        .form-control:focus {
            border-color: #ff7a18;

            box-shadow:
                0 0 0 0.18rem rgba(255, 122, 24, 0.12);
        }

        /* =========================================
        INPUT GROUP
        ========================================= */

        .input-group-text {
            min-width: 43px;

            justify-content: center;

            background: #ffffff;

            border: 1px solid #dee2e6;
            border-right: 0;

            border-radius: 10px 0 0 10px;

            color: #6c757d;
        }

        .input-group .form-control {
            border-left: 0;

            border-radius: 0 10px 10px 0;
        }

        /* Password toggle */

        .password-toggle {
            height: 46px;

            border: 1px solid #dee2e6 !important;
            border-left: 0 !important;

            background: #ffffff;

            color: #6c757d;

            border-radius: 0 10px 10px 0 !important;
        }

        .password-toggle:hover {
            background: #f8f9fa;

            color: #ff7a18;
        }

        /* =========================================
        BUTTON
        ========================================= */

        .btn-auth {
            width: 100%;

            height: 46px;

            border: none;

            border-radius: 10px;

            background: #ff7a18;

            color: #ffffff;

            font-size: 14px;
            font-weight: 600;

            transition: all 0.2s ease;
        }

        .btn-auth:hover {
            background: #e9680d;

            color: #ffffff;

            transform: translateY(-1px);

            box-shadow:
                0 5px 15px rgba(255, 122, 24, 0.20);
        }

        .btn-auth:active {
            transform: translateY(0);
        }

        /* =========================================
        LINKS
        ========================================= */

        .auth-link {
            color: #ff7a18;

            text-decoration: none;

            font-weight: 600;
        }

        .auth-link:hover {
            color: #e9680d;

            text-decoration: none;
        }

        /* =========================================
        CHECKBOX
        ========================================= */

        .form-check-input {
            cursor: pointer;
        }

        .form-check-input:checked {
            background-color: #ff7a18;

            border-color: #ff7a18;
        }

        .form-check-input:focus {
            border-color: #ff7a18;

            box-shadow:
                0 0 0 0.15rem rgba(255, 122, 24, 0.12);
        }

        .form-check-label {
            cursor: pointer;

            font-size: 13px;
        }

        /* =========================================
        DIVIDER
        ========================================= */

        .divider {
            display: flex;
            align-items: center;

            gap: 12px;

            margin: 21px 0;

            color: #adb5bd;

            font-size: 11px;
        }

        .divider::before,
        .divider::after {
            content: "";

            height: 1px;

            flex: 1;

            background: #e9ecef;
        }

        /* =========================================
        ALERT
        ========================================= */

        .alert {
            font-size: 13px;

            border-radius: 9px;
        }

        .alert ul {
            margin: 0;
        }

        /* =========================================
        TABLET
        ========================================= */

        @media (max-width: 991px) {

            .auth-card {
                max-width: 760px;
            }

            .auth-left,
            .auth-right {
                min-height: 500px;
            }

            .auth-left {
                padding: 32px;
            }

            .auth-right {
                padding: 32px;
            }

            .auth-left h1 {
                font-size: 32px;
            }

            .brand {
                font-size: 25px;
            }

            .auth-form {
                max-width: 340px;
            }
        }

        /* =========================================
        MOBILE
        ========================================= */

        @media (max-width: 767px) {

            body {
                background: #f5f7fb;
            }

            .auth-wrapper {
                min-height: 100vh;

                padding: 15px;
            }

            .auth-card {
                width: 100%;

                max-width: 420px;

                border-radius: 16px;
            }

            /*
            * IMPORTANT:
            * Mobile par left section completely hide
            */

            .auth-left {
                display: none !important;
            }

            /* Only form */

            .auth-right {
                width: 100%;

                min-height: auto;

                padding: 30px 23px;
            }

            .auth-form {
                width: 100%;

                max-width: 100%;
            }

            .form-title {
                font-size: 25px;
            }

            .form-subtitle {
                font-size: 13px;

                margin-bottom: 21px;
            }

            .form-control {
                height: 46px;

                font-size: 14px;
            }

            .input-group-text {
                min-width: 42px;
            }

            .password-toggle {
                height: 46px;
            }

            .btn-auth {
                height: 46px;
            }
        }

        /* =========================================
        SMALL MOBILE
        ========================================= */

        @media (max-width: 380px) {

            .auth-wrapper {
                padding: 10px;
            }

            .auth-card {
                border-radius: 14px;
            }

            .auth-right {
                padding: 25px 18px;
            }

            .form-title {
                font-size: 23px;
            }

            .form-subtitle {
                margin-bottom: 18px;
            }
        }
    </style>

    @stack('styles')

</head>

<body>

    <div class="auth-wrapper">

        <div class="auth-card row g-0">

            {{-- LEFT SIDE --}}
            <div class="col-lg-6 auth-left">

                <div class="auth-content">

                    <div class="brand">
                        <i class="bi bi-shop"></i>
                        Marketplace
                    </div>

                    <h1>
                        @yield('left-title')
                    </h1>

                    <p>
                        @yield('left-description')
                    </p>

                    @yield('left-features')

                </div>

            </div>


            {{-- RIGHT SIDE --}}
            <div class="col-lg-6 auth-right">

                <div class="auth-form">

                    @yield('content')

                </div>

            </div>

        </div>

    </div>


    @stack('scripts')

</body>

</html>