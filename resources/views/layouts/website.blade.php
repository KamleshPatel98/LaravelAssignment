<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Marketplace')</title>

    <meta name="description"
          content="@yield('description', 'Buy and sell products and services near you.')">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    {{-- Google Font --}}
    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f7f8f9;
            color: #1f2937;
        }

        a {
            text-decoration: none;
        }

        /* ==============================
           Navbar
        ============================== */

        .main-navbar {
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            position: sticky;
            top: 0;
            z-index: 1030;
        }

        .navbar-brand {
            font-size: 28px;
            font-weight: 800;
            color: #002f34;
            letter-spacing: -1px;
        }

        .navbar-brand span {
            color: #00a49f;
        }

        .nav-link {
            color: #374151;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #00a49f;
        }

        .sell-btn {
            border: 2px solid #002f34;
            border-radius: 30px;
            padding: 9px 22px;
            font-weight: 700;
            color: #002f34;
            background: white;
        }

        .sell-btn:hover {
            background: #002f34;
            color: white;
        }

        /* ==============================
           Search
        ============================== */

        .search-section {
            background: #ffffff;
            padding: 22px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .search-box {
            border: 1px solid #d1d5db;
            border-radius: 8px;
            overflow: hidden;
            background: #fff;
        }

        .search-box input,
        .search-box select {
            border: 0;
            box-shadow: none !important;
            height: 50px;
        }

        .search-location {
            border-right: 1px solid #d1d5db;
        }

        .search-btn {
            background: #002f34;
            color: white;
            border: 0;
            width: 55px;
        }

        .search-btn:hover {
            background: #004b52;
            color: white;
        }

        /* ==============================
           Hero
        ============================== */

        .hero-section {
            background: linear-gradient(
                135deg,
                #e9ffff,
                #f7f8f9
            );
            padding: 55px 0;
        }

        .hero-title {
            font-size: 42px;
            font-weight: 800;
            color: #002f34;
        }

        .hero-text {
            color: #667085;
            font-size: 17px;
            line-height: 1.7;
        }

        .hero-btn {
            background: #00a49f;
            color: white;
            padding: 12px 25px;
            border-radius: 7px;
            font-weight: 600;
        }

        .hero-btn:hover {
            background: #008b87;
            color: white;
        }

        /* ==============================
           Section
        ============================== */

        .section-title {
            color: #002f34;
            font-size: 24px;
            font-weight: 700;
        }

        /* ==============================
           Category
        ============================== */

        .category-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 22px 10px;
            text-align: center;
            transition: .2s;
            height: 100%;
        }

        .category-card:hover {
            transform: translateY(-4px);
            border-color: #00a49f;
            box-shadow: 0 8px 25px rgba(0,0,0,.06);
        }

        .category-icon {
            width: 62px;
            height: 62px;
            margin: auto;
            border-radius: 50%;
            background: #e8fafa;
            color: #00a49f;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
        }

        .category-name {
            color: #111827;
            font-weight: 600;
            margin-top: 13px;
        }

        /* ==============================
           Product Card
        ============================== */

        .product-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            overflow: hidden;
            height: 100%;
            transition: .2s;
        }

        .product-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,.07);
        }

        .product-image {
            width: 100%;
            height: 210px;
            object-fit: cover;
            background: #eef1f2;
        }

        .product-body {
            padding: 16px;
        }

        .product-price {
            font-size: 21px;
            font-weight: 800;
            color: #002f34;
        }

        .product-name {
            font-size: 15px;
            font-weight: 600;
            color: #374151;
            margin-top: 7px;
        }

        .product-location {
            font-size: 13px;
            color: #6b7280;
            margin-top: 12px;
        }

        .product-date {
            font-size: 12px;
            color: #9ca3af;
        }

        .favorite-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 0;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            right: 12px;
            top: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,.15);
        }

        /* ==============================
           Product Detail
        ============================== */

        .detail-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
        }

        .detail-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 10px;
        }

        .detail-price {
            font-size: 34px;
            font-weight: 800;
            color: #002f34;
        }

        .seller-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 20px;
        }

        .seller-avatar {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: #e8fafa;
            color: #00a49f;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 23px;
        }

        .contact-btn {
            width: 100%;
            padding: 12px;
            border-radius: 7px;
            background: #002f34;
            color: white;
            border: 0;
            font-weight: 600;
        }

        .contact-btn:hover {
            background: #004b52;
            color: white;
        }

        /* ==============================
           Footer
        ============================== */

        footer {
            background: #002f34;
            color: white;
            margin-top: 60px;
            padding: 45px 0 25px;
        }

        footer a {
            color: #cbd5d6;
        }

        footer a:hover {
            color: white;
        }

        /* ==============================
           Mobile
        ============================== */

        @media (max-width: 767px) {

            .navbar-brand {
                font-size: 24px;
            }

            .hero-section {
                padding: 35px 0;
            }

            .hero-title {
                font-size: 30px;
            }

            .search-location {
                border-right: 0;
                border-bottom: 1px solid #d1d5db;
            }

            .product-image {
                height: 170px;
            }

            .detail-image {
                height: 300px;
            }

            .detail-price {
                font-size: 28px;
            }
        }

    </style>

    <link rel="stylesheet" href="{{ asset('assets/select2/select2.min.css') }}">
    <style>
        .select2-container .select2-selection--single {
            height: 50px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 50px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 50px;
        }
    </style>

    <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/select2/select2.min.js') }}"></script>

    @stack('styles')

