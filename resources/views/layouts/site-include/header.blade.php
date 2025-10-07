<header>
    <div class="header-area  header-3 header-resposive-2 pt-30 pl-65 pr-80 position-absolute">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-2 col-md-2 col-sm-3 col-12 offset-xl-0 offset-lg-0 offset-md-4 offset-sm-4 ">
                    <div class="logo text-center text-lg-left">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/site-assets/img/logo/logo.png') }}" alt="moly-logo"></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8 col-md-auto col-sm-auto">
                    <div class="main-menu pt-5">
                        <nav id="mobile-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('product.all') }}">Shop</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-5 col-sm-4 col-12">
                    <div class="site-info  d-flex justify-content-end">
                        <div class="search position-relative mr-15 ">
                            <a href="#"><img src="{{ asset('assets/site-assets/img/icon/search.png') }}" alt=""></a>
                            <div class="search-form">
                                <form method="GET" action="{{ route('search') }}">
                                    <input type="text" name="query" id="search-box"
                                        placeholder="Search products, brands, categories..." class="form-control">
                                    <div id="suggestions-box" class="suggestions"></div>
                                </form>
                            </div>
                        </div>
                        <div class="react pt-10 position-relative mr-15">
                            <a href="#"><i class="far fa-heart"></i></a>
                            <div class="badge">0</div>
                        </div>
                            <div class="cart position-relative pt-10 mr-10">
                                <a href="#"><img src="{{ asset('assets/site-assets/img/icon/bag.png') }}" alt=""></a>
                                <div class="badge">0</div>

                                <div  class="product-area product-shop-page mini-cart-product-page " >
                                    <div class="hot-sale-product-area "  >
                                        <div class="hot-lookbook pt-10 pb-30">
                                            <div class="product-wrapper d-flex">
                                                <div class="product-img pr-15">
                                                    <img src="{{ asset('assets/site-assets/img/product/product-23.png') }}" alt="product">
                                                    <div class="cart-icon">
                                                        <img src="{{ asset('assets/site-assets/img/icon/cart-white.png') }}" alt="cart">
                                                    </div>
                                                </div>
                                                <div class="product-detalis">
                                                    <span>Men Dress</span>
                                                    <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                                    <div class="price d-flex">
                                                        <span>$999</span>
                                                        <del>$899</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-wrapper mt-10 d-flex">
                                                <div class="product-img pr-15">
                                                    <img src="{{ asset('assets/site-assets/img/product/product-27.png') }}" alt="product">
                                                    <div class="cart-icon">
                                                        <img src="{{ asset('assets/site-assets/img/icon/cart-white.png') }}" alt="cart">
                                                    </div>
                                                </div>
                                                <div class="product-detalis ">
                                                    <span>Men Dress</span>
                                                    <h6><a href="shop-detalis-page.html">Military Patch Pocket Blazer</a></h6>
                                                    <div class="price d-flex">
                                                        <span>$999</span>
                                                        <del>$899</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-price-area text-right pt-15 pr-20">
                                                <p>Sub total: <span class="d-inline-block pl-30"> $999.00</span></p>
                                                <p>Total:  <span class="d-inline-block pl-30"> $999.00</span></p>
                                            </div>
                                            <div class="table-button mini-cart-btn text-center pt-5">
                                                <a class="b-btn pt-15 pb-15 pr-20 pl-20" href="#">View Cart</a>
                                                <a class="b-btn pt-15 pb-15 pr-20 pl-20" href="#">Checkout</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</header>