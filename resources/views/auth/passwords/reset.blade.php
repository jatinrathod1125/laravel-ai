@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')

<body class="register">


    <div class="dash-board-main-wrapper">
        <div class="main-center-content-m-left center-content">
            <div class="rts-register-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- single login area start -->
                            <div class="single-form-s-wrapper">
                                <div class="head">
                                    <span>Start your Journey</span>
                                    <h5 class="title">Password Change</h5>
                                </div>
                                <div class="body">
                                    <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                        <div class="input-wrapper text-start">
                                            <div>
                                                <input type="text" class="@error('email') is-invalid @enderror" name="email"
                                                value="{{ $email ?? old('email') }}" placeholder="Enter your mail">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div>
                                                <input type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Enter your Password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div>
                                                <input type="password" class="" name="password_confirmation" placeholder="Enter your Confirm Password">
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="rts-btn btn-primary">Password Change</button>
                                        <p>If you have an account? <a class="ml--5" href="login">Sign in</a></p>
                                        
                                    </form>
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
