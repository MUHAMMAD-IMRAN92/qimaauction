<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Review</title>

    <link rel="apple-touch-icon" href="{{ asset('public/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/app-assets/images/ico/logo_new.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href={{ asset('public/app-assets/vendors/css/vendors.min.css') }}>
    <link rel="stylesheet" type="text/css"
        href={{ asset('public/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css') }}>
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
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/app-assets/css/core/colors/palette-gradient.css') }}">
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

    .pad-x15 {
        padding: 0 15px;
    }

    .button-wrapper {
        display: flex;
        /* justify-content: center; */
        flex-direction: column;
        align-items: center;
    }

    .button-wrapper-2 {
        display: flex;
        gap: 20px;
    }

    .black {
        background-color: black !important;
        color: white !important;

    }

    .button-wrapper .btn-1 {
        color: rgba(87, 85, 85, 1) !important;
        font-weight: 700;
        font-family: 'Montserrat';
        font-size: 16px;
        font-weight: 700;
        line-height: 20px;
        letter-spacing: 0.1em;
        text-align: center;
        width: 260px;
    }

    h3.entity-text {
        font-family: 'Montserrat';

    }

    .button-wrapper .btn-2 {
        color: rgba(87, 85, 85, 1) !important;
        font-weight: 700;
        font-family: 'Montserrat';
        font-size: 16px;
        font-weight: 700;
        line-height: 20px;
        letter-spacing: 0.1em;
        text-align: center;
        width: 550px;
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

    @media (max-width: @screen-xs) {
        body {
            font-size: 10px;
        }
    }

    @media (max-width: @screen-sm) {
        body {
            font-size: 14px;
        }
    }

    .override {
        font-family: 'Montserrat';
        font-size: 16px;
        font-weight: 800;
        line-height: 20px;
        letter-spacing: 0.1em;
        text-align: center;
        color: rgba(87, 85, 85, 1);


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
        font-feature-settings: 'kern'off;
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
    }

    .entity-text {
        background-color: transparent;
    }

    .entity-label {
        font-family: 'Montserrat';
        font-size: 20px;
        color: white;
        text-align: center;
        padding-top: 10px;
        padding-bottom: 20px;
    }

    .aroma-bg {
        background-color: #6A2AF1;
    }

    .defects-bg {
        background-color: #B22AF1;
        margin-top: 82px;
    }

    .cleancup-bg {
        background-color: #2AE5F1;
    }

    .total-bg {
        background-color: #000;
    }

    .roast-bg {
        background-color: transparent;
        font-family: 'Montserrat';
        font-size: 24px;
        font-weight: 800;
        line-height: 29px;
        letter-spacing: 0.1em;
        text-align: center;

    }

    .overall-bg {
        background-color: #95E2AF;
        margin-top: 0px;
    }

    .balance-bg {
        background-color: #29672C;
    }

    .flavor-bg {
        background-color: #F32C38;
    }

    .aftertaste-bg {
        background-color: #E7936E;
    }

    .sweetness-bg {
        background-color: #E2959A;
    }

    .acidity-bg {
        background-color: #FDBF86;
    }

    .mouthfeel-bg {
        background-color: #38DFB7;
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
        width: 150px !important;
        background: transparent;
        border-color: white;
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
        text-align: center;
        font-size: 100px;
        font-family: 'EB Garamond';
    }

    .submit-form-btn {
        background: transparent;
        color: #A4A3A3 !important;
        border: 1px solid #A4A3A3 !important;
        padding: 22px;
        width: 200px;
        height: auto;
        display: block;
        margin: auto;
        margin-top: 40px;
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
    }

    .pager.btn-success {
        background-color: #000 !important;
        color: #FFF;
    }

    .checkmark {
        margin: auto;
    }

    .ui-slider-pips .ui-slider-line {
        background: #999;
        width: 2px;
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

    .ui-corner-all {
        border-radius: 50%;
    }

    .ui-state-default,
    .ui-widget-content .ui-state-default,
    .ui-widget-header .ui-state-default {
        border: 1px solid black;
        background: black url(images/ui-bg_highlight-soft_100_f6f6f6_1x100.png) 50% 50% repeat-x;
        font-weight: bold;
        color: black;
    }

    .customslider.ui-slider-horizontal {
        height: 1px;
    }

    .customslider.ui-slider-horizontal .ui-slider-handle {
        top: -9px;
        margin-left: -8px;
    }

    .customslider.ui-slider-pips .ui-slider-pip {
        top: 14px;
    }

    .aromaslider.ui-slider-horizontal {
        height: 1px;
    }

    #second_number option {
        color: black !important;
    }

    .aromaslider.ui-slider-horizontal .ui-slider-handle {
        top: -9px;
        margin-left: -8px;
    }

    .aromaslider.ui-slider-pips .ui-slider-pip {
        top: 14px;
    }

    .roastslider.ui-slider-horizontal {
        height: 50px;
        border-radius: 0;
        background-image: linear-gradient(to right, #fff, #88592D) !important;
    }

    .roastslider .ui-slider-handle {
        height: 62px;
        border-radius: 5px;
        background-color: gray;
        border-color: grey;
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

    ul.breadcrumb li+li:before {
        content: "/\00a0";
        font-size: 26px;
    }

    ul.breadcrumb li a {
        text-decoration: none;
        color: black;
    }

    .id-text {
        font-size: 65px;
        color: #A4A3A3;
        font-family: 'Garamond Premier Pro';
    }

    .sample-area {
        text-align: center;
    }

    .sample_number {
        font-family: 'Garamond Premier Pro';
        font-style: normal;
        font-weight: 400;
        font-size: 140px;
        line-height: 168px;
        /* identical to box height */
        color: #040404;
    }

    .custom_hr {
        border-top: 2px solid #A4A3A3;
    }

    .entity_note {
        width: 100%;
    }

    .design-slider {
        padding: 2rem 0.4rem;
    }

    .flex-evenly {
        display: flex;
        justify-content: space-evenly;
    }

    input {
        border: 1px solid #000000;
    }

    @media only screen and (max-width:767px) {
        .id-text {
            font-size: 40px;
        }

        .sample_number {
            font-size: 80px;
        }

        .breadcrumb-section {
            display: none;
        }

        .breadcrumb-content {
            font-size: 20px !important;
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

    .aroma-bg {
        background-color: transparent !important;
        font-family: 'Montserrat';
        font-size: 24px;
        font-weight: 800;
        line-height: 29px;
        letter-spacing: 0.3em;
        text-align: center;

    }

    .defects-bg {
        background-color: transparent !important;
        font-family: 'Montserrat';
        font-size: 24px;
        font-weight: 800;
        line-height: 29px;
        letter-spacing: 0.3em;
        text-align: center;


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
        font-feature-settings: 'kern'off;

        color: #000000 !important;
    }

    .roast-bg {
        background-color: transparent;

        color: white;
    }

    .overall-bg {
        background-color: transparent !important;
        font-family: 'Montserrat';
        font-size: 24px;
        font-weight: 800;
        line-height: 29px;
        letter-spacing: 0.3em;
        text-align: center;
    }

    .balance-bg {
        background-color: transparent !important;
        font-family: 'Montserrat';
        font-size: 24px;
        font-weight: 800;
        line-height: 29px;
        letter-spacing: 0.3em;
        text-align: center;
    }

    .flavor-bg {
        background-color: transparent !important;
        font-family: 'Montserrat';
        font-size: 24px;
        font-weight: 800;
        line-height: 29px;
        letter-spacing: 0.3em;
        text-align: center;
    }

    .aftertaste-bg {
        background-color: transparent !important;
        font-family: 'Montserrat';
        font-size: 24px;
        font-weight: 800;
        line-height: 29px;
        letter-spacing: 0.3em;
        text-align: center;
    }

    .sweetness-bg {
        background-color: transparent !important;
        font-family: 'Montserrat';
        font-size: 24px;
        font-weight: 800;
        line-height: 29px;
        letter-spacing: 0.3em;
        text-align: center;
    }

    .acidity-bg {
        background-color: transparent !important;
        font-family: 'Montserrat';
        font-size: 24px;
        font-weight: 800;
        line-height: 29px;
        letter-spacing: 0.3em;
        text-align: center;
    }

    .mouthfeel-bg {
        background-color: transparent !important;
        font-family: 'Montserrat';
        font-size: 24px;
        font-weight: 800;
        line-height: 29px;
        letter-spacing: 0.3em;
        text-align: center;
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
        text-align: center;
        color: black !important;
    }

    .submit-form-btn {
        text-align: center;
        background: white;
        color: black;
        border: 1px solid #A4A3A3 !important;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        padding: 12px;
        width: 100%;
        height: auto;
        display: block;
        margin: auto;
        margin-top: 40px;
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
        font-weight: 700;
    }

    .pager.btn-success {
        background-color: #000 !important;
        color: #FFF;
        border-color: #000 !important;
    }

    .ui-slider-pips .ui-slider-line {
        background: white;
        width: 3px;
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

    .ui-corner-all {
        border-radius: 0;
    }

    .ui-state-default,
    .ui-widget-content .ui-state-default,
    .ui-widget-header .ui-state-default {
        border: 1px solid #575555;
        background: #575555 url(images/ui-bg_highlight-soft_100_f6f6f6_1x100.png) 50% 50% repeat-x;
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
        border-radius: 50%;
    }

    .customslider.ui-slider-pips .ui-slider-pip {
        top: 14px;
    }

    .aromaslider.ui-slider-horizontal {
        height: 3px;
    }

    .aromaslider.ui-slider-horizontal .ui-slider-handle {
        top: -9px;
        margin-left: -8px;
        border-radius: 50%;
    }

    .aromaslider.ui-slider-pips .ui-slider-pip {
        top: 14px;
    }

    h5 {
        margin-top: 0px !important;
    }

    .roastslider.ui-slider-horizontal {
        height: 50px;
        border: none;
        border-radius: 0;
        background-image: linear-gradient(90deg, #D9B594 23.96%, #765418 100%)
    }

    .roastslider .ui-slider-handle {
        height: 62px;
        border-radius: 0;
        background-color: #575555;
        border-color: #575555;
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
        padding: 0.5rem 0.4rem;
        margin: auto;
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

        .margin-bottom-balance {
            margin-bottom: 0px !important;
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
        font-size: 20px;
    }

    .list-crumb .list-2 {
        width: 100%;
        font-weight: 800;
        padding: 15px;

    }

    .bg-roast--theme {
        background: #DBCDB7;
        padding: 30px 90px;
        margin: 0px;
        width: auto !important;
    }

    .bg-aroma--theme-1 {
        background: linear-gradient(264deg, #C488D9 0%, #C4D3FA 100%);
        padding: 30px 90px;
        width: auto !important;
    }

    .bg-aroma--theme-2 {
        background: linear-gradient(264deg, #C176DC 0%, #B9CDFF 100%);
        padding: 30px 90px;
        width: auto !important;

    }

    .bg-aroma--theme-3 {
        background: linear-gradient(264deg, #BE6DDB 0%, #B4C7F9 100%);
        ;
        padding: 30px 90px;
        width: auto !important;

    }

    .bg-defects--theme {
        background: linear-gradient(290deg, #FF5757 0%, #F19393 100%);
        padding: 30px 90px;
        width: auto !important;

    }

    .bg-clean--theme {
        background: linear-gradient(290deg, #93DBF1 0%, #5786FF 100%);
        padding: 30px 90px;
        width: auto !important;

    }

    .bg-sweet--theme {
        background: linear-gradient(290deg, #FBBAAC 0%, #EC9185 100%);
        ;
        padding: 30px 90px;
        width: auto !important;

    }

    .bg-sweet--theme h2 {
        font-family: 'Montserrat';
        font-size: 10px;
        font-weight: 400;
        line-height: 12px;
        letter-spacing: 0.2em;
        text-align: center;
        padding-top: 30px;
        color: white;
    }

    .bg-acid--theme {
        background: linear-gradient(290deg, #DEF193 0%, #FF9B3F 100%);
        padding: 30px 90px;
        width: auto !important;

    }

    .bg-mouth--theme {
        background: linear-gradient(290deg, #FF563F 0%, #E493F1 100%);
        padding: 30px 90px;
        width: auto !important;

    }

    .bg-over--theme {
        display: grid;
        background: linear-gradient(180deg, #716EE4 0%, #62CBDA 100%);
        padding: 30px 400px;
    }

    .bg-flavor--theme {
        background: linear-gradient(290deg, #55BBA9 45.31%, #ACFBF6 100%);
        padding: 30px 90px;
        width: auto !important;

    }

    .bg-taste--theme {
        background:
            linear-gradient(270deg, #B557FF 0%, #F19393 100%);


        padding: 30px 90px;
        width: auto !important;

    }

    .bg-balance--theme {
        background: linear-gradient(290deg, #68BC4A 0%, #44BA6C 46.88%);
        padding: 30px 90px;
        width: auto !important;

    }

    .bg-overall--theme {
        background: linear-gradient(290deg, #716EE4 0%, #62CBDA 100%);
        padding: 30px 90px;
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
        margin-top: 10px;
        text-align: center;
        margin-bottom: 10px;
        border-top: 3px solid white;
    }

    .card {
        background: rgba(239, 235, 229, 1) !important;

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
        src: url('{{ asset('public/app-assets/fonts/Montserrat/Montserrat-Bold.ttf') }}') format('truetype');

    }

    .margin-bottom-balance {
        margin-bottom: 161px;
    }

    .radio_container h5 {
        font-weight: 700;
        color: #575555;
        margin-top: 8px !important;
    }

    .radio_button div {
        margin: 0 4px;
    }

    .radio_container input~.checkmark {
        border-radius: 6px !important;
    }

    #grid-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(10, 1fr);
        padding: 0px;
        margin: 0px;
    }

    #grid-container #item-left-1 {
        grid-row: 1 / 3;

    }

    #grid-container #item-left-2 {
        grid-column: 1 / 1;
        grid-row: 3 / 5;

    }

    #grid-container #item-left-3 {
        grid-column: 1 / 1;
        grid-row: 5 / 7;
        display: grid;
    }

    #grid-container #item-left-4 {
        grid-column: 1 / 1;
        grid-row: 7 / 9;
    }

    #grid-container #item-left-5 {
        grid-column: 1 / 1;
        grid-row: 9 / 11;
    }

    #grid-container #item-left-6 {
        grid-column: 1 / 1;
        grid-row: 11 / 13;
    }

    #grid-container #item-right-1 {
        display: grid;
        grid-column: 2 / -1;
        grid-row: 1 / 4;
    }

    #grid-container #item-right-2 {
        grid-column: 2 / -1;
        grid-row: 4 / 6;
        display: grid;
    }

    #grid-container #item-right-3 {
        grid-column: 2 / -1;
        grid-row: 6 / 8;
        display: grid;
    }

    #grid-container #item-right-4 {
        grid-column: 2 / -1;
        grid-row: 8 / 11;
    }

    #grid-container #item-right-5 {
        grid-column: 2 / -1;
        grid-row: 10 / 13;
    }

    @media only screen and (max-width: 800px) {
        #grid-container {
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }

        #grid-container #item-left-1 {
            grid-row: 1;
            grid-row: initial;
        }

        #grid-container #item-left-2 {
            grid-column: 1 / 1;
            grid-row: initial;
            display: grid;
        }

        #grid-container #item-left-3 {
            grid-column: 1 / 1;
            grid-row: initial;
        }

        #grid-container #item-left-4 {
            grid-column: 1 / 1;

            grid-row: initial;
        }

        #grid-container #item-left-5 {
            grid-column: 1 / 1;

            grid-row: initial;
        }

        #grid-container #item-left-6 {
            grid-column: 1 / 1;

            grid-row: initial;
        }

        #grid-container #item-right-1 {

            grid-column: 1 / 1;

            grid-row: span 2;
        }

        #grid-container #item-right-2 {
            grid-column: 1 / 1;

            grid-row: initial;
        }

        #grid-container #item-right-3 {
            grid-column: 1 / 1;

            grid-row: initial;
        }

        #grid-container #item-right-4 {
            grid-column: 1 / 1;

            grid-row: initial;
        }

        #grid-container #item-right-5 {
            grid-column: 1 / 1;

            grid-row: initial;
        }
    }

    .radio_container {
        text-align: -webkit-center;
    }

    .radio_button {
        display: flex;
        justify-content: center;
        margin-top: 1rem;
        grid-gap: 2px;
        padding-top: 5px !important;
    }

    .radio_container h5 {
        color: white;
        font-family: 'Montserrat';
        font-size: 8px;
        font-weight: 800;
        line-height: 10px;
        letter-spacing: 0em;
        text-align: center;

    }

    .bg-acid--theme h2 {
        font-family: 'Montserrat';
        font-size: 10px;
        font-weight: 400;
        line-height: 12px;
        letter-spacing: 0.2em;
        text-align: center;
        padding-top: 30px;
        color: white;

    }

    .bg-golden--theme {
        background:
            linear-gradient(270deg, #DEA857 45.31%, #FBACAC 100%);

    }

    .vs-checkbox-primary input:checked~.vs-checkbox .vs-checkbox--check {
        background-color: rgba(99, 93, 93, 1) !important;
    }

    .vs-checkbox-primary input:checked~.vs-checkbox {
        border-color: rgba(99, 93, 93, 1) !important;
    }

    .field-set {
        display: flex;
        justify-content: center;
        align-items: baseline;
        width: 100%;
    }

    .vs-checkbox-con {
        transform: scale(1.5);
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin: 1.25rem 1.2rem;
    }

    .field-set h3 {
        font-family: 'Montserrat';
        font-size: 19px;
        font-weight: 800;
        line-height: 23px;
        letter-spacing: 0em;
        text-align: center;
        color: white;

    }

    body {
        background: rgba(239, 235, 229, 1) !important;

    }

    .theme-color {
        font-family: 'Montserrat';
        font-size: 19px;
        font-weight: 900;
        line-height: 32px;
        letter-spacing: 0.2em;
        text-align: center;
        color: rgba(231, 132, 96, 1);
        text-transform: uppercase;


    }

    #grid-container h3 {
        font-family: 'Montserrat' !important;
        font-size: 24px !important;
        font-weight: 800 !important;
        line-height: 29px !important;
        letter-spacing: 0.3em !important;
        text-align: center !important;
        text-transform: uppercase !important;

    }

    hr {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 0;
        border-top: 3px solid white;
    }

    .name-section h2 {
        font-family: 'Montserrat';
        font-size: 20px;
        font-weight: 800;
        line-height: 32px;
        letter-spacing: 0.2em;
        text-align: center;
        color: rgba(87, 85, 85, 1);
        text-transform: uppercase;


    }

    .category p {
        font-family: 'Montserrat';
        font-size: 13px;
        font-weight: 500;
        line-height: 16px;
        letter-spacing: 0.1em;
        text-align: center;

    }

    .name-text {
        font-family: 'Montserrat';
        font-size: 25px;
        font-weight: 800;
        line-height: 32px;
        letter-spacing: 0.1em;
        text-align: center;
        text-transform: uppercase;

    }

    .id-text-2 {
        font-family: 'Montserrat';
        font-size: 17px;
        font-weight: 500;
        line-height: 21px;
        letter-spacing: 0.2em;
        text-align: center;
        text-transform: uppercase;


    }

    .process-gen {
        font-family: 'Montserrat';
        font-size: 13px !important;
        font-weight: 500 !important;
        line-height: 16px !important;
        letter-spacing: 0.1em !important;
        text-align: center !important;
        text-transform: uppercase !important;
        color: rgba(87, 85, 85, 1) !important;



    }

    .process-name {
        font-family: 'Montserrat';
        font-size: 16px !important;
        font-weight: 700 !important;
        line-height: 14px !important;
        letter-spacing: 0.1em !important;
        text-align: center !important;
        text-transform: uppercase !important;


    }
