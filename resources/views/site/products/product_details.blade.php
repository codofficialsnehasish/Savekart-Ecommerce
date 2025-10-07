@extends('layouts.web-app')
@section('style')

@endsection
@section('title')
    Product Details
@endsection

@section('content')

    <!-- =================Page Title Area Starts================= -->

    <div class="page-title-area pt-130 pb-120 " style="background-image: url({{ asset('assets/site-assets/img/bg/contact-bg.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-titel-detalis  ">
                        <div class="page-title position-relative">
                            <h2>Shop Page</h2>
                        </div>
                        <div class="page-bc">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"> <i
                                                class="fas fa-home "></i>Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('product.all') }}"> </i>Shop</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">{{ $product->name }}</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =================Page Title Area Starts================= -->

    <!-- =================Product Area Starts================= -->

    <div class="product-area product-shop-page  product-list-page product-detalis-page  pt-50 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-6 col-sm-12">
                    @include('site.products._preview')
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                    <div class="product-wrapper product-wrapper-2 pt-60">
                        <div class="product-detalis">
                            <h6><a href="javascript:void(0);">{{ $product->name }}</a></h6>
                            <ul class="rating d-flex pl-0 pt-10 pb-10">
                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                                <li><i class="far fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <div class="product-interested pb-20">
                                {!! $product->sort_description !!}
                            </div>
                            <div class="price d-inline-block pb-25">
                                <span>₹ {{ $product->total_price }}</span>
                                @if($product->discount_price != 0)
                                <del>₹ {{ $product->price }}</del>
                                @endif
                            </div>
                            <div class="product-number d-flex pb-30">
                                @if ($product->product_type == 'attribute')
                                    @foreach ($product->variations as $variation)
                                        <div class="pd_clr">
                                            <h4>{{ $variation->name }}:</h4>
                                            <div class="d-flex">
                                            @foreach ($variation->options as $option)
                                                @if ($option->variation_type == 'color')
                                                    <a href="#" class="color-option variation-option"
                                                        data-option-id="{{ $option->id }}" 
                                                        data-price="{{ $option->price }}"
                                                        data-variation-id="{{ $variation->id }}"
                                                        data-variation-name="{{ $variation->name }}"
                                                        data-option-value="{{ $option->value }}"
                                                        data-image-url="{{ $product->media->firstWhere('custom_properties.option_id', $option->id)?->getUrl() }}"
                                                        style="background: {{ $option->value }};">
                                                    </a>
                                                @elseif($option->variation_type == 'image')
                                                    <a href="#" class="image-option variation-option"
                                                        data-option-id="{{ $option->id }}"
                                                        data-price="{{ $option->price }}"
                                                        data-variation-id="{{ $variation->id }}"
                                                        data-variation-name="{{ $variation->name }}"
                                                        data-option-value="{{ $option->value }}"
                                                        data-image-url="{{ $product->media->firstWhere('custom_properties.option_id', $option->id)?->getUrl() }}">
                                                        <img src="{{ asset('storage/' . $option->value) }}"
                                                            alt="{{ $option->value }}" width="30" height="30">
                                                    </a>
                                                @else
                                                    <a href="#" class="text-option variation-option"
                                                        data-option-id="{{ $option->id }}"
                                                        data-price="{{ $option->price }}"
                                                        data-variation-id="{{ $variation->id }}"
                                                        data-variation-name="{{ $variation->name }}"
                                                        data-option-value="{{ $option->value }}"
                                                        data-image-url="{{ $product->media->firstWhere('custom_properties.option_id', $option->id)?->getUrl() }}">
                                                        {{ $option->value }}
                                                    </a>
                                                @endif
                                            @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                <input type="hidden" id="selected-variation-id" value="">
                                <div class="quty">
                                    <span class="pr-10">QTY:</span>
                                    <input class="qty cart-plus-minus-box" type="number" name="qttybutton" 
                                        id="quantity_6041ce9eca5d6" value="1" >                                       
                                </div>
                                <div class="availabillity pl-20">
                                    <span>Availability : <span class="pl-5"> @if($product->stock > 0) IN STOCK @else OUT OF STOCK @endif</span> </span>
                                </div>
                            </div>
                            <hr>
                            {{-- <div class="page-share-icon  d-flex pt-25 pb-20">
                                <span>Share:</span>
                                <ul class="icon pl-15  d-flex" >
                                  <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                  <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                  <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                  <li><a href="#"><i class="fas fa-rss"></i></a></li>
                                </ul>
                            </div> --}}
                            <div class="cart-view d-flex">
                                <div class="cart ">
                                    <a class="add-to-cart-btn" data-product-id="{{ $product->id }}"
                                data-product-type="{{ $product->product_type }}" tabindex="0"><img src="{{ asset('assets/site-assets/img/icon/cart-red.png') }}" alt=""> Add To Cart</a>
                               </div>
                               <ul class="social-icon d-flex align-items-center pl-20">
                                {{-- <li><a href="#" tabindex="0"><i class="fa fa-retweet" aria-hidden="true"></i></a></li> --}}
                                <li><a class="add-to-wishlist"
                                data-product-id="{{ $product->id }}" data-product-type="{{ $product->product_type }}" tabindex="0"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                                {{-- <li><a class="popup-img" href="assets/img/product/product-61.png"><i class="fa fa-eye" aria-hidden="true"></i></a></li> --}}
                                
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>
    </div>

    <div class="description-area pt-10">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="description-tab pt-50 pl-50 pr-50 pb-40">
                        <nav>
                          <div class="nav nav-tabs " id="approach-tabs" role="tablist">
                            <a class="nav-item nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-controls="nav-description" aria-selected="true">description</a>
                            <a class="nav-item nav-link" id="nav-comment-tab" data-toggle="tab" href="#nav-comment" role="tab" aria-controls="nav-comment" aria-selected="false">Specifications</a>
                            <a class="nav-item nav-link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="false">review</a>
                          </div>
                        </nav>
                        <div class="tab-content mt-25 " id="nav-tabContents">
                            <div class="tab-pane  active " id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                {!! $product->long_description !!}
                            </div>
                            <div class="tab-pane " id="nav-comment" role="tabpanel" aria-labelledby="nav-comment-tab">
                                <ul class="check-list">
                                    @foreach($product->specifications as $spec)
                                    <li class="check-list__item">
                                        <i class="fa fa-arrow-circle-right"></i>
                                        <span class="custom-attribute-name">{{ $spec->title }}</span>
                                        :
                                        <span class="custom-attribute-value">{{ $spec->description }}</span> 
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
                                <div class="pda_rtng_area fix">
                                    @php
                                        $approvedReviews = $product->reviews()->where('is_approved', false);
                                        $reviewCount = $approvedReviews->count();
                                        $averageRating = $reviewCount > 0 ? number_format($approvedReviews->avg('rating'), 1) : '0.0';
                                    @endphp

                                    <h4>{{ $averageRating }} <span>(Overall)</span></h4>
                                    <span>
                                        @if($reviewCount > 0)
                                            Based on {{ $reviewCount }} {{ Str::plural('Comment', $reviewCount) }}
                                        @else
                                            No reviews yet
                                        @endif
                                    </span>
                                </div>

                                @if($reviewCount > 0)
                                    <div class="rtng_cmnt_area fix">
                                        @foreach($approvedReviews->latest()->get() as $review)
                                            <div class="single_rtng_cmnt">
                                                <div class="rtngs">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= $review->rating)
                                                            <i class="fa fa-star"></i>
                                                        @else
                                                            <i class="fa fa-star-o"></i>
                                                        @endif
                                                    @endfor
                                                    <span>({{ $review->rating }})</span>
                                                </div>
                                                <div class="rtng_author">
                                                    <h3>{{ $review->user->name ?? 'Anonymous' }}</h3>
                                                    <span>{{ $review->created_at->format('H:i') }}</span>
                                                    <span>{{ $review->created_at->format('j F Y') }}</span>
                                                </div>
                                                <p>{{ $review->comment }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @auth
                                <div class="col-md-6 rcf_pdnglft">
                                    <div class="rtng_cmnt_form_area fix">
                                        <h3>Add your Comments</h3>
                                        <div class="rtng_form">
                                            <form action="{{ route('reviews.store', $product) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="star-rating animated-stars">
                                                    <input type="radio" id="star5" name="rating" value="5">
                                                    <label for="star5" class="fa-solid fa-star"></label>
                                                    <input type="radio" id="star4" name="rating" value="4">
                                                    <label for="star4" class="fa-solid fa-star"></label>
                                                    <input type="radio" id="star3" name="rating" value="3">
                                                    <label for="star3" class="fa-solid fa-star"></label>
                                                    <input type="radio" id="star2" name="rating" value="2">
                                                    <label for="star2" class="fa-solid fa-star"></label>
                                                    <input type="radio" id="star1" name="rating" value="1">
                                                    <label for="star1" class="fa-solid fa-star"></label>
                                                </div>
                                                {{-- <div class="input-area">
                                                    <input type="text" name="title" placeholder="Summarize your review" required>
                                                </div> --}}
                                                <div class="input-area">
                                                    <textarea name="comment" placeholder="What did you like or dislike? What should other customers know?" required></textarea>
                                                </div>
                                                {{-- <div class="input-area">
                                                    <label>Upload Photos (Optional)</label>
                                                    <div class="image-upload-container">
                                                        <input type="file" id="review-images" name="images[]" multiple accept="image/*">
                                                    </div>
                                                </div> --}}
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="recommend-product" name="recommend" value="1">
                                                    <label class="form-check-label" for="recommend-product">I recommend this product</label>
                                                </div>
                                                <input class="btn border-btn" type="submit" value="Add Review" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @else
                                    <div class="alert alert-info">
                                        Please <a href="{{ route('login') }}">login</a> to leave a review.
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =================Product Area Ends================= -->
    <!-- =================Product Area Starts================= -->
    @if($relatedProducts->isNotEmpty())
    <div class="product-area pt-50 ">
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
                    @foreach ($relatedProducts as $relatedProduct)
                    <div class="col-xl-3">
                        <div class="product-wrapper">
                            <div class="product-img ">
                                <img src="{{ getProductMainImage($relatedProduct->id) }}" alt="product">
                                <ul class="social-icon">
                                    {{-- <li><a href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a></li> --}}
                                    <li><a href="javascript:void(0)" class="add-to-wishlist"
                                    data-product-id="{{ $relatedProduct->id }}"><i class="far fa-heart" aria-hidden="true"></i></a></li>
                                    <li><a href="{{ route('product.details', $relatedProduct->slug) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="flip-box">
                                <div class="product-detalis pt-15 pl-20 pr-20 pb-25">
                                    {{-- <span>Men Fashion</span> --}}
                                    <h6><a href="{{ route('product.details', $relatedProduct->slug) }}">{{ $relatedProduct->name }}</a></h6>
                                    <div class="price-color ">
                                        <div class="price d-inline-block">
                                            <span>₹ {{ $relatedProduct->total_price }}</span>
                                            @if($relatedProduct->discount_price != 0)
                                            <del>₹ {{ $relatedProduct->price }}</del>
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
                                    <div class="product-info">
                                     {{-- <span>Men Fashion</span> --}}
                                    <h6><a href="{{ route('product.details', $relatedProduct->slug) }}">{{ $relatedProduct->name }}</a></h6>
                                    <div class="buy-info ">
                                        <div class="cart float-left">
                                            <a href="javascript:void(0);" class="add-to-cart-btn" data-product-id="{{ $relatedProduct->id }}"><img src="{{ asset('assets/site-assets/img/icon/cart-red.png') }}" alt=""> Add To Cart</a>
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- =================Product Area Ends================= -->

@endsection