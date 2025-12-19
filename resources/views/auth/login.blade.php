@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<body class="register page-login">

    <div class="dash-board-main-wrapper pt--40">
        @include('layouts.sidebar')
        <div class="main-center-content-m-left center-content">
            <div class="rts-register-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- single login area start -->
                            <div class="single-form-s-wrapper">
                                <div class="head">
                                    <span>Welcome Back</span>
                                    <h5 class="title">Login to continue</h5>
                                </div>
                                <div class="body">
                                    <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                        <div class="input-wrapper text-start">
                                            <div>
                                                <input type="email" class=" @error('email') is-invalid @enderror" name="email" value="admin@gmail.com" placeholder="Enter your mail">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div>
                                                <input type="password" class=" @error('password') is-invalid @enderror" value="12345678" name="password" placeholder="Password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="check-wrapper">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Remember Me
                                                </label>
                                            </div>
                                            <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                                        </div>
                                        <button type="submit" class="rts-btn btn-primary">Sing In</button>
                                        <p>Don't have an account? <a class="ml--5" href="{{ route('register') }}">Sign Up for Free</a></p>
                                    </form>
                                </div>
                                <div class="other-separator">
                                    <span>or</span>
                                </div>
                                <div class="sign-in-otherway">
                                    <!-- ingle -->
                                    <a href="{{ route('google.redirect') }}">
                                    <div class="single">
                                            <div class="icon">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.98918 10.878L3.36263 13.217L1.07258 13.2654C0.388195 11.996 0 10.5437 0 9.00034C0 7.50793 0.362953 6.10055 1.00631 4.86133H1.0068L3.04559 5.23511L3.9387 7.26166C3.75177 7.80661 3.64989 8.39161 3.64989 9.00034C3.64996 9.661 3.76963 10.294 3.98918 10.878Z" fill="#FBBB00"></path>
                                                <path d="M17.8422 7.31836C17.9455 7.86279 17.9994 8.42504 17.9994 8.99967C17.9994 9.64402 17.9317 10.2725 17.8026 10.8788C17.3645 12.9419 16.2197 14.7434 14.6338 16.0182L14.6333 16.0177L12.0654 15.8867L11.7019 13.6179C12.7542 13.0007 13.5766 12.035 14.0098 10.8788H9.19727V7.31836H17.8422Z" fill="#518EF8"></path>
                                                <path d="M14.6336 16.0173L14.6341 16.0178C13.0917 17.2575 11.1325 17.9993 8.99968 17.9993C5.57227 17.9993 2.59239 16.0836 1.07227 13.2644L3.98886 10.877C4.74891 12.9054 6.70567 14.3494 8.99968 14.3494C9.98571 14.3494 10.9095 14.0828 11.7021 13.6175L14.6336 16.0173Z" fill="#28B446"></path>
                                                <path d="M14.7442 2.07197L11.8286 4.45894C11.0082 3.94615 10.0385 3.64992 8.99955 3.64992C6.65361 3.64992 4.66025 5.16013 3.93828 7.26131L1.00635 4.86098H1.00586C2.50373 1.97307 5.52119 0 8.99955 0C11.1833 0 13.1855 0.777867 14.7442 2.07197Z" fill="#F14336"></path>
                                            </svg>
                                        </div>
                                        <p>Continue with Google</p>
                                    </div>
                                </a>
                                    <!-- ingle end -->
                                </div>
                            </div>
                            <!-- single login area end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection