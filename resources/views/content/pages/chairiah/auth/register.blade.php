@extends('layouts/chairiah/fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('content')
    <div class="auth-wrapper auth-basic px-2">
        <div class="auth-inner my-2">
            <div class="card mb-0">
                <div class="card-body">
                    <a href="#" class="brand-logo">
                        <h2 class="brand-text text-primary ms-1">Gudang Kopi Takengon</h2>
                    </a>

                    <h4 class="card-title mb-1">Selamat Datang 👋</h4>
                    <p class="card-text mb-2">Silakan Memdaftarkan Akun Anda!!!</p>

                    <form class="auth-login-form mt-2" action="{{ route('chairiah.register.post') }}" method="POST">
                        @csrf
                        <div class="mb-1">
                            <label for="login-email" class="form-label">Username</label>
                            <input type="text" class="form-control" id="login-email" name="username"
                                placeholder="Username" aria-describedby="login-email" tabindex="1" autofocus />
                        </div>

                        <div class="mb-1">
                            <label for="login-email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="login-email" name="email" placeholder="Email"
                                aria-describedby="login-email" tabindex="1" autofocus />
                        </div>

                        <div class="mb-1">
                            <label for="login-Password" class="form-label">Password</label>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" id="login-password"
                                    name="password" tabindex="2"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="login-password" />
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100" tabindex="4">Register</button>
                    </form>

                    <p class="text-center mt-2">
                        <span>Sudah Memiliki Akun!!!</span>
                        <a href="{{ route('chairiah.login') }}">
                            <span>Login</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('vendor-script')
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset(mix('js/scripts/pages/auth-login.js')) }}"></script>
@endsection
