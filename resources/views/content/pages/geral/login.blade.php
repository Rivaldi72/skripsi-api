@extends('layouts/geral/fullLayoutMaster')

@section('Title', 'Login page')

@section('page-style')
    <link rel="stylesheet" href="{{ asset(mix('css/pages/login.css')) }}">
@endsection

@section('content')


    <section class="row flexbox-container justify-content-center mt-5">
        <div class="col-xl-8 col-11 d-flex justify-content-center ">
            <div class="card bg-authentication rounded-0 mb-0">
                <div class="row m-0 py-5">
                    <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                        <img src="{{ asset('images/pages/login.png') }}" alt="branding logo">
                    </div>
                    <div class="col-lg-6 col-12 p-0">
                        <div class="card rounded-0 mb-0 px-2">
                            <div class="card-header pb-1">
                                <div class="card-title">
                                    <h4 class="mb-0">Login</h4>
                                </div>
                            </div>
                            <p class="px-2">Selamat datang, Silahkan masukkan password terlebih dahulu.</p>
                            <div class="card-content">
                                <div class="card-body pt-1">
                                    <form action="index.html">
                                        <fieldset class="form-label-group form-group position-relative has-icon-left">
                                            <input type="text" class="form-control" id="user-name" placeholder="Username"
                                                required>
                                            <div class="form-control-position">

                                            </div>
                                            <label for="user-name">Username</label>
                                        </fieldset>

                                        <fieldset class="form-label-group position-relative has-icon-left">
                                            <input type="password" class="form-control" id="user-password"
                                                placeholder="Password" required>
                                            <div class="form-control-position">

                                            </div>
                                            <label for="user-password">Password</label>
                                        </fieldset>
                                        <button type="submit"
                                            class="btn float-right btn-inline btn-block bg-gradient-info">Masuk</button>
                                    </form>
                                </div>
                            </div>
                            <div class="login-footer">
                                <div class="divider">
                                    <div></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('page-script')

@endsection
