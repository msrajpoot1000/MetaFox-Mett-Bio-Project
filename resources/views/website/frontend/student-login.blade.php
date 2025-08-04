@extends('layouts.frontend.master')

@section('title', 'Achieve Grade 9 |  Login')

@section('write')

<style>
.vs-btn a{color:#f5f8ff!important;text-decoration:underline!important;font-weight:600!important;text-decoration:none!important;}
</style>

<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row gx-60">
            <div class="col-lg-6">

            
                <form method="POST" action="{{ route('login') }}" class="form-style4 login" data-bg-src="assets/img/bg/course-bg-pattern.jpg">
                    @csrf   {{-- CSRF protection --}}
                    <h2 class="form-title">LOG IN</h2>

                    {{-- Email --}}
                    <div class="form-group">
                        <input type="email"
                               name="email"
                               id="email"
                               placeholder="Email address"
                               autocomplete="off"
                               required>
                    </div>

                    {{-- Password --}}
                    <div class="form-group">
                        <input type="password"
                               name="password"
                               id="password"
                               placeholder="Password"
                               autocomplete="off"
                               required>
                    </div>

                    {{-- Remember + Forgot --}}
                    <div class="row justify-content-between">
                        <div class="col-auto form-group">
                            <label>
                                <input type="checkbox" name="remember" id="rememberlogin">
                                Remember me
                            </label>
                        </div>
                        <div class="col-auto form-group">
                            <a class="forget-link" href="{{ route('password.request') }}">FORGOT PASSWORD?</a>
                        </div>
                    </div>

                    {{-- Submit --}}
                    <button type="submit" class="vs-btn">Login</button>

                    {{-- Register link --}}
                    <a href="{{ route('student.register') }}" class="vs-btn mt-3 d-inline-block">Register</a>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection
