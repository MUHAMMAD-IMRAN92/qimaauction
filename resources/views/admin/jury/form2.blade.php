<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Review</title>

    <link rel="apple-touch-icon" href="{{ asset('public/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/app-assets/images/ico/logo_new.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href={{ asset('public/app-assets/vendors/css/vendors.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('public/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css') }}>
    <!-- BEGIN: Vendor CSS-->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/vendors.min.css') }}"> --}}
    <!-- END: Vendor CSS-->
    {{-- <link rel="stylesheet" href={{ asset('public/app-assets/vendors/css/bootstrap-tagsinput.css') }}> --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css"> --}}
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/themes/semi-dark-layout.css') }}">
    {{-- <link rel="stylesheet" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.css"> --}}
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/authentication.css') }}">
    <!-- END: Page CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

    <!-- plus a jQuery UI theme, here I use "flick" -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/flick/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('public/app-assets/css/pips.css') }}">
    <script src="{{ asset('public/app-assets/js/pips.js') }}" defer></script>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<style type="text/css">
    body {
        overflow-x: hidden;
        font-family: 'Montserrat';
    }

    .bootstrap-touchspin .bootstrap-touchspin-injected {}

    .tags-input-wrapper {
        background: transparent;
        padding: 10px;
        border-radius: 4px;
        max-width: 300px;
        border: 1px solid #ccc
    }

    .tags-input-wrapper input {
        border: none;
        background: transparent;
        outline: none;
        width: 270px;
        margin-left: 8px;
    }

    .tags-input-wrapper .tag {
        display: inline-block;
        background-color: #0e9ffa;
        color: white;
        border-radius: 40px;
        padding: 0px 3px 0px 7px;
        margin-right: 5px;
        margin-bottom: 5px;
        box-shadow: 0 5px 15px -2px rgba(250, 14, 126, .7)
    }

    .tags-input-wrapper .tag a {
        margin: 0 7px 3px;
        display: inline-block;
        cursor: pointer;
    }

    @media (max-width: 450px) {
        body {
            font-size: 10px;
        }
    }

    @media (max-width: 450px) {
        body {
            font-size: 14px;
        }
    }


    h5 {
        font-size: 1.4rem;
    }

    .w-70 {
        width: 70% !important;
        height: 45px;
        border-radius: 0.4rem;
    }

    @media only screen and (max-width:450px) {
        .mbl-mar {
            margin-left: 3rem;
        }

        body {
            padding-top: 0 !important;
            gap: 8%;
        }
    }

    .btn-lg {
        line-height: 1 !important;
    }

    .discriptor {
        font-size: 16px;
    }

    .alert-success {
        color: white !important;
        background-color: rgb(209, 175, 105) !important;
    }

    .main-title {
        /* position: absolute; */
        width: 51px;
        height: 6px;
        color: #A4A3A3;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
        line-height: 19px;
        display: flex;
        align-items: center;
        text-align: center;
        text-transform: uppercase;
        font-feature-settings: 'kern' off;
    }

    .line {
        position: absolute;
        width: 615px;
        height: 0px;
        margin-left: 22%;
        border: 1px solid #A4A3A3;
    }

    .dry-verticle {
        position: absolute;
        bottom: -150%;
        left: 25%;
        transform: rotate(-90deg);
        transform-origin: left 0;
    }

    .dry {
        position: relative;
    }

    h3.entity-text {
        width: 100%;
        text-align: center;
        font-weight: 800;
        font-size: 24px !important;
        margin-bottom: 0px;
    }

    .entity-label {
        font-family: 'Montserrat';
        font-size: 18px;
        color: white;
        text-align: center;
        padding-top: 10px;
        /* padding-bottom: 20px; */
    }

    .aroma-bg {
        background-color: transparent !important;
    }

    .defects-bg {
        background-color: transparent !important;

    }

    .cleancup-bg {
        background-color: transparent !important;
    }

    .total-bg {
        background: transparent !important;
        justify-content: center;
        font-weight: 800;
        font-size: 36px;
        line-height: 44px;
        display: flex;
        align-items: center;
        text-align: center;
        letter-spacing: 0.3em;
        text-transform: uppercase;
        font-feature-settings: 'kern' off;

        color: #000000 !important;
    }

    .roast-bg {
        background-color: transparent;

        color: white;
    }

    .overall-bg {
        background-color: transparent !important
    }

    .balance-bg {
        background-color: transparent !important
    }

    .flavor-bg {
        background-color: transparent !important
    }

    .aftertaste-bg {
        background-color: transparent !important;
    }

    .sweetness-bg {
        background-color: transparent !important;
    }

    .acidity-bg {
        background-color: transparent !important;
    }

    .mouthfeel-bg {
        background-color: transparent !important;
    }

    .multiply,
    .score_first_number,
    .score_second_number,
    .multiply4 {
        font-family: 'Montserrat';
        font-size: 24px;
    }

    .score_first_number,
    .score_second_number {
        width: 40px;
        background: transparent;
    }


    .entity_note {
        width: 80%;
        margin: auto;
        padding: 10px;
        font-size: 18px;
        font-family: 'Montserrat';
    }

    .entity_input {
        width: 100%;
        text-align: center;
        padding-top: 29px;
        padding-bottom: 20px;
    }

    h2.totalScore {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 90px;
        line-height: 110px;
        margin-top: 0px;
        text-align: center;
        color: black !important;
    }

    .submit-form-btn {
        text-align: center;
        background: white;
        color: black;

        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        padding: 12px;
        width: 100%;
        height: auto;
        display: block;
        margin: auto;
        margin-top: 15px;
        border-radius: 54px;
    }

    .scrollable {
        width: calc(100vh - 42%);
        overflow: auto;
        margin: auto;
    }

    .pager {
        width: 121px;
        font-size: 24px;
        background-color: #C4C4C4;
        border-radius: 30px;
    }

    .pager.btn-success {
        background-color: #000 !important;
        color: #FFF;
    }

    .ui-slider-pips .ui-slider-line {
        background: white;
        width: 4px;
        height: 50px !important;
        position: absolute;
        left: 50%;
        top: -38px !important;
    }

    .ui-slider-pips .ui-slider-label {
        top: 30px;
    }

    .ui-state-focus {
        color: #000 !important;
        border-color: black !important;
    }

    .ui-state-default {
        color: #000 !important;
    }

    .ui-slider-pips [class*=ui-slider-pip-selected] {
        font-weight: bold;
        color: black;
    }

    /* .ui-corner-all {
        border-radius: 50%;
    } */

    .ui-state-default,
    .ui-widget-content .ui-state-default,
    .ui-widget-header .ui-state-default {
        border: 1px solid black;
        background: white url(images/ui-bg_highlight-soft_100_f6f6f6_1x100.png) 50% 50% repeat-x;
        font-weight: bold;
        color: black;
    }

    .customslider.ui-slider-horizontal {
        height: 3px;
    }

    .radio_container input~.checkmark {
        background-color: white;
    }

    .customslider.ui-slider-horizontal .ui-slider-handle {
        top: -9px;
        margin-left: -8px;
    }

    .customslider.ui-slider-pips .ui-slider-pip {
        top: 14px;
    }

    .aromaslider.ui-slider-horizontal {
        height: 4px;
    }

    .aromaslider.ui-slider-horizontal .ui-slider-handle {
        top: -9px;
        margin-left: -8px;
    }

    .aromaslider.ui-slider-pips .ui-slider-pip {
        top: 14px;
    }

    h5 {
        margin-top: 0px !important;
    }
.hr-margin{
    margin-top: 40px;
}
    .roastslider.ui-slider-horizontal {
        height: 50px;
        border-radius: 0;
        background-image: linear-gradient(90deg, #D9B594 23.96%, #765418 100%)
    }

    .roastslider .ui-slider-handle {
        height: 62px;
        border-radius: 5px;
        background-color: gray;
        border-color: grey;
        border-radius: 0px !important;
    }

    .roastslider .ui-state-focus,
    .roastslider .ui-state-focus {
        border: 1px solid #000;
    }

    ul.breadcrumb {
        padding: 10px 16px;
        list-style: none;
        background: none;
        border: none;
        text-align: center;
        justify-content: center;
        align-items: center !important;
    }

    ul.breadcrumb li {
        display: inline;
    }

    /* ul.breadcrumb li+li:before {
        content: "/\00a0";
        font-size: 26px;
    } */
    .breadcrumb>li+li:before {
        content: "" !important;
        display: block;
    }

    ul.breadcrumb li a {
        text-decoration: none;
        color: black;
    }

    .id-text {
        font-size: 20px !important;
        color: #575555;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 800;
        font-size: 20px;
        line-height: 24px;
    }

    .sample-area {
        align-items: center;
        text-align: center;

        color: black;

    }

    .sample_number {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 400;


        font-weight: 400;
        font-size: 70px;
        line-height: 70px;
        /* identical to box height */
        color: #040404;
    }

    .custom_hr {
        border-top: 2px solid #A4A3A3;
        margin-bottom: 0px;
    }

    .entity_note {
        width: 100%;
        width: 100%;
        background: transparent;
        border: 1px solid white;
    }

    .design-slider {
        padding: 2rem 0.4rem;
    }

    input {
        border: 1px solid white;
    }

    .ui-slider-pips .ui-slider-pip-label .ui-slider-label {
        color: white !important;
    }

    .multiply,
    .score_first_number,
    .score_second_number,
    .multiply4 {
        color: white !important;
    }

    @media only screen and (max-width:1200px) {
        /* .bg-overall--theme{
            height: auto !important;
        } */
    }

    @media only screen and (max-width:767px) {
        .id-text {
            font-size: 40px;
        }

        .list-crumb .list-1 {
            border-top: 1px solid white !important;
        }

        ul.breadcrumb {
            flex-wrap: nowrap;
            flex-direction: row;
            border-top: 1px solid white;
        }

        .list-crumb .list-1 {
            border: none !important;
            border-right: 1px solid white !important;
        }

        .parent-btn {
            width: auto !important;
        }

        .sample_number {
            font-size: 80px;
        }

        /* .breadcrumb-section {
            display: none;
        } */

        .breadcrumb-content {
            font-size: 20px !important;
        }
    }
    .mobile-layout{
        display: none;
    }
    @media only screen and (max-width:1024px) {
        .desktop-layout{
            display: none;
        }
        .mobile-layout{
            display: block;
        }
        .list-crumb p{
            font-size: 17px !important;
        }

    }
    @media only screen and (min-width:768px) {
        .mobile-breadcrumb-section {
            display: none;
        }

    }

    .isdone {
        background-color: transparent !important;
        color: #000 !important;
    }

    .isdone:hover {
        background-color: #000 !important;
        color: #fff !important;
    }

    .isdone.btn-success {
        color: #FFF !important;
    }

    .list-crumb {
        display: flex;
        flex-direction: column;
        margin-bottom: 0px;
    }

    .sample-heading {
        border-right: 1px solid white;
    }

    .list-crumb .list-1 {
        width: 100%;
        font-weight: 800;
        border: 1px solid white;
        padding: 15px;

        border-top: none;
        border-right: none;
        border-left: none;
    }

    .list-crumb p {
        font-weight: 800;
        color: #575555 !important;
        font-size: 20px ;
    }

    .list-crumb .list-2 {
        width: 100%;
        font-weight: 800;
        padding: 15px;

    }

    .bg-roast--theme {
        background: #DBCDB7;
        padding: 30px 50px;
        margin: 0px;
        width: auto !important;
    }

    .bg-aroma--theme-1 {
        background: linear-gradient(264deg, #C488D9 0%, #C4D3FA 100%);
        padding: 30px 50px;
        width: auto !important;
    }

    .bg-aroma--theme-2 {
        background: linear-gradient(264deg, #C176DC 0%, #B9CDFF 100%);
        padding: 30px 50px;
        width: auto !important;

    }

    .bg-aroma--theme-3 {
        background: linear-gradient(264deg, #BE6DDB 0%, #B4C7F9 100%);
        ;
        padding: 30px 50px;
        width: auto !important;

    }

    .bg-defects--theme {
        background: linear-gradient(290deg, #FF5757 0%, #F19393 100%);
        padding: 30px 50px;
        width: auto !important;

    }

    .bg-clean--theme {
        background: linear-gradient(290deg, #93DBF1 0%, #5786FF 100%);
        padding: 30px 50px;
        width: auto !important;

    }

    .bg-sweet--theme {
        background: linear-gradient(290deg, #FBBAAC 0%, #EC9185 100%);
        ;
        padding: 30px 50px;
        width: auto !important;

    }

    .bg-acid--theme {
        background: linear-gradient(290deg, #DEF193 0%, #FF9B3F 100%);
        padding: 30px 50px;
        width: auto !important;

    }

    .bg-mouth--theme {
        background: linear-gradient(290deg, #FF563F 0%, #E493F1 100%);
        padding: 30px 50px;
        width: auto !important;

    }

    .bg-flavor--theme {
        background: linear-gradient(290deg, #55BBA9 45.31%, #ACFBF6 100%);
        padding: 30px 50px;
        width: auto !important;

    }

    .bg-taste--theme {
        background: linear-gradient(290deg, #DEA857 45.31%, #FBACAC 100%);
        padding: 30px 50px;
        width: auto !important;

    }

    .bg-balance--theme {
        background: linear-gradient(290deg, #68BC4A 0%, #44BA6C 46.88%);
        padding: 30px 50px;
        width: auto !important;

    }

    .bg-overall--theme {
        background: linear-gradient(290deg, #716EE4 0%, #62CBDA 100%);
        padding: 30px 50px;
        width: auto !important;

    }

    input::placeholder {
        color: white !important;
    }

    .anchor-ovveride {
        width: 100%;
        font-weight: 600;
        text-align: center;
        color: #575555 !important;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 800;
        font-size: 16px;
        line-height: 20px;


        color: #575555;
    }

    .btn-next-prev {
        display: flex;
        width: 100%;
        justify-content: center;
        gap: 40px;
    }

    .parent-btn {
        width: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .wrapper-btn {
        display: flex;
        justify-content: center;
    }

    .button-group {

        text-align: center;
    }

    .footer-end {
        width: 100%;
        text-align: center;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .image-section {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .image-section img {
        padding: 20px;
        width: 300px;
    }

    .text-section {
        text-align: center;
    }

    .text-section h2 {
        font-weight: 800;
        color: #575555;
        font-size: 20px;
    }

    .hr {
        margin-bottom: 0px !important;
        border: 1px solid white !important;
    }

    .new-bg {
        background-color: #EFEBE5;
        overflow-x: hidden;
    }

    .new-bg-color {
        background-color: #EFEBE5;
    }

    @font-face {
        font-family: 'Montserrat';
        src: url('{{asset("public/app-assets/fonts/Montserrat/Montserrat-Regular.ttf")}}') format('truetype');

    }

    .margin-bottom-balance {
        margin-bottom: 161px;
    }
    .radio_container h5{
        font-weight: 700;
        color: #575555;
    }
    .radio_container input~.checkmark{
        border-radius: 6px !important;
    }

</style>

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static new-bg-color   blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content h-100">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">


            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="card  bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-12  p-0">
                                    <div class="card new-bg rounded-0 mb-0 p-0">
                                        <div class="card-header pt-50 p-0">
                                            @if (session('success'))
                                            <div class="col-md-12 alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                            @endif
                                            <div class="col-lg-12 p-0">
                                                <!-- <div class="site-logo">
                                                    <img src="{{ asset('/public/app-assets/images/logo/newlogo.png') }}"
                                                        style="width: 100%;max-width:100%;">
                                                </div> -->
                                                <!--Breadcrumb Section-->
                                                <!-- <div class="breadcrumb-section">
                                                    <ul class="breadcrumb">
                                                        <li><a href="#">
                                                                <p class="breadcrumb-content"
                                                                    style="font-family: 'Montserrat';font-size:25px; padding-top:0.5rem; color: #A4A3A3;">
                                                                    CUPPER</p>
                                                            </a></li>
                                                        <li><a href="#">
                                                                <p class="breadcrumb-content"
                                                                    style="font-family: 'Montserrat';font-size:25px;color: #A4A3A3;">
                                                                    {{ $juryName }}</p>
                                                            </a></li>
                                                        <a href="#">
                                                            <p class="breadcrumb-content"
                                                                style="font-family: 'Montserrat';font-size:25px;color: #ccc;padding: 0 10px;">
                                                                -</p>
                                                        </a>
                                                        <li><a href="#">
                                                                <p class="pt-1 breadcrumb-content"
                                                                    style="font-family: 'Montserrat';font-size:25px;color: #A4A3A3;">
                                                                    COMPANY</p>
                                                            </a></li>
                                                        <li><a href="#">
                                                                <p class="breadcrumb-content"
                                                                    style="font-family: 'Montserrat';font-size:25px;color: #A4A3A3;">
                                                                    {{ $juryCompany }}</p>
                                                            </a></li>
                                                    </ul>
                                                </div> -->
                                                <!-- <div class="mobile-breadcrumb-section">
                                                    <ul class="breadcrumb">
                                                        <li><a href="#">
                                                                <p class="breadcrumb-content pt-1"
                                                                    style="font-family: 'Montserrat';font-size:25px; padding-top:0.5rem; color: #A4A3A3;">
                                                                    CUPPER</p>
                                                            </a></li>
                                                        <li><a href="#">
                                                                <p class="breadcrumb-content"
                                                                    style="font-family: 'Montserrat';font-size:25px;color: #A4A3A3;">
                                                                    {{ $juryName }}</p>
                                                            </a></li>
                                                    </ul>
                                                    <ul class="breadcrumb">
                                                        <li><a href="#">
                                                                <p class="breadcrumb-content pt-1"
                                                                    style="font-family: 'Montserrat';font-size:25px;color: #A4A3A3;">
                                                                    COMPANY</p>
                                                            </a></li>
                                                        <li><a href="#">
                                                                <p class="breadcrumb-content"
                                                                    style="font-family: 'Montserrat';font-size:25px;color: #A4A3A3;">
                                                                    {{ $juryCompany }}</p>
                                                            </a></li>
                                                    </ul>
                                                </div> -->
                                                <!-- <hr class="custom_hr"> -->
                                                <div class="image-section">
                                                    <img src="{{asset('public/app-assets/images/logo/new-logo-2023.png')}}" alt="">
                                                    <img src="{{asset('public/app-assets/images/logo/heading.png')}}" alt="">

                                                </div>
                                                <hr class="hr">
                                                <div class="text-section">
                                                    <h2>{{$juryName}}</h2>
                                                </div>
                                                <hr class="hr">
                                                <div class="">
                                                    <div class="sample-area row">
                                                        <div class="sample-heading col-lg-6">
                                                            <h2 class="id-text">SAMPLE ID</h2>
                                                            <p class="sample_number">
                                                            <?php /*    
                                                            @foreach ($alltablesamples as $samp)
                                                                @if ($samp->sampleId == $sentSampleId)
                                                                {{ $samp->samples }}
                                                                @endif
                                                                @endforeach
                                                               */ ?>
                                                            </p>
                                                        </div>
                                                        <!--Breadcrumb Section-->
                                                        <div class="breadcrumb-section col-lg-6  ">
                                                            <ul class="breadcrumb list-crumb">
                                                                <li class="list-1"><a href="#">
                                                                        <p class="" style="font-family: 'Montserrat';color: black;">
                                                                            POSITION-{{ $productdata->postion }}</p>
                                                                    </a></li>
                                                                <li class="list-2"><a href="#">
                                                                        <p class="" style="font-family: 'Montserrat'; padding-top:0.5rem; color: black;">
                                                                            TABLE-{{ $productdata->table }}</p>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!--Breadcrumb Section-->
                                                    </div>
                                                </div>
                                                <!--Breadcrumb Section-->
                                                {{-- <p class="px-2" style="font-family: 'Montserrat';font-size:25px;">CUPPER: {{ $juryName }}</p>
                                                <p class="px-2" style="font-family: 'Montserrat';font-size:25px;">COMPANY: {{$juryCompany}}</p> --}}
                                                <!--Sample ID Section-->
                                                <!-- <div class="sample-area">
                                                    <h2 class="id-text">SAMPLE ID</h2>
                                                    <p class="sample_number">
                                                        <?php /*
                                                        @foreach ($alltablesamples as $samp)
                                                            @if ($samp->sampleId == $sentSampleId)
                                                                {{ $samp->samples }}
                                                            @endif
                                                        @endforeach
                                                        */ ?>
                                                    </p>

                                                    <div class="breadcrumb-section">
                                                        <ul class="breadcrumb">
                                                            <li><a href="#">
                                                                    <p class=""
                                                                        style="font-family: 'Montserrat';font-size:25px; padding-top:0.5rem; color: #A4A3A3;">
                                                                        TABLE-{{ $productdata->table }}</p>
                                                                </a>
                                                            </li>
                                                            <li><a href="#">
                                                                    <p class=""
                                                                        style="font-family: 'Montserrat';font-size:25px;color: #A4A3A3;">
                                                                        POSITION-{{ $productdata->postion }}</p>
                                                                </a></li>

                                                        </ul>
                                                    </div>

                                                </div> -->
                                                <!--Sample ID Section-->

                                            </div>

                                            <div class="col-lg-12 p-0">
                                                <form action="{{ url('/jury/link/reviewSave') }}" method="POST" enctype="multipart/form-data" id="myForm">
                                                    @csrf
                                                    <input type="hidden" name="final_submit_id" id="submit_id" value="0">
                                                    <input type="hidden" name="table_value" value="{{ $productdata->table }}">
                                                    <input type="hidden" name="current_position" value="{{ $productdata->postion }}">
                                                    <input type="hidden" name="next_position" value="@php $next_position = $productdata->postion + 1; echo $next_position; @endphp">
                                                    <input type="hidden" name="previous_position" value="@php $previous_position = $productdata->postion - 1;   echo $previous_position; @endphp">
                                                    <input type="hidden" name="link" value="{{ $link }}">
                                                    <input type="hidden" name="product_id" value="{{ $productId }}">
                                                    <input type="hidden" name="jury_id" value="{{ $juryId }}">
                                                    <input type="hidden" name="review_id" value="{{ $sampleReview->id ?? null }}">
                                                    <input type="hidden" name="sent_sample_id" value="{{ $sentSampleId }}">
                                                    <div class="container-fluid desktop-layout">
                                                        <div class="row">

                                                            <div class="col-lg-6 p-0">
                                                                <div class="row bg-roast--theme">
                                                                    <div class="col-12">
                                                                        <h3 class="entity-text roast-bg">ROAST COLOUR</h3>
                                                                    </div>

                                                                    <div class="col-lg-12" style="text-align:center">
                                                                        <div class="design-slider mt-5 mb-5">
                                                                            <div class="roastslider"><input type="hidden" name="roast" id="roast" value="50"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="entity_input col-12">
                                                                        <input type="text" placeholder="NOTES" class="entity_note">
                                                                    </div>
                                                                </div>

                                                                <div class="bg-defects--theme">
                                                                    <h3 class="entity-text defects-bg">DEFECTS</h3>
                                                                    <p class="entity-label"># X INTENSITY X 4 = SCORE</p>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <input class="score_first_number" oninput="if (this.value > 5) this.value = 0;" type="number" id="quantity" value="first_number" name="first_number">
                                                                            <span class="multiply">X</span>
                                                                            <input class="score_second_number" oninput="if (this.value > 3) this.value = 0" type="number" id="quantity" maxlength="3" value="second_number" name="second_number">
                                                                            <span class="multiply">X</span>
                                                                            <span class="multiply">4</span>
                                                                            <span class="multiply">=</span>
                                                                            <span class="multiply4">?</span>
                                                                            <div class="entity_input">
                                                                                <input type="text" name="defect_note" id="defect_note" placeholder="NOTES" class="entity_note">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="bg-sweet--theme">
                                                                    <h3 class="entity-text sweetness-bg">SWEETNESS</h3>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <div class="design-slider mt-5 mb-5">
                                                                                <div class="customslider sweetness"><input type="hidden" name="sweetness" id="sweetness"></div>
                                                                            </div>
                                                                            <div class="entity_input">
                                                                                <input type="text" name="sweetness_note" id="sweetness_note" placeholder="NOTES" value="6" class="entity_note">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-mouth--theme">
                                                                    <h3 class="entity-text mouthfeel-bg">MOUTHFEEL</h3>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <div class="custom_slider">
                                                                                <div class="design-slider mt-5 mb-5">
                                                                                    <div class="customslider mouthfeel"><input type="hidden" name="mouth_feel" id="mouth_feel"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="radio_button">
                                                                            <div>
                                                                                    <label class="radio_container">
                                                                                        <input type="radio" value="L" checked="checked" class="mouthfeel_L" name="fm_chk">
                                                                                        <div class="checkmark">
                                                                                        </div>
                                                                                        <h5>L</h5>
                                                                                    </label>
                                                                                </div>
                                                                                <div>
                                                                                    <label class="radio_container">

                                                                                        <input type="radio" class="mouthfeel_H" value="H" name="fm_chk">
                                                                                        <div class="checkmark">
                                                                                        </div>
                                                                                        <h5>H</h5>
                                                                                    </label>
                                                                                </div>
                                                                                <div>
                                                                                    <label class="radio_container">
                                                                                        <input type="radio" value="M" class="mouthfeel_M" name="fm_chk">
                                                                                        <div class="checkmark">
                                                                                        </div>
                                                                                        <h5>M</h5>
                                                                                    </label>
                                                                                </div>

                                                                            </div>
                                                                            <div class="entity_input">
                                                                                <input type="text" name="mouthfeel_note" id="mouthfeel_note" placeholder="NOTES" class="entity_note">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-taste--theme">
                                                                    <h3 class="entity-text aftertaste-bg">AFTERTASTE</h3>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <div class="design-slider mt-5 mb-5">
                                                                                <div class="customslider aftertaste"><input type="hidden" name="after_taste" id="after_taste" value="6"></div>
                                                                            </div>
                                                                            <div class="entity_input">
                                                                                <input type="text" name="aftertaste_note" id="aftertaste_note" placeholder="NOTES" class="entity_note">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-overall--theme">
                                                                    <h3 class="entity-text overall-bg">OVERALL</h3>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <div class="design-slider mt-5 mb-5">
                                                                                <div class="customslider overall"><input type="hidden" name="overall" id="overall" value="6"></div>
                                                                            </div>
                                                                            <div class="entity_input">
                                                                                <input type="text" name="overall_note" id="overall_note" placeholder="NOTES" class="entity_note">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 p-0">
                                                                <div>
                                                                    <div class="bg-aroma--theme-1 ">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <h3 class="entity-text aroma-bg">AROMA</h3>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-12">
                                                                            <h5>DRY</h5>
                                                                        </div>
                                                                        <div class="design-slider " style="height:75px">
                                                                            <div class="aromaslider aromadry"><input type="hidden" name="aroma_dry" id="aroma_dry" value="0"></div>



                                                                        </div>
                                                                    </div>
                                                                    <div class="bg-aroma--theme-2 ">
                                                                        <div class="col-lg-12">
                                                                            <h5>CRUST</h5>
                                                                        </div>
                                                                        <div class="design-slider " style="height:75px">
                                                                            <div class="aromaslider aromacrust"><input type="hidden" name="aroma_crust" id="aroma_crust" value="0"></div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="bg-aroma--theme-3 ">
                                                                        <div class="col-lg-12">
                                                                            <h5>BREAK</h5>
                                                                        </div>
                                                                        <div class="design-slider " style="height:75px">
                                                                            <div class="aromaslider aromabreak"><input type="hidden" name="aroma_break" id="aroma_break" value="0"></div>
                                                                        </div>
                                                                        <div class="entity_input col-12">
                                                                            <input type="text" placeholder="NOTES" class="entity_note">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="bg-clean--theme">
                                                                    <h3 class="entity-text cleancup-bg">CLEAN CUP</h3>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <div class="design-slider mt-5 mb-5">
                                                                                <div class="customslider cleancup"><input type="hidden" name="clean_up" id="clean_up" value="6"></div>
                                                                            </div>
                                                                            <div class="entity_input">
                                                                                <input type="text" name="cleanup_note" id="cleanup_note" placeholder="NOTES" class="entity_note">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="bg-acid--theme">
                                                                    <h3 class="entity-text acidity-bg">ACIDITY</h3>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <div class="design-slider mt-5 mb-5">
                                                                                <div class="customslider acidity"><input type="hidden" name="acidity" id="acidity" value="6"></div>
                                                                            </div>
                                                                            <div class="radio_button">
                                                                            <div>
                                                                                    <label class="radio_container">
                                                                                        <input type="radio" checked="checked" name="acidity_chk" value="L" class="acidity_L">
                                                                                        <div class="checkmark">
                                                                                        </div>
                                                                                        <h5>L</h5>

                                                                                    </label>
                                                                                </div>

                                                                                <div>
                                                                                    <label class="radio_container">
                                                                                        <input type="radio" name="acidity_chk" value="M" class="acidity_M">
                                                                                        <div class="checkmark">
                                                                                        </div>
                                                                                        <h5>M</h5>

                                                                                    </label>
                                                                                </div>
                                                                                <div>
                                                                                    <label class="radio_container">

                                                                                        <input type="radio" name="acidity_chk" value="H" class="acidity_H">
                                                                                        <div class="checkmark">
                                                                                        </div>
                                                                                        <h5>H</h5>

                                                                                    </label>
                                                                                </div>

                                                                            </div>
                                                                            <div class="entity_input">
                                                                                <input type="text" name="acidity_note" id="acidity_note" placeholder="NOTES" class="entity_note">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="bg-flavor--theme">
                                                                    <h3 class="entity-text flavor-bg">FLAVOR</h3>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <div class="design-slider mt-5 mb-5">
                                                                                <div class="customslider flavor"><input type="hidden" name="flavour" id="flavour" value="6"></div>
                                                                            </div>
                                                                            <div class="entity_input">
                                                                                <input type="text" name="flavor_note" id="flavor_note" placeholder="NOTES" class="entity_note">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-balance--theme">
                                                                    <h3 class="entity-text balance-bg">BALANCE</h3>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <div class="design-slider mt-5 mb-5">
                                                                                <div class="customslider balance"><input type="hidden" name="balance" id="balance" value="8"></div>
                                                                            </div>
                                                                            <div class="entity_input margin-bottom-balance">
                                                                                <input type="text" name="balance_note" id="balance_note" placeholder="NOTES" class="entity_note">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- // Mobile Layout // -->

                                                    <div class="container-fluid mobile-layout">
                                                        <div class="row">

                                                            <div class="col-lg-6 p-0">
                                                                <div class="row bg-roast--theme">
                                                                    <div class="col-12">
                                                                        <h3 class="entity-text roast-bg">ROAST COLOUR</h3>
                                                                    </div>

                                                                    <div class="col-lg-12" style="text-align:center">
                                                                        <div class="design-slider mt-5 mb-5">
                                                                            <div class="roastslider"><input type="hidden" name="roast" id="roast" value="50"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="entity_input col-12">
                                                                        <input type="text" placeholder="NOTES" class="entity_note">
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                        <div class="row bg-aroma--theme-1">
                                                                            <div class="col-12">
                                                                                <h3 class="entity-text aroma-bg">AROMA</h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="bg-aroma--theme-1">
                                                                        <div class="col-lg-12">
                                                                            <h5>DRY</h5>
                                                                        </div>
                                                                        <div class="design-slider " style="height:75px">
                                                                            <div class="aromaslider aromadry"><input type="hidden" name="aroma_dry" id="aroma_dry" value="0"></div>



                                                                        </div>
                                                                        </div>
                                                                        <div class="bg-aroma--theme-2 ">
                                                                        <div class="col-lg-12">
                                                                            <h5>CRUST</h5>
                                                                        </div>
                                                                        <div class="design-slider " style="height:75px">
                                                                            <div class="aromaslider aromacrust"><input type="hidden" name="aroma_crust" id="aroma_crust" value="0"></div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="bg-aroma--theme-3 ">
                                                                        <div class="col-lg-12">
                                                                            <h5>BREAK</h5>
                                                                        </div>
                                                                        <div class="design-slider " style="height:75px">
                                                                            <div class="aromaslider aromabreak"><input type="hidden" name="aroma_break" id="aroma_break" value="0"></div>
                                                                        </div>
                                                                        <div class="entity_input col-12">
                                                                            <input type="text" placeholder="NOTES" class="entity_note">
                                                                        </div>
                                                                    </div>
                                                                    </div>

                                                                <div class="bg-defects--theme">
                                                                    <h3 class="entity-text defects-bg">DEFECTS</h3>
                                                                    <p class="entity-label"># X INTENSITY X 4 = SCORE</p>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <input class="score_first_number" oninput="if (this.value > 5) this.value = 0;" type="number" id="quantity" value="first_number" name="first_number">
                                                                            <span class="multiply">X</span>
                                                                            <input class="score_second_number" oninput="if (this.value > 3) this.value = 0" type="number" id="quantity" maxlength="3" value="second_number" name="second_number">
                                                                            <span class="multiply">X</span>
                                                                            <span class="multiply">4</span>
                                                                            <span class="multiply">=</span>
                                                                            <span class="multiply4">?</span>
                                                                            <div class="entity_input">
                                                                                <input type="text" name="defect_note" id="defect_note" placeholder="NOTES" class="entity_note">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="bg-clean--theme">
                                                                    <h3 class="entity-text cleancup-bg">CLEAN CUP</h3>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <div class="design-slider mt-5 mb-5">
                                                                                <div class="customslider cleancup"><input type="hidden" name="clean_up" id="clean_up" value="6"></div>
                                                                            </div>
                                                                            <div class="entity_input">
                                                                                <input type="text" name="cleanup_note" id="cleanup_note" placeholder="NOTES" class="entity_note">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="bg-sweet--theme">
                                                                    <h3 class="entity-text sweetness-bg">SWEETNESS</h3>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <div class="design-slider mt-5 mb-5">
                                                                                <div class="customslider sweetness"><input type="hidden" name="sweetness" id="sweetness"></div>
                                                                            </div>
                                                                            <div class="entity_input">
                                                                                <input type="text" name="sweetness_note" id="sweetness_note" placeholder="NOTES" value="6" class="entity_note">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-acid--theme">
                                                                    <h3 class="entity-text acidity-bg">ACIDITY</h3>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <div class="design-slider mt-5 mb-5">
                                                                                <div class="customslider acidity"><input type="hidden" name="acidity" id="acidity" value="6"></div>
                                                                            </div>
                                                                            <div class="radio_button">
                                                                            <div>
                                                                                    <label class="radio_container">
                                                                                        <input type="radio" checked="checked" name="acidity_chk" value="L" class="acidity_L">
                                                                                        <div class="checkmark">
                                                                                        </div>
                                                                                        <h5>L</h5>

                                                                                    </label>
                                                                                </div>

                                                                                <div>
                                                                                    <label class="radio_container">
                                                                                        <input type="radio" name="acidity_chk" value="M" class="acidity_M">
                                                                                        <div class="checkmark">
                                                                                        </div>
                                                                                        <h5>M</h5>

                                                                                    </label>
                                                                                </div>
                                                                                <div>
                                                                                    <label class="radio_container">

                                                                                        <input type="radio" name="acidity_chk" value="H" class="acidity_H">
                                                                                        <div class="checkmark">
                                                                                        </div>
                                                                                        <h5>H</h5>

                                                                                    </label>
                                                                                </div>

                                                                            </div>
                                                                            <div class="entity_input">
                                                                                <input type="text" name="acidity_note" id="acidity_note" placeholder="NOTES" class="entity_note">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-mouth--theme">
                                                                    <h3 class="entity-text mouthfeel-bg">MOUTHFEEL</h3>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <div class="custom_slider">
                                                                                <div class="design-slider mt-5 mb-5">
                                                                                    <div class="customslider mouthfeel"><input type="hidden" name="mouth_feel" id="mouth_feel"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="radio_button">
                                                                            <div>
                                                                                    <label class="radio_container">
                                                                                        <input type="radio" value="L" checked="checked" class="mouthfeel_L" name="fm_chk">
                                                                                        <div class="checkmark">
                                                                                        </div>
                                                                                        <h5>L</h5>
                                                                                    </label>
                                                                                </div>

                                                                                <div>
                                                                                    <label class="radio_container">
                                                                                        <input type="radio" value="M" class="mouthfeel_M" name="fm_chk">
                                                                                        <div class="checkmark">
                                                                                        </div>
                                                                                        <h5>M</h5>
                                                                                    </label>
                                                                                </div>
                                                                                <div>
                                                                                    <label class="radio_container">

                                                                                        <input type="radio" class="mouthfeel_H" value="H" name="fm_chk">
                                                                                        <div class="checkmark">
                                                                                        </div>
                                                                                        <h5>H</h5>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="entity_input">
                                                                                <input type="text" name="mouthfeel_note" id="mouthfeel_note" placeholder="NOTES" class="entity_note">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="bg-flavor--theme">
                                                                    <h3 class="entity-text flavor-bg">FLAVOR</h3>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <div class="design-slider mt-5 mb-5">
                                                                                <div class="customslider flavor"><input type="hidden" name="flavour" id="flavour" value="6"></div>
                                                                            </div>
                                                                            <div class="entity_input">
                                                                                <input type="text" name="flavor_note" id="flavor_note" placeholder="NOTES" class="entity_note">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-taste--theme">
                                                                    <h3 class="entity-text aftertaste-bg">AFTERTASTE</h3>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <div class="design-slider mt-5 mb-5">
                                                                                <div class="customslider aftertaste"><input type="hidden" name="after_taste" id="after_taste" value="6"></div>
                                                                            </div>
                                                                            <div class="entity_input">
                                                                                <input type="text" name="aftertaste_note" id="aftertaste_note" placeholder="NOTES" class="entity_note">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-balance--theme">
                                                                    <h3 class="entity-text balance-bg">BALANCE</h3>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <div class="design-slider mt-5 mb-5">
                                                                                <div class="customslider balance"><input type="hidden" name="balance" id="balance" value="8"></div>
                                                                            </div>
                                                                            <div class="entity_input margin-bottom-balance">
                                                                                <input type="text" name="balance_note" id="balance_note" placeholder="NOTES" class="entity_note">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-overall--theme">
                                                                    <h3 class="entity-text overall-bg">OVERALL</h3>
                                                                    <div class="row">
                                                                        <div class="col-lg-12" style="text-align:center">
                                                                            <div class="design-slider mt-5 mb-5">
                                                                                <div class="customslider overall"><input type="hidden" name="overall" id="overall" value="6"></div>
                                                                            </div>
                                                                            <div class="entity_input">
                                                                                <input type="text" name="overall_note" id="overall_note" placeholder="NOTES" class="entity_note">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <!-- // mobile layout ends // -->

                                                    {{-- <input type="hidden" name="defect" id="defect" value=""> --}}



                                                    <div class="container-fluid">
                                                        <h3 class="entity-text total-bg">TOTAL</h3>
                                                        <p class="entity-label" style="color: #000;">(+36)</p>
                                                        <p id="input_total_score" style="max-width:100%;width: 267px;margin: auto;">
                                                            <input onkeyup="if (this.value > 100){ calcTotal()};" style="max-width:100%;text-align: center;font-size: 100px;font-family: ''Montserrat'';width: auto;border: 1px solid gainsboro;border-radius: 6px;padding: 15px;" type="hidden" class="totalScore" name="total_score" id="total_score" value="84">
                                                        </p>
                                                        <h2 class="totalScore" id="div_total_score">0</h2>
                                                        <a class="anchor-ovveride" onclick="toggleDivs()">Manually Override Score</a>
                                                        <input type="hidden" value="0" name="manual_override">
                                                        <script>
                                                            function toggleDivs() {
                                                                $('#div_total_score').hide();
                                                                $('#input_total_score').show();
                                                                $('input[name=manual_override]').val(1);
                                                            }
                                                        </script>

                                                        <div class="wrapper-btn">
                                                            <div class="row parent-btn">
                                                                <div class="btn-next-prev">
                                                                    <input type="hidden" id="to_go_sample" name="to_go_sample" value="">

                                                                    <button type="submit" value="1" name="sample_submit_prev" class="submit-form-btn" @if ($previous->id == \Str::afterLast(request()->url(), '/')) disabled="disabled" @endif>PREVIOUS
                                                                    </button>
                                                                    <button type="submit" value="0" name="sample_submit" class="submit-form-btn" @if ($next->id == \Str::afterLast(request()->url(), '/')) disabled="disabled" @endif>NEXT
                                                                    </button>
                                                                </div>
                                                                {{-- <a class="submit-form-btn" type="button"
                                                                    value="" onclick="showmodal()">SUBMIT
                                                                    TABLE</a> --}}

                                                                @if ($lastSample->id == \Str::afterLast(request()->url(), '/'))
                                                                <a class="submit-form-btn" type="button" value="" onclick="showmodal()">SUBMIT
                                                                    TABLE</a>
                                                                @else
                                                                {{-- <a type="submit" name=""
                                                                        class="submit-form-btn">SAVE
                                                                        TABLE</a> --}}
                                                                <button type="submit" name="" class="submit-form-btn">Save Table</button>
                                                                @endif


                                                            </div>
                                                        </div>
                                                        <hr class="hr hr-margin">
                                                        <div class="row">
                                                            <div class="scrollable" style="overflow:auto;">
                                                                <div class="button-group" style="white-space:nowrap">
                                                                <?php /*
                                                                    @foreach ($alltablesamples as $samp)
                                                                    @php $extraclass = ""; @endphp
                                                                    @if ($samp->is_hidden == 1)
                                                                    @php $extraclass="isdone"; @endphp
                                                                    @endif
                                                                    @if ($samp->sampleId == $sentSampleId)
                                                                    {{-- <a onclick="setSampleToGo({{$samp->sampleId}})" class="btn btn-success pager hid_{{$samp->is_hidden}} {{$extraclass}}" href="{{route('give_review',['juryId'=>$samp->juryId,'table'=>$samp->sampleTable,'sampleId'=>$samp->sampleId ])}}"> --}}
                                                                    <a class="btn btn-success pager hid_{{ $samp->is_hidden }} {{ $extraclass }}" href="javascript:setSampleToGo({{ $samp->sampleId }})">
                                                                        {{ $samp->samples }}
                                                                    </a>
                                                                    @else
                                                                    <a class="btn btn-secondary pager hid_{{ $samp->is_hidden }} {{ $extraclass }}" href="javascript:setSampleToGo({{ $samp->sampleId }})">
                                                                        {{ $samp->samples }}
                                                                    </a>
                                                                    @endif
                                                                    @endforeach
                                                                    */ ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="hr">
                                                        <div class="footer-end">
                                                            <p>BEST OF YEMEN 2023</p>
                                                        </div>


                                                    </div>
                                                    <div id="myModal" class="modal" tabindex="-1">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Submit Cupping
                                                                    </h5>
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>You are about to submit results for
                                                                    <?php /*    
                                                                    @foreach ($alltablesamples as $samp)
                                                                        @if ($samp->sampleTable == $table)
                                                                        &nbsp<b>{{ $samp->samples }}</b>,
                                                                        @endif
                                                                        @endforeach.
                                                                        */ ?>
                                                                    </p>
                                                                    <br><br>
                                                                    <p>Are you sure you want to do this? You
                                                                        cannot edit fields once submitted.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                    <button name="table_submit" class="btn btn-primary" id="final_submit" onclick="finalSubmit()">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
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

</body>
<!-- END: Body-->

</html>
