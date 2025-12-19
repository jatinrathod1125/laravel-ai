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
                                    <h5 class="title">Reset Password</h5>
                                </div>
                                <div class="body">
                                    <form action="#">
                                        <div class="input-wrapper text-start">
                                            <div>
                                                <input type="text" name="useremail" placeholder="Enter your mail">
                                            </div>
                                            <div>
                                                <input type="password" name="password" placeholder="Enter your Password">
                                            </div>
                                            <div>
                                                <input type="password" name="confirm_password" placeholder="Enter your Confirm Password">
                                            </div>
                                        </div>
                                        
                                        <button class="rts-btn btn-primary">Reset Password</button>
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