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
        src: url('{{ asset('public/app-assets/fonts/Montserrat/Montserrat-Bold.ttf') }}') format('truetype');
    }

    .content-body {
        background: rgba(239, 235, 229, 1) !important;
    }

    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
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
        background-color: #ddd;
    }

    .tab .active {
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

    /* @media only screen and (max-width: 800px) {

        / Force table to not be like tables anymore / #no-more-tables table,
        #no-more-tables thead,
        #no-more-tables tbody,
        #no-more-tables th,
        #no-more-tables td,
        #no-more-tables tr {
            display: block;
        }

        / Hide table headers (but not display: none; , for accessibility) / #no-more-tables thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        #no-more-tables tr {
            border: 1px solid #ccc;
        }

        #no-more-tables td {
            / Behave like a "row"/ border: none;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 50%;
            white-space: normal;
            text-align: left;
        }

        #no-more-tables td:before {
            / Now like a table header / position: absolute;
            / Top/left values mimic padding / top: 6px;
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
        /* #no-more-tables td:before {
            content: attr(data-title);
        } */
    /* } */ */

    .app-content {
        background-color: #FFF;
    }

    .heder_text {
        text-transform: uppercase;
        text-align: center;
        font-family: 'Montserrat';
        font-size: 15px;
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

    .card .card-header {
        justify-content: center;
        flex-direction: column;
    }

    .newlogo p {
        font-family: 'Montserrat';
        font-size: 19px;
        font-weight: inherit;
        line-height: 32px;
        letter-spacing: 0.2em;
        color: rgba(231, 132, 96, 1);
        text-align: center;
        text-transform: uppercase;

    }

    .hr {
        margin-bottom: 0px !important;
        border: 1px solid white !important;
    }

    .heading-name {
        font-family: 'Montserrat';
        font-size: 20px;
        font-weight: inherit;
        line-height: 32px;
        letter-spacing: 0.2em;
        text-align: center;
        color: rgba(87, 85, 85, 1);
        padding: 5px;
        text-transform: uppercase;
        margin-top: 15px;
    }

    .tab-section {
        width: 100%;
    }

    .tabbed {
        width: 50%;
        float: left;
        text-align: center;
        border-bottom: 2px solid white;
        margin-bottom: 10px;
        margin-top: 10px;
        border-top: 2px solid white;

    }

    .tabbed h2 {
        font-family: 'Montserrat';
        font-size: 20px;
        font-weight: inherit;
        line-height: 24px;
        letter-spacing: 0.1em;
        text-align: center;
        color: rgba(231, 132, 96, 1);
        text-transform: uppercase;
        padding: 20px;
        height: 100px;
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .active {
        background: rgba(231, 132, 96, 1);
        color: white !important;
    }

    .table thead th {
        font-family: 'Montserrat';
        font-size: 16px;
        font-weight: 700;
        line-height: 20px;
        letter-spacing: 0.1em;
        text-align: center;
        color:
            rgba(87, 85, 85, 1);
        text-transform: uppercase;
    }

    .btn-success {
        width: 260px;
        background: linear-gradient(0deg, #FFFFFF, #FFFFFF);
        font-family: 'Montserrat';
        font-size: 16px;
        font-weight: 700;
        line-height: 20px;
        letter-spacing: 0.1em;
        text-align: center;
        color: rgba(87, 85, 85, 1);
        border-radius: 27px;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        text-transform: uppercase;
    }

    .btn-success:hover {
        color: rgba(87, 85, 85, 1) !important;
    }

    .sr {
        font-family: 'Montserrat';
        font-size: 16px;
        font-weight: 700;
        line-height: 20px;
        letter-spacing: 0.1em;
        text-align: center;
        color: rgba(87, 85, 85, 1);
        text-transform: uppercase;


    }

    .sample {
        font-family: 'Montserrat';
        font-size: 16px;
        font-weight: 700;
        line-height: 20px;
        letter-spacing: 0.1em;
        text-align: center;
        text-transform: uppercase;
        color: rgba(87, 85, 85, 1);
    }

    table {
        width: 100%;
        table-layout: fixed;
    }

    td,
    th {
        width: auto;
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: transparent;
    }

    .table th,
    .table td {
        border: 1px solid white;
        border-right: none;
        border-left: none;
    }

    .table th {
        padding: 20px;
    }

    .br-right {
        border-right: 1px solid white !important;
    }

    .tab-content {
        display: none;

    }

    .first-tab {
        display: block;
    }

    .active h2 {
        color: white;
    }

    .table td {
        padding: 30px
    }

    .p-name {
        font-family: 'Montserrat';
        font-size: 30px;
        font-weight: normal;
        line-height: 32px;
        letter-spacing: 0.1em;
        text-align: center;
        text-transform: uppercase;
        color: black
    }


    html body.blank-page .content.app-content {
        background: rgba(239, 235, 229, 1) !important
    }
    html body.bg-full-screen-image{
        background: rgba(239, 235, 229, 1) !important
    }
    html body.blank-page .content-wrapper .flexbox-container{
        height: 100%;
    }
    @media only screen and (max-width:768px){
        .p-name{
            font-size:18px;
        }
    }
</style>

<body
    class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page"
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
                                    <div class="image-section">
                                        <img src="{{ asset('public/app-assets/images/logo/new-logo-2023.png') }}"
                                            alt="">
                                        <img src="{{ asset('public/app-assets/images/logo/heading.png') }}"
                                            alt="">

                                    </div>
                                    <div class="newlogo">

                                        <p>Welcome to people choice</p>
                                    </div>
                                    @if (session('success'))
                                        <div class="col-md-12 alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                </div>
                                <hr class="hr">
                                <h2 class="heading-name">{{ @$user->name }}</h2>
                                <hr class="hr">
                                <div class="tab-section">
                                    <div class="tabbed active" onclick="openTab(event, 'tab1')">
                                        <h2>Natural and deep fermentation</h2>
                                    </div>
                                    <div class="tabbed" onclick="openTab(event, 'tab2')">
                                        <h2>Alchemy</h2>
                                    </div>
                                </div>

                                <div id="tab1" class="  first-tab tab-content ">
                                    @if (count($samples) > 0)
                                        <div class="card-body">
                                            <div class="table-responsive" id="no-more-tables">
                                                <div class="container w3-animate-opacity p-0">
                                                    <div class="content_data ">
                                                        <table class="table">
                                                            <thead style="color: #d8940d; border:white"
                                                                class="table-bordered">
                                                                <tr>
                                                                    <th class="br-right">Rank</th>
                                                                    <th class="br-right">Coffee</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                {{-- Loop over $samples for Tab 1 content --}}
                                                                @foreach ($samples as $sample)
                                                                    <tr>
                                                                        <td class="sr br-right" data-title="Sr No">
                                                                            {{ $loop->iteration }}</td>
                                                                        <td class="sample br-right"
                                                                            data-title="Sample ID">
                                                                            <p class="p-name">
                                                                                ALCHEMY ALCHEMY 2
                                                                                <!-- {{ @$sample->auctionProduct->name }} -->
                                                                            </p>
                                                                            JURY CODE
                                                                            :{{ @$sample->auctionProduct->code }}
                                                                        </td>
                                                                        <td data-title="Action">
                                                                            @if ($sample->is_hidden == 0)
                                                                                <a class="btn btn-success"
                                                                                    target="_blank"
                                                                                    href="{{ route('give_cupping_review', ['userId' => $userId, 'table' => $sample->table, 'sampleId' => $sample->id, 'productId' => $sample->product_id]) }}">CUP
                                                                                    SAMPLE</a>
                                                                            @else
                                                                                Completed
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <h3 class="ml-5">No Pending Reviews</h3>
                                    @endif
                                </div>

                                <div id="tab2" class="tab-content">
                                    @if (count($alchemySamples) > 0)

                                        <table class="table">
                                            <thead style="color: #d8940d; border:white" class="table-bordered">
                                                <tr>
                                                    <th class="br-right">Rank</th>
                                                    <th class="br-right">Coffee</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- Loop over $samples for Tab 1 content --}}
                                                @foreach ($alchemySamples as $sample)
                                                    <tr>
                                                        <td class="sr br-right" data-title="Sr No">
                                                            {{ $loop->iteration }}
                                                        </td>
                                                        <td class="sample br-right" data-title="Sample ID">
                                                            <p class="p-name">{{ @$sample->auctionProduct->name }}</p>
                                                            JURY CODE :{{ @$sample->auctionProduct->code }}
                                                        </td>
                                                        </td>
                                                        <td data-title="Action">
                                                            @if ($sample->is_hidden == 0)
                                                                <a class="btn btn-success" target="_blank"
                                                                    href="{{ route('give_cupping_review', ['userId' => $userId, 'table' => $sample->table, 'sampleId' => $sample->id, 'productId' => $sample->product_id]) }}">CUP
                                                                    SAMPLE</a>
                                                            @else
                                                                Completed
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <h3 class="ml-5">No Pending Reviews</h3>
                                    @endif
                                </div>


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
        var table = {
            {
                isset($firstsample - > table) ? $firstsample - > table : 0
            }
        };

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
                    _token: "{{ csrf_token() }}"
                },
                success: function(data) {
                    jQuery('.content_data').html(data.html);
                }
            });
        }
    </script>
    <Script>
        function openTab(evt, tabName) {
            var i, tabContent;
            tabContent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabContent.length; i++) {
                tabContent[i].style.display = "none";
            }
            document.getElementById(tabName).style.display = "block";

            var tabbed = document.getElementsByClassName("tabbed");
            for (i = 0; i < tabbed.length; i++) {
                tabbed[i].classList.remove("active");
            }
            evt.currentTarget.classList.add("active");
        }
    </Script>

</body>

</html>
