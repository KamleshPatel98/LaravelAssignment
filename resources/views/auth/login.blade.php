@extends('layouts.auth')

@section('title', 'Login | Marketplace')

@section('left-title')
    Welcome back!
@endsection

@section('left-description')
    Buy, sell and discover products and services from people around you.
@endsection

@section('left-features')

    <div class="feature">
        <div class="feature-icon">
            <i class="bi bi-check-lg"></i>
        </div>
        <span>Find products near you</span>
    </div>

    <div class="feature">
        <div class="feature-icon">
            <i class="bi bi-check-lg"></i>
        </div>
        <span>List your products easily</span>
    </div>

    <div class="feature">
        <div class="feature-icon">
            <i class="bi bi-check-lg"></i>
        </div>
        <span>Connect with local buyers</span>
    </div>

@endsection


@section('content')

    <h2 class="form-title">
        Sign in
    </h2>

    <p class="form-subtitle">
        Enter your account details to continue.
    </p>

    <form method="POST" action="{{ route('loginSubmit') }}">

        @csrf


        {{-- Email --}}
        <div class="mb-3">

            <label class="form-label">
                Email Address
            </label>

            <div class="input-group">

                <span class="input-group-text">
                    <i class="bi bi-envelope"></i>
                </span>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Enter your email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                >

            </div>

        </div>


        {{-- Password --}}
        <div class="mb-3">

            <div class="d-flex justify-content-between">

                <label class="form-label">
                    Password
                </label>

            </div>


            <div class="input-group">

                <span class="input-group-text">
                    <i class="bi bi-lock"></i>
                </span>

                <input
                    type="password"
                    name="password"
                    id="loginPassword"
                    class="form-control"
                    placeholder="Enter your password"
                    required
                >

                <button
                    type="button"
                    class="btn btn-outline-secondary password-toggle"
                    onclick="togglePassword('loginPassword', this)">

                    <i class="bi bi-eye"></i>

                </button>

            </div>

        </div>

        {{-- Submit --}}
        <button
            type="submit"
            class="btn btn-auth w-100">

            <i class="bi bi-box-arrow-in-right me-2"></i>

            Sign In

        </button>

    </form>


    <div class="divider">
        OR
    </div>


    <p class="text-center mb-0">

        Don't have an account?

        <a href="{{ route('registerForm') }}"
           class="auth-link">

            Create account

        </a>

    </p>

@endsection


@push('scripts')

<script>

    function togglePassword(inputId, button) {

        const input = document.getElementById(inputId);
        const icon = button.querySelector('i');

        if (input.type === 'password') {

            input.type = 'text';

            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');

        } else {

            input.type = 'password';

            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');

        }

    }

</script>

@endpush