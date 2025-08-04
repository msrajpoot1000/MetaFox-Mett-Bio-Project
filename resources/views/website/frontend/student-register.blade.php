@extends('layouts.frontend.master')

@section('title', 'Achieve Grade 9 | Student Register')

@section('write')

<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row gx-60">
            <div class="col-lg-6">
                {{-- 👉 Breeze register route --}}
                <form method="POST" action="{{ route('register') }}" class="form-style4 signup" data-bg-src="assets/img/bg/course-bg-pattern.jpg">
                    @csrf   {{-- CSRF protection --}}
                    <h2 class="form-title">SIGN UP</h2>

                    {{-- Name --}}
                    <div class="form-group">
                        <input type="text"
                               name="name"
                               placeholder="Your Name"
                               autocomplete="off"
                               required>
                    </div>

                    {{-- Email --}}
                    <div class="form-group">
                        <input type="email"
                               name="email"
                               placeholder="Email address"
                               autocomplete="off"
                               required>
                    </div>

                    {{-- Password --}}
                    <div class="form-group">
                        <input type="password"
                               name="password"
                               placeholder="Password"
                               autocomplete="off"
                               required>
                    </div>

                    {{-- Confirm Password --}}
                    <div class="form-group">
                        <input type="password"
                               name="password_confirmation"
                               placeholder="Confirm Password"
                               autocomplete="off"
                               required>
                    </div>

                    {{-- Submit --}}
                    <button type="submit" class="vs-btn">Register</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
