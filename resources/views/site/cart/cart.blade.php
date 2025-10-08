@extends('layouts.web-app')

@section('title') Cart @endsection

@section('content')

    <!-- =================Page Title Area Starts================= -->

    <div class="page-title-area pt-130 pb-120 " style="background-image: url('{{ asset('assets/site-assets/img/bg/contact-bg.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-titel-detalis  ">
                        <div class="page-title position-relative">
                            <h2>Cart</h2>
                        </div>
                        <div class="page-bc">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"> <i
                                                class="fas fa-home "></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Cart</a></li>
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
                                    <th scope="col">Action</th>
                                    <th scope="col">Quantite</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($carts as $cart_item)
                                <tr data-id="{{ $cart_item->id }}">
                                    <td>
                                        <div class="cart-img">
                                            <a href="{{ route('product.details', $cart_item->product?->slug) }}">
                                                <img src="{{ getProductMainImage($cart_item->product?->id) }}" style="width: 120px;" alt="product">
                                            </a>
                                        </div>
                                    </td>
                                    <td class="td-width">
                                        <div class="cart-description text-left pl-20">
                                            <span>{{ $cart_item->product?->name }}</span>
                                            <p>{{ $cart_item->product?->sort_description }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-model">
                                            @if($cart_item->productVariationOption)
                                                ({{ $cart_item->productVariationOption->variation_name }})
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-edit">
                                            <a href="javascript:void(0);" class="cp_remove"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-number ">
                                            <div class="quty cp_quntty">
                                                <input class="qty" type="number" name="quantity" value="{{ $cart_item->quantity }}" >                                       
                                            </div>     
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-price">
                                            @if($cart_item->productVariationOption)
                                                <span>₹ {{ $cart_item->productVariationOption->price }}</span>
                                            @else
                                                <span>₹ {{ $cart_item->product?->total_price }}</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-price">
                                            @if($cart_item->productVariationOption)
                                                <span>₹ {{ $cart_item->productVariationOption->price * $cart_item->quantity }}</span>
                                            @else
                                                <span>₹ {{ $cart_item->product?->total_price * $cart_item->quantity }}</span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="table-button text-left">
                                            <a class="b-btn pr-15 pl-15 pt-15 pb-15" href="{{ route('product.all') }}">CONTINUE SHOPPING </a>
                                            <a class="b-btn pr-15 pl-15 pt-15 pb-15 float-right" href="javascript:void(0)" onclick="location.reload()">UPDATE SHOPPING CART</a>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
            <div class="product-cart pt-35">
                <div class="row justify-content-center justify-content-lg-start">
                    <div class="col-xl-4 col-lg-4 col-md-8 col-sm-9 col-12">
                        {{-- <div class="cart-wrapper pl-20 pt-30 pr-20 pb-30">
                            <div class="section-title">
                                <h6>
                                    Estimate Shopping And Tax
                                </h6>
                            </div>
                            <div class="country pt-15">
                                <span>Country</span>
                                <input type="text" placeholder="United States">
                            </div>
                            <div class="state pt-15">
                                <span>State/Province</span>
                                <input type="text" placeholder="Please select region, state or province">
                            </div>
                            <div class="zip-code pt-15 pb-20">
                                <span>Zip/Postal Code</span>
                                <input type="text">
                            </div>
                            <div class="table-button d-flex justify-content-end">
                                <a href="#" class="b-btn  pl-20 pr-20 pb-15 pt-15">GET QUOTE</a>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-8 col-sm-9 col-12">
                        <div class="cart-wrapper pl-20 pt-30 pr-20 pb-30 mt-50 mb-50 mt-lg-0 mb-lg-0">
                            <div class="section-title">
                                <h6>
                                    Discount Code
                                </h6>
                            </div>
                            <form id="applyCouponForm">
                                @csrf
                            <div class="country pt-15 pb-20">
                                <span class="pb-10">Enter your coupon code if you have one.</span>
                                <input type="text" id="coupon_code" name="coupon_code">
                            </div>
                            <div class="table-button d-flex justify-content-end ">
                                <button type="submit" class="b-btn  pt-15 pb-15 pr-30 pl-30 ">APPLY</button>
                            </div>
                            </form>
                            <p id="coupon-message"></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-8 col-sm-9 col-12">
                        <div class="cart-wrapper pl-20 pt-30 pr-20 pb-50">
                            <div class="cart-price-area text-right">
                                <p>Subtotal <span class="d-inline-block"> ₹{{ calculate_cart_total() }}</span></p>
                                <p>Grand Total  <span class="d-inline-block"> ₹{{ calculate_cart_total() }}</span></p>
                            </div>

                            <div class="table-button d-flex justify-content-end pt-20">
                                <a href="{{ route('checkout') }}" class="b-btn  pt-20 pb-20 pr-50 pl-50 ">PROCED TO CHECKOUT</a>
                            </div>

                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>

@endsection

@section('script')
<script>
    $(document).ready(function () {
        $("#applyCouponForm").submit(function (e) {
            e.preventDefault();
            let couponCode = $("#coupon_code").val();

            $.ajax({
                url: "{{ route('cart.apply.coupon') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    coupon_code: couponCode
                },
                success: function (response) {
                    if (response.success) {
                        showToast('success', 'Success', response.message);
                        $("#cart-grandtotal").text("Rs " + response.new_total);
                    } else {
                        showToast('error', 'Error', response.message);
                    }
                }
            });
        });
    });

</script>
@endsection