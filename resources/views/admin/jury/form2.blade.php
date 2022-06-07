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
    body{
        overflow-x: hidden; 
        font-family:'Montserrat';
    }
    .bootstrap-touchspin .bootstrap-touchspin-injected {
    }
    
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
    @media (max-width: @screen-xs) {
        body{font-size: 10px;}
    }
    
    @media (max-width: @screen-sm) {
        body{font-size: 14px;}
    }
    
    
    h5{
        font-size: 1.4rem;
    }  
    .w-70{
        width: 70% !important;
        height: 45px;
        border-radius: 0.4rem;
    }
    @media only screen and (max-width:450px){
        .mbl-mar{
            margin-left: 3rem;
        }
        body {
            padding-top: 0 !important;
            gap: 8%;
        }
    }
    .btn-lg{
        line-height: 1 !important;
    }
    .discriptor{
        font-size: 16px;
    }
    .alert-success{
        color: white !important;
        background-color:rgb(209, 175, 105) !important;
    }
    .main-title{
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
    .line{
        position: absolute;
        width: 615px;
        height: 0px;
        margin-left:22%; 
        border: 1px solid #A4A3A3;
    }
    .dry-verticle{
        position: absolute;
        bottom: -150%;
        left: 25%;
        transform: rotate(-90deg);
        transform-origin: left 0;
    }
    
    .dry{
        position: relative;
    }
    h3.entity-text{
        width:100%;
        text-align:center;
    }
    .entity-label{
        font-family:'Montserrat';
        font-size:32px;
        color:#A4A3A3;
        text-align:center;
        padding-top:10px;
        padding-bottom:20px;
    }
    .aroma-bg{
        background-color:#6A2AF1;
    }
    .defects-bg{
        background-color:#B22AF1;
        margin-top:82px;
    }
    .cleancup-bg{
        background-color:#2AE5F1;
    }
    .total-bg{
        background-color:#000;
    }
    .roast-bg{
        background-color:transparent;
        border:1px solid #000;
        color:#000;
    }
    .overall-bg{
        background-color:#95E2AF;
    }
    .balance-bg{
        background-color:#29672C;
    }
    .flavor-bg{
        background-color:#F32C38;
    }
    .aftertaste-bg{
        background-color:#E7936E;
    }
    .sweetness-bg{
        background-color:#E2959A;
    }
    .acidity-bg{
        background-color:#FDBF86;
    }
    .mouthfeel-bg{
        background-color:#38DFB7;
    }
    .multiply,.score_first_number,.score_second_number,.multiply4{
        font-family:'Montserrat';
        font-size:32px;
    }
    .score_first_number,.score_second_number{
        width:80px;
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
        padding-bottom:20px;
    }
    h2.totalScore {
        text-align: center;
        font-size: 150px;
        font-family: 'EB Garamond';
    }
    .submit-form-btn {
        background: transparent;
        color: #A4A3A3 !important;
        border: 1px solid #A4A3A3 !important;
        padding: 22px;
        width: auto;
        display: block;
        margin: auto;
        margin-top: 40px;
    }
    .scrollable{
        width: calc(100vh - 42%);
        overflow: auto;
        margin:auto;
    }
    .pager{
        width: 121px;
        font-size:24px;
        background-color:#C4C4C4;
    }
    .pager.btn-success{
        background-color:#000 !important;
        color:#FFF;
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
    .ui-state-focus{
        color: #000 !important;
        border-color: black !important;
    }
    .ui-state-default{
        color: #000 !important;
    }
    .ui-slider-pips [class*=ui-slider-pip-selected] {
        font-weight: bold;
        color: black;
    }
    .ui-corner-all{
        border-radius: 50%;
    }
    .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
        border: 1px solid black;
        background: black url(images/ui-bg_highlight-soft_100_f6f6f6_1x100.png) 50% 50% repeat-x;
        font-weight: bold;
        color: black;
    }
    .customslider.ui-slider-horizontal{
        height:1px;
    }
    .customslider.ui-slider-horizontal .ui-slider-handle {
        top: -9px;
        margin-left: -8px;
    }
    .customslider.ui-slider-pips .ui-slider-pip{
        top:14px;
    }
    .aromaslider.ui-slider-horizontal{
        height:1px;
    }
    .aromaslider.ui-slider-horizontal .ui-slider-handle {
        top: -9px;
        margin-left: -8px;
    }
    .aromaslider.ui-slider-pips .ui-slider-pip{
        top:14px;
    }
    .roastslider.ui-slider-horizontal {
        height: 50px;
        border-radius: 0;
        background-image: linear-gradient(to right,#fff , #88592D) !important;
    }
    .roastslider .ui-slider-handle {
        height: 62px;
        border-radius: 5px;
        background-color: gray;
        border-color: grey;
    }
    .roastslider .ui-state-focus,.roastslider .ui-state-focus {
        border:1px solid #000;
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
                                            <div class="site-logo">
                                                <img
                                                src="{{  asset('/public/app-assets/images/logo/newlogo.png') }}" style="width: 100%;max-width:1000px;">
                                            </div>
                                            
                                            <p class="px-2" style="font-family: 'Montserrat';font-size:25px;">CUPPER: {{ $juryName }}</p>
                                            <p class="px-2" style="font-family: 'Montserrat';font-size:25px;">COMPANY: {{$juryCompany}}</p>
                                            <p class="px-2 pt-2" style="font-family: 'Garamond Premier Pro';font-size:25px;">SAMPLE ID: @foreach ($alltablesamples as $samp)
                                                
                                                @if($samp->sampleId == $sentSampleId)
                                                {{$samp->samples}}
                                                
                                                @endif
                                                @endforeach</p>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <form action="{{ url('/jury/link/reviewSave') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="link" value="{{$link}}">
                                                    <input type="hidden" name="product_id" value="{{$productId}}">
                                                    <input type="hidden" name="jury_id" value="{{$juryId}}">
                                                    <input type="hidden" name="sent_sample_id" value="{{$sentSampleId}}">
                                                    <div class="row">
                                                        <h3 class="entity-text roast-bg">ROAST</h3>
                                                        
                                                        <div class="user_name">
                                                            <div class="range-slider">
                                                                <input type="range" name="roast" oninput="this.parentNode.style.setProperty('--value',this.value); 
                                                                this.parentNode.style.setProperty('--text-value', JSON.stringify(this.value))">
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-lg-12" style="text-align:center">
                                                            <div class="design-slider mt-5 mb-5">
                                                                <div class="roastslider"><input type="hidden" name="roast" id="roast"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <h3 class="entity-text aroma-bg">AROMA</h3>
                                                    </div>
                                                    
                                                    <div class="col-lg-12">
                                                        <h5>DRY</h5>
                                                    </div>
                                                    <div class="design-slider mt-5 mb-5">
                                                        <div class="aromaslider"><input type="hidden" name="aroma_dry" id="aroma_dry"></div>
                                                        
                                                        
                                                        
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <h5>CRUST</h5>
                                                    </div>
                                                    <div class="design-slider mt-5 mb-5">
                                                        <div class="aromaslider"><input type="hidden" name="aroma_crust" id="aroma_crust"></div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="col-lg-12">
                                                        <h5>BREAK</h5>
                                                    </div>
                                                    <div class="design-slider mt-5 mb-5">
                                                        <div class="aromaslider"><input type="hidden" name="aroma_break" id="aroma_break"></div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <h3 class="entity-text defects-bg">DEFECTS</h3>
                                                    <p class="entity-label"># X INTENSITY X 4 = SCORE</p>
                                                    <div class="row">
                                                        <div class="col-lg-12" style="text-align:center">
                                                            <input class="score_first_number" oninput="if (this.value > 5) this.value = 0;"
                                                            type="number" id="quantity"  value="first_number"
                                                            name="first_number">
                                                            <span
                                                            class="multiply">X</span>
                                                            <input class="score_second_number" oninput="if (this.value > 3) this.value = 0"
                                                            type="number" id="quantity" maxlength="3" value="second_number"
                                                            name="second_number">
                                                            <span
                                                            class="multiply">X</span>
                                                            <span
                                                            class="multiply">4</span>
                                                            <span
                                                            class="multiply">=</span>
                                                            <span
                                                            class="multiply4">?</span>
                                                        </div>
                                                        <div class="entity_input">
                                                            <input type="text" name="defect_note" id="defect_note"
                                                            placeholder="NOTES"
                                                            class="entity_note">
                                                        </div>
                                                    </div>
                                                    
                                                    {{-- <input type="hidden" name="defect" id="defect" value=""> --}}
                                                    
                                                    <h3 class="entity-text cleancup-bg">CLEAN CUP</h3>
                                                    <div class="row">
                                                        <div class="col-lg-12" style="text-align:center">
                                                            <div class="design-slider mt-5 mb-5">
                                                                <div class="customslider"><input type="hidden" name="clean_up" id="clean_up"></div>
                                                            </div>
                                                        </div>
                                                        <div class="entity_input">
                                                            <input type="text" name="cleanup_note" id="cleanup_note"
                                                            placeholder="NOTES"
                                                            class="entity_note">
                                                        </div>
                                                    </div>
                                                    <h3 class="entity-text sweetness-bg">SWEETNESS</h3>
                                                    <div class="row">
                                                        <div class="col-lg-12" style="text-align:center">
                                                            <div class="design-slider mt-5 mb-5">
                                                                <div class="customslider"><input type="hidden" name="sweetness" id="sweetness"></div>
                                                            </div>
                                                        </div>
                                                        <div class="entity_input">
                                                            <input type="text" name="sweetness_note" id="sweetness_note"
                                                            placeholder="NOTES"
                                                            class="entity_note">
                                                        </div>
                                                    </div>
                                                    <h3 class="entity-text acidity-bg">ACIDITY</h3>
                                                    <div class="row">
                                                        <div class="col-lg-12" style="text-align:center">
                                                            <div class="design-slider mt-5 mb-5">
                                                                <div class="customslider"><input type="hidden" name="acidity" id="acidity"></div>
                                                            </div>
                                                            <div class="radio_button">
                                                                <div>
                                                                    <label class="radio_container">
                                                                        
                                                                        <input type="radio"
                                                                        name="acidity_chk" value="H">
                                                                        <div class="checkmark">
                                                                        </div>
                                                                        <h5>H</h5>
                                                                        
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <label class="radio_container">
                                                                        <input type="radio"
                                                                        name="acidity_chk" value="M">
                                                                        <div class="checkmark">
                                                                        </div>
                                                                        <h5>M</h5>
                                                                        
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <label class="radio_container">
                                                                        <input type="radio"
                                                                        checked="checked"
                                                                        name="acidity_chk" value="L">
                                                                        <div class="checkmark">
                                                                        </div>
                                                                        <h5>L</h5>
                                                                        
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="entity_input">
                                                                <input type="text" name="acidity_note" id="acidity_note"
                                                                placeholder="NOTES"
                                                                class="entity_note">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="entity-text mouthfeel-bg">MOUTHFEEL</h3>
                                                    <div class="row">
                                                        <div class="col-lg-12" style="text-align:center">
                                                            <div class="custom_slider">
                                                                <div class="design-slider mt-5 mb-5">
                                                                    <div class="customslider"><input type="hidden" name="mouth_feel" id="mouth_feel"></div>
                                                                </div>
                                                            </div>
                                                            <div class="radio_button">
                                                                <div>
                                                                    <label class="radio_container">
                                                                        
                                                                        <input type="radio"
                                                                        value="H"
                                                                        name="fm_chk">
                                                                        <div class="checkmark">
                                                                        </div>
                                                                        <h5>H</h5>
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <label class="radio_container">
                                                                        <input type="radio" value="M"
                                                                        name="fm_chk">
                                                                        <div
                                                                        class="checkmark">
                                                                    </div>
                                                                    <h5>M</h5>
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <label class="radio_container">
                                                                    <input type="radio" value="L" checked="checked"
                                                                    name="fm_chk">
                                                                    <div
                                                                    class="checkmark">
                                                                </div>
                                                                <h5>L</h5>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="entity_input">
                                                        <input type="text" name="mouthfeel_note" id="mouthfeel_note"
                                                        placeholder="NOTES"
                                                        class="entity_note">
                                                    </div>
                                                    <h3 class="entity-text flavor-bg">FLAVOR</h3>
                                                    <div class="row">
                                                        <div class="col-lg-12" style="text-align:center">
                                                            <div class="design-slider mt-5 mb-5">
                                                                <div class="customslider"><input type="hidden" name="flavour" id="flavour"></div>
                                                            </div>
                                                            <div class="entity_input">
                                                                <input type="text" name="flavor_note" id="flavor_note"
                                                                placeholder="NOTES"
                                                                class="entity_note">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="entity-text aftertaste-bg">AFTERTASTE</h3>
                                                    <div class="row">
                                                        <div class="col-lg-12" style="text-align:center">
                                                            <div class="design-slider mt-5 mb-5">
                                                                <div class="customslider"><input type="hidden" name="after_taste" id="after_taste"></div>
                                                            </div>
                                                            <div class="entity_input">
                                                                <input type="text" name="aftertaste_note" id="aftertaste_note"
                                                                placeholder="NOTES"
                                                                class="entity_note">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="entity-text balance-bg">BALANCE</h3>
                                                    <div class="row">
                                                        <div class="col-lg-12" style="text-align:center">
                                                            <div class="design-slider mt-5 mb-5">
                                                                <div class="customslider"><input type="hidden" name="balance" id="balance"></div>
                                                            </div>
                                                            <div class="entity_input">
                                                                <input type="text" name="balance_note" id="balance_note"
                                                                placeholder="NOTES"
                                                                class="entity_note">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="entity-text overall-bg">OVERALL</h3>
                                                    <div class="row">
                                                        <div class="col-lg-12" style="text-align:center">
                                                            <div class="design-slider mt-5 mb-5">
                                                                <div class="customslider"><input type="hidden" name="overall" id="overall"></div>
                                                            </div>
                                                            <div class="entity_input">
                                                                <input type="text" name="overall_note" id="overall_note"
                                                                placeholder="NOTES"
                                                                class="entity_note">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="entity-text total-bg">TOTAL</h3>
                                                    <p class="entity-label">(+36)</p>
                                                    <input type="hidden" name="total_score" id="total_score" value="">
                                                    <h2 class="totalScore">0</h2>
                                                    <div class="row">
                                                        <div class="scrollable" style="overflow:auto;">
                                                            <div class="button-group" style="white-space:nowrap">
                                                                @foreach ($alltablesamples as $samp)
                                                                
                                                                @if($samp->sampleId == $sentSampleId)
                                                                <a class="btn btn-success pager" href="{{route('give_review',['juryId'=>$samp->juryId,'table'=>$samp->sampleTable,'sampleId'=>$samp->sampleId ])}}"> 
                                                                    {{$samp->samples}}
                                                                </a>
                                                                @else
                                                                <a class="btn btn-secondary pager" href="{{route('give_review',['juryId'=>$samp->juryId,'table'=>$samp->sampleTable,'sampleId'=>$samp->sampleId ])}}"> 
                                                                    {{$samp->samples}}
                                                                </a>
                                                                @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="submit-form-btn" type="buttin" value="SUBMIT SAMPLE" onclick="showmodal()"></a>
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
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>This is a simple Bootstrap modal. Click the "Cancel button", "cross icon" or "dark gray area" to close or hide the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
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
    <!-- END: Page JS-->
    <script>
        function showmodal(){

        }
        var subtotal=0;
        //  var a=0,b=0,c=0,d=0;
        
        $('document').ready(function() {
            
            $("#select").select2(
            {
                tags:true,
                maximumInputLength: 16,
            });
            (function() {
                "use strict"
                function subtotaldata()
                {
                    // var d=e=f=g=h=i=j=k=0;
                    // var a = $('#aroma_dry').val();
                    // var b = $('#aroma_crust').val();
                    // var d = $('#aroma_break').val();
                    var c = $('#clean_up').val();
                    
                    var e = $('#sweetness').val();
                    var f = $('#acidity').val();
                    var g = $('#mouth_feel').val();
                    var h = $('#flavour').val();
                    var i = $('#balance').val();
                    var j = $('#overall').val();
                    var k = $('#after_taste').val();
                    
                    subtotal = +c + +e + +f + +g + +h + +i + +j + +k;
                    
                    return subtotal;
                }
                $('input[type=range]').on('input', function () {
                    var step=0;
                    if ($(this).val() >= 0 && $(this).val() <= 6) {
                        step = 1;
                    }else {
                        step = 0.5;
                    }
                    $(this).attr('step', step);
                    subtotal=subtotaldata(); 
                    var first = $('.score_first_number').val();
                    var second = $('.score_second_number').val();
                    if(second && first)
                    {
                        var defect =first * second * 4;
                        var raw = subtotal - defect;
                        var total = 36 + raw;
                        $('#total_score').val(total);
                        $('.totalScore').html(total);
                    }
                    else
                    {
                        $('.score_first_number').val(0);
                        $('.score_second_number').val(0);
                        $('.multiply4').html(0);
                        var defect = 0;
                        var raw = subtotal - defect;
                        if(raw == 0)
                        {
                            var total = 0;
                        }
                        else
                        {
                            var total = 36 + raw;
                        }
                        $('#total_score').val(total);
                        $('.totalScore').html(total); 
                    }     
                    $(this).trigger('change');
                });
                
                $(".score_second_number,.score_first_number").keyup(function(){
                    var first = $('.score_first_number').val();
                    var second = $('.score_second_number').val();
                    var defect=first * second * 4;
                    $('#defect').val(defect);
                    $('.multiply4').html(defect);
                    subtotal=subtotaldata(); 
                    var raw = subtotal - defect;
                    var total = 36 + raw;
                    
                    $('#total_score').val(total);
                    $('.totalScore').html(total);
                    
                    //   $("input").css("background-color", "pink");
                });
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
            
            var tagInput1 = new TagsInput({
                selector: 'tag-input1',
                duplicate: false,
                max: 10
            });
            tagInput1.addData([])
            
            $('.uniformity').on('click', function() {
                $('#uniformity').html($('.uniformity:checked').length * 2);
                $('#uniformityvalue').val($('.uniformity:checked').length * 2);
                total().trigger();
            });
            $('.cleancup').on('click', function() {
                
                $('#cleancup').html($('.cleancup:checked').length * 2);
                $('#cleancupvalue').val($('.cleancup:checked').length * 2);
                total().trigger();
            });
            $('.sweetness').on('click', function() {
                
                $('#sweetness').html($('.sweetness:checked').length * 2);
                $('#sweetnessvalue').val($('.sweetness:checked').length * 2);
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
            padding: 2rem 0;
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
        
        .user_name{
            padding: 20px 0;
            width: 100%;
        }
        .user_name .range-slider{
            / background-image: linear-gradient(to right,#fff , #88592D) !important; /
            --primary-color: #5D5D5D;
            --value-offset-y: var(--ticks-gap);
            --value-active-color: white;
            --value-background: transparent;
            --value-background-hover: var(--primary-color);
            --value-font: 700 12px/1 Arial;
            --fill-color: var(--primary-color);
            --progress-background: #fff  !important;
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
        .user_name .range-slider input{
            background-image: linear-gradient(to right,#fff , #88592D) !important;
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
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            var hanzi = ["0", "1", "2", "3", "4", "4.5", "5", "5.5", "6", "6.25","6.5","6.75","7","7.25","7.5","7.75","8"];
            $(".roastslider")
            .slider({
                max: 100,
                value: 50
            }).on("slidechange", function( e, ui ) {
                $(ui.handle).parent().find('input').val(ui.value);
                
            });
            $(".aromaslider")
            .slider({
                max: 3,
                step: 1,
                value: 0
            })
            .slider("pips", {
                rest: "label",
                step: 1,
            }).on("slidechange", function( e, ui ) {
                $(ui.handle).parent().find('input').val(ui.value);
                
            });;
            $(".customslider")
            .slider({
                max: 8,
                step: 0.5,
                value: 4
            })
            .slider("pips", {
                rest: "label",
                step: 2,
                labels: hanzi
            })
            .on("slidechange", function( e, ui ) {
                inputvalue = ui.value;
                if(inputvalue==0.5)
                inputvalue = 1;
                else if(inputvalue==1)
                inputvalue = 2;
                else if(inputvalue==1.5)
                inputvalue = 3;
                else if(inputvalue==2)
                inputvalue = 4;
                else if(inputvalue==2.5)
                inputvalue = 4.5;
                else if(inputvalue==3)
                inputvalue = 5;
                else if(inputvalue==3.5)
                inputvalue = 5.5;
                else if(inputvalue==4)
                inputvalue = 6;
                else if(inputvalue==4.5)
                inputvalue = 6.25;
                else if(inputvalue==5)
                inputvalue = 6.5;
                else if(inputvalue==5.5)
                inputvalue = 6.75;
                else if(inputvalue==6)
                inputvalue = 7;
                else if(inputvalue==6.5)
                inputvalue = 7.25;
                else if(inputvalue==7.5)
                inputvalue = 7.75;
                $(ui.handle).parent().find('input').val(inputvalue);
                // ui.value;
                $('input[type=range]').first().trigger('input');
                
            })
            .slider("float",{labels: hanzi});
            $(".customslider")
            .slider( "value", 4 )
            .slider("pips", "refresh");
            $('input[type=range]').first().trigger('input');
            $('.scrollable').css('width',window.innerWidth-100);
            
        });
        
    </script>
</body>
<!-- END: Body-->

</html>
