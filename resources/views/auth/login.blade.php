@extends('layouts.frontend.master')

@section('title', 'Login')

@section('write')


<!-- Section Container -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">


            <!-- Alert Success -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Session Status -->
            @if (session('status'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Login Card -->
            <div class="card shadow">
                <div class="card-body p-4">
                    <h4 class="text-center mb-4" style="color: #8f278b;">Login to Your Account</h4>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                   class="form-control @error('email') is-invalid @enderror" required autofocus>

                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password"
                                   class="form-control @error('password') is-invalid @enderror" required>

                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                            <label class="form-check-label" for="remember_me">
                                Remember me
                            </label>
                        </div>

                        <!-- Forgot Password + Submit -->
                        <div class="d-flex justify-content-between align-items-center">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-decoration-underline text-secondary">
                                    Forgot your password?
                                </a>
                            @endif

                            <button type="submit" class="btn text-white px-4" style="background-image: linear-gradient(66.85deg, #8f278b 0%, #bd1fca 39%, #e5008d 100%) !important;">
                                Log in
                            </button>
                        </div>
                    </form>
                    
                    <hr class="my-3">

                    <!-- Register CTA -->
                    <div class="text-center">
                        <p class="mb-2">New to Achieve Grade 9?</p>
                        <a href="{{ route('register') }}" class="btn btn-outline-primary w-100">
                            Create a New Account
                        </a>
                    </div>
                </div>
            </div> <!-- End Card -->
        </div>
    </div>
</div>
@endsection
