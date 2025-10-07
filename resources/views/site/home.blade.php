@extends('layouts.web-app')

@section('title')
    Home
@endsection

@section('content')

    <!-- =================Slider Area Starts================= -->
    @if ($sliders->isNotEmpty())
    <div class="slider-area  slider-area-4  owl-carousel position-relative">
        @foreach ($sliders as $slider)
        <div class="single-slide " style="background-image: url('{{ $slider->getFirstMediaUrl('slider') }}');">
            <div class="slider-content slider-height">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10 offset-xl-0 offset-lg-1 offset-md-1">
                            <div class="hero-text pt-15 ">    
                                <h1>
                                    {{ $slider->title }}
                                </h1>
                                <p class="pt-15 ">{{ strip_tags($slider->description) }}.</p>
                                <a href="{{ route('product.all') }}"><i class="fa fa-plus" aria-hidden="true"></i>Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{-- <div class="single-slide  " style="background-image: url(assets/img/slider/slider-bg-4.jpg);">
            <div class="slider-content slider-height">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10 offset-xl-0 offset-lg-1 offset-md-1">
                            <div class="hero-text pt-15 ">    
                                <h1>
                                    Men T-Shirt
                                </h1>
                                <p class="pt-15 ">Phasellus vel elit efficitur, gravida libero sit amet, scelerisque mauris. Morbi tortor arcu, commodo sit amet nulla sed.</p>
                                <a href="shop-detalis-page.html"><i class="fa fa-plus" aria-hidden="true"></i>Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide  " style="background-image: url(assets/img/slider/slider-bg-4.jpg);">
            <div class="slider-content slider-height">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10 offset-xl-0 offset-lg-1 offset-md-1">
                            <div class="hero-text pt-15 ">    
                                <h1>
                                    Men T-Shirt
                                </h1>
                                <p class="pt-15 ">Phasellus vel elit efficitur, gravida libero sit amet, scelerisque mauris. Morbi tortor arcu, commodo sit amet nulla sed.</p>
                                <a href="shop-detalis-page.html"><i class="fa fa-plus" aria-hidden="true"></i>Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    @endif

    <!-- =================Slider Area Ends================= -->

    <!-- =================Women-product Area Starts================= -->

    <div class="women-produt-area pb-45 pt-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-8 offset-xl-1 offset-lg-1 ">
                    <div class="product-img">
                        <img src="{{ asset('assets/site-assets/img/blog/blog-2.jpg') }}" alt="women">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-7 col-sm-7 col-12 offset-xl-1 offset-lg-1 ">
                    <div class="hero-text pt-180">
                        <h1>
                            Women Smart Shirt
                        </h1>
                        <span>Limited Offer 25% Off!</span>
                        <p>Phasellus vel elit efficitur, gravida libero sit amet, scelerisque mauris.</p>
                        <a href="shop-detalis-page.html"><i class="fa fa-plus" aria-hidden="true"></i> Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- =================Women-product Area Ends================= -->

    <!-- =================Product Area Starts================= -->

        <div class="product-area product-area-3 ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-title">
                            <h3>
                                Our Products
                            </h3>
                        </div>
                    </div>
                </div>
                <hr>

            </div>
            <div class="container pl-0 pr-0">
                <div class="custom-row ">
                    <div class="product-active pt-30">
                        <div class="col-xl-3">
                            <div class="product-wrapper mb-30">
                                <div class="product-img ">
                                    <img src="{{ asset('assets/site-assets/img/product/product-1.jpg') }}" alt="product">
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="flip-box">
                                    <div class="product-detalis pt-15 pl-20 pr-20 pb-25">
                                        <span>Men Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="price-color ">
                                            <div class="price d-inline-block">
                                                <span>$999</span>
                                                <del>$899</del>
                                            </div>
                                            <div class="color float-right d-flex">
                                                <span>Color:</span>
                                                <div class="color-set">
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                        <div class="product-info">
                                         <span>Men Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="buy-info ">
                                            <div class="cart float-left">
                                                <a href="#"><img src="{{ asset('assets/site-assets/img/icon/cart-red.png') }}" alt=""> Add To Cart</a>
                                                    
                                            </div>
                                            <ul class="rating d-flex">
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img ">
                                    <img src="{{ asset('assets/site-assets/img/product/product-30.png') }}" alt="product">
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="flip-box">
                                    <div class="product-detalis pt-15 pl-20 pr-20 pb-25">
                                        <span>Men Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="price-color ">
                                            <div class="price d-inline-block">
                                                <span>$999</span>
                                                <del>$899</del>
                                            </div>
                                            <div class="color float-right d-flex">
                                                <span>Color:</span>
                                                <div class="color-set">
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                        <span>Men Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="buy-info ">
                                            <div class="cart float-left">
                                                 <a href="#"><img src="{{ asset('assets/site-assets/img/icon/cart-red.png') }}" alt=""> Add To Cart</a>
                                            </div>
                                            <ul class="rating d-flex">
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="product-wrapper mb-30">
                                <div class="product-img sale-product ">
                                    <img src="{{ asset('assets/site-assets/img/product/product-2.jpg') }}" alt="product">
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="flip-box">
                                    <div class="product-detalis pt-15 pl-20 pr-20 pb-25">
                                        <span>Men Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="price-color ">
                                            <div class="price d-inline-block">
                                                <span>$999</span>
                                                <del>$899</del>
                                            </div>
                                            <div class="color float-right d-flex">
                                                <span>Color:</span>
                                                <div class="color-set">
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                        <span>Men Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="buy-info ">
                                            <div class="cart float-left">
                                                 <a href="#"><img src="{{ asset('assets/site-assets/img/icon/cart-red.png') }}" alt=""> Add To Cart</a>
                                            </div>
                                            <ul class="rating d-flex">
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img ">
                                    <img src="{{ asset('assets/site-assets/img/product/product-31.png') }}" alt="product">
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="flip-box">
                                    <div class="product-detalis pt-15 pl-20 pr-20 pb-25">
                                        <span>Men Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="price-color ">
                                            <div class="price d-inline-block">
                                                <span>$999</span>
                                                <del>$899</del>
                                            </div>
                                            <div class="color float-right d-flex">
                                                <span>Color:</span>
                                                <div class="color-set">
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                        <span>Men Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="buy-info ">
                                            <div class="cart float-left">
                                                 <a href="#"><img src="{{ asset('assets/site-assets/img/icon/cart-red.png') }}" alt=""> Add To Cart</a>
                                            </div>
                                            <ul class="rating d-flex">
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="product-wrapper mb-30">
                                <div class="product-img ">
                                    <img src="{{ asset('assets/site-assets/img/product/product-3.jpg') }}" alt="product">
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="flip-box">
                                    <div class="product-detalis pt-15 pl-20 pr-20 pb-25">
                                        <span>Women Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="price-color ">
                                            <div class="price d-inline-block">
                                                <span>$999</span>
                                                <del>$899</del>
                                            </div>
                                            <div class="color float-right d-flex">
                                                <span>Color:</span>
                                                <div class="color-set color-black">
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                        <span>Men Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="buy-info ">
                                            <div class="cart float-left">
                                                 <a href="#"><img src="{{ asset('assets/site-assets/img/icon/cart-red.png') }}" alt=""> Add To Cart</a>
                                            </div>
                                            <ul class="rating d-flex">
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper mb-30">
                                <div class="product-img ">
                                    <img src="{{ asset('assets/site-assets/img/product/product-32.png') }}" alt="product">
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="flip-box">
                                    <div class="product-detalis pt-15 pl-20 pr-20 pb-25">
                                        <span>Women Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="price-color ">
                                            <div class="price d-inline-block">
                                                <span>$999</span>
                                                <del>$899</del>
                                            </div>
                                            <div class="color float-right d-flex">
                                                <span>Color:</span>
                                                <div class="color-set color-black">
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                        <span>Men Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="buy-info ">
                                            <div class="cart float-left">
                                                 <a href="#"><img src="{{ asset('assets/site-assets/img/icon/cart-red.png') }}" alt=""> Add To Cart</a>
                                            </div>
                                            <ul class="rating d-flex">
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="product-wrapper mb-30">
                                <div class="product-img new-product">
                                    <img src="{{ asset('assets/site-assets/img/product/product-4.jpg') }}" alt="product">
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="flip-box">
                                    <div class="product-detalis pt-15 pl-20 pr-20 pb-25">
                                        <span>Women Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="price-color ">
                                            <div class="price d-inline-block">
                                                <span>$999</span>
                                                <del>$899</del>
                                            </div>
                                            <div class="color float-right d-flex">
                                                <span>Color:</span>
                                                <div class="color-set color-white">
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                        <span>Men Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="buy-info ">
                                            <div class="cart float-left">
                                                 <a href="#"><img src="{{ asset('assets/site-assets/img/icon/cart-red.png') }}" alt=""> Add To Cart</a>
                                            </div>
                                            <ul class="rating d-flex">
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img new-product">
                                    <img src="{{ asset('assets/site-assets/img/product/product-33.png') }}" alt="product">
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="flip-box">
                                    <div class="product-detalis pt-15 pl-20 pr-20 pb-25">
                                        <span>Women Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="price-color ">
                                            <div class="price d-inline-block">
                                                <span>$999</span>
                                                <del>$899</del>
                                            </div>
                                            <div class="color float-right d-flex">
                                                <span>Color:</span>
                                                <div class="color-set color-white">
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                        <span>Men Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="buy-info ">
                                            <div class="cart float-left">
                                                 <a href="#"><img src="{{ asset('assets/site-assets/img/icon/cart-red.png') }}" alt=""> Add To Cart</a>
                                            </div>
                                            <ul class="rating d-flex">
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="product-wrapper mb-30">
                                <div class="product-img ">
                                    <img src="{{ asset('assets/site-assets/img/product/product-2.jpg') }}" alt="product">
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="flip-box">
                                    <div class="product-detalis pt-15 pl-20 pr-20 pb-25">
                                        <span>Men Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="price-color ">
                                            <div class="price d-inline-block">
                                                <span>$999</span>
                                                <del>$899</del>
                                            </div>
                                            <div class="color float-right d-flex">
                                                <span>Color:</span>
                                                <div class="color-set">
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                        <span>Men Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="buy-info ">
                                            <div class="cart float-left">
                                                 <a href="#"><img src="{{ asset('assets/site-assets/img/icon/cart-red.png') }}" alt=""> Add To Cart</a>
                                            </div>
                                            <ul class="rating d-flex">
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img ">
                                    <img src="{{ asset('assets/site-assets/img/product/product-31.png') }}" alt="product">
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="flip-box">
                                    <div class="product-detalis pt-15 pl-20 pr-20 pb-25">
                                        <span>Men Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="price-color ">
                                            <div class="price d-inline-block">
                                                <span>$999</span>
                                                <del>$899</del>
                                            </div>
                                            <div class="color float-right d-flex">
                                                <span>Color:</span>
                                                <div class="color-set">
        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                        <span>Men Fashion</span>
                                        <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                        <div class="buy-info ">
                                            <div class="cart float-left">
                                                 <a href="#"><img src="{{ asset('assets/site-assets/img/icon/cart-red.png') }}" alt=""> Add To Cart</a>
                                            </div>
                                            <ul class="rating d-flex">
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    
    <!-- =================Product Area Ends================= -->

    <!-- =================Deal Area Starts================= -->

    <div class="deal-area deal-area-4 deal-responsive-4 deal-height position-relative pb-50" style="background-image: url('{{ asset('assets/site-assets/img/product/product-bg-8.jpg') }}');">
        <div class="container">
            <div class="deal-area-top">
                <p>Now Only $299</p>
                <a href="https://vimeo.com/staff/player" class="mfp-iframe"><i class="fa fa-play" aria-hidden="true"></i> Play This Video ----------------</a>
            </div>
            <div class="row">
                <div class="col-xl-7 col-lg-8 col-md-9 col-sm-12 offset-xl-2 offset-lg-4 offset-md-3 margin-resposive">
                    <div class="time-area">
                        
                        <h2>Men T-Shirt Fashion <span>- 2019</span></h2>
                        <span>Phasellus vel elit efficitur, gravida libero sit amet, scelerisque mauris.</span>
                        <div id="countdown">
                            <div class="cd-box">
                                <span class="numbers days">00</span>
                                <span class="strings timeRefDays">Days</span>
                            </div>
                            <div class="cd-box">
                                <span class="numbers hours">00</span>
                                <span class="strings timeRefHours">Hours</span>
                            </div>
                            <div class="cd-box">
                                <span class="numbers minutes">00</span>
                                <span class="strings timeRefMinutes">Mins</span>
                            </div>
                            <div class="cd-box">
                                <span class="numbers seconds">00</span>
                                <span class="strings timeRefSeconds">Secs</span>
                            </div>
                        </div>
                        <a href="shop-detalis-page.html"> <i class="fa fa-plus" aria-hidden="true"></i> Discover Now________</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =================Deal Area Ends================= -->
    <!-- =================Blog Area Starts================= -->

        <div class="blog-area blog-area-4 pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-title  ">
                            <h3 class="pb-5">
                                Letest Blog
                            </h3>
                            <hr>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container pl-0 pr-0">
                <div class="custom-row">
                    <div class=" blog-active-4 pt-30">
                        <div class="col-xl-4">
                            <div class="blog-wrapper">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/site-assets/img/blog/blog-7.png') }}" alt="product">
                                </div>
                                <div class="blog-detalis">
                                    <span>Admin By <span>- Alamgir Joy</span></span>
                                    <a href="shop-detalis-page.html">Nulla in consectetur ligula. In in cursus sapien Nulla .</a>
                                    <a href="shop-detalis-page.html">Red More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="blog-wrapper">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/site-assets/img/blog/blog-8.png') }}" alt="product">
                                </div>
                                <div class="blog-detalis">
                                    <span>Admin By <span>- Alamgir Joy</span></span>
                                   <a href="shop-detalis-page.html">Nulla in consectetur ligula. In in cursus sapien Nulla .</a>
                                    <a href="shop-detalis-page.html">Red More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="blog-wrapper">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/site-assets/img/blog/blog-9.png') }}" alt="product">
                                </div>
                                <div class="blog-detalis">
                                    <span>Admin By <span>- Alamgir Joy</span></span>
                                   <a href="shop-detalis-page.html">Nulla in consectetur ligula. In in cursus sapien Nulla .</a>
                                    <a href="shop-detalis-page.html">Red More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="blog-wrapper">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/site-assets/img/blog/blog-8.png') }}" alt="product">
                                </div>
                                <div class="blog-detalis">
                                    <span>Admin By <span>- Alamgir Joy</span></span>
                                   <a href="shop-detalis-page.html">Nulla in consectetur ligula. In in cursus sapien Nulla .</a>
                                    <a href="shop-detalis-page.html">Red More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
            </div>
        </div>
    <!-- =================Blog Area Ends================= -->

    <!-- =================Brand Area Starts================= -->

        <div class="brand-area ">
            <div class="container">
                <div class="brand-active">
                    <div class="single-brand">
                        <div class="brand-img">
                            <img src="{{ asset('assets/site-assets/img/brand/brand1.png') }}" alt="brand">
                        </div>
                    </div>
                    <div class="single-brand">
                        <div class="brand-img">
                            <img src="{{ asset('assets/site-assets/img/brand/brand2.png') }}" alt="brand">
                        </div>
                    </div>
                    <div class="single-brand">
                        <div class="brand-img">
                            <img src="{{ asset('assets/site-assets/img/brand/brand3.png') }}" alt="brand">
                        </div>
                    </div>
                    <div class="single-brand">
                        <div class="brand-img">
                            <img src="{{ asset('assets/site-assets/img/brand/brand4.png') }}" alt="brand">
                        </div>
                    </div>
                    <div class="single-brand">
                        <div class="brand-img">
                            <img src="{{ asset('assets/site-assets/img/brand/brand1.png') }}" alt="brand">
                        </div>
                    </div>
                    <div class="single-brand">
                        <div class="brand-img">
                            <img src="{{ asset('assets/site-assets/img/brand/brand2.png') }}" alt="brand">
                        </div>
                    </div>
                    <div class="single-brand">
                        <div class="brand-img">
                            <img src="{{ asset('assets/site-assets/img/brand/brand3.png') }}" alt="brand">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- =================Brand Area Starts================= -->

    <!-- =================Subscribe Area Starts================= -->

    <div class="subscribe-area pt-50 pb-35">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12 col-12 offset-xl-3 offset-lg-2 offset-md-1">
                    <div class="mess-icon text-center pb-30">
                        <img src="{{ asset('assets/site-assets/img/icon/email-red.png') }}" alt="messages">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12 col-12 offset-xl-3 offset-lg-2 offset-md-1">
                    <form action="#">
                        <input type="email" placeholder="Enter Your Email...">
                        <button>Subscribe</button>
                    </form>
                    <div class="discount-text text-center pt-50">
                        <p>Get Discount 30% Off !</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =================Subscribe Area Ends================= -->

    <!-- =================Product-collection Area Starts================= -->

        <div class="product-collection-area product-collection-area-2 pt-50 pb-50">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="collection-wrapper first-collection pl-100 pt-75 " style="background-image: url({{ asset('assets/site-assets/img/product/product-bg-9.png') }})">
                            <span>Up To 75%</span>
                            <p>Get Discount Info
                                Men's T-shirt Summer
                                Fashion - 2019
                            </p>
                            <a href="#">Buy Now <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="collection-wrapper second-collection pl-50 pt-50 " style="background-image: url({{ asset('assets/site-assets/img/product/product-bg-10.png') }})">
                            <span>New in Store</span>
                            <h4>Save 30%</h4>
                            <p>Nulla iaculis erat vitae erat elementum, eu interdum sem bibendum.
                            </p>
                            <a href="#">Buy Now <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="collection-wrapper third-collection  pt-60 pl-40" style="background-image: url({{ asset('assets/site-assets/img/product/product-bg-13.png') }})">
                            
                            <h4>Men Blazer
                                Collection <span>2019</span></h4>
                        <ul>
                            <li>New in Store</li>
                        </ul>
                            
                            <a href="#">view all collections <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- =================Product-collection Area Ends================= -->

@endsection
