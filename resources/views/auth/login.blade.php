@extends('auth.layouts.index')
@section('content')
<div class="auth-container">
    <!-- Logo di atas card -->
    <div class="text-center mb-4">
        <div class="brand-logo">
            <img src="{{ asset('assets/images/Neue.png') }}" alt="NeueuNews Logo" class="main-logo">
        </div>
    </div>

    <div class="auth-form card bg-dark">
        <div class="text-center mb-4">
            <h4 class="text-white mb-2">Welcome Back</h4>
            <p class="text-muted">Sign in to your account</p>
        </div>

        <form action="{{ route('authenticate') }}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label class="mb-2"><strong>Email Address</strong></label>
                <div class="input-group">

                    <input name="email" type="email"
                        class="form-control border-left-0 @error('email') is-invalid @enderror"
                        placeholder="Enter your email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group mb-3">
                <label class="mb-2"><strong>Password</strong></label>
                <div class="input-group">
                    <input name="password" type="password"
                        class="form-control border-left-0 @error('password') is-invalid @enderror"
                        placeholder="Enter your password">
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>
            </div>

            <div class="form-row d-flex justify-content-between align-items-center mt-3 mb-4">
                <div class="form-group mb-0">
                    <div class="form-check">
                        <input name="remember" class="form-check-input" type="checkbox" id="remember_me"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember_me">
                            Remember me
                        </label>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <a href="" class="text-primary">
                        Forgot Password?
                    </a>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block btn-lg">
                    <svg width="16" height="16" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                        <path fill-rule="evenodd"
                            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                    </svg>
                    Sign me in
                </button>
            </div>
        </form>

        <div class="text-center mt-4">
            <p class="text-muted">
                Don't have an account?
                <a href="" class="text-primary">Sign up here</a>
            </p>
        </div>
    </div>
</div>

<style>
    /* Brand Logo Styling */
    .brand-logo {
        margin-bottom: 20px;
        animation: fadeInDown 0.8s ease-out;
    }

    .main-logo {
        width: 150px;
        height: auto;
        max-width: 200px;
        filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.4));
        transition: all 0.3s ease;
    }

    .main-logo:hover {
        transform: translateY(-2px);
        filter: drop-shadow(0 6px 16px rgba(0, 0, 0, 0.5));
    }

    /* Input Group Styling */
    .input-group-text {
        background-color: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: rgba(255, 255, 255, 0.7);
    }

    .form-control.border-left-0 {
        border-left: none;
    }

    .form-control:focus+.input-group-text,
    .input-group-text+.form-control:focus {
        border-color: #007bff;
    }

    /* Animation */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
        .main-logo {
            width: 120px;
        }

        .brand-logo {
            margin-bottom: 15px;
        }
    }

    @media (min-width: 992px) {
        .main-logo {
            width: 180px;
        }
    }
</style>
@endsection