@extends('layouts.web-app')

@section('title') Wishlist @endsection

@section('content')
    <!-- =================Page Title Area Starts================= -->

    <div class="page-title-area pt-130 pb-120 " style="background-image: url('{{ asset('assets/site-assets/img/bg/contact-bg.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-titel-detalis  ">
                        <div class="page-title position-relative">
                            <h2>Wishlist</h2>
                        </div>
                        <div class="page-bc">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"> <i
                                                class="fas fa-home "></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Wishlist</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =================Page Title Area Ends================= -->

    <div class="product-area product-detalis-page cart-page-area  pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Variation</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($wishlists as $wishlist)
                                <tr>
                                    <td>
                                        <div class="cart-img">
                                            <a href="{{ route('product.details', $wishlist->product?->slug) }}">
                                                <img src="{{ getProductMainImage($wishlist->product?->id) }}" style="width: 120px;" alt="product">
                                            </a>
                                        </div>
                                    </td>
                                    <td class="td-width">
                                        <div class="cart-description text-left pl-20">
                                            <span>{{ $wishlist->product?->name }}</span>
                                            <p>{{ $wishlist->product?->sort_description }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-model">
                                            @if($wishlist->productVariationOption)
                                                ({{ $wishlist->productVariationOption->variation_name }})
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-price">
                                            @if($wishlist->productVariationOption)
                                                <span>₹ {{ $wishlist->productVariationOption->price }}</span>
                                            @else
                                                <span>₹ {{ $wishlist->product?->total_price }}</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-edit">
                                            <a href="javascript:void(0);" class="add-to-cart-btn" data-product-id="{{ $wishlist->product?->id }}"
                                data-product-type="{{ $wishlist->product?->product_type }}"><img src="{{ asset('assets/site-assets/img/icon/cart-red.png') }}" alt=""> Add To Cart</a>
                                            <a href="{{ route('wishlist.delete',$wishlist->id) }}"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection