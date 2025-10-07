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

    <!-- Shop Product Area -->
    {{-- <div class="shop_page_area">
        <div class="container">
            <div class="row">
                @php
                    $category = $category ?? null;
                @endphp
                @if($category && $category->slug)
                <div class="col-lg-2 col-md-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Filters</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('categories.products', $category->slug) }}" method="GET">
                                <div class="price-input">
                                    <div class="field">
                                        <span>Min</span>
                                        <input type="number" class="input-min" name="price_min" value="{{ request('price_min', 100) }}">
                                    </div>
                                    <div class="separator">-</div>
                                    <div class="field">
                                        <span>Max</span>
                                        <input type="number" class="input-max" name="price_max" value="{{ request('price_max', 100000) }}">
                                    </div>
                                </div>
                                <div class="slider">
                                    <div class="progress"></div>
                                </div>
                                <div class="range-input">
                                    <input type="range" class="range-min" min="0" max="10000" value="{{ request('price_min', 100) }}" step="100">
                                    <input type="range" class="range-max" min="0" max="10000" value="{{ request('price_max', 100000) }}" step="100">
                                </div>
                                @foreach($category->filterAttributes as $attribute)
                                <div class="filter-group mb-4 mt-4">
                                    <h6>{{ $attribute->name }}</h6>
                                        @foreach($attribute->values as $value)
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" 
                                                class="custom-control-input" 
                                                id="filter_{{ $attribute->id }}_{{ $value->id }}"
                                                name="filters[{{ $attribute->id }}][]" 
                                                value="{{ $value->value }}"
                                                {{ in_array($value->value, (array)request('filters.'.$attribute->id)) ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="filter_{{ $attribute->id }}_{{ $value->id }}">
                                                {{ $value->value }}
                                            </label>
                                        </div>
                                        @endforeach
                                </div>
                                @endforeach
                                
                                <button type="submit" class="btn btn-primary btn-block mt-3">Apply Filters</button>
                                <a href="{{ route('categories.products', $category->slug) }}" class="btn btn-outline-secondary btn-block mt-2">
                                    Reset Filters
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
                <div class="col-lg-10 col-md-9">
                    <div class="shop_bar_tp fix">
                        <form method="GET" id="filterForm">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12 col-7 short_by_area">
                                    <div class="short_by_inner">
                                        <label>Sort by:</label>
                                        <select class="sort-select" name="sort_by"
                                            onchange="document.getElementById('filterForm').submit()">
                                            <option value="" selected disabled>Choose...</option>
                                            <option value="name_desc"
                                                {{ request('sort_by') == 'name_desc' ? 'selected' : '' }}>Name Descending
                                            </option>
                                            <option value="date_desc"
                                                {{ request('sort_by') == 'date_desc' ? 'selected' : '' }}>Date Descending
                                            </option>
                                            <option value="price_asc"
                                                {{ request('sort_by') == 'price_asc' ? 'selected' : '' }}>Price Assending
                                            </option>
                                            <option value="price_desc"
                                                {{ request('sort_by') == 'price_desc' ? 'selected' : '' }}>Price Descending
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12 col-5 show_area">
                                    <div class="show_inner">
                                        <label>Show:</label>
                                        <select class="show-select" name="show"
                                            onchange="document.getElementById('filterForm').submit()">
                                            <option value="4" {{ request('show') == '4' ? 'selected' : '' }}>4</option>
                                            <option value="8" {{ request('show') == '8' ? 'selected' : '' }}>8</option>
                                            <option value="12" {{ request('show') == '12' ? 'selected' : '' }}>12
                                            </option>
                                            <option value="30" {{ request('show') == '30' ? 'selected' : '' }}>30
                                            </option>
                                            <option value="{{ $products->total() }}"
                                                {{ request('show') == $products->total() ? 'selected' : '' }}>ALL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="shop_details text-center">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-md-4 col-sm-6 col-6 col-lg-3">
                                    <div class="single_product">
                                        <div class="product_image">
                                            <a href="{{ route('product.details',$product->slug) }}">
                                                <img src="{{ getProductMainImage($product->id) }}" alt="" />
                                                
                                              
                                            </a>
                                            <a href="javascript:void(0)" class="add-to-wishlist new_badge1"
                                            data-product-id="{{ $product->id }}"><i class="fa fa-heart-o"></i></a>
                                            
                                               
                                               
                                        </div>

                                        <div class="product_btm_text">
                                            <h4><a href="{{ route('product.details', $product->slug) }}">{{ $product->name }}</a></h4>
                                            <div class="p_rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p class="price">Rs {{ $product->total_price }}</p>
                                            <button><i class="fa-solid fa-cart-shopping add-to-cart-btn" data-product-id="{{ $product->id }}"></i></button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="blog_pagination pgntn_mrgntp fix">
                            <div class="pagination text-center">
                                @if ($products->hasPages())
                                    <ul>
                                        @if ($products->onFirstPage())
                                            <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a>
                                            </li>
                                        @else
                                            <li><a href="{{ $products->previousPageUrl() }}"><i
                                                        class="fa fa-angle-left"></i></a></li>
                                        @endif

                                        @foreach ($products->links()->elements as $element)
                                            @if (is_array($element))
                                                @foreach ($element as $page => $url)
                                                    <li>
                                                        <a href="{{ $url }}"
                                                            class="{{ $page == $products->currentPage() ? 'active' : '' }}">
                                                            {{ $page }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        @endforeach

                                        @if ($products->hasMorePages())
                                            <li><a href="{{ $products->nextPageUrl() }}"><i
                                                        class="fa fa-angle-right"></i></a></li>
                                        @else
                                            <li class="disabled"><a href="#"><i class="fa fa-angle-right"></i></a>
                                            </li>
                                        @endif
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div> --}}

    <!-- =================Product Area Starts================= -->

    <div class="product-area  product-shop-page pt-50 ">
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
