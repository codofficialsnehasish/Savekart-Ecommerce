@extends('layouts.web-app')

@section('title') @yield('tab-title') @endsection

@section('style')
<style>
    .list-group-item {
        cursor: pointer;
    }
    .list-group-item.active {
        background-color: #fe0031;
        color: #fff;
        border-color: #fe0031;
    }
    .list-group-item.active a{
        color: #fff;
        font-weight: 700;
    }
</style>
@endsection

@section('content')

    <!-- =================Page Title Area Starts================= -->

    <div class="page-title-area pt-130 pb-120" style="background-image: url('{{ asset('assets/site-assets/img/bg/contact-bg.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-titel-detalis  ">
                        <div class="page-title position-relative">
                            <h2>Profile</h2>
                        </div>
                        <div class="page-bc">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}"> <i
                                                class="fas fa-home "></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Profile</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =================Page Title Area Ends================= -->
<div class="container py-5 dashboard">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            @include('site.user_dashboard.tabs')
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <div class="tab-content">

                @yield('tab-pane-content')

            </div>
        </div>
    </div>
</div>

@endsection