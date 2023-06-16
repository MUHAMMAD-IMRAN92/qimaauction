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

                                            </body>
<!-- END: Body-->

</html>
