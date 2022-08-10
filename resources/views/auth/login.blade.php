@extends('layouts.app')

@section('content')
<style>
    .card .card-header{
        justify-content: center !important;
    }
    .card-text{
        text-align: center;
    margin: 10px;

    }

</style>

    <body
        class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page"
        data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <section class="row flexbox-container">
                        <div class="col-xl-8 col-11 d-flex justify-content-center">
                            <div class="card bg-authentication rounded-0 mb-0">
                                <div class="row m-0">
                                    <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                        <img src="{{ asset('public/app-assets/images/pages/login.png') }}" alt="branding logo">
                                    </div>
                                    <div class="col-lg-6 col-12 p-0">
                                        <div class="card rounded-0 mb-0 card-text">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    <h4 class="mb-0 ">Login</h4>
                                                </div>
                                            </div>
                                            <p class="card-text">Welcome Back To Auction</p>
                                            <div class="card-content">
                                                <div class="card-body pt-1">
                                                    <form method="POST" action="{{ route('login') }}">
                                                        @csrf
                                                        <fieldset
                                                            class="form-label-group form-group position-relative has-icon-left">
                                                            <input id="email" type="email"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                name="email" value="{{ old('email') }}" required
                                                                autocomplete="email" autofocus>
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="user-name">Username</label>
                                                        </fieldset>

                                                        <fieldset class="form-label-group position-relative has-icon-left">
                                                            <input id="password" type="password"
                                                                class="form-control @error('password') is-invalid @enderror"
                                                                name="password" required autocomplete="current-password">
                                                            <div class="form-control-position">
                                                                <i class="feather icon-lock"></i>
                                                            </div>
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <label for="user-password">Password</label>
                                                        </fieldset>
                                                        <div
                                                            class="form-group d-flex justify-content-between align-items-center">
                                                            <div class="text-left">
                                                                <fieldset class="checkbox">
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                                        {{ old('remember') ? 'checked' : '' }}>
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>
                                                                        <span class="">Remember me</span>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            {{-- <div class="text-right"><a href="auth-forgot-password.html"
                                                                    class="card-link">Forgot Password?</a></div> --}}
                                                        </div>
                                                        {{-- <a  href="{{ route('register') }}"
                                                            class="btn btn-outline-primary float-left btn-inline">Register</a> --}}
                                                        <button type="submit"
                                                            class="btn btn-primary  btn-inline">Login</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="login-footer">
                                                <br>
                                                {{-- <div class="divider">
                                                    <div class="divider-text">OR</div>
                                                </div> --}}
                                                {{-- <div class="footer-btn d-inline">
                                                    <a href="#" class="btn btn-facebook"><span
                                                            class="fa fa-facebook"></span></a>
                                                    <a href="#" class="btn btn-twitter white"><span
                                                            class="fa fa-twitter"></span></a>
                                                    <a href="#" class="btn btn-google"><span
                                                            class="fa fa-google"></span></a>
                                                    <a href="#" class="btn btn-github"><span
                                                            class="fa fa-github-alt"></span></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
        <!-- END: Content-->


        <!-- BEGIN: Vendor JS-->
        <script src="{{ asset('public/app-assets/vendors/js/vendors.min.js') }}"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="{{ asset('public/app-assets/js/core/app-menu.js') }}"></script>
        <script src="{{ asset('public/app-assets/js/core/app.js') }}"></script>
        <script src="{{ asset('public/app-assets/js/scripts/components.js') }}"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <!-- END: Page JS-->

    </body>
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
