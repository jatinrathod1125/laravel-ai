@extends('layouts.master')

@section('title', 'Home')

@section('content')

        <div class="main-center-content-m-left main-center-content-m-left">
            <div class="banner-badge bg_image">
                <div class="inner">
                    <h3 class="title">Generate New Ideas for Your Content</h3>
                    <p class="dsic">
                        IntellectAi is the place to create, publish and monetize content using the power of AI. 
                        Use the IntellectAi AI 
                        Studio to create amazing generative images, music, and audio.
                    </p>
                    <a href="#" class="rts-btn btn-blur">Try Now</a>
                    <div class="inner-right-iamge">
                        <img src="{{ URL::asset('build/images/banner/01.png') }}" alt="banner">
                    </div>
                </div>
            </div>
            <div class="search__generator mt--50">

                <h4 class="title color-white-title-home">👋 Welcome, Mack Gok</h4>
                
                <div class="tab-content mt--50" id="pills-tabContent">
                    <!-- single tab content area start -->
                    <div class="row g-5">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- single image generator area start -->
                            <div class="single-image-generator">
                                <a href="image-generator" class="thumbnail">
                                    <img src="{{ URL::asset('build/images/generator/01.jpg') }}" alt="images">
                                </a>
                                <div class="inner-content">
                                    <div class="left-content-area">
                                        <h5 class="title">Image Generator</h5>
                                        <p class="disc">
                                            Our text-to-image feature turns your words into beautiful AI visuals.
                                        </p>
                                    </div>
                                    <a href="image-generator" class="rts-btn btn-primary">Generate</a>
                                </div>
                            </div>
                            <!-- single image generator area end -->
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- single image generator area start -->
                            <div class="single-image-generator">
                                <a href="chatbot" class="thumbnail">
                                    <img src="{{ URL::asset('build/images/generator/02.jpg') }}" alt="images">
                                </a>
                                <div class="inner-content">
                                    <div class="left-content-area">
                                        <h5 class="title">Content Generator</h5>
                                        <p class="disc">
                                            Our text-to-image feature turns your words into beautiful AI visuals.
                                        </p>
                                    </div>
                                    <a href="chatbot" class="rts-btn btn-primary">Generate</a>
                                </div>
                            </div>
                            <!-- single image generator area end -->
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <!-- single image generator area start -->
                            <div class="single-image-generator">
                                <a href="voicegenerator" class="thumbnail">
                                    <img src="{{ URL::asset('build/images/generator/03.jpg') }}" alt="images">
                                </a>
                                <div class="inner-content">
                                    <div class="left-content-area">
                                        <h5 class="title">Voice Generator</h5>
                                        <p class="disc">
                                            Our text-to-image feature turns your words into beautiful AI visuals.
                                        </p>
                                    </div>
                                    <a href="voicegenerator" class="rts-btn btn-primary">Generate</a>
                                </div>
                            </div>
                            <!-- single image generator area end -->
                        </div>
                    </div>
                    <!-- single tab content area end -->
                </div>
            </div>
            <div class="copyright-area-bottom">
                <p> <a href="#">ThemeWant©</a> 2024. All Rights Reserved.</p>
            </div>
        </div>
@endsection    