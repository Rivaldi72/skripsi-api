@php
@endphp
@extends('layouts/dedi/fullLayoutMaster')

@section('Title', 'Login page')

@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('content')
    <div class="auth-wrapper auth-cover">
        <div class="auth-inner row m-0">
            <!-- Brand logo-->
            {{-- <a class="brand-logo" href="#">
                <img width="30" height="30" src="{{ asset('images/gedmi/logo.png') }}" alt="">
                <h2 class="brand-text text-primary ms-1">SMK Dharma Analitika</h2>
            </a> --}}
            <!-- /Brand logo-->

            <!-- Left Text-->
            <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
                    @if (['theme'] === 'dark')
                        <img class="img-fluid" src="{{ asset('images/pages/login-v2-dark.svg') }}" alt="Login V2" />
                    @else
                        <img class="img-fluid" src="{{ asset('images/pages/login-v2.svg') }}" alt="Login V2" />
                    @endif
                </div>
            </div>
            <!-- /Left Text-->

            <!-- Login-->
            <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                    <h2 class="card-title fw-bold mb-1">Selamat Datang di SMK Dharma Analitika Medan</h2>
                    <p class="card-text mb-2">Silahkan Login Terlebih Dahulu</p>

                    <div class="mb-1">
                        <label class="form-label" for="login-email">Email</label>
                        <input class="form-control" id="login-email" type="text" name="login-email"
                            placeholder="username" aria-describedby="login-email" autofocus="" tabindex="1" />
                    </div>
                    <div class="mb-1">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="login-password">Password</label>
                        </div>
                        <div class="input-group input-group-merge form-password-toggle">
                            <input class="form-control form-control-merge" id="login-password" type="password"
                                name="login-password" placeholder="????????????????????????" aria-describedby="login-password"
                                tabindex="2" />
                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                        </div>
                    </div>
                    <a href="{{ route('dedi.dashboard') }}" class="btn bg-gradient-info w-100" tabindex="4">MASUK</a>

                    <!-- /Login-->
                </div>
            </div>
        @endsection

        @section('vendor-script')
            <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
        @endsection

        @section('page-script')
            <script src="{{ asset(mix('js/scripts/pages/auth-login.js')) }}"></script>
        @endsection
