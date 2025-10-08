@extends('layouts.web-app')

@section('title')
    Shop
@endsection

@section('style')
<style>
    .price-input {
    width: 100%;
    display: flex;
    margin: 30px 0 35px;
    }
    .price-input .field {
    display: flex;
    width: 100%;
    height: 45px;
    align-items: center;
    }
    .field input {
    width: 100%;
    height: 100%;
    outline: none;
    font-size: 19px;
    margin-left: 12px;
    border-radius: 5px;
    text-align: center;
    border: 1px solid #999;
    -moz-appearance: textfield;
    }
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    }
    .price-input .separator {
    width: 130px;
    display: flex;
    font-size: 19px;
    align-items: center;
    justify-content: center;
    }
    .slider {
    height: 5px;
    position: relative;
    background: #ddd;
    border-radius: 5px;
    }
    .slider .progress {
    height: 100%;
    left: 25%;
    right: 25%;
    position: absolute;
    border-radius: 5px;
    background: #17a2b8;
    }
    .range-input {
    position: relative;
    }
    .range-input input {
    position: absolute;
    width: 100%;
    height: 5px;
    top: -5px;
    background: none;
    pointer-events: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    }
    input[type="range"]::-webkit-slider-thumb {
    height: 17px;
    width: 17px;
    border-radius: 50%;
    background: #17a2b8;
    pointer-events: auto;
    -webkit-appearance: none;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
    }
    input[type="range"]::-moz-range-thumb {
    height: 17px;
    width: 17px;
    border: none;
    border-radius: 50%;
    background: #17a2b8;
    pointer-events: auto;
    -moz-appearance: none;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
    }
