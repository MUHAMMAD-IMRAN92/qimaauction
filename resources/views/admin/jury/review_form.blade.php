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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href={{ asset('public/app-assets/vendors/css/vendors.min.css') }}>
    <link rel="stylesheet" type="text/css"
        href={{ asset('public/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css') }}>
    <!-- BEGIN: Vendor CSS-->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/vendors.min.css') }}"> --}}
    <!-- END: Vendor CSS-->
    {{-- <link rel="stylesheet" href={{ asset('public/app-assets/vendors/css/bootstrap-tagsinput.css') }}> --}}

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

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<style>
    .bootstrap-touchspin .bootstrap-touchspin-injected {
        margin: -8px !important;
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
                    <div class="col-xl-8 col-10 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">

                                <div class="col-lg-12 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Coffee Review</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Fill the below form to submit your review.</p>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form class="form"
                                                    action="{{ url('/jury/link/reviewSave') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-body">

                                                        <div class="row">
                                                            {{-- <input type="number" id="aroma" name="aroma"
                                                                class="touchspin" value="0">
                                                            <input type="number" id="aroma" name="aroma"
                                                                class="touchspin" value="0">
                                                            <input type="number" id="aroma" name="aroma"
                                                                class="touchspin" value="0"> --}}
                                                            <div class="col-md-2 col-2 input-group">
                                                                <span>Aroma:</span>
                                                            </div>
                                                            <div class="col-md-4 col-4 input-group">
                                                                <input type="number" id="aroma" name="aroma"
                                                                    class="touchspin" value="0">
                                                            </div>
                                                            <div class="col-md-2 col-2 input-group">
                                                                <span>Acidity:</span>
                                                            </div>
                                                            <div class="col-md-4 col-4 input-group">
                                                                <input type="number" id="aroma" name="acidity"
                                                                    class="touchspin" value="0">
                                                            </div>

                                                        </div>
                                                        <div class="row">

                                                            <div class="col-md-2 col-2 input-group">
                                                                <span>Dry:</span>
                                                            </div>
                                                            <div class="col-md-4 col-4 input-group">
                                                                <input type="number" id="aroma" name="dry"
                                                                    class="touchspin" value="0">
                                                            </div>
                                                            <div class="col-md-2 col-2 input-group">
                                                                <span>Break:</span>
                                                            </div>
                                                            <div class="col-md-4 col-4 input-group">
                                                                <input type="number" id="aroma" name="break"
                                                                    class="touchspin" value="0">
                                                            </div>

                                                        </div>
                                                        <div class="row">

                                                            <div class="col-md-2 col-2 input-group">
                                                                <span>Flavor:</span>
                                                            </div>
                                                            <div class="col-md-4 col-4 input-group">
                                                                <input type="number" id="aroma" name="flavour"
                                                                    class="touchspin" value="0">
                                                            </div>
                                                            <div class="col-md-2 col-2 input-group">
                                                                <span>Body:</span>
                                                            </div>
                                                            <div class="col-md-4 col-4 input-group">
                                                                <input type="number" id="aroma" name="body"
                                                                    class="touchspin" value="0">
                                                            </div>

                                                        </div>
                                                        <div class="row">

                                                            <div class="col-md-2 col-2 input-group">
                                                                <span>Aftertaste:</span>
                                                            </div>
                                                            <div class="col-md-4 col-4 input-group">
                                                                <input type="number" id="aroma" name="afterstate"
                                                                    class="touchspin" value="0">
                                                            </div>
                                                            <div class="col-md-2 col-2 input-group">
                                                                <span>Intensity:</span>
                                                            </div>
                                                            <div class="col-md-4 col-4 input-group">
                                                                <input type="number" id="aroma" name="intensity"
                                                                    class="touchspin" value="0">
                                                            </div>

                                                        </div>
                                                        <div class="row">

                                                            <div class="col-md-2 col-2 input-group">
                                                                <span>Balance:</span>
                                                            </div>
                                                            <div class="col-md-4 col-4 input-group">
                                                                <input type="number" id="aroma" name="balance"
                                                                    class="touchspin" value="0">
                                                            </div>
                                                            <div class="col-md-2 col-2 input-group">
                                                                <span>Overall:</span>
                                                            </div>
                                                            <div class="col-md-4 col-4 input-group">
                                                                <input type="number" id="aroma" name="overall"
                                                                    class="touchspin" value="0">
                                                            </div>

                                                        </div>
                                                        <br>
                                                        <div class="row">

                                                            <div class="col-md-2 col-2 input-group">
                                                                <span>Roast:</span>
                                                            </div>

                                                            <div class="col-md-8 col-8 input-group">
                                                                <input type="range" id="vol" name="roast" min="0"
                                                                    max="100" style="width: 100%;">
                                                            </div>
                                                            <div class="ml-2">
                                                                <span id="volspan">0%</span>
                                                                <input type="hidden" name="roastvalue">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">

                                                            <div class="col-md-2 col-2 input-group">
                                                                <span>Defects:</span>
                                                            </div>
                                                            <input type="hidden" name="defectvalue" id="defectvalue">
                                                            <div class="col-md-4 col-4 input-group">
                                                                <input type="number" id="defect1" name="defect1"
                                                                    class="touchspin" value="0">
                                                            </div>*
                                                            <div class="col-md-4 col-4 input-group">
                                                                <input type="number" id="defect2" name="defect2"
                                                                    class="touchspin" value="0">
                                                            </div>
                                                            <div class="col-md-1 col-1 input-group"
                                                                style="margin-top: 8px">
                                                                <span id="defect">0</span>
                                                            </div>

                                                        </div>
                                                        <br>
                                                        <div class="row">

                                                            <div class="col-md-3 col-3 input-group">
                                                                <span>Uniformity:</span>
                                                            </div>
                                                            <div class="col-md-5 col-5 input-group">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="uniformity[]"
                                                                            value="false" class="uniformity">
                                                                        <input type="hidden" id="uniformityVlaue"
                                                                            name="uniformityvalue"
                                                                            class="uniformity">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i
                                                                                    class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>

                                                                    </div>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="uniformity[]"
                                                                            value="false" class="uniformity">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i
                                                                                    class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>

                                                                    </div>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="uniformity[]"
                                                                            value="false" class="uniformity">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i
                                                                                    class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>

                                                                    </div>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="uniformity[]"
                                                                            value="false" class="uniformity">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i
                                                                                    class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>

                                                                    </div>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="uniformity[]"
                                                                            value="false" class="uniformity">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i
                                                                                    class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>

                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class=" ml-2 col-md-3 col-3 input-group">
                                                                <span id="uniformity">0</span>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-md-3 col-3 input-group">
                                                                <span>Clean Cup:</span>
                                                            </div>
                                                            <div class="col-md-5 col-5 input-group">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="cleancup[]"
                                                                            value="false" class="cleancup">
                                                                        <input type="hidden" id="cleancupvalue"
                                                                            name="cleancupvalue"
                                                                            class="">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i
                                                                                    class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>

                                                                    </div>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="cleancup[]"
                                                                            value="false" class="cleancup">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i
                                                                                    class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>

                                                                    </div>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="cleancup[]"
                                                                            value="false" class="cleancup">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i
                                                                                    class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>

                                                                    </div>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="cleancup[]"
                                                                            value="false" class="cleancup">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i
                                                                                    class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>

                                                                    </div>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="cleancup[]"
                                                                            value="false" class="cleancup">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i
                                                                                    class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>

                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class=" ml-2 col-md-3 col-3 input-group">
                                                                <span id="cleancup">0</span>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-md-3 col-3 input-group">
                                                                <span>Sweetness:</span>
                                                            </div>
                                                            <div class="col-md-5 col-5 input-group">
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="sweetness[]"
                                                                            value="false" class="sweetness">
                                                                        <input type="hidden" id="sweetnesvalue"
                                                                            name="sweetnesvalue"
                                                                            class="">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i
                                                                                    class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>

                                                                    </div>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="sweetness[]"
                                                                            value="false" class="sweetness">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i
                                                                                    class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>

                                                                    </div>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="sweetness[]"
                                                                            value="false" class="sweetness">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i
                                                                                    class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>

                                                                    </div>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="sweetness[]"
                                                                            value="false" class="sweetness">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i
                                                                                    class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>

                                                                    </div>
                                                                </fieldset>
                                                                <fieldset>
                                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                                        <input type="checkbox" name="sweetness[]"
                                                                            value="false" class="sweetness">
                                                                        <span class="vs-checkbox">
                                                                            <span class="vs-checkbox--check">
                                                                                <i
                                                                                    class="vs-icon feather icon-check"></i>
                                                                            </span>
                                                                        </span>

                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class=" ml-2 col-md-3 col-3 input-group">
                                                                <span id="sweetness">0</span>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">

                                                            <div class="col-md-3 col-3 input-group">
                                                                <span>Descriptors:</span>
                                                            </div>

                                                            <div class="col-md-7 col-7 input-group">

                                                                <input type="text" name="tags[]" id="tag-input1">

                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="input-group" style="margin-left: 13rem">
                                                            <span>Total Score:</span>
                                                            <span id="total" style="margin-left:11% ">0</span>
                                                            <input type="hidden" name="totalvalue" id="totalvalue">
                                                        </div>
                                                    </div>

                                                    {{-- <div class="row">

                                                        <div class="col-md-2 col-2 input-group">
                                                            <span>Descriptors:</span>
                                                        </div>
                                                        <div class="col-md-10 col-10 input-group">

                                                            <input type="text">
                                                        </div>


                                                    </div> --}}


                                            </div>

                                            <br>
                                            <div class="col-12" style="">
                                                <button type="submit" class="btn btn-primary"
                                                    style="width:100%">Submit</button>
                                                {{-- <button type="reset"
                                                            class="btn btn-outline-warning mr-1 mb-1">Reset</button> --}}
                                            </div>
                                            {{-- </div> --}}
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

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script> --}}
    <!-- BEGIN: Vendor JS-->

    <script src="{{ asset('public/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('public/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('public/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('public/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('public/app-assets/js/scripts/components.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->

    <script src="{{ asset('public/app-assets/js/scripts/forms/number-input.js') }}"></script>
    <!-- END: Page JS-->
    <script>
        $('document').ready(function() {
            (function() {

                "use strict"


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

                // initialize the Events
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


                // Set All the Default Values
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
</body>
<!-- END: Body-->

</html>
