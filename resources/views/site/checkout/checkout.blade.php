@extends('layouts.web-app')

@section('title') Checkout @endsection

@section('content')

<!-- =================Page Title Area Starts================= -->

    <div class="page-title-area pt-130 pb-120 " style="background-image: url('{{ asset('assets/site-assets/img/bg/chechout-page-bg.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-titel-detalis  ">
                        <div class="page-title position-relative">
                            <h2>Checkout Page</h2>
                        </div>
                        <div class="page-bc">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"> <i
                                                class="fas fa-home "></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Checkout</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =================Page Title Area ends================= -->

    <!-- =================Checkout Area Starts================= -->
    <div class="cart-page-area checkout-page pt-50 pb-50">
        <div class="container">
            <form class="checkout_form" id="checkoutForm">
            @csrf
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                    <div class="buyer-info check-border pb-30 mb-50 mb-md-0">
                        <div class="section-title">
                            <h6>Billing Details</h6>
                            {{-- <h6 class="float-right">Login Here</h6> --}}
                        </div>
                        <div class="pl-45 pt-50 pr-100">
                            @if($address->isNotEmpty())
                                @foreach($address as $addr)
                                    <div class="radio form-check eachradio">
                                        <label>
                                            <input type="radio" name="addrradio" required class="form-check-input" required value="{{ $addr->id }}" {{ $addr->is_default==1 ? 'checked' : '' }}>
                                            <p class="name">{{ $addr->billing_first_name }} {{ !empty($addr->billing_first_name) ?', '.$addr->billing_phone_number : '' }}</p>
                                            <p>{{ get_address_by_id($addr->id) }}</p>
                                            <div class="invalid-tooltip" style="width:23%;">Address is Required</div>
                                        </label>
                                    </div>
                                @endforeach
                            @endif

                            <div class="radio form-check eachradio">
                                <label>
                                    <input type="radio" name="addrradio" class="form-check-input" required value="fornewaddr" @if($address->isEmpty()) checked @endif>
                                    <p class="name">Add New</p><div class="invalid-tooltip" style="width:23%;">Address is Required</div>
                                </label>
                            </div>

                            <div id="address-data-fild">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input name="first_name" placeholder="First name" value="{{ old('first_name') }}" class="form-control" type="text" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6">								
                                        <input name="last_name" placeholder="Last name" class="form-control" value="{{ old('last_name') }}" type="text" required>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input name="email" placeholder="Email address" class="form-control" value="{{ old('email') }}" type="email" required>
                                    </div>
                            
                                    <div class="form-group col-md-6">
                                        <input name="phone" placeholder="Phone number" class="form-control" value="{{ old('phone') }}" type="tel" required>
                                    </div>
                                </div>
                                    
                                <div class="form-row">
                                    <div class="form-group col-md-4">  
                                        <label for="country">Country:</label>
                                        <div class="custom-select-wrapper">
                                            <select id="country_id" name="country" required class="custom-select">
                                                <option value="" selected disabled>Choose...</option>
                                                @foreach($countrys as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">  
                                        <label for="states_id">State:</label>
                                        <div class="custom-select-wrapper">
                                            <select id="states_id" name="state" required class="custom-select" required>
                                                <option value="">Select Country</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">  
                                        <label for="citys_id">City:</label>
                                        <div class="custom-select-wrapper">
                                            <select id="citys_id" name="city" required class="custom-select" required>
                                                <option value="">Select State</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="address">Address:</label>    
                                    <textarea rows="3" name="address" id="address" placeholder="Street address. Apartment, suite, unit etc. (optional)" class="form-control">{{ old('address') }}</textarea>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input name="pincode" placeholder="Post code / Zip" value="{{ old('pincode') }}" class="form-control" type="text">
                                    </div>
                                    
                                    {{-- <div class="form-group col-md-6">
                                        <input name="city" placeholder="Town / City" class="form-control" type="text">
                                    </div>								 --}}
                                    
                                </div>

                                <div class="form-group">
                                    <label for="address">Order note:</label>    
                                    <textarea rows="3" placeholder="Order note" class="form-control" name="order_note">{{ old('order_note') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                    <div class="billing-detalis check-border ">
                        <div class="section-title">
                            <h6>Billing Detalis</h6>
                        </div>
                        <div class="row">
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 offset-1">
                                <div class="checkout-product-detalis pt-40 pb-45">
                                    <div class="product-title pb-5">
                                        <span>Product</span>
                                        <span class="float-right">Total</span>
                                    </div>
                                    <hr>

                                    {{-- Loop through cart items --}}
                                    @foreach($cart_items as $item)
                                        <ul class="product-total pt-20 pb-15">
                                            <li>
                                                <span>{{ $item->product?->name }}
                                                    @if($item->productVariationOption)
                                                        ({{ $item->productVariationOption->variation_name }})
                                                    @endif
                                                    × {{ $item->quantity }}
                                                </span>
                                                <span class="float-right">
                                                    @if($item->productVariationOption)
                                                        Rs {{ number_format($item->productVariationOption->price * $item->quantity, 2) }}
                                                    @else
                                                        Rs {{ number_format($item->product?->total_price * $item->quantity, 2) }}
                                                    @endif
                                                </span>
                                            </li>

                                            {{-- Optional: show variation details if they exist --}}
                                            @if($item->productVariationOption)
                                                <li>
                                                    <span class="pr-50">Variation</span>
                                                    <span>{{ $item->productVariationOption->variation_name }}</span>
                                                </li>
                                            @endif
                                        </ul>
                                        <hr>
                                    @endforeach

                                    {{-- Coupon section --}}
                                    @if (session()->has('applied_coupon'))
                                        <div class="pt-10 pb-10 text-center">
                                            <strong>
                                                Coupon Code: {{ session('applied_coupon.code') }},
                                                Discount: Rs {{ session('applied_coupon.discount') }}
                                            </strong>
                                        </div>
                                        <hr>
                                    @endif

                                    {{-- Order total --}}
                                    <div class="oreder-total pt-10">
                                        <span>Order Total</span>
                                        <span class="float-right">
                                            Rs {{ number_format($cart_items->sum(function($item) {
                                                return ($item->productVariationOption ? $item->productVariationOption->price : $item->product?->total_price) * $item->quantity;
                                            }) - (session('applied_coupon.discount') ?? 0), 2) }}
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="payment-method check-border mt-50 pb-20">
                        <div class="section-title mb-40">
                            <h6>Payment Methods</h6>
                        </div>

                        <div class="row">
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 offset-xl-1 offset-lg-1 offset-md-1 offset-sm-1 offset-1">
                                <p>Please choose your preferred payment method below.</p>

                                {{-- Payment icons --}}
                                {{-- <div class="paymen-icon pb-40">
                                    <ul class="d-flex">
                                        <li><a href="#"><i class="fab fa-cc-paypal" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-cc-stripe" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-cc-visa" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-cc-mastercard" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fab fa-cc-amex" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>

                        {{-- Payment Method Options --}}
                        <div class="payment_method pl-45">
                            <ul>
                                <li class="mb-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="cod" name="payment_method" value="cod" class="custom-control-input" checked>
                                        <label class="custom-control-label font-weight-bold" for="cod">Cash on Delivery (COD)</label>
                                        <p class="text-muted mb-0 ml-4">Pay when you receive the product at your doorstep.</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="razorpay" name="payment_method" value="razorpay" class="custom-control-input">
                                        <label class="custom-control-label font-weight-bold" for="razorpay">Razorpay</label>
                                        <p class="text-muted mb-0 ml-4">Secure online payment via Razorpay gateway.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="table-button text-center pt-30">
                        <button type="submit" id="placeOrderBtn" class="b-btn  pl-45 pr-45 pb-15 pt-15">Place Order</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- =================Checkout  Area Ends================= -->

@endsection

@section('script')

<script>
    $(document).ready(function () {
        const formRow = $('#address-data-fild');
    
        function toggleFormRow() {
            const selectedValue = $('input[name="addrradio"]:checked').val();
    
            if (selectedValue === 'fornewaddr') {
                // Show the row and make fields required
                formRow.show();
                formRow.find('input, textarea, select').prop('required', true);
            } else {
                // Hide the row and remove the required attribute
                formRow.hide();
                formRow.find('input, textarea, select').prop('required', false);
            }
        }
    
        // Attach change event to the radio buttons
        $('input[name="addrradio"]').on('change', toggleFormRow);
    
        // Initialize row visibility based on default selection
        toggleFormRow();
    });
</script>

<!-- Include Razorpay Script -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
    $(document).ready(function () {
        $('#checkoutForm').on('submit', function (e) {
            e.preventDefault();

            let paymentMethod = $('input[name="payment_method"]:checked').val();
            let placeOrderBtn = $('#placeOrderBtn');
            placeOrderBtn.prop('disabled', true); // Disable button to prevent multiple clicks

            let formData = $(this).serialize();
            // Send AJAX request to process checkout
            $.ajax({
                url: '{{ route("checkout.process") }}',
                method: 'POST',
                dataType: "json",
                data: formData,
                success: function (response) {
                    if (response.success) {
                        if (response.razorpay) {
                            // Open Razorpay payment gateway
                            let options = {
                                key: response.key,
                                amount: response.amount,
                                currency: 'INR',
                                name: 'SAVE CART',
                                description: 'Complete your order payment',
                                image: "{{ asset('assets/site-assets/img/fab.png') }}",
                                order_id: response.order_id,
                                prefill: {
                                    name: response.user.name,
                                    email: response.user.email,
                                    contact: response.user.phone,
                                },
                                handler: function (paymentResponse) {
                                    // Payment successful callback
                                    $.ajax({
                                        url: '{{ route("razorpay.callback") }}',
                                        method: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                        },
                                        data: {
                                            razorpay_payment_id: paymentResponse.razorpay_payment_id
                                        },
                                        success: function (callbackResponse) {
                                            if (callbackResponse.success) {
                                                showToast('success', 'Success', callbackResponse.message);
                                                window.location.href = callbackResponse.redirect;
                                            } else {
                                                alert(callbackResponse.message);
                                                placeOrderBtn.prop('disabled', false);
                                            }
                                        },
                                        error: function () {
                                            alert('An error occurred while verifying the payment.');
                                            placeOrderBtn.prop('disabled', false);
                                        }
                                    });
                                },
                                theme: {
                                    color: '#93c84a'
                                },
                                modal: {
                                    ondismiss: function () {
                                        // Handle Razorpay modal cancellation
                                        placeOrderBtn.prop('disabled', false); // Re-enable button on cancel
                                    }
                                }
                            };
                            let rzp = new Razorpay(options);
                            rzp.open();
                        } else {
                            // For COD, redirect directly
                            showToast('success', 'Success', response.message);
                            window.location.href = response.redirect;
                        }
                    } else {
                        alert(response.message);
                        placeOrderBtn.prop('disabled', false);
                    }
                },
                error: function () {
                    alert('An error occurred while processing the checkout.');
                    placeOrderBtn.prop('disabled', false);
                }
            });
        });
    });
</script>

@endsection