</style>
@endsection
@section('content')
     
    <!-- =================Page Title Area Starts================= -->

    <div class="page-title-area pt-130 pb-120" style="background-image: url('{{ asset('assets/site-assets/img/bg/contact-bg.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-titel-detalis">
                        <div class="page-title position-relative">
                            <h2>Shop</h2>
                        </div>
                        <div class="page-bc">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"> <i
                                                class="fas fa-home "></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Shope</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =================Page Title Area Ends================= -->

    <!-- =================Product Area Starts================= -->

    <div class="product-area  product-shop-page pt-50 pb-50">
        <div class="container">
            <div class="row">
             <div class="col-xl-12 pb-50">
                <div class="toolbar-navi d-inline-block ">
                    <div class="toolbar d-flex">
                        <div class="view-as d-flex mr-30">
                            <span>View as:</span>
                            <div class="view-as-button ml-10">
                                <a href="#"><i class="fab fa-microsoft"></i></a>
                                <a href="#"><i class="fas fa-list-ul"></i></a>
                                
                            </div>
                            
                        </div>
                        <div class="sort-by d-flex mr-30">
                            <span class="mr-10">Sort by:</span>
                            <div class="sort-by-option position-relative">
                                <button id="sort-option" class="sort-option">Most Recent <i class="fas fa-caret-down"></i></button>

                                <div id="sub-sort-option" class="sub-sort-option  position-absolute " >
                                    <a href="#">Alphbet</a>
                                    <a href="#">Price</a>
                                    
                                </div>
                            </div>

                        </div>
                        <div class="show-option d-flex">
                            <span class="mr-10">Show:</span>
                            <div class="show-option-list position-relative">
                                <button id="show-option-numbe" class="show-option-number">11 <i class="fas fa-caret-down"></i></button>
                                <div id="sub-show-option" class="sub-show-option">
                                    <a href="#">20</a>
                                    <a href="#">28</a>
                                    <a href="#">32</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="construction-pagination float-right" aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
             </div>

            </div>
            
            <div class="row">
                @foreach ($products as $product)
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                    <div class="product-wrapper mb-30">
                        <div class="product-img ">
                            <img src="{{ getProductMainImage($product->id) }}" alt="product">
                            <ul class="social-icon">
                                {{-- <li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li> --}}
                                <li><a href="javascript:void(0);" class="add-to-wishlist"
                                            data-product-id="{{ $product->id }}"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                                <li><a href="{{ route('product.details',$product->slug) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="flip-box">
                            <div class="product-detalis pt-15 pl-20 pr-20 pb-25">
                                {{-- <span>Men Fashion</span> --}}
                                <h6><a href="{{ route('product.details',$product->slug) }}">{{ $product->name }}</a></h6>
                                <div class="price-color ">
                                    <div class="price d-inline-block">
                                        <span>₹ {{ $product->total_price }}</span>
                                        @if($product->discount_price != 0)
                                        <del>₹ {{ $product->price }}</del>
                                        @endif
                                    </div>
                                    {{-- <div class="color float-right d-flex">
                                        <span>Color:</span>
                                        <div class="color-set">

                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                {{-- <span>Men Fashion</span> --}}
                                <h6><a href="{{ route('product.details',$product->slug) }}">Military Patch Pocket Blazer</a></h6>
                                <div class="buy-info ">
                                    <div class="cart float-left">
                                         <a href="javascript:void(0);" class="add-to-cart-btn" data-product-id="{{ $product->id }}"
                                data-product-type="{{ $product->product_type }}"><img src="{{ asset('assets/site-assets/img/icon/cart-red.png') }}" alt=""> Add To Cart</a>
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
                @endforeach
                {{-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                    <div class="product-wrapper mb-30">
                        <div class="product-img parcent-product">
                            <img src="assets/img/product/product-49.png" alt="product">
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
                                        <div class="color-set color-gry">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                <span>Men Fashion</span>
                                <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                <div class="buy-info ">
                                    <div class="cart float-left">
                                         <a href="#"><img src="assets/img/icon/cart-red.png" alt=""> Add To Cart</a>
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
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                    <div class="product-wrapper">
                        <div class="product-img parcent-product">
                            <img src="assets/img/product/product-57.png" alt="product">
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
                                        <div class="color-set color-gry">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                <span>Men Fashion</span>
                                <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                <div class="buy-info ">
                                    <div class="cart float-left">
                                         <a href="#"><img src="assets/img/icon/cart-red.png" alt=""> Add To Cart</a>
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
                </div> --}}
                {{-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                    <div class="product-wrapper mb-30">
                        <div class="product-img sale-product ">
                            <img src="assets/img/product/product-18.png" alt="product">
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
                                         <a href="#"><img src="assets/img/icon/cart-red.png" alt=""> Add To Cart</a>
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
                            <img src="assets/img/product/product-50.png" alt="product">
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
                                        <div class="color-set color-1">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                <span>Men Fashion</span>
                                <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                <div class="buy-info ">
                                    <div class="cart float-left">
                                         <a href="#"><img src="assets/img/icon/cart-red.png" alt=""> Add To Cart</a>
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
                    <div class="product-wrapper ">
                        <div class="product-img ">
                            <img src="assets/img/product/product-58.png" alt="product">
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
                                        <div class="color-set color-1">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                <span>Men Fashion</span>
                                <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                <div class="buy-info ">
                                    <div class="cart float-left">
                                         <a href="#"><img src="assets/img/icon/cart-red.png" alt=""> Add To Cart</a>
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
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                    <div class="product-wrapper mb-30 mt-30 mt-lg-0">
                        <div class="product-img ">
                            <img src="assets/img/product/product-19.png" alt="product">
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
                                         <a href="#"><img src="assets/img/icon/cart-red.png" alt=""> Add To Cart</a>
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
                        <div class="product-img sale-product ">
                            <img src="assets/img/product/product-51.png" alt="product">
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
                                        <div class="color-set color-2">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                <span>Men Fashion</span>
                                <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                <div class="buy-info ">
                                    <div class="cart float-left">
                                         <a href="#"><img src="assets/img/icon/cart-red.png" alt=""> Add To Cart</a>
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
                    <div class="product-wrapper ">
                        <div class="product-img sale-product ">
                            <img src="assets/img/product/product-59.png" alt="product">
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
                                        <div class="color-set color-2">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                <span>Men Fashion</span>
                                <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                <div class="buy-info ">
                                    <div class="cart float-left">
                                         <a href="#"><img src="assets/img/icon/cart-red.png" alt=""> Add To Cart</a>
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
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                    <div class="product-wrapper mb-30 mt-30 mt-lg-0">
                        <div class="product-img new-product">
                            <img src="assets/img/product/product-20.png" alt="product">
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
                                         <a href="#"><img src="assets/img/icon/cart-red.png" alt=""> Add To Cart</a>
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
                            <img src="assets/img/product/product-52.png" alt="product">
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
                                        <div class="color-set color-3">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                <span>Men Fashion</span>
                                <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                <div class="buy-info ">
                                    <div class="cart float-left">
                                         <a href="#"><img src="assets/img/icon/cart-red.png" alt=""> Add To Cart</a>
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
                            <img src="assets/img/product/product-60.png" alt="product">
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
                                        <div class="color-set color-3">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detalis product-detalis-2 pt-15 pl-20 pr-20 pb-25">
                                <span>Men Fashion</span>
                                <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                <div class="buy-info ">
                                    <div class="cart float-left">
                                         <a href="#"><img src="assets/img/icon/cart-red.png" alt=""> Add To Cart</a>
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
                </div> --}}
            </div>

            <div class="row">
                <div class="col-xl-12 pt-30">
                    <div class="toolbar-navi d-inline-block ">
                        <div class="toolbar d-flex">
                            <div class="view-as d-flex mr-30">
                                <span>View as:</span>
                                <div class="view-as-button ml-10">
                                    <a href="#"><i class="fab fa-microsoft"></i></a>
                                    <a href="#"><i class="fas fa-list-ul"></i></a>
                                    
                                </div>
                            </div>
                            <div class="sort-by d-flex mr-30">
                                <span class="mr-10">Sort by:</span>
                                <div class="sort-by-option position-relative">
                                    <button id="sort-option-2" class="sort-option">Most Recent <i class="fas fa-caret-down"></i></button>
    
                                    <div id="sub-sort-optio-2" class="sub-sort-option  position-absolute " >
                                        <a href="#">Alphbet</a>
                                        <a href="#">Price</a>
                                        
                                    </div>
                                </div>
    
                            </div>
                            <div class="show-option d-flex">
                                <span class="mr-10">Show:</span>
                                <div class="show-option-list position-relative">
                                    <button id="show-option-numbe-2" class="show-option-number">11 <i class="fas fa-caret-down"></i></button>
                                    <div id="sub-show-option-2" class="sub-show-option">
                                        <a href="#">20</a>
                                        <a href="#">28</a>
                                        <a href="#">32</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="construction-pagination float-right" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                 </div>
   
            </div>
        </div>
    </div>

    <!-- =================Product Area Ends================= -->

@endsection

@section('script')
<script>
    const rangeInput = document.querySelectorAll(".range-input input"),
        priceInput = document.querySelectorAll(".price-input input"),
        range = document.querySelector(".slider .progress");

    let priceGap = 1000;

    // Event listeners for price input
    priceInput.forEach((input) => {
        input.addEventListener("input", (e) => {
            let minPrice = parseInt(priceInput[0].value),
                maxPrice = parseInt(priceInput[1].value);

            if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
                if (e.target.classList.contains("input-min")) {
                    rangeInput[0].value = minPrice;
                    range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
                } else {
                    rangeInput[1].value = maxPrice;
                    range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                }
            }
        });
    });

    // Event listeners for range sliders
    rangeInput.forEach((input) => {
        input.addEventListener("input", (e) => {
            let minVal = parseInt(rangeInput[0].value),
                maxVal = parseInt(rangeInput[1].value);

            if (maxVal - minVal < priceGap) {
                if (e.target.classList.contains("range-min")) {
                    rangeInput[0].value = maxVal - priceGap;
                } else {
                    rangeInput[1].value = minVal + priceGap;
                }
            } else {
                priceInput[0].value = minVal;
                priceInput[1].value = maxVal;
                range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
                range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
            }
        });
    });

    // 🔥 Set initial slider progress on page load
    window.addEventListener("DOMContentLoaded", () => {
        const minVal = parseInt(rangeInput[0].value);
        const maxVal = parseInt(rangeInput[1].value);
        range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
        range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    });
</script>

@endsection
