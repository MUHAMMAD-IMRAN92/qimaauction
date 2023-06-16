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

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/themes/semi-dark-layout.css') }}">

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
    @font-face {
        font-family: 'Montserrat';
        src: url('{{ asset('public/app-assets/fonts/Montserrat/Montserrat-Black.ttf') }}') format('truetype');
        /* Add additional font weights and styles as necessary */
    }

    .tab {
        overflow: hidden;
        border: 1px solid white;
        background-color: transparent !important;
    }

    .tab {
        display: flex;
        justify-content: flex-start;

        width: 100%;
        margin-bottom: 16px;

    }

    .btn-success:focus,
    .btn-success:active {
        color: #575555 !important;
    }

    .table {
        background-color: transparent !important;
    }

    .table-bordered {
        background-color: transparent !important;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: transparent !important;
    }

    tr:nth-child(even) {
        background-color: transparent !important;
    }

    tr {
        color: #575555 !important;
    }

    .table thead th {
        font-size: 16px !important;
        font-weight: 700;
    }

    .table th,
    .table td {
        border: 1px solid white;
    }

    .btn-success {
        background: #FFFFFF !important;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
        color: #575555;
        font-weight: bold;
        width: 240px;

    }

    .btn-success:hover {
        color: #575555 !important;

    }

    .tab button {
        color: #575555;
        font-weight: 800;
        -webkit-text-stroke: 1px #575555;
        font-size: 17px;
        height: 59px;
        /* border: 1px solid white !important; */
        width: 20%;
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        border-right: 1px solid white !important;
    }

    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }

    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
    }

    .tab button:hover {
        background: #575555 !important;
        color: white;
        -webkit-text-stroke: transparent;
    }

    col-lg-6 .active {
        background-color: #ccc;
    }

    .tabcontent {
        display: none;
        padding: 6px 12px;

        border: 1px solid #ccc;
        border-top: none;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: center;
    }

    /*Change color to gray*/
    tr:nth-child(even) {
        background-color: #dddddd;
    }

    .actived a {
        color: green
    }

    .actived a:hover {
        font-weight: bold
    }

    .deactivated a {
        color: red
    }

    .deactivated a:hover {
        font-weight: bold
    }

    .available {
        color: green;
    }

    .disable {
        color: red;
        font-weight: bold
    }

    .intraining {
        color: blue;
        font-weight: bold
    }

    .vacation {
        font-weight: bold
    }

    .active {
        background-color: #d8940d;

    }

    /*no more table*/

    @media only screen and (max-width: 800px) {
        .tab {
            display: block !important;
        }

        .tab button {
            font-size: 11px !important;

        }

        .btn-success {
            width: auto;
        }

        /* Force table to not be like tables anymore */
        #no-more-tables table,
        #no-more-tables thead,
        #no-more-tables tbody,
        #no-more-tables th,
        #no-more-tables td,
        #no-more-tables tr {}

        /* Hide table headers (but not display: none;, for accessibility) */
        #no-more-tables thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        #no-more-tables tr {
            border: 1px solid #ccc;
        }

        /* #no-more-tables td {

                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
                white-space: normal;
                text-align:left;
            } */

        #no-more-tables td:before {
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 6px;
            left: 6px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
            text-align: left;
            font-weight: bold;
        }

        /*
            Label the data
            */
        /* #no-more-tables td:before { content: attr(data-title); } */
    }

    .app-content {
        background-color: #FFF;
    }

    .heder_text {

        text-align: center;
        font-family: 'Montserrat';
        font-size: 15px;
        color: #575555;
        font-weight: 600;
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

    .content-wrapper {
        background-color: #EFEBE5 !important;
        overflow-x: hidden;
    }

    .hr {
        display: block;
        margin-bottom: 0px;
        border: 1px solid white !important;
    }

    .text-section {
        text-align: center;
    }

    .text-section h2 {
        font-weight: 800;
        margin-top: 10px;
        color: #575555;
        padding: 10px;
        font-size: 20px;
    }

    .table th,
    .table td {
        color: #575555;
        font-size: 18px;
        font-weight: 600;
        font-family: 'Montserrat';

    }
</style>

<body
    class="vertical-layout vertical-menu-modern 1-column full-background  navbar-floating footer-static bg-full-screen-image  blank-page blank-page"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    {{-- <div><iframe src="https://giphy.com/embed/xT9IgMgdur6larNA1a" width="100%" height="100%" style="position:absolute"
        frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div> --}}

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- maintenance -->
                <section class="row flexbox-container">
                    <div class="col-xl-7 col-md-8 col-12 d-flex justify-content-center">
                        <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100 row">
                            <div class="card-content">
                                <div class="card-header">
                                    <div class="newlogo">
                                        <div class="image-section">
                                            <img src="{{ asset('public/app-assets/images/logo/new-logo-2023.png') }}"
                                                alt="">
                                            <img src="{{ asset('public/app-assets/images/logo/heading.png') }}"
                                                alt="">

                                        </div>
                                        <p class="heder_text">
                                            Welcome to the Best of Yemen 2022 International jury Cupping.<br>
                                            Below you can find the links to the cupping forms for each sample. They have
                                            been arranged across 5 tables.

                                        </p>
                                        <!-- <p class="heder_text">
                                        </p> -->
                                        <p class="heder_text">
                                            Once you have cupped all the samples on a given table please click on the
                                            submit button to confirm submission.
                                        </p>
                                    </div>

                                    @if (session('success'))
                                        <div class="col-md-12 alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                </div>
                                <hr class="hr">
                                <div class="text-section">
                                    <h2>{{ $juryName }}</h2>
                                </div>
                                <hr class="hr">
                                @if (count($samples) > 0)
                                    <div class="card-body mt-1">
                                        <div class="table-responsive" id="no-more-tables">
                                            <div class="container w3-animate-opacity">
                                                <div class="tab">
                                                    @foreach ($samples as $sample)
                                                        <button class="tablinks tablinks-custom-{{ $sample->tables }} "
                                                            id="{{ $sample->tables }}"
                                                            onclick='javascript:sampleData({{ $sample->tables }},{{ $sample->tables }})'>Table-{{ $sample->tables }}</button>
                                                    @endforeach
                                                </div>
                                                <div class="content_data">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <h3 class="ml-5">No Pending Reviews</h3>
                                @endif

                            </div>
                        </div>
                    </div>
                </section>
                <!-- maintenance end -->

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
    <script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js"></script>
    <!-- END: Theme JS-->
    <script type='text/javascript'>
        var juryId = {{ $juryId }};
        var juryId = {{ $juryId }};
        var table = {{ isset($firstsample->tables) ? $firstsample->tables : 0 }};

        sampleData(table, table);

        function sampleData(element, table) {
            jQuery(".tablinks").removeClass("active");
            jQuery(".tablinks-custom-" + element).addClass("active");
            jQuery.ajax({
                type: 'POST',
                url: `{{ route('sampletable') }}`,
                data: {
                    table: table,
                    juryId: juryId,
                    auctionId: auction_id,
                    sampleProducts: sampleProductd,
                    _token: "{{ csrf_token() }}"
                },

                success: function(data) {
                    jQuery('.content_data').html(data.html);
                }
            });
        }
    </script>

</body>

</html>