</style>

<body
    class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content h-100">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">

            </div>

            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-12  p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            @if (session('success'))
                                                <div class="col-md-12 alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif
                                            <div class="col-lg-12">
                                                <div class="image-section">
                                                    <img src="{{ asset('public/app-assets/images/logo/new-logo-2023.png') }}"
                                                        alt="">
                                                    <img src="{{ asset('public/app-assets/images/logo/heading.png') }}"
                                                        alt="">

                                                </div>
                                                <!--Breadcrumb Section-->
                                                <div class="breadcrumb-section">
                                                    <ul class="breadcrumb">
                                                        {{-- <li><a href="#">
                                                                <p class="breadcrumb-content"
                                                                    style="font-family: 'Montserrat';font-size:25px; padding-top:0.5rem; color: #A4A3A3;">
                                                                    CUPPER</p>
                                                            </a></li>
                                                        <li><a href="#">
                                                                <p class="breadcrumb-content"
                                                                    style="font-family: 'Montserrat';font-size:25px;color: #A4A3A3;">
                                                                    {{ $juryName ?? '' }}</p>
                                                            </a></li>
                                                        <a href="#">
                                                            <p class="breadcrumb-content"
                                                                style="font-family: 'Montserrat';font-size:25px;color: #ccc;padding: 0 10px;">
                                                                -</p>
                                                        </a> --}}
                                                        {{-- <li><a href="#">
                                                                <p class="pt-1 breadcrumb-content"
                                                                    style="font-family: 'Montserrat';font-size:25px;color: #A4A3A3;">
                                                                    COMPANY</p>
                                                            </a></li>
                                                        <li><a href="#">
                                                                <p class="breadcrumb-content"
                                                                    style="font-family: 'Montserrat';font-size:25px;color: #A4A3A3;">
                                                                    {{ $juryCompany ?? ('' ?? '') }}</p>
                                                            </a></li> --}}

                                                        <h5 class="entity-text  theme-color">
                                                            WELCOME TO THE PEOPLE'S CHOICE
                                                        </h5>
                                                    </ul>
                                                </div>
                                                {{-- <div class="mobile-breadcrumb-section">
                                                    <ul class="breadcrumb">
                                                        <li><a href="#">
                                                                <p class="breadcrumb-content pt-1"
                                                                    style="font-family: 'Montserrat';font-size:25px; padding-top:0.5rem; color: #A4A3A3;">
                                                                    CUPPER</p>
                                                            </a></li>
                                                        <li><a href="#">
                                                                <p class="breadcrumb-content"
                                                                    style="font-family: 'Montserrat';font-size:25px;color: #A4A3A3;">
                                                                    {{ $juryName ?? '' }}</p>
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
                                                                    {{ $juryCompany ?? '' }}</p>
                                                            </a></li>
                                                    </ul>
                                                </div>
                                                <hr class="custom_hr"> --}}
                                                <!--Breadcrumb Section-->
                                                {{-- <p class="px-2" style="font-family: 'Montserrat';font-size:25px;">CUPPER: {{ $juryName }}</p>
                                            <p class="px-2" style="font-family: 'Montserrat';font-size:25px;">COMPANY: {{$juryCompany ?? ''}}</p> --}}
                                                <!--Sample ID Section-->
                                                <div class="sample-area">
                                                    <!-- <h1 class="id-text">SAMPLE ID</h1>
                                                    <p class="sample_number">
                                                        @foreach ($alltablesamples as $samp)
