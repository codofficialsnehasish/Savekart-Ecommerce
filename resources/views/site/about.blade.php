@extends('layouts.web-app')

@section('title') About Us @endsection

@section('content')

    <!-- =================Page Title Area Starts================= -->

    <div class="page-title-area pt-130 pb-120 " style="background-image: url('{{ asset('assets/site-assets/img/bg/chechout-page-bg.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-titel-detalis  ">
                        <div class="page-title position-relative">
                            <h2>About</h2>
                        </div>
                        <div class="page-bc">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"> <i
                                                class="fas fa-home "></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">About</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================= Page Title Area End ================= -->

    <!-- ================= About Area Starts ================= -->
    <div class="about-area pt-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="about-detalis">
                        <div class="section-title">
                            <h2>Our History</h2>
                        </div>
                        <div class="about-text mb-35">
                            <p>Sed id interdum urna. Nam ac elit a ante commodo tristique. condimentum vehicula a hendrerit ac nisi. hendrerit ac nisi Lorem ipsum dolor sit amet Vestibulum imperdiet nibh vel magna lacinia ultrices. Sed id interdum urna.</p>
                            <p>Nullam lacinia faucibus risus, a euismod lorem tincidunt id. Donec maximus placerat tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse faucibus sed dolor eget posuere.Sed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi Lorem ipsum dolor sit amet.</p>
                        </div>
                        <a class="abtn b-btn pl-40 pr-40 pt-20 pb-20" href="shop-grid-page.html">Start Now</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="about-img d-none d-md-block">
                        <img src="{{ asset('assets/site-assets/img/blog/about-img.jpg') }}" alt="about-img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================= About Area Ends ================= -->
    <!-- ================= Video Area Starts ================= -->
    <div class="video-area pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video-detalis position-relative">
                        <img src="{{ asset('assets/site-assets/img/blog/video-img.jpg') }}" alt="video">
                        <div class="about-video-btn">
                            <a href="https://vimeo.com/208147878" class="mfp-iframe">
                                <div class="video-icon">
                                    <img src="{{ asset('assets/site-assets/img/icon/play-icon.png') }}" alt="">
                                </div>
                              <div class="about-video-btn-cycle">
                                <div class="about-video-btn-cycle2"></div>
                              </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
 
    <!-- ================= Video Area Ends ================= -->
@endsection