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
    <title>Qima Auction Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="apple-touch-icon" href="{{ asset('public/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/app-assets/images/ico/logo_new.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href={{ asset('public/app-assets/vendors/css/vendors.min.css') }}>
    <link rel="stylesheet" type="text/css"
        href={{ asset('public/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css') }}>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/charts/apexcharts.css') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/card-analytics.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <!-- END: Custom CSS-->
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/app-assets/vendors/css/forms/select/select2.min.css') }}">
    <!-- END: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="{{ asset('public/app-assets/js/select2.js') }}" type="text/javascript"></script>

    {{-- websockets --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.5.1/socket.io.min.js"></script>
    <script type="text/javascript">
        var socket = io('<?= env('SOCKETS') ?>');
    </script>

</head>
<!-- END: Head-->
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static" data-open="click" style="margin-left: -83px"
   >
    @if (session('success'))
        <div class="col-md-12 alert alert-success">
            {{ session('success') }}
    @endif
    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow"  style="margin-right:145px;">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <h3>Auction Dashboard</h3>
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                    class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                        class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul style="display:none" class="nav navbar-nav bookmark-icons">
                            <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                            <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                            <!--     i.ficon.feather.icon-menu-->
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html"
                                    data-toggle="tooltip" data-placement="top" title="Todo"><i
                                        class="ficon feather icon-check-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html"
                                    data-toggle="tooltip" data-placement="top" title="Chat"><i
                                        class="ficon feather icon-message-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html"
                                    data-toggle="tooltip" data-placement="top" title="Email"><i
                                        class="ficon feather icon-mail"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calender.html"
                                    data-toggle="tooltip" data-placement="top" title="Calendar"><i
                                        class="ficon feather icon-calendar"></i></a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">

                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">
                                    </span></div><span><img class="round"
                                        src="../../../public/app-assets/images/portrait/small/avatar-s-11.jpg"
                                        alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-divider"></div><a class="dropdown-item"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i
                                        class="feather icon-power"></i>
                                    Logout</a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../public/app-assets/images/icons/xls.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small
                            class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../public/app-assets/images/icons/jpg.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../public/app-assets/images/icons/pdf.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../public/app-assets/images/icons/doc.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img
                            src="../../../public/app-assets/images/portrait/small/avatar-s-8.jpg" alt="png"
                            height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI
                            designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img
                            src="../../../public/app-assets/images/portrait/small/avatar-s-1.jpg" alt="png"
                            height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img
                            src="../../../public/app-assets/images/portrait/small/avatar-s-14.jpg" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a
                class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img
                            src="../../../public/app-assets/images/portrait/small/avatar-s-6.jpg" alt="png"
                            height="32">
                    </div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span
                        class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->

    <style>
        .errormsgautobid {
            background: #DBFFDA;
            margin-top: 0px;
        }

        .table thead th {
            font-size: 16px;
        }

        .table tr td {
            vertical-align: -webkit-baseline-middle !important;
            margin: 5px;
        }

        .table2 tr td {
            width: 68px;
        }

        table.table-bordered thead tr th,
        .table-bordered tbody tr td {
            border: 1px solid #eacf99;
        }

        .headerSortDown:after,
        .headerSortUp:after {
            content: ' ';
            position: relative;
            left: 10px;
            border: 4px solid transparent;
        }

        .headerSortDown:after {
            top: 2px;
            border-top-color: silver;
        }

        .headerSortUp:after {
            bottom: 15px;
            border-bottom-color: silver;
        }

        .headerSortDown,
        .headerSortUp {
            padding-left: 20px;
        }

        .move {
            cursor: move;
        }
    </style>
    <div class="app-content content" style="margin-left: 112px;">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="modal fade" id="auction_model" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Product Detail</h5>
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button> --}}
                    </div>
                    <div class="modal-body">
                        <b>Size</b>&ensp;&ensp;&ensp; : <span class="col-md-5" id="size"></span><br><br>
                        <b>Weight</b>&ensp;: <span class="col-md-5" id="weight"></span><br><br>
                        <b>Rank</b>&ensp;&ensp;&ensp; : <span class="col-md-5" id="rank"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="user_model" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">User Detail</h5>
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button> --}}
                    </div>
                    <div class="modal-body">
                        <b>Name</b> : <span class="col-md-5" id="name"></span><br><br>
                        <b>Email</b> : <span class="col-md-5" id="email"></span><br><br>
                        <b>PhoneNo</b> : <span class="col-md-5" id="phone"></span><br><br>
                        <b>Company</b> : <span class="col-md-5" id="company"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper" style="margin-left: 115px">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-lg-12 mb-2">
                    <nav>
                        <div class="col-4 mt-4">
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                    href="#nav-home" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Auction</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                    href="#nav-profile" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">Liability</a>
                            </div>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="card" style="padding: 29px;">
                                    <div class="card-content">
                                        <div class="card-body card-dashboard col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table" id="auction-table">
                                                    <thead class="table-heading">
                                                        <tr>
                                                            {{-- <th>Id</th> --}}
                                                            <td></td>
                                                            <th>Product</th>
                                                            <th>Winning Bid</th>
                                                            <th>Paddle No</th>
                                                            <th>Reserved Price</th>
                                                            <th>Liability</th>
                                                            <th>Auto Bid</th>
                                                            {{-- <th>Bid History</th> --}}
                                                            {{-- <th>Action(s)</th> --}}
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $i = 0;
                                                        @endphp
                                                        @if (isset($auction_products))
                                                            @foreach ($auction_products as $auction)
                                                                @foreach ($auction->products as $key => $pro)
                                                                    <tr id="{{ ++$i }}" class="mb-1">
    
                                                                        <td class="headerSortUp headerSortDown move">
                                                                        </td>
                                                                        <td id="product{{ $auction->id }}"
                                                                            type="button"
                                                                            style="width:100%;color:white;height:40px;text-align: center; line-height: 65px; margin-bottom:18px"
                                                                            class="btn product"
                                                                            data-auctionProductId="{{ $auction->id }}"
                                                                            data-toggle="modal"
                                                                            data-target="#auction_model">
                                                                            <b>
                                                                                <h6><b>{{ $pro->product_title }}</b></h6>
                                                                            </b>
                                                                        </td>
                                                                        <td id="price{{ $auction->id }}"
                                                                            allign="right">
                                                                            {{ isset($auction->latestBidPrice) ? $auction->latestBidPrice->bid_amount : $auction->start_price }}
                                                                        </td>
                                                                        @if (isset($auction->latestBidPrice->user))
                                                                            <td id="paddleNo{{ $auction->id }}"
                                                                                allign="right" class="user"
                                                                                data-toggle="modal"
                                                                                data-target="#user_model"
                                                                                data-userId="{{ $auction->latestBidPrice->user->first()->id }}">
                                                                                <b>{{ $auction->latestBidPrice->user->first()->paddle_number }}</b>
                                                                            </td>
                                                                        @else
                                                                            <td>
                                                                                ---
                                                                            </td>
                                                                        @endif
                                                                        <td allign="right">
                                                                            {{ $auction->reserve_price }}
                                                                        </td>
                                                                        <input type="hidden" id="pweight"
                                                                            value="{{ $auction->weight }}">
                                                                        <td allign="right"
                                                                            id="liability{{ $auction->id }}">
                                                                            @php
                                                                                $bidprice = isset($auction->latestBidPrice) ? $auction->latestBidPrice->bid_amount : $auction->start_price;
                                                                            @endphp
                                                                            {{ $auction->weight * $bidprice }}
                                                                        </td>
                                                                        {{-- data all --}}
                                                                        {{-- @if (isset($auction->latestAutoBidPrice)) --}}
                                                                        <td class="editblock{{ $auction->id }}">
                                                                            <input type="hidden"
                                                                                id="autobidId{{ $auction->id }}"
                                                                                value="{{ $auction->latestAutoBidPrice->id ?? '0' }}">
                                                                            @php
                                                                                $latestAutoBidPrice = isset($auction->latestAutoBidPrice) ? $auction->latestAutoBidPrice->bid_amount : null;
                                                                            @endphp
    
                                                                            <input type="number"
                                                                                value="{{ $latestAutoBidPrice ?? '0' }}"
                                                                                name="autoBidAmount"
                                                                                id="autoBidAmount{{ $auction->id }}"
                                                                                style="width: 80px; border-radius : 1px;padding:4px; border: 1px solid #d1af69;"
                                                                                {{ isset($latestAutoBidPrice) ? '' : 'disabled' }}>
                                                                            <input type="hidden"
                                                                                id="userId{{ $auction->id }}"
                                                                                value="{{ isset($auction->latestAutoBidPrice) ? $auction->latestAutoBidPrice->user_id : '--' }}">
                                                                            <button data-id="{{ $auction->id }}"
                                                                                id="editbtn{{ $auction->id }}"
                                                                                {{ isset($latestAutoBidPrice) ? '' : 'disabled' }}
                                                                                class="autobid btn btn-sm success"
                                                                                style="font-size:16px;">save </button>
                                                                            <div
                                                                                class="errormsgautobid errorMsgAutoBid{{ $auction->id }}">
                                                                            </div>
    
                                                                        </td>
    
                                                                    </tr>
                                                                @endforeach
                                                            @endforeach
                                                        @else
                                                            {{-- <tr id="nodata">
                                                                        <td></td>
                                                                        <td >No Auction Product yet</td>
                                                                    </tr> --}}
                                                        @endif
    
                                                    </tbody>
    
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="card" style="padding: 29px;">
                                    <div class="card-content">
                                        <div class="card-body card-dashboard">
                                            <div class="table-responsive">
                                                <table class="table" id="auction-table">
                                                    <thead>
                                                        <tr>
                                                            <td></td>
                                                            <td><b>User</b></td>
                                                            <td><b>Paddle Number</b></td>
                                                            <td><b>Liability</b></td>
                                                            {{-- <th></th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $i = 0;
                                                        @endphp
                                                        @if (count($auction_products) > 0)
                                                            @foreach ($auction_products as $auction)
                                                                @foreach ($auction->products as $key => $pro)
                                                                    @if ($auction->latestBidPrice)
                                                                        <tr id="{{ ++$i }}">
                                                                            <td class="headerSortUp headerSortDown move"  width="5%">
                                                                                <a href=""></a>
                                                                            </td>
                                                                            <td>
                                                                                {{ isset($auction->latestBidPrice->user) ? $auction->latestBidPrice->user->first()->name : '--' }}
                                                                            </td>
                                                                            <td id="paddleNo{{ $auction->id }}" width="30%">
                                                                                {{ isset($auction->latestBidPrice->user) ? $auction->latestBidPrice->user->first()->paddle_number : '--' }}
                                                                            </td>
                                                                            <td>
                                                                                @php
                                                                                    $bidprice = isset($auction->latestBidPrice) ? $auction->latestBidPrice->bid_amount : $auction->start_price;
                                                                                @endphp
                                                                                {{ $auction->weight * $bidprice }}
                                                                            </td>
                                                                        </tr>
                                                                    @endif
                                                                @endforeach
                                                            @endforeach
                                                        @else
                                                            <tr>
                                                                <td></td>
                                                                <td>No record yet</td>
                                                            </tr>
                                                        @endif
    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </nav>

                   
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                var socket = io('<?= env('SOCKETS') ?>');
                socket.on('auto_bid_updates', function(data) {
                    var amount = (+data.autobidamount).toFixed(2);
                    $("#autoBidAmount" + data.id).val(amount);
                    $("#autobidId" + data.id).val(data.latestAutoBidId);
                    $("#userId" + data.bidID).val(data.user_id);
                    $("#autoBidAmount" + data.id).prop('disabled', false);
                    $("#editbtn" + data.bidID).prop('disabled', false);
                });
                socket.on('auto_bid_delete', function(data) {
                    $('.errorMsgAutoBid' + data.auction_product_id).hide();
                    $("#autoBidAmount" + data.auction_product_id).val(0);
                        $("#autoBidAmount" + data.auction_product_id).prop('disabled', true);
                        $("#editbtn" + data.auction_product_id).prop('disabled', true);
                });

                socket.on('add_bid_updates', function(data) {
                    $("#price" + data.bidID).html(data.singleBidammounttesting);
                    $("#paddleNo" + data.bidID).html('<b>' + data.paddleNo + '</b>');
                });

                $(".headerSortDown,.headerSortUp,.top,.bottom").click(function() {
                    var row = $(this).parents("tr:first");
                    if ($(this).is(".headerSortUp")) {
                        row.insertBefore(row.prev());
                    } else if ($(this).is(".headerSortDown")) {
                        row.insertAfter(row.next());
                    } else if ($(this).is(".top")) {
                        row.insertBefore($("table tr:first"));
                    } else {
                        row.insertAfter($("table tr:last"));
                    }
                });
                ////////////////  Get Product Information /////////////////
                $(document).on('click', '.product', function() {
                    var id = $(this).attr('data-auctionProductId');
                    $.ajax({
                        type: 'POST',
                        url: `{{ route('getAuctionProduct') }}`,
                        data: {
                            auctioProductId: id,
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(data) {
                            $("#weight").html(data.weight);
                            $("#size").html(data.size);
                            $("#rank").html(data.rank);
                        }
                    });
                });
                ////////////////  End Get Product Information /////////////////
                ////////////////  Get Product Information /////////////////
                $(document).on('click', '.user', function() {

                    var id = $(this).attr('data-userId');
                    $.ajax({
                        type: 'POST',
                        url: `{{ route('getUser') }}`,
                        data: {
                            userId: id,
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(data) {
                            $("#name").html(data.name);
                            $("#email").html(data.email);
                            $("#phone").html(data.phone_no);
                            $("#company").html(data.company);
                        }
                    });
                });
                ////////////////  End Get Product Information /////////////////

                // Update Auto Bid Data
                $(".autobid").on("click", function(e) {
                    e.preventDefault();
                    $('.errorMsgAutoBid').hide();
                    $('.errorMsgAutoBid' + id).hide();
                    var id = $(this).attr('data-id');
                    var autobidId = $("#autobidId" + id).val();
                    var userId = $("#userId" + id).val();
                    var autobidamount = $('#autoBidAmount' + id).val();
                    var currentBidPrice = ($('#price' + id).html()).replace(/\s/g, '');
                    console.log(currentBidPrice, autobidamount)
                    if (autobidamount >= parseFloat(currentBidPrice)) {
                        swal({
                            title: `Confirm AutoBid $` + autobidamount + `?`,
                            text: "You will remain highest bidder until your limit reached.",
                            type: "error",
                            buttons: true,
                            dangerMode: true,
                        }).then((result) => {
                            if (result) {
                                $.ajax({
                                    url: "{{ route('updateSaveAutoBids') }}",
                                    method: 'POST',
                                    data: {
                                        id: id,
                                        autobidId: autobidId,
                                        autobidamount: autobidamount,
                                        _token: "{{ csrf_token() }}",
                                    },
                                    success: function(response) {
                                        $('.errorMsgAutoBid' + id).html('<p">Your $' +
                                            autobidamount + ' Bid is confirmed.</p>');
                                        // $('.errorMsgAutoBid' + id).delay(2000);
                                        // $('#product' + id).addClass("mt-5");
                                        $('#autobidamount' + id).val('');
                                        socket.emit('auto_bid_updates', {
                                            "autobidamount": autobidamount,
                                            'id': id,
                                            'user_id': userId,
                                        });
                                    },
                                    error: function(error) {
                                        console.log(error)
                                    }
                                });
                            } else {
                                swal("Your cancelled your autobid.");
                            }

                        });
                    } else {
                        $('.errorMsgAutoBid' + id).html(
                            '<p>Please enter the amount greater than current bid amount.</p>');
                        // $('#product' + id).addClass("mt-4");
                        $('#autobidamount' + id).val('');
                    }
                })
                // End Update Auto Bid Data

            });
        </script>
        <!-- BEGIN: Footer-->
        <footer class="footer footer-static footer-light">
            <p class="clearfix blue-grey lighten-2 mb-0">
                {{-- <span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2022<a class="text-bold-800 grey darken-2" href="" target="_blank">Qimaauction,</a>All rights Reserved</span> --}}
                {{-- <button class="btn btn-primary btn-icon scroll-top" style="position: inherit" type="button"><i class="feather icon-arrow-up"></i></button> --}}
            </p>
        </footer>
        <!-- END: Footer-->


        <!-- BEGIN: Vendor JS-->
        <script src="{{ asset('public/app-assets/vendors/js/vendors.min.js') }}"></script>
        <script src="{{ asset('public/js/app.js') }}"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="{{ asset('public/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="{{ asset('public/app-assets/js/core/app-menu.js') }}"></script>
        <script src="{{ asset('public/app-assets/js/core/app.js') }}"></script>
        <script src="{{ asset('public/app-assets/js/scripts/components.js') }}"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="{{ asset('public/app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>

        <!-- END: Page JS-->

        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="{{ asset('public/app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
        <script src="{{ asset('public/app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
        <script src="{{ asset('public/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
        <script src="{{ asset('public/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
        <script src="{{ asset('public/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('public/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
        <script src="{{ asset('public/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Page JS-->
        <script src="{{ asset('public/app-assets/js/scripts/datatables/datatable.js') }}"></script>
        <script src="{{ asset('public/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
        <script src="{{ asset('public/app-assets/js/scripts/forms/select/form-select2.js') }}"></script>
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('public/datepicker/jquery.datetimepicker.css')}}">
<script src="{{ asset('public/datepicker/jquery.js')}}"></script>
<script src="{{ asset('public/datepicker/jquery.datetimepicker.js')}}"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> --}}
        <script src="{{ asset('public/app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
        <script src="{{ asset('public/app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
        <script src="{{ asset('public/app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
        <script src="{{ asset('public/app-assets/vendors/js/pickers/pickadate/picker.time.js') }}"></script>
        <script src="{{ asset('public/app-assets/vendors/js/pickers/pickadate/legacy.js') }}"></script>
        <script src="{{ asset('public/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js') }}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script>
            $('document').ready(function() {
                $('textarea').each(function() {
                    $(this).val($(this).val().trim());
                });
            });
        </script>
</body>
<!-- END: Body-->

</html>
