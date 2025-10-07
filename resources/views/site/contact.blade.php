@extends('layouts.web-app')

@section('title') Contact Us @endsection

@section('content')

    <!-- =================Page Title Area Starts================= -->

    <div class="page-title-area pt-130 pb-120" style="background-image: url('{{ asset('assets/site-assets/img/bg/contact-bg.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-titel-detalis  ">
                        <div class="page-title position-relative">
                            <h2>Contact Page</h2>
                        </div>
                        <div class="page-bc">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"> <i
                                                class="fas fa-home "></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Contact</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =================Page Title Area Ends================= -->

    <!-- =================Map Area Starts================= -->

    <div class="map-area pt-50 ">
        <div class="container">
            <div id="map-container-googl" class="map-container ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3569.7984463284847!2d88.68823870000001!3d26.526606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e47b0db23cccd9%3A0xf93f840097e31040!2sSAVEKART!5e0!3m2!1sen!2sin!4v1759838507223!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- =================Map Area Ends================= -->

    <!-- =================Comment  Area Starts================= -->

    <div class="contact-page comment-area pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-7 col-12">
                    <div class="comment-sidebar">
                        <div class="section-title d-inline-block">
                            <h3>
                                Leave Reply
                            </h3>
                        </div>
                        <div class="post-comment pt-25 ">
                            <form action="{{ route('contact.store') }}"  method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4">
                                        <ul class="name">
                                            <li><label for="name">Name:</label></li>
                                            <li><input type="text" name="name" value="{{ old('name') }}" id="name"></li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <ul class="email pt-15 pt-sm-0">
                                            <li><label for="email">Email Address :</label></li>
                                            <li><input type="email" name="email" value="{{ old('email') }}" id="email"></li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <ul class="email pt-15 pt-sm-0">
                                            <li><label for="phone">Phone :</label></li>
                                            <li><input type="tel" name="phone" value="{{ old('phone') }}" id="phone"></li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-12">
                                        <ul class="text-area pt-10">
                                            <li><label for="text-area">Write a message :</label></li>
                                            <li>
                                                <textarea name="message" id="text-area" cols="30"
                                                    rows="10">{{ old('message') }}</textarea>
                                            </li>
                                        </ul>
                                        <div class="submit pt-30">
                                            <input type="submit" value="SUBMIT">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-5 col-12">
                    <div class="contact-info">
                        <div class="section-title d-inline-block text-uppercase">
                            <h3>
                                Contact info
                            </h3>
                        </div>
                        <p>Discover the latest trends and timeless styles. From everyday essentials to statement pieces, our collection is designed to keep you looking and feeling your best — all at prices you’ll love.</p>
                        <ul class="contact pt-15">
                            <li><i class="fas fa-map-marker-alt" aria-hidden="true"></i><span>Govt. Engineering College Campus, Subhash Nagar, Kharia, Jalpaiguri, West Bengal 735102</span></li>
                            <li><i class="fas fa-envelope" aria-hidden="true"></i><span>savekart@gmail.com</span></li>
                            <li><i class="fas fa-phone-alt" aria-hidden="true"></i><span>+91 96419 28850</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =================Comment  Area Ends================= -->

@endsection