@if ($samp->sampleId == $sentSampleId)
<h1>{{ $samp->samples }}</h1>
@endif
@endforeach
                                                    </p> -->
                                                    <!--Breadcrumb Section-->
                                                    {{-- <div class="breadcrumb-section">
                                                <ul class="breadcrumb">
                                                    <li><a href="#"><p class="" style="font-family: 'Montserrat';font-size:25px; padding-top:0.5rem; color: #A4A3A3;">TABLE-{{$productdata->table}}</p></a>
                                                    </li>
                                                    <li><a href="#"><p class="" style="font-family: 'Montserrat';font-size:25px;color: #A4A3A3;">POSITION-{{$productdata->postion}}</p></a></li>

                                                </ul>
                                            </div> --}}
                                                    <!--Breadcrumb Section-->
                                                </div>
                                                <hr>
                                                <div class="name-section">
                                                    <h2>{{ @$user->name }}</h2>
                                                </div>
                                                <hr>
                                                <div class="category">
                                                    <p>CATEGORY</p>
                                                    <h2 class="theme-color">
                                                        {{ @request()->process == 1 ? 'NATURAL AND DEEP FERMENTATION' : 'ALCHEMY' }}
                                                    </h2>
                                                </div>
                                                <hr>
                                                <!--Sample ID Section-->
                                                <div class="container-fluid">
                                                    <div class="sample-area row">
                                                        <div class="sample-heading col-lg-6">

                                                            <p class="name-text">
                                                                {{ @$auction_product->rank }}.
                                                                {{ @$auction_product->name }}
                                                            </p>
                                                            <h2 class="id-text-2">Jury code :
                                                                {{ @$auction_product->code }}</h2>
                                                        </div>
                                                        <!--Breadcrumb Section-->
                                                        <div class="breadcrumb-section col-lg-6  ">
                                                            <ul class="breadcrumb list-crumb">
                                                                <li class="list-1"><a href="#">
                                                                        <p class="process-gen" style="">
                                                                            PROCESS</p>
                                                                        <P class="process-name">
                                                                            {{ @$auction_product->process }}</P>
                                                                    </a></li>
                                                                <li class="list-2"><a href="#">
                                                                        <p class="process-gen" style="">
                                                                            genetics</p>
                                                                        <P class="process-name">
                                                                            {{ @$auction_product->genetic }}</P>
                                                                    </a>
                                                                </li>


                                                            </ul>
                                                        </div>
                                                        <!--Breadcrumb Section-->
                                                    </div>
                                                    <!--Breadcrumb Section-->
                                                    {{-- <div class="breadcrumb-section col-lg-6  ">
                                                        <ul class="breadcrumb list-crumb">
                                                        <li class="list-1"><a href="#">
                                                                    <p class=""
                                                                        style="font-family: 'Montserrat';font-size:25px;color: black;">
                                                                        POSITION-{{ $productdata->postion }}</p>
                                                                </a></li>
                                                            <li class="list-2"><a href="#">
                                                                    <p class=""
                                                                        style="font-family: 'Montserrat';font-size:25px; padding-top:0.5rem; color: black;">
                                                                        TABLE-{{ $productdata->table }}</p>
                                                                </a>
                                                            </li>


                                                        </ul>
                                                    </div> --}}
                                                    <!--Breadcrumb Section-->
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <form action="{{ url('/jury/link/saveCuppingReview') }}"
                                                    method="POST" enctype="multipart/form-data" id="myForm">
                                                    @csrf
                                                    <input type="hidden" name="process_no"
                                                        value="{{ @request()->process }}">
                                                    <input type="hidden" name="table_value"
                                                        value="{{ @$auction_product->table }}">
                                                    <input type="hidden" name="auction_id"
                                                        value="{{ @$auction_product->auction_id }}">
                                                    <input type="hidden" name="userId"
                                                        value="{{ $user->id }}">
                                                    <input type="hidden" name="current_position"
                                                        value="{{ @$auction_product->position }}">
                                                    <input type="hidden" name="rank_no"
                                                        value="{{ @$auction_product->rank }}">
                                                    <input type="hidden" name="sample_code"
                                                        value="{{ @$auction_product->code }}">
                                                    <input type="hidden" name="next_position"
                                                        value="@php
$next_position = @$auction_product->position + 1;
                                                        echo $next_position; @endphp">
                                                    <input type="hidden" name="previous_position"
                                                        value="@php
