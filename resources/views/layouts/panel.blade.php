<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Marketplace | @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.jpg') }}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="{{ asset('assets/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <script src="{{ asset('assets/sweet-alert2/sweet-alert2.min.js') }}"></script>
    <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('assets/select2/select2.min.css') }}">
    <style>
        .select2-container .select2-selection--single {
            height: 36px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 36px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 36px;
        }

        /* input {
        border: 0.1px solid #444444 !important;
    } */
    </style>

    @stack('styles')

    <script src="{{ asset('assets/select2/select2.min.js') }}"></script>
</head>

<body>
    <!-- Sidebar -->
    <div class="app-wrapper">
        <aside class="sidebar" id="sidebar">

            <!-- Mobile close button -->
            <div class="sidebar-header">
                <button class="btn fs-4 d-md-none" style="color: #ff7a18;" id="sidebarClose">
                    <i class="fa-solid fa-xmark"></i>
                </button>

                <h4 class="fw-bold" style="color: #ff7a18;">
                    {{-- <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo" width="40" height="40" class="me-2"> --}}
                    Marketplace
                </h4>

                <button class="btn btn-outline-secondary me-2" id="sidebarWindowHide">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
            </div>

            <ul class="nav flex-column mt-3" id="sidebarAccordion">

                {{-- Dashboard --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                        href="{{ route('dashboard') }}">
                        <i class="fa-solid fa-gauge-high"></i>
                        Dashboard
                    </a>
                </li>

                {{-- Product --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}"
                        href="{{ route('products.index') }}">

                        <i class="fa-solid fa-box-open"></i>
                        Product
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger"
                        href="{{ route('logout') }}">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Logout
                    </a>
                </li>

            </ul>
        </aside>

        <!-- Main content -->
        <main class="content">
            <nav class="navbar navbar-light bg-white shadow-sm mb-4">
                <div class="container-fluid d-flex justify-content-between align-items-center">

                    <!-- Left: Toggle + Page title -->
                    <div class="d-flex align-items-center">
                        <button class="btn btn-outline-secondary me-2" id="sidebarWindowShow" style="display: none;">
                            ☰
                        </button>
                        <button class="btn btn-outline-secondary d-md-none me-2" id="sidebarToggle">
                            ☰
                        </button>
                        <span class="navbar-brand mb-0" id="navCompanyName">
                            {{-- <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo" class="company-name" width="40" height="40" class=""> --}}
                            Marketplace
                        </span> <br>

                        
                    </div>

                    <!-- Right: Company name -->
                    <div class="company-name">
                        <!-- Right: Admin Icon Dropdown -->
                    </div>

                </div>
            </nav>

            <div class="content-body">

                <div id="customerList"
                    class="list-group position-absolute w-100 shadow"
                    style="z-index: 999;">
                </div>
                
                @yield('content')
            </div>
        </main>
    </div>

    <x-alert />
    <script>
        // success toast
        function showSuccess(msg) {
            Swal.fire({
                icon: 'success',
                title: 'Done!',
                text: msg,
                timer: 2000,
                showConfirmButton: false
            });
        }

        // error alert
        function showError(msg) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: msg
            });
        }
    </script>
    <script src="{{ asset('assets/bootstrap/bootstrap.min.js') }}"></script>

    <script>
        const sidebar = document.getElementById("sidebar");
        const toggleBtn = document.getElementById("sidebarToggle");
        const closeBtn = document.getElementById("sidebarClose");

        function isMobile() {
            return window.innerWidth <= 768;
        }

        // Mobile: open
        toggleBtn.addEventListener("click", () => {
            if (isMobile()) {
                sidebar.classList.add("show");
            }
        });

        // Mobile: close
        closeBtn.addEventListener("click", () => {
            if (isMobile()) {
                sidebar.classList.remove("show");
            }
        });

        // Safety: resize desktop <-> mobile
        window.addEventListener("resize", () => {
            if (!isMobile()) {
                sidebar.classList.remove("show");
            }
        });

        const hideBtn = $('#sidebarWindowHide');
        const showBtn = $('#sidebarWindowShow');

        hideBtn.on("click", function() {
            $('#sidebar').addClass("hide");
            $('#content').addClass("full");
            $('#navCompanyName').show();

            hideBtn.hide();
            showBtn.show();
        });

        showBtn.on("click", function() {
            $('#sidebar').removeClass("hide");
            $('#content').removeClass("full");
            $('#navCompanyName').hide();

            hideBtn.show();
            showBtn.hide();
        });
    </script>

    <script>
        // select2
        $(document).ready(function() {
            $('.select-dropdown').select2({
                width: '100%',
                placeholder: 'Select an option',
                allowClear: true
            });
        });
    </script>

    @stack('scripts')
</body>

</html>