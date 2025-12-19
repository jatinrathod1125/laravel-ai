@extends('layouts.auth')

@section('title', 'Forgot password')

@section('content')

<body class="register">

    <div class="dash-board-main-wrapper pt--10">
        <div class="left-side-bar">
            <div class="inner">
                <div class="single-menu-wrapper">
                    <a href="/" class="single-menu">
                        <div class="icon">
                            <img src="{{ URL::asset('build/images/icons/01.png') }}" alt="icons">
                        </div>
                        <p>Home</p>
                    </a>
                    <a href="community-feed" class="single-menu">
                        <div class="icon">
                            <img src="{{ URL::asset('build/images/icons/02.png') }}" alt="icons">
                        </div>
                        <p>Community Feed</p>
                    </a>
                    <a href="manage-subscription" class="single-menu">
                        <div class="icon">
                            <img src="{{ URL::asset('build/images/icons/03.png') }}" alt="icons">
                        </div>
                        <p>Manage Subscription</p>
                    </a>
                </div>
                <div class="single-menu-wrapper">
                    <a href="chatbot" class="single-menu">
                        <div class="icon">
                            <img src="{{ URL::asset('build/images/icons/04.png') }}" alt="icons">
                        </div>
                        <p>AI Chat Bot</p>
                    </a>
                    <a href="image-generator" class="single-menu">
                        <div class="icon">
                            <img src="{{ URL::asset('build/images/icons/05.png') }}" alt="icons">
                        </div>
                        <p>Image Generator</p>
                    </a>
                    <a href="voicegenerator" class="single-menu">
                        <div class="icon">
                            <img src="{{ URL::asset('build/images/icons/06.png') }}" alt="icons">
                        </div>
                        <p>Voice Generate</p>
                    </a>
                </div>
                <div class="single-menu-wrapper">
                    <a href="register" class="single-menu">
                        <div class="icon">
                            <img src="{{ URL::asset('build/images/icons/07.png') }}" alt="icons">
                        </div>
                        <p>Register</p>
                    </a>
                    <a class="collapse-btn collapsed single-menu" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <div class="icon">
                            <img src="{{ URL::asset('build/images/icons/08.png') }}" alt="icons">
                        </div>
                        <p>Settings</p>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="submenu rts-default-sidebar-list">
                            <li>
                                <a href="faq">
                                    <i class="fa-sharp fa-regular fa-user"></i>
                                    <span>FAQ's</span>
                                </a>
                            </li>
                            <li>
                                <a href="login">
                                    <i class="fa-sharp fa-regular fa-shopping-bag"></i>
                                    <span>log In</span>
                                </a>
                            </li>
                            <li>
                                <a href="reset-password">
                                    <i class="fa-sharp fa-regular fa-users"></i>
                                    <span>Reset Password</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="login" class="single-menu">
                        <div class="icon">
                            <img src="{{ URL::asset('build/images/icons/09.png') }}" alt="icons">
                        </div>
                        <p>Logout</p>
                    </a>
                </div>
            </div>
            <div class="bottom-user">
                <div class="user-wrapper">
                    <img src="{{ URL::asset('build/images/avatar/02.png') }}" alt="avatar">
                    <div class="info">
                        <h6 class="title">Mack Gok</h6>
                        <a href="#">openup@net.com</a>
                    </div>
                    <span>Free</span>
                </div>
                <div class="pro-upgrade">
                    <button class="rts-btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                        <img src="{{ URL::asset('build/images/icons/14.png') }}" alt="icons">
                        Upgrade To Pro
                    </button>
                </div>
            </div>
        </div>
        <div class="main-center-content-m-left center-content">
            <div class="rts-register-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-form-s-wrapper reset text-start ptb--150 ptb_sm--50">
                                <div class="head">
                                    <h5 class="title">Reset Your Password</h5>
                                    <p class="mb--20">Strong passwords include numbers, letters, and
                                        punctuation marks.</p>
                                </div>
                                <div class="body">
                                    <form action="#">
                                        <div class="input-wrapper">
                                            <div >
                                                <input type="email" name="useremail" placeholder="Enter your mail" >
                                            </div>
                                        </div>
                                        <div class="check-wrapper">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    I agree to privacy policy &amp; terms
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="rts-btn btn-primary">Send Reset Link</button>
                                        <p><a href="login"><i class="fa-solid fa-arrow-left"></i> Back to Login</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection