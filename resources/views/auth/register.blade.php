@extends('layouts.auth')

@section('title', 'Create Account | Marketplace')

@section('left-title')
    Join our marketplace.
@endsection

@section('left-description')
    Create your free account and start buying, selling and discovering products and services.
@endsection

@section('left-features')

    <div class="feature">
        <div class="feature-icon">
            <i class="bi bi-plus-lg"></i>
        </div>
        <span>Create product & service listings</span>
    </div>

    <div class="feature">
        <div class="feature-icon">
            <i class="bi bi-geo-alt"></i>
        </div>
        <span>Reach people in your city</span>
    </div>

    <div class="feature">
        <div class="feature-icon">
            <i class="bi bi-shield-check"></i>
        </div>
        <span>Simple and secure account</span>
    </div>

@endsection


@section('content')

    <h2 class="form-title">
        Create account
    </h2>

    <p class="form-subtitle">
        Fill in your details to get started.
    </p>

    <form method="POST" action="{{ route('register') }}">

        @csrf


        {{-- Name --}}
        <div class="mb-3">

            <label class="form-label">
                Full Name
            </label>

            <div class="input-group">

                <span class="input-group-text">
                    <i class="bi bi-person"></i>
                </span>

                <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Enter your full name"
                    value="{{ old('name') }}"
                    required
                    autofocus
                >

            </div>

        </div>


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
                >

            </div>

        </div>


        {{-- Password --}}
        <div class="mb-3">

            <label class="form-label">
                Password
            </label>

            <div class="input-group">

                <span class="input-group-text">
                    <i class="bi bi-lock"></i>
                </span>

                <input
                    type="password"
                    name="password"
                    id="registerPassword"
                    class="form-control"
                    placeholder="Create a password"
                    required
                >

                <button
                    type="button"
                    class="btn btn-outline-secondary password-toggle"
                    onclick="togglePassword('registerPassword', this)">

                    <i class="bi bi-eye"></i>

                </button>

            </div>

        </div>


        {{-- Confirm Password --}}
        <div class="mb-4">

            <label class="form-label">
                Confirm Password
            </label>

            <div class="input-group">

                <span class="input-group-text">
                    <i class="bi bi-lock-fill"></i>
                </span>

                <input
                    type="password"
                    name="password_confirmation"
                    class="form-control"
                    placeholder="Confirm your password"
                    required
                >

            </div>

        </div>

        {{-- Submit --}}
        <button
            type="submit"
            class="btn btn-auth w-100">

            <i class="bi bi-person-plus me-2"></i>

            Create Account

        </button>

    </form>


    <div class="divider">
        OR
    </div>


    <p class="text-center mb-0">

        Already have an account?

        <a href="{{ route('login') }}"
           class="auth-link">

            Sign in

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