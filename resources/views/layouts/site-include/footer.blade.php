<footer class="footer-area footer-area-2 ">
        <div class="footer-menu pt-40 pb-40">
            <div class="container">
                <div class="row">
                    <!-- Information -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="footer-widget">
                            <h4>Information</h4>
                            <ul class="footer-info">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ url('terms-and-conditions') }}">Terms & Conditions</a></li>
                                <li><a href="{{ url('delivery-information') }}">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Customer Service -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="footer-widget">
                            <h4>Customer Service</h4>
                            <ul class="footer-info">
                                <li><a href="{{ url('returns') }}">Returns & Exchanges</a></li>
                                <li><a href="{{ url('shipping-policy') }}">Shipping Policy</a></li>
                                <li><a href="{{ url('order-tracking') }}">Order Tracking</a></li>
                                <li><a href="{{ url('support') }}">Customer Support</a></li>
                                <li><a href="{{ url('size-guide') }}">Size Guide</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- My Account -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="footer-widget">
                            <h4>My Account</h4>
                            <ul class="footer-info">
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                                <li><a href="{{ route('cart') }}">View Cart</a></li>
                                <li><a href="{{ route('wishlist.index') }}">My Wishlist</a></li>
                                <li><a href="{{ route('user-dashboard.orders') }}">Order History</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Extras -->
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="footer-widget">
                            <h4>Extras</h4>
                            <ul class="footer-info">
                                <li><a href="javascript:void(0);">Gift Cards</a></li>
                                <li><a href="javascript:void(0);">Affiliate Program</a></li>
                                <li><a href="javascript:void(0);">Special Offers</a></li>
                                <li><a href="javascript:void(0);">Newsletter Signup</a></li>
                                <li><a href="javascript:void(0);">Store Locator</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom pt-25">
            <div class="container">
                <div class="copyright d-inline-block ">
                    <p>&copy; 2025 <strong>SaveKart</strong>. Designed with ❤️ by <a href="https://codeofdolphins.com/" target="_blank">Code of Dolphins</a>. All rights reserved.</p>
                </div>
                <div class="payment-card float-right">
                    <ul class=" d-flex">
                        <li><a href="#"><i class="fab fa-cc-paypal" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-stripe" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-visa" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-mastercard" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-amex" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>