<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="shop, ecommerce, store, multipurpose, shopify, woocommerce, html5, css3, sass">
	<title>@yield('title') | Savekart Ecommerce</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/site-assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site-assets/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site-assets/css/vendor/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site-assets/css/vendor/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site-assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site-assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site-assets/css/vendor/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site-assets/css/mean-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site-assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/site-assets/zoom/css/my-zoom.css') }}" />	
    <!-- Toast message -->
    <link href="{{ asset('assets/admin-assets/plugins/toast/toastr.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .suggestions {
            position: absolute;
            background: #ffffff;
            width: 88%;
            /* border: 1px solid #ccc; */
            z-index: 1000;
            display: none;
            top: 59px;
            left: 37px;
        }
        .suggestions ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .suggestions li {
            padding: 10px;
            cursor: pointer;
        }
        .suggestions li:hover {
            background: #f8f8f8;
        }
    </style>
    @yield('style')
</head>
<body>
    <!-- =============Preloader Starts=============-->
    {{-- <div class="loader">
        <div class="loding-cricle"></div>
    </div> --}}
    <!-- =============Preloader Ends=============-->

    <!-- =================Autopopup Area Starts================= -->

    {{-- <div id="autopopup-option" class="subscribe-area newsletter-page wow fadeIn bg-transparent">
        <div class="subscribe-detalis pt-90 pr-90 pl-90 pb-80" style="background-image: url({{ asset('assets/site-assets/img/subscribe-bg.png') }});">
            <div id="close-button" >
                <button><i class="fas fa-times"></i></button>
            </div>
            <div class="mess-icon text-center pb-30">
                <img src="{{ asset('assets/site-assets/img/icon/email-red.png') }}" alt="messages">
            </div>
            
            <div class="discount-text text-center pb-15 ">
                <span>Newsletter</span>
                <p>Get Discount 30% Off !</p>
            </div>
            <form action="#" class="text-center">
                <input type="email" placeholder="Enter Your Email...">
                <button>Subscribe</button>
                
            </form>
            <div class="news-checkbox text-center pt-25">
                <input type="checkbox"  id="checkbox"><label for="checkbox">Do not show this popup again !</label>
            </div>

        </div>
    </div> --}}
        
    <!-- =================Autopopup Area Starts================= -->

    <!-- =================Header Area Starts================= -->

    @include('layouts.site-include.header')
    
    <!-- =================Header Area Ends================= -->
    
    @yield('content')
    
    <!-- =================Footer Area Starts================= -->
    @include('layouts.site-include.footer')
    <!-- =================Footer Area Ends================= -->

    <script src="{{ asset('assets/site-assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/site-assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/site-assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/site-assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/site-assets/js/vendor/jquery-mean-menu.min.js') }}"></script>
    <script src="{{ asset('assets/site-assets/js/vendor/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/site-assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/site-assets/js/countdown.js') }}"></script> --}}
    <script src="{{ asset('assets/site-assets/js/vendor/jquery.nice-number.js') }}"></script>  
    <script src="{{ asset('assets/site-assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/site-assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/site-assets/js/vendor/wow-1.3.0.min.js') }}"></script>  
    <script src="{{ asset('assets/site-assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/site-assets/zoom/js/my-zoom.js') }}"></script>

    <!-- toast message -->
    <script src="{{ asset('assets/admin-assets/plugins/toast/toastr.js') }}"></script>
    <script src="{{ asset('assets/admin-assets/js/toastr.init.js') }}"></script>
    <!-- toast message -->
    
    @include('layouts._massages')
    @include('layouts.scripts.cart_script')
    @include('layouts.scripts.locations')

    <script>
        $(document).ready(function() {
            $('#search-box').on('keyup', function() {
                let query = $(this).val();
                // if (query.length > 2) {
                    $.ajax({
                        url: "{{ route('search.suggestions') }}",
                        method: "GET",
                        data: { query: query },
                        success: function(data) {
                            let suggestionHTML = '<ul>';
                            data.forEach(item => {
                                suggestionHTML += `<li class="suggestion-item" data-url="${item.url}">
                                                    <strong>${item.type ? item.type + ': ' : ''}</strong> ${item.name}
                                                </li>`;
                            });
                            suggestionHTML += '</ul>';
                            $('#suggestions-box').html(suggestionHTML).show();
                        }
                    });
                // } else {
                //     $('#suggestions-box').hide();
                // }
            });

            $(document).on('click', '.suggestion-item', function() {
                window.location.href = $(this).data('url'); // Redirect to the selected item's URL
            });

            $(document).click(function(e) {
                if (!$(e.target).closest('#search-box, #suggestions-box').length) {
                    $('#suggestions-box').hide();
                }
            });
        });



        // document.querySelector('.navbar-toggler').addEventListener('click', function () {
        //     const offcanvas = document.getElementById('offcanvasNavbar');
        //     if (offcanvas.classList.contains('show')) {
        //         offcanvas.classList.remove('show');
        //     } else {
        //         offcanvas.classList.add('show');
        //     }
        // });

        // document.querySelector('.close').addEventListener('click', function () {
        //     document.getElementById('offcanvasNavbar').classList.remove('show');
        // });

        // document.querySelectorAll('.dropdown-toggle').forEach(function (toggle) {
        //     toggle.addEventListener('click', function (e) {
        //         e.preventDefault();
        //         const dropdownMenu = toggle.nextElementSibling;
        //         if (dropdownMenu.style.display === 'block') {
        //             dropdownMenu.style.display = 'none';
        //         } else {
        //             dropdownMenu.style.display = 'block';
        //         }
        //     });
        // });


        // $(document).on('click', '[data-toggle="offcanvas1"]', function (e) {
        //     e.preventDefault();
        //     $('#offcanvasNavbar1').toggleClass('show');
        // });

        // // Close button functionality
        // $(document).on('click', '.offcanvas .close', function (e) {
        //     e.preventDefault();
        //     $('#offcanvasNavbar1').removeClass('show');
        // });

        // // Close the offcanvas if clicking outside it
        // $(document).mouseup(function (e) {
        //     var container = $("#offcanvasNavbar1");
        //     if (!container.is(e.target) && container.has(e.target).length === 0) {
        //         container.removeClass('show');
        //     }
        // });
    </script>

    <script>
        $(document).ready(function () {
            $('.user-toggle').on('click', function (e) {
                e.stopPropagation();
                $('.user-dropdown').toggle();
            });
            $(document).on('click', function () {
                $('.user-dropdown').hide();
            });
        });
    </script>


    @yield('script')
</body>
</html>