</head>

<body>

{{-- Navbar --}}
<nav class="navbar navbar-expand-lg main-navbar">

    <div class="container">

        <a class="navbar-brand"
           href="{{ route('home') }}">
            Market<span>Hub</span>
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar">

            <i class="fa fa-bars"></i>

        </button>

        <div class="collapse navbar-collapse"
             id="mainNavbar">

            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('products') }}">
                        Products
                    </a>
                </li>

                @auth
                    <li class="nav-item">
                        <a href="#"
                           class="nav-link">
                            My Listings
                        </a>
                    </li>

                    <li class="nav-item">
                        <form action="{{ route('logout') }}"
                              method="GET">
                            @csrf

                            <button type="submit"
                                    class="nav-link border-0 bg-transparent">
                                Logout
                            </button>
                        </form>
                    </li>
                @else

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('login') }}">
                            Login
                        </a>
                    </li>

                @endauth

                <li class="nav-item ms-lg-2 mt-2 mt-lg-0">

                    <a href="{{ route('products.create') }}"
                       class="sell-btn">
                        <i class="fa fa-plus me-1"></i>
                        SELL
                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>


{{-- Page Content --}}
@yield('content')


{{-- Footer --}}
<footer>

    <div class="container">

        <div class="row g-4">

            <div class="col-md-4">

                <h4 class="fw-bold">
                    MarketHub
                </h4>

                <p class="text-white-50">
                    Buy and sell products and services
                    near you.
                </p>

            </div>

            <div class="col-md-2">

                <h6>Quick Links</h6>

                <ul class="list-unstyled mt-3">

                    <li class="mb-2">
                        <a href="{{ route('home') }}">
                            Home
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="#">
                            Categories
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            About Us
                        </a>
                    </li>

                </ul>

            </div>

            <div class="col-md-3">

                <h6>Popular Categories</h6>

                <ul class="list-unstyled mt-3">

                    <li class="mb-2">
                        <a href="#">Cars</a>
                    </li>

                    <li class="mb-2">
                        <a href="#">Mobiles</a>
                    </li>

                    <li class="mb-2">
                        <a href="#">Electronics</a>
                    </li>

                    <li>
                        <a href="#">Services</a>
                    </li>

                </ul>

            </div>

            <div class="col-md-3">

                <h6>Follow Us</h6>

                <div class="d-flex gap-3 mt-3">

                    <a href="#">
                        <i class="fab fa-facebook fa-lg"></i>
                    </a>

                    <a href="#">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>

                    <a href="#">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>

                </div>

            </div>

        </div>

        <hr class="border-secondary my-4">

        <div class="text-center text-white-50">
            © {{ date('Y') }} MarketHub. All rights reserved.
        </div>

    </div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

<script>
    // select2
    $(document).ready(function() {
        $('.citySelect').select2({
            width: '100%',
            placeholder: 'Select an city',
            allowClear: true
        });

        $('.categorySelect').select2({
            width: '100%',
            placeholder: 'Select an category',
            allowClear: true
        });
    });
</script>

@stack('scripts')

</body>
</html>