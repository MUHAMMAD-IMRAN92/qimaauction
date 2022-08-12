@extends('layouts.app')

@section('content')
    <style>
        body{
            background-color: #fff;
        }
.login-container {
    display: flex;
    flex-direction: column;
    height: 100vh;
    text-align: center;
    justify-content: center;
    align-items: center;
}
.login-screen-logo{
    margin-bottom: 40px;
}
.login-container h2, .login-container h6{
        font-size: 20px;
    line-height: 32px;
    font-family: Montserrat;
    font-weight: 700;
    color: #9C9C9C;
    margin-bottom: 30px
}
.login-container form{
    margin-top: 20px;
    width: 320px;
}

@media (max-width: 767px){
.login-screen-logo{
    max-width: 345px;
}
.login-container form{
    width: 250px;
}
}

    </style>

    <body>
        <!-- BEGIN: Content-->
        <div class="login-container">
            <div class="login-description">
            <h2>WELCOME TO</h2>
            <img class="login-screen-logo" src="{{ asset('public/images/qima-logo2.png') }}" alt="branding logo">
            <h6>LOGIN</h6>
            </div>
                <div class="login-form--container">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <fieldset class="form-label-group form-group position-relative has-icon-left">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
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
                        <div class="form-group d-flex justify-content-between align-items-center">
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
                        </div>
                        <button type="submit" class="btn btn-primary  btn-inline" style="font-size: 16px">Login</button>
                    </form>
                    <div>
                        <hr style="width: 100%">
                        <br>
                        <button type="button" onclick="window.location='https://allianceforcoffeeexcellence.org/product/yemen-pca-auction-registration-2022/'" style="background-color: #9C9C9C" class="btn btn-success">
                            Register
                        </button>
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

@endsection
