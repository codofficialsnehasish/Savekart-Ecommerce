@extends('layouts.web-app')

@section('title')
    Shop
@endsection

@section('style')

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
                        {{-- <div class="view-as d-flex mr-30">
                            <span>View as:</span>
                            <div class="view-as-button ml-10">
                                <a href="#"><i class="fab fa-microsoft"></i></a>
                                <a href="#"><i class="fas fa-list-ul"></i></a>
                                
                            </div>
                            
                        </div> --}}
                        <form method="GET" id="filterForm" class="row">
                            <div class="sort-by d-flex mr-30">
                                <span class="mr-10">Sort by:</span>
                                <div class="sort-by-option position-relative">
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
                            <div class="show-option d-flex">
                                <span class="mr-10">Show:</span>
                                <div class="sort-by-option position-relative">
                                    <select class="show-select" name="show"
                                        onchange="document.getElementById('filterForm').submit()">
                                        <option value="4" {{ request('show') == '4' ? 'selected' : '' }}>4</option>
                                        <option value="8" {{ request('show') == '8' ? 'selected' : '' }}>8</option>
                                        <option value="12" {{ request('show') == '12' ? 'selected' : '' }}>12
                                        </option>
                                        <option value="30" {{ request('show') == '30' ? 'selected' : '' }}>30
                                        </option>
                                        <option value="50" {{ request('show') == '50' ? 'selected' : '' }}>50
                                        </option>
                                        <option value="{{ $products->total() }}"
                                            {{ request('show') == $products->total() ? 'selected' : '' }}>ALL</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if ($products->hasPages())
                    <nav class="construction-pagination float-right" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{-- Previous Page Link --}}
                            @if ($products->onFirstPage())
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $products->previousPageUrl() }}">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($products->links()->elements as $element)
                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        <li class="page-item {{ $page == $products->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($products->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $products->nextPageUrl() }}">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                @endif
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
            </div>

            <div class="row">
                <div class="col-xl-12 pt-30">
                    <div class="toolbar-navi d-inline-block ">
                        <div class="toolbar d-flex">
                            {{-- <div class="view-as d-flex mr-30">
                                <span>View as:</span>
                                <div class="view-as-button ml-10">
                                    <a href="#"><i class="fab fa-microsoft"></i></a>
                                    <a href="#"><i class="fas fa-list-ul"></i></a>
                                    
                                </div>
                            </div> --}}
                            {{-- <div class="sort-by d-flex mr-30">
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
                            </div> --}}
                            <form method="GET" id="filterForm" class="row">
                                <div class="sort-by d-flex mr-30">
                                    <span class="mr-10">Sort by:</span>
                                    <div class="sort-by-option position-relative">
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
                                <div class="show-option d-flex">
                                    <span class="mr-10">Show:</span>
                                    <div class="sort-by-option position-relative">
                                        <select class="show-select" name="show"
                                            onchange="document.getElementById('filterForm').submit()">
                                            <option value="4" {{ request('show') == '4' ? 'selected' : '' }}>4</option>
                                            <option value="8" {{ request('show') == '8' ? 'selected' : '' }}>8</option>
                                            <option value="12" {{ request('show') == '12' ? 'selected' : '' }}>12
                                            </option>
                                            <option value="30" {{ request('show') == '30' ? 'selected' : '' }}>30
                                            </option>
                                            <option value="50" {{ request('show') == '50' ? 'selected' : '' }}>50
                                            </option>
                                            <option value="{{ $products->total() }}"
                                                {{ request('show') == $products->total() ? 'selected' : '' }}>ALL</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @if ($products->hasPages())
                        <nav class="construction-pagination float-right" aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                {{-- Previous Page Link --}}
                                @if ($products->onFirstPage())
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $products->previousPageUrl() }}">
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                    </li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($products->links()->elements as $element)
                                    @if (is_array($element))
                                        @foreach ($element as $page => $url)
                                            <li class="page-item {{ $page == $products->currentPage() ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($products->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $products->nextPageUrl() }}">
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                            <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    @endif
                 </div>
   
            </div>
        </div>
    </div>

    <!-- =================Product Area Ends================= -->

@endsection

@section('script')
{{-- <script>
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
</script> --}}

@endsection