$previous_position = @$auction_product->position - 1;
                                                            echo $previous_position; @endphp">
                                                    <input type="hidden" name="product_id"
                                                        value="{{ @$auction_product->product_id }}">
                                                    <input type="hidden" name="review_id"
                                                        value="{{ $sampleReview->id ?? null }}">
                                                    <input type="hidden" name="sent_sample_id"
                                                        value="{{ $sentSampleId }}">


                                                    <div id="grid-container">

                                                        <div class="row bg-roast--theme" id="item-left-1">
                                                            <div class="col-12">
                                                                <h3 class="entity-text roast-bg">ROAST COLOUR</h3>
                                                            </div>
                                                            <div class="col-lg-12" style="text-align:center">
                                                                <div class="design-slider mt-5 mb-5">
                                                                    <div class="roastslider"><input type="hidden"
                                                                            name="roast" id="roast"
                                                                            value="50"></div>
                                                                </div>
                                                                <div class="entity_input mb-5">
                                                                    <input type="text" name="roast_color"
                                                                        id="quality_notes"
                                                                        value="{{ $sampleReview->roast_color_note ?? '' }}"
                                                                        placeholder="NOTES" class="entity_note">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- roast end -->
                                                        <div id="item-right-1">
                                                            <div class="bg-aroma--theme-1 ">
                                                                <div class="row ">
                                                                    <div class="col-12">
                                                                        <h3 class="entity-text aroma-bg">AROMA</h3>
                                                                        <div class="row">
                                                                            <div class="col-lg-12"
                                                                                style="text-align:center">
                                                                                <div class="design-slider mt-5 mb-5">
                                                                                    <div class="customslider aroma">
                                                                                        <input type="hidden"
                                                                                            name="aroma"
                                                                                            id="aroma"
                                                                                            value="8">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <!-- <div>


                                                    {{-- <div class="col-lg-12">
                                                        <h5 style="margin-top:-6px">CRUST</h5>
                                                    </div>
                                                    <div class="design-slider mt-5 mb-5" style="height:58px">
                                                        <div class="aromaslider aromacrust"><input type="hidden"
                                                                name="aroma_crust" id="aroma_crust" value="0"></div>
                                                    </div> --}}
                                                    </div> -->
                                                            <div class="bg-aroma--theme-2 ">
                                                                <div class="col-lg-12">
                                                                    <h5 style="margin-top:34px">DRY</h5>
                                                                </div>
                                                                <div class="design-slider mt-5 mb-5"
                                                                    style="height:58px">
                                                                    <div class="aromaslider aromadry"><input
                                                                            type="hidden" name="aroma_dry"
                                                                            id="aroma_dry" value="0"></div>
                                                                </div>

                                                            </div>
                                                            <div class="bg-aroma--theme-3 ">
                                                                <div class="col-lg-12">
                                                                    <h5 style="margin-top:-6px">BREAK</h5>
                                                                </div>
                                                                <div class="design-slider mt-5 mb-5"
                                                                    style="height:58px">
                                                                    <div class="aromaslider aromabreak"><input
                                                                            type="hidden" name="aroma_break"
                                                                            id="aroma_break" value="0"></div>
                                                                </div>
                                                                <!-- <div class="col-lg-12 mt-5">
                                                        <h5 style="margin-top:-6px">Descriptors</h5>
                                                    </div> -->
                                                                <div class="entity_input mb-5">
                                                                    <input type="text" name="aroma_text"
                                                                        id="quality_notes"
                                                                        value="{{ $sampleReview->aroma_note ?? '' }}"
                                                                        placeholder="NOTES" class="entity_note">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- aroma end -->
                                                        <div class=" bg-acid--theme" id="item-left-2">
                                                            <h3 class="entity-text acidity-bg">ACIDITY</h3>
                                                            <div class="row">
                                                                <div class="col-lg-12" style="text-align:center">
                                                                    <div class="design-slider mt-5 mb-5">
                                                                        <div class="customslider acidity"><input
                                                                                type="hidden" name="acidity"
                                                                                id="acidity" value="8"></div>
                                                                    </div>
                                                                    <h2>INTENSITY</h2>
                                                                    <div class="radio_button p-5">
                                                                        <div>
                                                                            <label class="radio_container">
                                                                                <input type="radio"
                                                                                    name="acidity_chk" value="VL"
                                                                                    class="acidity_L"
                                                                                    {{ @$sampleReview->acidity_chk == 'VL' ? 'checked' : '' }}>
                                                                                <div class="checkmark">
                                                                                </div>
                                                                                <h5>Very <br> Low</h5>

                                                                            </label>
                                                                        </div>
                                                                        <div>
                                                                            <label class="radio_container">
                                                                                <input type="radio"
                                                                                    name="acidity_chk" value="L"
                                                                                    class="acidity_L"
                                                                                    {{ @$sampleReview->acidity_chk == 'L' ? 'checked' : '' }}>
                                                                                <div class="checkmark">
                                                                                </div>
                                                                                <h5>Low</h5>

                                                                            </label>
                                                                        </div>
                                                                        <div>
                                                                            <label class="radio_container">
                                                                                <input type="radio"
                                                                                    name="acidity_chk" value="M"
                                                                                    class="acidity_M"
                                                                                    {{ @$sampleReview->acidity_chk == 'M' ? 'checked' : '' }}>
                                                                                <div class="checkmark">
                                                                                </div>
                                                                                <h5>Medium</h5>

                                                                            </label>
                                                                        </div>

                                                                        <div>
                                                                            <label class="radio_container">

                                                                                <input type="radio"
                                                                                    name="acidity_chk" value="H"
                                                                                    class="acidity_H"
                                                                                    {{ @$sampleReview->acidity_chk == 'H' ? 'checked' : '' }}>
                                                                                <div class="checkmark">
                                                                                </div>
                                                                                <h5>High</h5>

                                                                            </label>
                                                                        </div>
                                                                        <div>
                                                                            <label class="radio_container">

                                                                                <input type="radio"
                                                                                    name="acidity_chk" value="VH"
                                                                                    class="acidity_H"
                                                                                    {{ @$sampleReview->acidity_chk == 'VH' ? 'checked' : '' }}>
                                                                                <div class="checkmark">
                                                                                </div>
                                                                                <h5>Very <br> High</h5>

                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="entity_input mb-5">
                                                                        <input type="text" name="acidity_note"
                                                                            id="quality_notes"
                                                                            value="{{ $sampleReview->acidity_note ?? '' }}"
                                                                            placeholder="NOTES" class="entity_note">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- acidity end -->

                                                        <div class=" bg-flavor--theme" id="item-right-2">
                                                            <h3 class="entity-text flavor-bg">FLAVOR</h3>
                                                            <div class="row">
                                                                <div class="col-lg-12" style="text-align:center">
                                                                    <div class="design-slider mt-5 mb-5">
                                                                        <div class="customslider flavor"><input
                                                                                type="hidden" name="flavour"
                                                                                id="flavour" value="8"></div>
                                                                    </div>
                                                                    <div class="entity_input mb-5">
                                                                        <input type="text" name="flavour_text"
                                                                            id="quality_notes"
                                                                            value="{{ $sampleReview->flavour_note ?? '' }}"
                                                                            placeholder="NOTES" class="entity_note">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- flavor end -->
                                                        <div class="bg-sweet--theme" id="item-right-3">

                                                            <h3 class="entity-text sweetness-bg">BODY</h3>
                                                            <div class="row">
                                                                <div class="col-lg-12" style="text-align:center">
                                                                    <div class="design-slider mt-5 mb-5">
                                                                        <div class="customslider body"><input
                                                                                type="hidden" name="body"
                                                                                id="body" value="8"></div>
                                                                    </div>
                                                                    <h2>INTENSITY</h2>
                                                                    <div class="radio_button p-5">
                                                                        <div>
                                                                            <label class="radio_container  ">
                                                                                <input type="radio"
                                                                                    {{ @$sampleReview->body_chk == 'VT' ? 'checked' : '' }}
                                                                                    name="body_chk" value="VT"
                                                                                    class="acidity_L">
                                                                                <div class="checkmark">
                                                                                </div>
                                                                                <h5>Very <br> Thin</h5>

                                                                            </label>
                                                                        </div>
                                                                        <div>
                                                                            <label class="radio_container  ">
                                                                                <input type="radio"
                                                                                    {{ @$sampleReview->body_chk == 'T' ? 'checked' : '' }}
                                                                                    name="body_chk" value="T"
                                                                                    class="acidity_L">
                                                                                <div class="checkmark">
                                                                                </div>
                                                                                <h5>Thin</h5>

                                                                            </label>
                                                                        </div>
                                                                        <div>
                                                                            <label class="radio_container  ">
                                                                                <input type="radio" name="body_chk"
                                                                                    {{ @$sampleReview->body_chk == 'M' ? 'checked' : '' }}
                                                                                    value="M" class="acidity_M">
                                                                                <div class="checkmark">
                                                                                </div>
                                                                                <h5>Medium</h5>

                                                                            </label>
                                                                        </div>

                                                                        <div>
                                                                            <label class="radio_container ">

                                                                                <input type="radio" name="body_chk"
                                                                                    {{ @$sampleReview->body_chk == 'H' ? 'checked' : '' }}
                                                                                    value="H" class="acidity_H">
                                                                                <div class="checkmark">
                                                                                </div>
                                                                                <h5>Heavy</h5>

                                                                            </label>
                                                                        </div>
                                                                        <div>
                                                                            <label class="radio_container "
                                                                                style="text-align: justify">

                                                                                <input type="radio" name="body_chk"
                                                                                    {{ @$sampleReview->body_chk == 'VH' ? 'checked' : '' }}
                                                                                    value="VH" class="acidity_H">
                                                                                <div class="checkmark">
                                                                                </div>
                                                                                <h5>Very <br> Heavy</h5>

                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="entity_input mb-5">
                                                                        <input type="text" name="body_note"
                                                                            id="quality_notes"
                                                                            value="{{ $sampleReview->body_note ?? '' }}"
                                                                            placeholder="NOTES" class="entity_note">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- Body end -->
                                                        <div class="bg-mouth--theme" id="item-left-3">
                                                            <h3 class="entity-text aftertaste-bg">AFTER TASTE</h3>
                                                            <div class="row">
                                                                <div class="col-lg-12" style="text-align:center">
                                                                    <div class="design-slider mt-5 mb-5">
                                                                        <div class="customslider aftertaste"><input
                                                                                type="hidden" name="after_taste"
                                                                                id="after_taste" value="8"></div>
                                                                    </div>
                                                                    <div class="entity_input mb-5">
                                                                        <input type="text" name="after_taste_text"
                                                                            id="quality_notes"
                                                                            value="{{ $sampleReview->afetr_taste_note ?? '' }}"
                                                                            placeholder="NOTES" class="entity_note">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- after taste end -->
                                                        <div class=" bg-balance--theme" id="item-left-4">

                                                            <h3 class="entity-text balance-bg">BALANCE</h3>
                                                            <div class="row">
                                                                <div class="col-lg-12" style="text-align:center">
                                                                    <div class="design-slider mt-5 mb-5">
                                                                        <div class="design-slider mt-5 mb-5">
                                                                            <div class="customslider balance"><input
                                                                                    type="hidden" name="balance"
                                                                                    id="balance" value="8">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="entity_input mb-5">
                                                                        <input type="text" name="balance_text"
                                                                            id="quality_notes"
                                                                            value="{{ $sampleReview->balance_note ?? '' }}"
                                                                            placeholder="NOTES" class="entity_note">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- balance end -->

                                                        <div class="bg-golden--theme" id="item-right-4">

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="row pad-x15 p-3">
                                                                        <h3 class="entity-text">Uniformity</h3>
                                                                        <div class="field-set">
                                                                            <div class="d-flex flex-row">
                                                                                <fieldset>
                                                                                    <div
                                                                                        class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox"
                                                                                            name="uniformity[]"
                                                                                            id="uniformity1"
                                                                                            class="uniformity">
                                                                                        <input type="hidden"
                                                                                            id="uniformityvalue"
                                                                                            name="uniformityvalue"
                                                                                            class="uniformity"
                                                                                            value="">
                                                                                        <span class="vs-checkbox">
                                                                                            <span
                                                                                                class="vs-checkbox--check">
                                                                                                <i
                                                                                                    class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>

                                                                                    </div>
                                                                                </fieldset>
                                                                                <fieldset>
                                                                                    <div
                                                                                        class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox"
                                                                                            name="uniformity[]"
                                                                                            id="uniformity2"
                                                                                            class="uniformity">
                                                                                        <span class="vs-checkbox">
                                                                                            <span
                                                                                                class="vs-checkbox--check">
                                                                                                <i
                                                                                                    class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>

                                                                                    </div>
                                                                                </fieldset>
                                                                                <fieldset>
                                                                                    <div
                                                                                        class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox"
                                                                                            name="uniformity[]"
                                                                                            id="uniformity3"
                                                                                            class="uniformity">
                                                                                        <span class="vs-checkbox">
                                                                                            <span
                                                                                                class="vs-checkbox--check">
                                                                                                <i
                                                                                                    class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>

                                                                                    </div>
                                                                                </fieldset>
                                                                                <fieldset>
                                                                                    <div
                                                                                        class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox"
                                                                                            name="uniformity[]"
                                                                                            id="uniformity4"
                                                                                            class="uniformity">
                                                                                        <span class="vs-checkbox">
                                                                                            <span
                                                                                                class="vs-checkbox--check">
                                                                                                <i
                                                                                                    class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>

                                                                                    </div>
                                                                                </fieldset>
                                                                                <fieldset>
                                                                                    <div
                                                                                        class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox"
                                                                                            name="uniformity[]"
                                                                                            id="uniformity5"
                                                                                            class="uniformity">
                                                                                        <span class="vs-checkbox">
                                                                                            <span
                                                                                                class="vs-checkbox--check">
                                                                                                <i
                                                                                                    class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>

                                                                                    </div>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="">
                                                                                <h3 id="uniformity">0</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row pad-x15 p-3">

                                                                        <h3 class="entity-text">CleanCup</h3>

                                                                        <div class="field-set">
                                                                            <div class="d-flex flex-row">
                                                                                <fieldset>
                                                                                    <div
                                                                                        class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox"
                                                                                            name="cleancup[]"
                                                                                            id="cleancup1"
                                                                                            value="false"
                                                                                            class="cleancup">
                                                                                        <input type="hidden"
                                                                                            id="cleancupvalue"
                                                                                            name="cleancupvalue"
                                                                                            value="">
                                                                                        <span class="vs-checkbox">
                                                                                            <span
                                                                                                class="vs-checkbox--check">
                                                                                                <i
                                                                                                    class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>

                                                                                    </div>
                                                                                </fieldset>
                                                                                <fieldset>
                                                                                    <div
                                                                                        class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox"
                                                                                            name="cleancup[]"
                                                                                            id="cleancup2"
                                                                                            value="false"
                                                                                            class="cleancup">
                                                                                        <span class="vs-checkbox">
                                                                                            <span
                                                                                                class="vs-checkbox--check">
                                                                                                <i
                                                                                                    class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>

                                                                                    </div>
                                                                                </fieldset>
                                                                                <fieldset>
                                                                                    <div
                                                                                        class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox"
                                                                                            name="cleancup[]"
                                                                                            id="cleancup3"
                                                                                            value="false"
                                                                                            class="cleancup">
                                                                                        <span class="vs-checkbox">
                                                                                            <span
                                                                                                class="vs-checkbox--check">
                                                                                                <i
                                                                                                    class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>

                                                                                    </div>
                                                                                </fieldset>
                                                                                <fieldset>
                                                                                    <div
                                                                                        class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox"
                                                                                            name="cleancup[]"
                                                                                            id="cleancup4"
                                                                                            value="false"
                                                                                            class="cleancup">
                                                                                        <span class="vs-checkbox">
                                                                                            <span
                                                                                                class="vs-checkbox--check">
                                                                                                <i
                                                                                                    class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>

                                                                                    </div>
                                                                                </fieldset>
                                                                                <fieldset>
                                                                                    <div
                                                                                        class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox"
                                                                                            name="cleancup[]"
                                                                                            id="cleancup5"
                                                                                            value="false"
                                                                                            class="cleancup">
                                                                                        <span class="vs-checkbox">
                                                                                            <span
                                                                                                class="vs-checkbox--check">
                                                                                                <i
                                                                                                    class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>

                                                                                    </div>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="">
                                                                                <h3 id="cleancup">0</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row pad-x15 p-3">

                                                                        <h3 class="entity-text">Sweetness</h3>

                                                                        <div class="field-set">
                                                                            <div class="d-flex flex-row">
                                                                                <fieldset>
                                                                                    <div
                                                                                        class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox"
                                                                                            name="sweetness[]"
                                                                                            id="sweetness1"
                                                                                            class="sweetness">
                                                                                        <input type="hidden"
                                                                                            id="sweetnesvalue"
                                                                                            name="sweetnesvalue"
                                                                                            value="">
                                                                                        <span class="vs-checkbox">
                                                                                            <span
                                                                                                class="vs-checkbox--check">
                                                                                                <i
                                                                                                    class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>

                                                                                    </div>
                                                                                </fieldset>
                                                                                <fieldset>
                                                                                    <div
                                                                                        class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox"
                                                                                            name="sweetness[]"
                                                                                            id="sweetness2"
                                                                                            class="sweetness">
                                                                                        <span class="vs-checkbox">
                                                                                            <span
                                                                                                class="vs-checkbox--check">
                                                                                                <i
                                                                                                    class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>

                                                                                    </div>
                                                                                </fieldset>
                                                                                <fieldset>
                                                                                    <div
                                                                                        class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox"
                                                                                            name="sweetness[]"
                                                                                            id="sweetness3"
                                                                                            class="sweetness">
                                                                                        <span class="vs-checkbox">
                                                                                            <span
                                                                                                class="vs-checkbox--check">
                                                                                                <i
                                                                                                    class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>

                                                                                    </div>
                                                                                </fieldset>
                                                                                <fieldset>
                                                                                    <div
                                                                                        class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox"
                                                                                            name="sweetness[]"
                                                                                            id="sweetness4"
                                                                                            class="sweetness">
                                                                                        <span class="vs-checkbox">
                                                                                            <span
                                                                                                class="vs-checkbox--check">
                                                                                                <i
                                                                                                    class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>

                                                                                    </div>
                                                                                </fieldset>
                                                                                <fieldset>
                                                                                    <div
                                                                                        class="vs-checkbox-con vs-checkbox-primary">
                                                                                        <input type="checkbox"
                                                                                            name="sweetness[]"
                                                                                            id="sweetness5"
                                                                                            class="sweetness">
                                                                                        <span class="vs-checkbox">
                                                                                            <span
                                                                                                class="vs-checkbox--check">
                                                                                                <i
                                                                                                    class="vs-icon feather icon-check"></i>
                                                                                            </span>
                                                                                        </span>

                                                                                    </div>
                                                                                </fieldset>
                                                                            </div>
                                                                            <div class="">
                                                                                <h3 id="sweetness">0</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- uniformanity ends -->
                                                        <div class="bg-taste--theme" id="item-left-5">

                                                            <input type="hidden" name="defect" id="defect"
                                                                value="">
                                                            <h3 class="entity-text defects-bg">DEFECTS</h3>
                                                            <p class="entity-label">#CUPS X INTENSITY = SCORE</p>
                                                            <div class="row">
                                                                <div class="col-lg-12" style="text-align:center">
                                                                    <input class="score_first_number"
                                                                        oninput="if (this.value > 5) this.value = 0;"
                                                                        type="number" id="quantity"
                                                                        value="{{ @$sampleReview->first_number ?? 0 }}"
                                                                        name="first_number">
                                                                    <span class="multiply">X</span>
                                                                    <!-- {{-- <input class="score_second_number"
                                                                oninput="if (this.value > 3) this.value = 0"
                                                                type="number" id="quantity" maxlength="3"
                                                                value="second_number" name="second_number"> --}} -->
                                                                    <select id="second_number" name="second_number"
                                                                        class="score_second_number"
                                                                        value="{{ @$sampleReview->second_number }}">
                                                                        <option value="2"
                                                                            {{ @$sampleReview->second_number == 2 ? 'selected' : '' }}>
                                                                            Taint : 2
                                                                        </option>
                                                                        <option value="4"
                                                                            {{ @$sampleReview->second_number == 4 ? 'selected' : '' }}>
                                                                            Fault : 4</option>
                                                                    </select>
                                                                    <span class="multiply">=</span>
                                                                    <span
                                                                        class="multiply4">{{ @$sampleReview->first_number * @$sampleReview->second_number }}</span>
                                                                    <div class="entity_input">
                                                                        <input type="text" name="notes"
                                                                            id="notes" placeholder="NOTES"
                                                                            class="entity_note">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- defects end -->

                                                        <!-- over all ends -->
                                                    </div>
                                                    <div class="bg-over--theme">

                                                        <h3 class="entity-text overall-bg">OVERALL</h3>
                                                        <div class="row">
                                                            <div class="col-12" style="text-align:center">
                                                                <div class="design-slider mt-5 mb-5">
                                                                    <div class="customslider overall"><input
                                                                            type="hidden" name="overall"
                                                                            id="overall" value="8"></div>
                                                                </div>
                                                                <div class="entity_input mb-5">
                                                                    <input type="text" name="quality_notes"
                                                                        id="quality_notes"
                                                                        value="{{ $sampleReview->quality_notes ?? '' }}"
                                                                        placeholder="NOTES" class="entity_note">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12" style="text-align:center">
                                                            <h3 class="entity-text total-bg">TOTAL</h3>
                                                            {{-- <p class="entity-label">(+36)</p> --}}
                                                            <p id="input_total_score"
                                                                style="max-width:100%;width: 267px;margin: auto;display: block">
                                                                <input onkeyup="if (this.value > 100){ calcTotal()};"
                                                                    style="max-width:100%;text-align: center;font-size: 100px;font-family: 'EB Garamond';width: auto;border: 1px solid gainsboro;border-radius: 6px;padding: 15px;"
                                                                    type="hidden" class="totalScore"
                                                                    name="total_score" id="total_score"
                                                                    value="84">
                                                            </p>
                                                            <h2 class="totalScore" id="div_total_score">0</h2>
                                                            <a onclick="toggleDivs()" class="override">Manually
                                                                Override Score</a>
                                                            <input type="hidden" value="0"
                                                                name="manual_override">
                                                            <script>
                                                                function toggleDivs() {
                                                                    $('#div_total_score').hide();
                                                                    $('#input_total_score').show();
                                                                    $('input[name=manual_override]').val(1);
                                                                }
                                                            </script>
                                                            <div class="row button-wrapper">
                                                                <div class="button-wrapper-2">
                                                                    <input type="hidden" id="to_go_sample"
                                                                        name="to_go_sample" value="">
                                                                    {{-- @if ($previous_position != 0) --}}
                                                                    <button type="submit" value="1"
                                                                        name="sample_submit_prev"
                                                                        class="submit-form-btn btn-1">PREVIOUS</button>
                                                                    {{-- @endif --}}
                                                                    <button type="submit" value="1"
                                                                        name="sample_submit"
                                                                        class="submit-form-btn btn-1">NEXT</button>
                                                                </div>
                                                                <div>
                                                                    <a class="submit-form-btn btn-2 " type="button"
                                                                        value="" onclick="showmodal()">SUBMIT
                                                                        TABLE</a>
                                                                </div>


                                                            </div>
                                                            <div class="row">
                                                                <div class="scrollable" style="overflow:auto;">
                                                                    <div class="button-group"
                                                                        style="white-space:nowrap">
                                                                        @php
                                                                            $alltablesamples = $alltablesamples->sortBy(function ($reservation) {
                                                                                return $reservation->auctionProduct->rank;
                                                                            });
                                                                        @endphp
                                                                        @foreach ($alltablesamples as $samp)
                                                                            @php $extraclass = ""; @endphp
                                                                            @if ($samp->is_hidden == 1)
                                                                                @php $extraclass="isdone"; @endphp
                                                                            @endif
                                                                            @php
                                                                                $black = '';

                                                                                if (@$auction_product->code == $samp->samples) {
                                                                                    $black = 'style=background-color:black!important;color:white!important';
                                                                                }

                                                                            @endphp
                                                                            @if ($samp->id == $sentSampleId)
                                                                                {{-- <a onclick="setSampleToGo({{$samp->sampleId}})" class="btn btn-success pager hid_{{$samp->is_hidden}} {{$extraclass}}" href="{{route('give_review',['juryId'=>$samp->juryId,'table'=>$samp->sampleTable,'sampleId'=>$samp->sampleId ])}}"> --}}
                                                                                <a class="btn btn-success pager hid_{{ $samp->is_hidden }} {{ $extraclass }}"
                                                                                    {{ $black }}
                                                                                    href="@if ($samp->id == $sentSampleId) # @else javascript:setSampleToGo({{ $samp->sampleId }}) @endif ">
                                                                                    {{ @$samp->auctionProduct->rank }}
                                                                                </a>
                                                                            @else
                                                                                <a class="btn btn-secondary  pager hid_{{ $samp->is_hidden }} {{ $extraclass }}"
                                                                                    {{ $black }}
                                                                                    href="javascript:setSampleToGo({{ $samp->id }})">
                                                                                    {{ @$samp->auctionProduct->rank }}
                                                                                </a>
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="myModal" class="modal" tabindex="-1">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Submit Cupping
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal">&times;</button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>You are about to submit results for
                                                                                @foreach ($alltablesamples as $samp)
                                                                                    @if ($samp->sampleTable == $table)
                                                                                        &nbsp<b>{{ $samp->samples }}</b>,
                                                                                    @endif
                                                                                @endforeach.
                                                                            </p>
                                                                            <br><br>
                                                                            <p>Are you sure you want to do this? You
                                                                                cannot edit fields once submitted.</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Cancel</button>
                                                                            <button type="submit"
                                                                                value="{{ $table }}"
                                                                                name="table_submit"
                                                                                class="btn btn-primary">Save</button>
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

    <!-- END: Content-->
    <script src="{{ asset('public/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('public/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js') }}"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('public/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('public/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('public/app-assets/js/scripts/components.js') }}"></script>
    <!-- END: Theme JS-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('public/app-assets/js/scripts/forms/number-input.js') }}"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="{{ asset('public/js/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- END: Page JS-->
    <script>
        function showmodal() {
            $('#myModal').modal('show');
        }
        var subtotal = 0;
        //  var a=0,b=0,c=0,d=0;

        $('document').ready(function() {

            var uvalue = `{{ isset($sampleReview->uniformityvalue) ? $sampleReview->uniformityvalue : null }}`;
            var svalue = `{{ isset($sampleReview->sweetnesvalue) ? $sampleReview->sweetnesvalue : null }}`;
            var cvalue = `{{ isset($sampleReview->cleancupvalue) ? $sampleReview->cleancupvalue : null }}`;




            if (uvalue) {
                $('#uniformity').html(uvalue);
                var t = 1;


                for (let i = uvalue; i > 0; i--) {
                    $('#uniformity' + t).prop('checked', true);
                    t++;
                    i--;
                }
            } else {
                $('#uniformity').html(10);
                for (let i = 1; i <= 5; i++) {
                    $('#uniformity' + i).prop('checked', true);
                }
            }
            if (cvalue) {
                $('#cleancup').html(cvalue);
                var t = 1;
                for (let i = cvalue; i > 0; i--) {
                    $('#cleancup' + t).prop('checked', true);
                    t++;
                    i--;
                }
            } else {
                $('#cleancup').html(10);
                for (let i = 1; i <= 5; i++) {
                    $('#cleancup' + i).prop('checked', true);
                }
            }

            if (svalue) {
                $('#sweetness').html(svalue);
                var t = 1;
                // var id = uvalue / 2;
                for (let i = svalue; i > 0; i--) {
                    $('#sweetness' + t).prop('checked', true);
                    t++;
                    i--;
                }
            } else {
                $('#sweetness').html(10);
                for (let i = 1; i <= 5; i++) {
                    $('#sweetness' + i).prop('checked', true);
                }
            }

            $("#select").select2({
                tags: true,
                maximumInputLength: 16,
            });
            (function() {
                "use strict"

                $('input[type=range]').on('input', function() {});
                // Plugin Constructor
                var TagsInput = function(opts) {
                    this.options = Object.assign(TagsInput.defaults, opts);
                    this.init();
                }

                // Initialize the plugin
                TagsInput.prototype.init = function(opts) {
                    this.options = opts ? Object.assign(this.options, opts) : this.options;

                    if (this.initialized)
                        this.destroy();

                    if (!(this.orignal_input = document.getElementById(this.options.selector))) {
                        console.error("tags-input couldn't find an element with the specified ID");
                        return this;
                    }

                    this.arr = [];
                    this.wrapper = document.createElement('div');
                    this.input = document.createElement('input');
                    init(this);
                    initEvents(this);

                    this.initialized = true;
                    return this;
                }

                // Add Tags
                TagsInput.prototype.addTag = function(string) {

                    if (this.anyErrors(string))
                        return;

                    this.arr.push(string);
                    var tagInput = this;

                    var tag = document.createElement('span');
                    tag.className = this.options.tagClass;
                    tag.innerText = string;

                    var closeIcon = document.createElement('a');
                    closeIcon.innerHTML = '&times;';

                    // delete the tag when icon is clicked
                    closeIcon.addEventListener('click', function(e) {
                        e.preventDefault();
                        var tag = this.parentNode;

                        for (var i = 0; i < tagInput.wrapper.childNodes.length; i++) {
                            if (tagInput.wrapper.childNodes[i] == tag)
                                tagInput.deleteTag(tag, i);
                        }
                    })


                    tag.appendChild(closeIcon);
                    this.wrapper.insertBefore(tag, this.input);
                    this.orignal_input.value = this.arr.join(',');

                    return this;
                }

                // Delete Tags
                TagsInput.prototype.deleteTag = function(tag, i) {
                    tag.remove();
                    this.arr.splice(i, 1);
                    this.orignal_input.value = this.arr.join(',');
                    return this;
                }

                // Make sure input string have no error with the plugin
                TagsInput.prototype.anyErrors = function(string) {
                    if (this.options.max != null && this.arr.length >= this.options.max) {
                        console.log('max tags limit reached');
                        return true;
                    }

                    if (!this.options.duplicate && this.arr.indexOf(string) != -1) {
                        console.log('duplicate found " ' + string + ' " ')
                        return true;
                    }

                    return false;
                }

                // Add tags programmatically
                TagsInput.prototype.addData = function(array) {
                    var plugin = this;

                    array.forEach(function(string) {
                        plugin.addTag(string);
                    })
                    return this;
                }

                // Get the Input String
                TagsInput.prototype.getInputString = function() {
                    return this.arr.join(',');
                }


                // destroy the plugin
                TagsInput.prototype.destroy = function() {
                    this.orignal_input.removeAttribute('hidden');

                    delete this.orignal_input;
                    var self = this;

                    Object.keys(this).forEach(function(key) {
                        if (self[key] instanceof HTMLElement)
                            self[key].remove();

                        if (key != 'options')
                            delete self[key];
                    });

                    this.initialized = false;
                }

                // Private function to initialize the tag input plugin
                function init(tags) {
                    tags.wrapper.append(tags.input);
                    tags.wrapper.classList.add(tags.options.wrapperClass);
                    tags.orignal_input.setAttribute('hidden', 'true');
                    tags.orignal_input.parentNode.insertBefore(tags.wrapper, tags.orignal_input);
                }

                //---------- initialize the Events--------
                function initEvents(tags) {
                    tags.wrapper.addEventListener('click', function() {
                        tags.input.focus();
                    });


                    tags.input.addEventListener('keydown', function(e) {
                        var str = tags.input.value.trim();

                        if (!!(~[9, 13, 188].indexOf(e.keyCode))) {
                            e.preventDefault();
                            tags.input.value = "";
                            if (str != "")
                                tags.addTag(str);
                        }

                    });
                }


                // ------Set All the Default Values------------
                TagsInput.defaults = {
                    selector: '',
                    wrapperClass: 'tags-input-wrapper',
                    tagClass: 'tag',
                    max: null,
                    duplicate: false
                }

                window.TagsInput = TagsInput;

            })();

            // var tagInput1 = new TagsInput({
            //     selector: 'tag-input1',
            //     duplicate: false,
            //     max: 10
            // });
            // tagInput1.addData([])

            $('.uniformity').on('click', function() {
                $('#uniformity').html($('.uniformity:checked').length * 2);
                $('#uniformityvalue').val($('.uniformity:checked').length * 2);
                calcTotal();
                total().trigger();

            });
            $('.cleancup').on('click', function() {

                $('#cleancup').html($('.cleancup:checked').length * 2);
                $('#cleancupvalue').val($('.cleancup:checked').length * 2);
                calcTotal();
                total().trigger();

            });
            $('.sweetness').on('click', function() {

                $('#sweetness').html($('.sweetness:checked').length * 2);
                $('#sweetnessvalue').val($('.sweetness:checked').length * 2);
                calcTotal();
                total().trigger();

            });
            $('#defect1').on('change', function() {

                var defect1 = $(this).val();
                var defect2 = $('#defect2').val();
                $('#defect').html(defect1 * defect2);
                $('#defectvalue').val(defect1 * defect2);
                total().trigger();
            });
            $('#defect2').on('change', function() {
                var defect2 = $(this).val();
                var defect1 = $('#defect1').val();
                $('#defect').html(defect1 * defect2);
                $('#defectvalue').val(defect1 * defect2);
                total().trigger();
            });

            function total() {
                $('#total').html(parseInt($('#uniformity').html()) + parseInt($('#cleancup').html()) + parseInt($(
                        '#sweetness').html()) -
                    parseInt($('#defect').html()));
                // console.log(total);
                $('#totalvalue').val(parseInt($('#uniformity').html()) + parseInt($('#cleancup').html()) +
                    parseInt($('#sweetness').html()) -
                    parseInt($('#defect').html()));
            }
            $('#vol').on('click', function() {
                $('#volspan').html($(this).val() + '%');
                $('#roastvalue').val($(this).val());
            })
        });
    </script>

    <!-- Range slider Start -->
    <style class="INLINE_PEN_STYLESHEET_ID">
        .range-slider {
            width: clamp(250px, 80vw, 1250px) !important;
            min-width: 250px;
        }


        .range-slider.grad {
            --progress-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2) inset;
            --progress-flll-shadow: var(--progress-shadow);
            --fill-color: linear-gradient(to right, LightCyan, var(--primary-color));
            --thumb-shadow: 0 0 4px rgba(0, 0, 0, 0.3),
                -3px 9px 9px rgba(255, 255, 255, 0.33) inset,
                -1px 3px 2px rgba(255, 255, 255, 0.33) inset,
                0 0 0 99px var(--primary-color) inset;
        }

        .range-slider.grad input:hover {
            --thumb-transform: scale(1.2);
        }

        .range-slider.grad input:active {
            --thumb-shadow: inherit;
            --thumb-transform: scale(1);
        }

        .range-slider.flat {
            --thumb-size: 25px;
            --track-height: calc(var(--thumb-size) / 3);
            --progress-shadow: none;
            --progress-flll-shadow: none;
            --thumb-shadow: 0 0 0 7px var(--primary-color) inset, 0 0 0 99px white inset;
            --thumb-shadow-hover: 0 0 0 9px var(--primary-color) inset,
                0 0 0 99px white inset;
            --thumb-shadow-active: 0 0 0 13px var(--primary-color) inset;
        }

        .range-slider.overlay {
            --primary-color: #d6e9ff;
            --track-height: 50px;
            --thumb-size: var(--track-height);
            --thumb-color: var(--primary-color);
            --thumb-shadow: none;
            --progress-flll-shadow: none;
            --progress-shadow: none;
            --progress-background: none;
            --progress-radius: 0px;
            --ticks-color: var(--primary-color);
            --ticks-height: 0;
            --ticks-thickness: 0;
            --ticks-gap: 0px;
            --min-max-font: 700 18px Arial;
            --min-max-opacity: 1;
            --show-min-max: none;
            color: #d1af69;
        }

        .range-slider.overlay input:hover {
            --thumb-shadow: calc(25px - (50px * var(--is-left-most))) 0 0 -15px #d1af69 inset;
        }

        .range-slider.overlay input:active {
            --thumb-color: inherit;
        }

        .range-slider.overlay .range-slider__values {
            width: calc(100% - 50% / (var(--max) - var(--min)));
        }

        .custom_slider {
            padding: 2rem 0.4rem;
        }

        .range-slider {
            --primary-color: #5D5D5D;
            --value-offset-y: var(--ticks-gap);
            --value-active-color: white;
            --value-background: transparent;
            --value-background-hover: var(--primary-color);
            --value-font: 700 12px/1 Arial;
            --fill-color: transparent;
            --progress-background: #e4e4e4;
            --progress-radius: 20px;
            --track-height: calc(var(--thumb-size) / 2);
            --min-max-font: 12px Arial;
            --min-max-opacity: 0.5;
            --min-max-x-offset: 10%;
            --thumb-size: 15px;
            --thumb-color: #5D5D5D;
            --thumb-shadow: 0 0 3px rgba(0, 0, 0, 0.4), 0 0 1px rgba(0, 0, 0, 0.5) inset,
                0 0 0 99px var(--thumb-color) inset;
            --thumb-shadow-active: 0 0 0 calc(var(--thumb-size) / 4) inset var(--thumb-color),
                0 0 0 99px var(--primary-color) inset, 0 0 3px rgba(0, 0, 0, 0.4);
            --thumb-shadow-hover: var(--thumb-shadow);
            --ticks-thickness: 2px;
            --ticks-height: 15px;
            --ticks-gap: var(--ticks-height,
                    0);
            --ticks-color: silver;
            --step: 1;
            --ticks-count: Calc(var(--max) - var(--min)) / var(--step);
            --maxTicksAllowed: 30;
            --too-many-ticks: Min(1, Max(var(--ticks-count) - var(--maxTicksAllowed), 0));
            --x-step: Max(var(--step),
                    var(--too-many-ticks) * (var(--max) - var(--min)));
            --tickInterval: 100/ ((var(--max) - var(--min)) / var(--step)) * var(--tickEvery, 1);
            --tickIntervalPerc: calc((100% - var(--thumb-size)) / ((var(--max) - var(--min)) / var(--x-step)) * var(--tickEvery, 1));
            --value-a: Clamp(var(--min),
                    var(--value, 0),
                    var(--max));
            --value-b: var(--value, 0);
            --text-value-a: var(--text-value, "");
            --completed-a: calc((var(--value-a) - var(--min)) / (var(--max) - var(--min)) * 100);
            --completed-b: calc((var(--value-b) - var(--min)) / (var(--max) - var(--min)) * 100);
            --ca: Min(var(--completed-a), var(--completed-b));
            --cb: Max(var(--completed-a), var(--completed-b));
            --thumbs-too-close: Clamp(-1,
                    1000 * (Min(1, Max(var(--cb) - var(--ca) - 5, -1)) + 0.001),
                    1);
            --thumb-close-to-min: Min(1, Max(var(--ca) - 2, 0));
            --thumb-close-to-max: Min(1, Max(98 - var(--cb), 0));
            display: inline-block;
            height: max(var(--track-height), var(--thumb-size));
            background: linear-gradient(to right, var(--ticks-color) var(--ticks-thickness), transparent 1px) repeat-x;
            background-size: var(--tickIntervalPerc) var(--ticks-height);
            background-position-x: calc(var(--thumb-size) / 2 - var(--ticks-thickness) / 2);
            background-position-y: var(--flip-y, bottom);
            padding-bottom: var(--flip-y, var(--ticks-gap));
            padding-top: calc(var(--flip-y) * var(--ticks-gap));
            position: relative;
            z-index: 1;
        }

        .user_name {
            padding: 20px 0;
            width: 100%;
        }

        .user_name .range-slider {
            / background-image: linear-gradient(to right, #fff, #88592D) !important;/ --primary-color: #5D5D5D;
            --value-offset-y: var(--ticks-gap);
            --value-active-color: white;
            --value-background: transparent;
            --value-background-hover: var(--primary-color);
            --value-font: 700 12px/1 Arial;
            --fill-color: var(--primary-color);
            --progress-background: #fff !important;
            --progress-radius: 20px;
            --track-height: calc(var(--thumb-size) / 2);
            --min-max-font: 12px Arial;
            --min-max-opacity: 0.5;
            --min-max-x-offset: 10%;
            --thumb-size: 10px;
            --thumb-color: #5D5D5D;
            --thumb-radius: 0 !important;
            --thumb-shadow: 0 0 3px rgba(0, 0, 0, 0.4), 0 0 1px rgba(0, 0, 0, 0.5) inset,
                0 0 0 99px var(--thumb-color) inset;
            --thumb-shadow-active: 0 0 0 calc(var(--thumb-size) / 4) inset var(--thumb-color),
                0 0 0 99px var(--primary-color) inset, 0 0 3px rgba(0, 0, 0, 0.4);
            --thumb-shadow-hover: var(--thumb-shadow);
            --step: 1;
            --ticks-count: Calc(var(--max) - var(--min)) / var(--step);
            --maxTicksAllowed: 30;
            --too-many-ticks: Min(1, Max(var(--ticks-count) - var(--maxTicksAllowed), 0));
            --x-step: Max(var(--step),
                    var(--too-many-ticks) * (var(--max) - var(--min)));
            --tickInterval: 100/ ((var(--max) - var(--min)) / var(--step)) * var(--tickEvery, 1);
            --tickIntervalPerc: calc((100% - var(--thumb-size)) / ((var(--max) - var(--min)) / var(--x-step)) * var(--tickEvery, 1));
            --value-a: Clamp(var(--min),
                    var(--value, 0),
                    var(--max));
            --value-b: var(--value, 0);
            --text-value-a: var(--text-value, "");
            --completed-a: calc((var(--value-a) - var(--min)) / (var(--max) - var(--min)) * 100);
            --completed-b: calc((var(--value-b) - var(--min)) / (var(--max) - var(--min)) * 100);
            --ca: Min(var(--completed-a), var(--completed-b));
            --cb: Max(var(--completed-a), var(--completed-b));
            --thumbs-too-close: Clamp(-1,
                    1000 * (Min(1, Max(var(--cb) - var(--ca) - 5, -1)) + 0.001),
                    1);
            --thumb-close-to-min: Min(1, Max(var(--ca) - 2, 0));
            --thumb-close-to-max: Min(1, Max(98 - var(--cb), 0));
            display: inline-block;
            height: max(var(--track-height), var(--thumb-size));
            background: linear-gradient(to right, var(--ticks-color) var(--ticks-thickness), transparent 1px) repeat-x;
            background-size: var(--tickIntervalPerc) var(--ticks-height);
            background-position-x: calc(var(--thumb-size) / 2 - var(--ticks-thickness) / 2);
            background-position-y: var(--flip-y, bottom);
            padding-bottom: var(--flip-y, var(--ticks-gap));
            padding-top: calc(var(--flip-y) * var(--ticks-gap));
            position: relative;
            z-index: 1;
            width: 100% !important;
        }

        .user_name .range-slider input {
            background-image: linear-gradient(to right, #fff, #88592D) !important;
            height: 50px;
            border: 1px solid #5D5D5D;
        }

        .range-slider[data-ticks-position=top] {
            --flip-y: 1;
        }

        .range-slider::before,
        .range-slider::after {
            --offset: calc(var(--thumb-size) / 2);
            content: counter(x);
            display: var(--show-min-max, block);
            font: var(--min-max-font);
            position: absolute;
            bottom: var(--flip-y, -2.5ch);
            top: calc(-2.5ch * var(--flip-y));
            opacity: clamp(0, var(--at-edge), var(--min-max-opacity));
            transform: translateX(calc(var(--min-max-x-offset) * var(--before, -1) * -1)) scale(var(--at-edge));
            pointer-events: none;
        }

        .range-slider::before {
            --before: 1;
            --at-edge: var(--thumb-close-to-min);
            counter-reset: x var(--min);
            left: var(--offset);
        }

        .range-slider::after {
            --at-edge: var(--thumb-close-to-max);
            counter-reset: x var(--max);
            right: var(--offset);
        }

        .range-slider__values {
            position: relative;
            top: 50%;
            line-height: 0;
            text-align: justify;
            width: 100%;
            pointer-events: none;
            margin: 0 auto;
            z-index: 5;
        }

        .range-slider__values::after {
            content: "";
            width: 100%;
            display: inline-block;
            height: 0;
            background: red;
        }

        .range-slider__progress {
            --start-end: calc(var(--thumb-size) / 2);
            --clip-end: calc(100% - (var(--cb)) * 1%);
            --clip-start: calc(var(--ca) * 1%);
            --clip: inset(-20px var(--clip-end) -20px var(--clip-start));
            position: absolute;
            left: var(--start-end);
            right: var(--start-end);
            top: calc(var(--ticks-gap) * var(--flip-y, 0) + var(--thumb-size) / 2 - var(--track-height) / 2);
            height: calc(var(--track-height));
            background: var(--progress-background, #eee);
            pointer-events: none;
            z-index: -1;
            border-radius: var(--progress-radius);
        }

        .range-slider__progress::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            -webkit-clip-path: var(--clip);
            clip-path: var(--clip);
            top: 0;
            bottom: 0;
            background: var(--fill-color, black);
            box-shadow: var(--progress-flll-shadow);
            z-index: 1;
            border-radius: inherit;
        }

        .range-slider__progress::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            box-shadow: var(--progress-shadow);
            pointer-events: none;
            border-radius: inherit;
        }

        .range-slider>input {
            -webkit-appearance: none;
            width: 100%;
            height: var(--thumb-size);
            margin: 0;
            position: absolute;
            left: 0;
            top: calc(50% - Max(var(--track-height), var(--thumb-size)) / 2 + calc(var(--ticks-gap) / 2 * var(--flip-y, -1)));
            cursor: -webkit-grab;
            cursor: grab;
            outline: none;
            background: none;
            height: 21px;

        }

        .range-slider>input:not(:only-of-type) {
            pointer-events: none;
        }

        .range-slider>input::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            height: var(--thumb-size);
            width: var(--thumb-size);
            transform: var(--thumb-transform);
            border-radius: var(--thumb-radius, 50%);
            background: var(--thumb-color);
            box-shadow: var(--thumb-shadow);
            border: none;
            pointer-events: auto;
            -webkit-transition: 0.1s;
            transition: 0.1s;
        }

        .range-slider>input::-moz-range-thumb {
            -moz-appearance: none;
            appearance: none;
            height: var(--thumb-size);
            width: var(--thumb-size);
            transform: var(--thumb-transform);
            border-radius: var(--thumb-radius, 50%);
            background: var(--thumb-color);
            box-shadow: var(--thumb-shadow);
            border: none;
            pointer-events: auto;
            -moz-transition: 0.1s;
            transition: 0.1s;
        }

        .range-slider>input::-ms-thumb {
            appearance: none;
            height: var(--thumb-size);
            width: var(--thumb-size);
            transform: var(--thumb-transform);
            border-radius: var(--thumb-radius, 50%);
            background: var(--thumb-color);
            box-shadow: var(--thumb-shadow);
            border: none;
            pointer-events: auto;
            -ms-transition: 0.1s;
            transition: 0.1s;
        }

        .range-slider>input:hover {
            --thumb-shadow: var(--thumb-shadow-hover);
        }

        .range-slider>input:hover+output {
            --value-background: var(--value-background-hover);
            --y-offset: -5px;
            color: var(--value-active-color);
            box-shadow: 0 0 0 3px var(--value-background);
        }

        .range-slider>input:active {
            --thumb-shadow: var(--thumb-shadow-active);
            cursor: -webkit-grabbing;
            cursor: grabbing;
            z-index: 2;
        }

        .range-slider>input:active+output {
            transition: 0s;
        }

        .range-slider>input:nth-of-type(1) {
            --is-left-most: Clamp(0, (var(--value-a) - var(--value-b)) * 99999, 1);
        }

        .range-slider>input:nth-of-type(1)+output {
            --value: var(--value-a);
            --x-offset: calc(var(--completed-a) * -1%);
        }

        .range-slider>input:nth-of-type(1)+output:not(:only-of-type) {
            --flip: calc(var(--thumbs-too-close) * -1);
        }

        .range-slider>input:nth-of-type(1)+output::after {
            content: var(--prefix, "") var(--text-value-a) var(--suffix, "");
        }

        .range-slider>input:nth-of-type(2) {
            --is-left-most: Clamp(0, (var(--value-b) - var(--value-a)) * 99999, 1);
        }

        .range-slider>input:nth-of-type(2)+output {
            --value: var(--value-b);
        }

        .range-slider>input:only-of-type~.range-slider__progress {
            --clip-start: 0;
        }

        .range-slider>input+output {
            --flip: -1;
            --x-offset: calc(var(--completed-b) * -1%);
            --pos: calc(((var(--value) - var(--min)) / (var(--max) - var(--min))) * 100%);
            pointer-events: none;
            position: absolute;
            z-index: 5;
            background: var(--value-background);
            border-radius: 10px;
            padding: 2px 4px;
            left: var(--pos);
            transform: translate(var(--x-offset), calc(150% * var(--flip) - (var(--y-offset, 0px) + var(--value-offset-y)) * var(--flip)));
            transition: all 0.12s ease-out, left 0s;
        }

        .range-slider>input+output::after {
            content: var(--prefix, "") var(--text-value-b) var(--suffix, "");
            font: var(--value-font);
        }

        .select2.select2-container.select2-container--default {
            width: 100% !important;
        }

        body {
            height: 100vh;
            display: grid;
            place-content: space-evenly;
            place-items: center;
            gap: 10%;
            padding: 0;
        }

        @media screen and (max-width: 500px) {
            body {
                padding-top: 2em;
                gap: 8%;
            }
        }

        a {
            /* position: fixed;
            top: 1em;
            left: 1em; */
            display: inline-block;
            height: 2em;
        }

        @media screen and (max-width: 500px) {
            a {
                position: static;
                order: -1;
            }
        }

        a>img {
            display: inherit;
            height: 100%;
        }

        body>.range-slider,
        label[dir=rtl] .range-slider {
            width: clamp(300px, 50vw, 800px);
            min-width: 200px;
        }
    </style>
    <!-- Range slider end -->
    <script>
        function subtotaldata() {
            // var d=e=f=g=h=i=j=k=0;
            // var a = $('#aroma_dry').val();
            // var b = $('#aroma_crust').val();
            // var d = $('#aroma_break').val();
            // var c = $('#clean_up').val();


            // $('#cleancup').html(10);
            // $('#sweetness').html(10);
            var c = $('#after_taste').val();
            var d = $('#aroma').val();
            var e = $('#body').val();
            var f = $('#acidity').val();
            var g = $('#flavour').val();
            var h = $('#balance').val();
            var i = $('#overall').val();
            var j = $('#uniformity').html();
            var k = $('#cleancup').html();
            var l = $('#sweetness').html();
            $('#uniformityvalue').val(j);
            $('#cleancupvalue').val(k);
            $('#sweetnesvalue').val(l);


            subtotal = +c + +d + +e + +f + +g + +h + +i + +j + +k + +l;
            return subtotal;
        }

        function calcTotal() {
            // var step=0;
            // if ($(this).val() >= 0 && $(this).val() <= 6) {
            //     step = 1;
            // }else {
            //     step = 0.5;
            // }
            // $(this).attr('step', step);
            subtotal = subtotaldata();
            var first = $('.score_first_number').val();
            var second = $('.score_second_number').val();
            if (second && first) {
                var defect = first * second;
                var raw = subtotal - defect;
                var total = raw;
                $('#total_score').val(total);
                $('.totalScore').html(total);
            } else {
                $('.score_first_number').val(0);
                $('.score_second_number').val(0);
                $('.multiply4').html(0);
                var defect = 0;
                var raw = subtotal - defect;
                if (raw == 0) {
                    var total = 0;
                } else {
                    var total = raw;
                }
                $('#total_score').val(total);
                $('.totalScore').html(total);

            }
            $(this).trigger('change');
        }
        $(document).ready(function() {
            var chkhidden = {{ $firstsample->is_hidden == 1 ? '1' : '0' }};
            var chkmanual = {{ $reviewdata ? ($reviewdata->manual == 1 ? '1' : '0') : '0' }};
            $(".score_first_number").keyup(function() {
                var first = $('.score_first_number').val();
                var second = $('.score_second_number').val();
                var defect = first * second;
                $('#defect').val(defect);
                $('.multiply4').html(defect);
                subtotal = subtotaldata();
                var raw = subtotal - defect;
                var total = raw;

                $('#total_score').val(total);
                $('.totalScore').html(total);

                //   $("input").css("background-color", "pink");
            });

            $('.score_second_number').on('change', function() {
                var first = $('.score_first_number').val();
                var second = $('.score_second_number').val();
                var defect = first * second;
                $('#defect').val(defect);
                $('.multiply4').html(defect);
                subtotal = subtotaldata();
                var raw = subtotal - defect;
                var total = raw;

                $('#total_score').val(total);
                $('.totalScore').html(total);
            });

            $('.js-example-basic-multiple').select2();
            var hanzi = ["6", "6.25", "6.5", "6.75", "7", "7.25", "7.5", "7.75", "8", "8.25", "8.5", "8.75", "9",
                "9.25",
                "9.5",
                "9.75", "10"
            ];
            $(".roastslider")
                .slider({
                    max: 100,
                    value: 50
                }).slider("float", {
                    rest: "label"
                }).on("slidechange", function(e, ui) {
                    $(ui.handle).parent().find('input').val(ui.value);

                });
            $(".aromaslider")
                .slider({
                    max: 3,
                    step: 1,
                    value: 0,
                    min: -3,
                })
                .slider("pips", {
                    rest: "label",
                    step: 1,
                }).on("slidechange", function(e, ui) {
                    $(ui.handle).parent().find('input').val(ui.value);

                });;
            $(".customslider")
                .slider({
                    min: 6,
                    max: 10,
                    step: 0.25,
                    value: "8",
                })
                .slider("pips", {
                    rest: "label",
                    step: 2,
                    labels: hanzi
                })
                .on("slidechange", function(e, ui) {

                    inputvalue = ui.value;
                    // $(ui.handle).parent().find('input').val(inputvalue);
                    $(ui.handle).parent().find('input').val(inputvalue);
                    calcTotal();
                    // $('input[type=range]').first().trigger('input');
                })
                .slider("float", {
                    labels: hanzi
                });
            $(".customslider")
                .slider("value", 8)
                .slider("pips", "refresh");
            // $('.customslider .ui-slider-handle').draggable();

            calcTotal();
            $('.scrollable').css('width', window.innerWidth - 100);

            function parseReview(inputvalue) {
                if (inputvalue == 1)
                    inputvalue = 0.5;
                else if (inputvalue == 2)
                    inputvalue = 1;
                else if (inputvalue == 3)
                    inputvalue = 1.5;
                else if (inputvalue == 4)
                    inputvalue = 2;
                else if (inputvalue == 4.5)
                    inputvalue = 2.5;
                else if (inputvalue == 5)
                    inputvalue = 3;
                else if (inputvalue == 5.5)
                    inputvalue = 3.5;
                else if (inputvalue == 6)
                    inputvalue = 4;
                else if (inputvalue == 6.25)
                    inputvalue = 4.5;
                else if (inputvalue == 6.5)
                    inputvalue = 5;
                else if (inputvalue == 6.75)
                    inputvalue = 5.5;
                else if (inputvalue == 7)
                    inputvalue = 6;
                else if (inputvalue == 7.25)
                    inputvalue = 6.5;
                else if (inputvalue == 7.75)
                    inputvalue = 7.5;
                return inputvalue;
            }
            if (chkhidden != 0) {

                $(".roastslider")
                    .slider({
                        value: {{ isset($sampleReview->roast) ? $sampleReview->roast : 50 }}
                    });
                $(".aromacrust")
                    .slider({
                        value: {{ isset($sampleReview->aroma_crust) ? $sampleReview->aroma_crust : 2 }}
                    });
                $(".aromadry")
                    .slider({
                        value: {{ isset($sampleReview->aroma_dry) ? $sampleReview->aroma_dry : 2 }}
                    });
                $(".aromabreak")
                    .slider({
                        value: {{ isset($sampleReview->aroma_dry) ? $sampleReview->aroma_dry : 2 }}
                    })
                $('input[name=first_number]').val(
                    {{ isset($sampleReview->first_number) ? $sampleReview->first_number : 0 }});
                $('input[name=second_number]').val(
                    {{ isset($sampleReview->second_number) ? $sampleReview->second_number : 0 }});
                $('input[name=second_number]').trigger('keyup');
                $('#defect_note').val('{{ $sampleReview->defects_note ?? '' }}');
                $(".cleancup").slider({
                    value: parseReview({{ $sampleReview->clean_up ?? '8' }})
                })
                // $('#cleanup_note').val('{{ $sampleReview->clean_sweet_note ?? '' }}');

                // $(".sweetness").slider({
                //     value: parseReview({{ $sampleReview->sweetness ?? '8' }})
                // })
                // $('#sweetness_note').val('{{ $sampleReview->sweetness_note ?? '' }}');

                $(".acidity").slider({
                    value: parseReview({{ $sampleReview->acidity ?? '8' }})
                })
                $(".aroma").slider({
                    value: parseReview({{ $sampleReview->aroma ?? '8' }})
                })

                $('#acidity_note').val('{{ $sampleReview->acidity_note ?? '' }}');
                // $('.acidity_{{ @$sampleReview->acidity_chk ?? 'L' }}').prop('checked', true);

                // $(".mouthfeel").slider({
                //     value: parseReview({{ $sampleReview->mouth_feel ?? '8' }})
                // });
                // $('#mouthfeel_note').val('{{ $sampleReview->mouthfeel_note ?? '' }}');
                $('.mouthfeel_{{ $sampleReview->body_chk ?? 'L' }}').prop('checked', true);

                $(".flavor").slider({
                    value: parseReview({{ $sampleReview->flavour ?? '8' }})
                });
                $('#flavor_note').val('{{ $sampleReview->flavor_note ?? '' }}');

                $(".aftertaste").slider({
                    value: parseReview({{ $sampleReview->after_taste ?? '' }})
                })
                $('#notes').val('{{ $sampleReview->note ?? '' }}');

                $(".balance").slider({
                    value: parseReview({{ $sampleReview->balance ?? '8' }})
                })
                $(".body").slider({
                    value: parseReview({{ $sampleReview->body ?? '8' }})
                })
                // $('#balance_note').val('{{ $sampleReview->balance_note ?? '' }}');

                $(".overall").slider({
                    value: parseReview({{ $sampleReview->overall ?? '8' }})
                })
                // $('#overall_note').val('{{ $sampleReview->overall_note ?? '' }}');

                calcTotal();

                if (chkmanual) {
                    toggleDivs();
                    @if ($reviewdata)
                        $('input[name=total_score]').val({{ $reviewdata->total_score }});
                    @endif
                }
            }

            @if ($reviewdata)
                $('#total_score').val({{ $reviewdata->total_score }});
                $('.totalScore').html({{ $reviewdata->total_score }});
            @endif

            // $('.score_second_number').val($reviewdata->second_number);
        });

        function setSampleToGo(valz) {
            // alert(valz);
            $('#to_go_sample').val(valz);
            $('#myForm').submit();
        }
    </script>
</body>
<!-- END: Body-->

</html>
