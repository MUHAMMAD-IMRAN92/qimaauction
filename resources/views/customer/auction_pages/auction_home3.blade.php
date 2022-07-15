<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best of Yemen Auction 2022</title>
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" type="image/jpeg" href="{{ asset('public/images/favicon.jpeg') }}">

    <!-- Fonts Start  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;1,300&display=swap"
        rel="stylesheet">
    {{-- web sockets --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.5.1/socket.io.min.js"></script>
    <script type="text/javascript">
        var socket = io('<?= env('SOCKETS') ?>');

        // var socket = io('http://localhost:5002');
    </script>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .navbar {
        width: 100%;
        background-color: #D1AF69;
        overflow: auto;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
    }

    .navbar a {
        float: left;
        padding: 8px;
        color: Black;
        text-decoration: none;
        font-size: 17px;
    }

    .navbar p {
        display: inline;
    }

    .navbar a p {
        font-family: 'play-fair';
    }

    #background {
        background-image: url({{ asset('public/images/banner2.png') }});
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: 189px;

    }

    .imglogo {
        position: absolute;
        top: 92px;
        left: 100px;

    }

    .imglogo img {
        width: 212px;
        height: 122px;
    }

    #footer1 {
        background-color: #D1AF69;
        color: black;


    }

    #footer1 .search-bar {
        margin-top: 10px;
        width: 100%;

        color: #646C78;
        background-color: #D1AF69;

        border: 1px solid #646C78;
        border-radius: 5px;

    }

    #footer1 h2 {
        font-size: 22px;
    }

    .last-section {
        text-align: center;
        background-color: #D1AF69;
    }

    .last-section h3 {
        color: black;
        font-size: 22px;
        padding-bottom: 20px;
        margin-left: 15px;
        padding-left: 0px;
    }


    @media all and (max-width : 768px) {

        #footer1 {
            display: flex;
            flex-direction: column;
            text-align: center;

        }

        #footer1 .search-bar {
            margin-bottom: 20px;
            margin-left: 20px;
        }

        .container {
            padding: 20px;
        }
    }

    .low {
        margin-top: 30px;
    }

    #footer1 li {
        font-size: 12px;
    }

    .avatar {
        vertical-align: middle;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .search-icon {
        position: absolute;
        top: 15px;
        right: 15px;
    }

    /* auction table css */
    tr.hide-table-padding td {
        padding: 0;
    }

    .expand-button {
        position: relative;
    }

    .accordion-toggle .expand-button:after {
        position: absolute;
        left: .75rem;
        top: 50%;
        transform: translate(0, -50%);
        content: '-';
    }

    .accordion-toggle.collapsed .expand-button:after {
        content: '+';
    }

    /* The sidebar menu */
    .sidebar {
        height: 100%;
        /* 100% Full-height */
        width: 0;
        /* 0 width - change this with JavaScript */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Stay on top */
        top: 0;
        right: 0;
        background-color: #FFFFFF;
        /* Black*/
        overflow-x: hidden;
        /* Disable horizontal scroll */
        padding-top: 60px;
        /* Place content 60px from the top */
        transition: 0.5s;
        /* 0.5 second transition effect to slide in the sidebar */
    }

    /* The sidebar links */
    .sidebar a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    /* When you mouse over the navigation links, change their color */
    .sidebar a:hover {
        color: #f1f1f1;
    }

    /* Position and style the close button (top right corner) */
    .sidebar .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    /* The button used to open the sidebar */
    .openbtn {
        font-size: 20px;
        cursor: pointer;
        /* background-color: #111; */
        /* color: white; */
        padding: 10px 15px;
        border: none;
    }

    /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
    #main {
        transition: margin-left .5s;
        /* If you want a transition effect */
        padding: 20px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
        .sidebar {
            padding-top: 15px;
        }

        .sidebar a {
            font-size: 18px;
        }
    }

    .nav-tabs .nav-link {
        border: 1px solid #9C9C9C !important;
        border-top-left-radius: 10px !important;
        border-top-right-radius: 10px !important;
    }

    .nav-tabs .nav-link.active {
        color: white !important;
    }

    .nav-tabs .nav-item.nav-link {
        color: #9C9C9C;
    }

    .auctiontable thead {
        box-sizing: border-box;
        background: #E5E5E5;
        border-width: 1px 0px;
        border-style: solid;
        border-color: #9C9C9C;

    }

    .auctiontable thead th {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 700;
        font-size: 18px;
        line-height: 16px;
        text-align: center;

        /* color: #FFFFFF; */
    }

    .auctiontable tbody tr td {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 29px;
        /* text-align: center; */
        color: #000000;
    }

    .auctiontabs a.active {
        background: #D1AF69 !important;
        border-width: 1px 1px 0px 1px;
        border-style: solid;
        border-color: #9C9C9C;
        border-radius: 10px 10px 0px 0px;
    }

    .changecolor {
        background: #FFFEA2;
        border-width: 1px 0px;
        border-style: solid;
        border-color: #9C9C9C;
    }

    .changebuttontext {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 25px;
        /* identical to box height */
        color: #FFFFFF;
    }

    .alertmsg {
        background: #DBFFDA;
    }

    .errormsgautobid {
        background: #DBFFDA;
        margin-top: 12px;
    }

    .liabilitytable thead {
        box-sizing: border-box;
        background: #E5E5E5;
        border-width: 1px 0px;
        border-style: solid;
        border-color: #9C9C9C;
    }

    .auctiontable tbody tr td a {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 25px;
        /* identical to box height */

        /* text-align: center; */

        /* color: #FFFFFF; */
    }

    .auctiontable tbody tr td {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 29px;
        /* text-align: center; */
        color: #000000;
    }

    .auctiontabs a.active {
        background: #D1AF69 !important;
        border-width: 1px 1px 0px 1px;
        border-style: solid;
        border-color: #9C9C9C;
        border-radius: 10px 10px 0px 0px;
    }

    .changecolor {
        background: #FFFEA2;
        border-width: 1px 0px;
        border-style: solid;
        border-color: #9C9C9C;
    }

    .changebuttontext {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 25px;
        /* identical to box height */
        color: #FFFFFF;
    }

    .errormsgautobid {
        background: #DBFFDA;
        margin-top: 12px;
    }

    .liabilitytable thead {
        box-sizing: border-box;
        background: #E5E5E5;
        border-width: 1px 0px;
        border-style: solid;
        border-color: #9C9C9C;

    }

    .liabilitytable thead th {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 700;
        font-size: 18px;
        line-height: 16px;
        text-align: center;

        color: #000000;
    }

    .liabilitytable tbody tr td a {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 25px;
        /* identical to box height */

        text-align: center;

        color: #FFFFFF;
    }

    .liabilitytable tbody tr td {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        font-size: 22px;
        line-height: 29px;
        text-align: center;
        color: #000000;
    }
</style>

<body>

    <section>
        <div class="navbar">
            <a href="#"><img src="{{ asset('public/images/avatar.png') }}" alt="Avatar" class="avatar"></a>

            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                <p>LOG OUT</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <a href="#"><i class="fa fa-instagram"></i> </a>
            <a href="#"><i class="fa fa-facebook-f"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> </a>

            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
        </div>
    </section>
    <section>
        <div id="background">
            <div class="imglogo">
                <img src="{{ asset('public/images/logo-banner.png') }}" width=40px alt="">
            </div>
        </div>
        <section>
        </section>
    </section>
    <section>
        <div class="row">
            {{-- <div class="col-lg-12 pb-2 text-center section-4-img">
            <img src="{{asset('public/images/LOGO_0003_Vector-Smart-Object 1.png')}}" alt="">
        </div> --}}
            <div class="col-lg-12 text-center section-4-text-1">
                <p class="time real-timer m-0"></p>
                @php
                    $date = date('j F Y', strtotime($auction->startDate));
                @endphp
                <p class="date">{{ $date }}</p>
            </div>
        </div>
        <div class="container">
            <nav>
                <div class="col-4" style="padding-left: 0; !important">
                    <div class="nav nav-tabs nav-fill auctiontabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active mr-2" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                            role="tab" aria-controls="nav-home" aria-selected="true">Auction</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Your Liability</a>
                    </div>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table class="table table-responsive auctiontable">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Rank</th>
                                <th scope="col">Jury Score</th>
                                <th scope="col">Your Score</th>
                                <th scope="col">Size</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Process</th>
                                <th scope="col">Genetics</th>
                                <th scope="col">Bid</th>
                                <th scope="col">Total Value</th>
                                <th scope="col">Lot Name</th>
                                <th scope="col">High Bidder</th>
                                <th scope="col">Time Left</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($auctionProducts as $auctionProduct)
                                <tr class="text-center bidcollapse{{ $auctionProduct->id }}">
                                    <td>{{ $auctionProduct->rank }}</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>{{ $auctionProduct->size }}</td>
                                    <td>{{ $auctionProduct->weight }}/lb</td>
                                    @foreach ($auctionProduct->products as $products)
                                        @if ($products->pro_process == '1')
                                            <td>Natural</td>
                                        @elseif ($products->pro_process == '2')
                                            <td>Slow Dried</td>
                                        @else
                                            <td>Alchemy</td>
                                        @endif
                                    @endforeach
                                    @foreach ($auctionProduct->products as $products)
                                        <td>--</td>
                                    @endforeach
                                    <td>
                                        <div style="display: flex;">
                                            <span
                                                class="bidData1{{ $auctionProduct->id }}">${{ $auctionProduct->latestBidPrice->bid_amount ?? $auctionProduct->start_price }}/lb</span>
                                            <a class=" btn btn-primary accordion-toggle collapsed startBid changetext{{ $auctionProduct->id }}"
                                                data-id="{{ $auctionProduct->id }}" id="accordion1"
                                                data-toggle="collapse" data-parent="#accordion1"
                                                href="#collapseOne{{ $auctionProduct->id }}">Bid</a>
                                        </div>
                                    </td>
                                    @foreach ($auctionProduct->products as $products)
                                        @if ($products->pro_lot_type == '1')
                                            <td>Farmer Lot</td>
                                        @else
                                            <td>Community Lot</td>
                                        @endif
                                    @endforeach
                                    <td>5</td>
                                    <td class="paddleno{{ $auctionProduct->id }}">--</td>
                                    <td>
                                        <div style="display: flex;">
                                            <span class="waiting{{ $auctionProduct->id }}">Waiting Bid</span>
                                            <a class="openbtn" onclick="openNav()" style="color: #000000;"> ⋮</a>
                                        </div>
                                    </td>
                                </tr>
                                @if (!isset($agreement) || $agreement->privacy_policy_id != '1' || $agreement->terms_conditions_id != '2' || $agreement->bid_agrement_id != '3')
                                    <tr class="hide-table-padding">
                                        <td colspan="12">
                                            <div id="collapseOne{{ $auctionProduct->id }}" class="collapse">
                                                <div class="card">
                                                    <h5 class="card-header">Bidding Agreement</h5>
                                                    <div class="card-body">
                                                        <form action="{{ url('/accept-agrements') }}"
                                                            method="POST" autocomplete="off">
                                                            @csrf
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="privacy" name="privacy_policy_id"
                                                                    value="1" required>
                                                                <label for="privacy">I've read and agree to the <a
                                                                        href="{{ url('/privacy_policy') }}"
                                                                        target="_blank">Privacy Policy.</a></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="terms_conditions_id" id="terms"
                                                                    value="2" required>
                                                                <label for="terms">I've read and agree to the <a
                                                                        href="{{ url('/terms_conditions') }}"
                                                                        target="_blank">Terms And
                                                                        Conditions.</a></label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="agreement" name="bid_agrement_id"
                                                                    value="3" required>
                                                                <label for="agreement">I've read and agree to the <a
                                                                        href="{{ url('/bid_agreement') }}"
                                                                        target="_blank">Bid Agreement.</a></label>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary" type="submit">Proceed
                                                                    For
                                                                    Bidding</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @else
                                    <tr class="hide-table-padding ">
                                        <td></td>
                                        <td colspan="10">
                                            <div id="collapseOne{{ $auctionProduct->id }}" class="collapse in p-3">
                                                <div class="row ">
                                                    <div class="col-4">
                                                        <div class="input-group mb-3"
                                                            style="justify-content: flex-end;">
                                                            <p class="mr-1 increment{{ $auctionProduct->id }}">
                                                                @php
                                                                    //increment in singlebid price
                                                                    $incPriceSinglebid = $auctionProduct->latestBidPrice->bid_amount ?? $auctionProduct->start_price;
                                                                    $bidLimitSinglebid = App\Models\Bidlimit::where('min', '<', $incPriceSinglebid)
                                                                        ->orderBy('min', 'desc')
                                                                        ->limit(1)
                                                                        ->get();
                                                                    $bidIncrementSinglebid = $bidLimitSinglebid[0]->increment ?? '';
                                                                    $finalIncSinglebid = $incPriceSinglebid + $bidIncrementSinglebid;
                                                                @endphp
                                                                ${{ number_format($finalIncSinglebid, 1) }}
                                                            </p>
                                                            <div>
                                                                <button
                                                                    class="btn btn-success singlebid singlebidClass{{ $auctionProduct->id }}"
                                                                    id="{{ $auctionProduct->id }}"
                                                                    href="javascript:void(0)"
                                                                    data-id="{{ $auctionProduct->id }}"
                                                                    style="border-radius: 5px;">Bid Now</button>
                                                            </div>
                                                        </div>
                                                        <div id="alertMessage"
                                                            class="alertmsg alertMessage{{ $auctionProduct->id }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <form class="form-inline" action="" method="POST">
                                                            @csrf
                                                            <input type="hidden"
                                                                class="form-control auctionid{{ $auctionProduct->id }}"
                                                                value="{{ $auctionProduct->auction_id }}"
                                                                id="autobidamount">
                                                            $ &nbsp;<input type="number" name="autobidamount"
                                                                class="form-control autobidamount{{ $auctionProduct->id }}"
                                                                id="autobidamount" style="width: 50%;">
                                                            &nbsp;<button
                                                                class="btn btn-success autobid autobidClass{{ $auctionProduct->id }}"
                                                                type="submit" href="javascript:void(0)"
                                                                data-id="{{ $auctionProduct->id }}">Auto
                                                                Bid</button>
                                                            <div
                                                                class="errormsgautobid errorMsgAutoBid{{ $auctionProduct->id }}">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-4">
                                                        <table class="table mt-2">
                                                            <tr>
                                                                <th scope="col">Bid</th>
                                                                <td
                                                                    scope="col"class="biddermaxbid{{ $auctionProduct->id }}">
                                                                    ---</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col">Weight</th>
                                                                <td scope="col">{{ $auctionProduct->weight }}lbs
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col">Total Liability</th>
                                                                <td scope="col"
                                                                    class="totalliability{{ $auctionProduct->id }}">
                                                                    ---</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                </div>
                </td>
                </tr>
                @endif
                @endforeach
                </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <table class="table table-bordered liabilitytable">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Rank</th>
                            <th scope="col">Jury Score</th>
                            <th scope="col">Your Score</th>
                            <th scope="col">Size</th>
                            <th scope="col">Weight</th>
                            <th scope="col">Process</th>
                            <th scope="col">Genetics</th>
                            <th scope="col">Bid</th>
                            <th scope="col">Total Value</th>
                            <th scope="col">Lot Name</th>
                            <th scope="col">High Bidder</th>
                            <th scope="col">Time Left</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>*1</td>
                            <td>90.1</td>
                            <td>80.1</td>
                            <td>4</td>
                            <td>163lbs</td>
                            <td>Pulp</td>
                            <td>Garnica</td>
                            <td>$25.00/lb<a class="btn btn-primary" href="#">BID</a></td>
                            <td>$4750.00</td>
                            <td>SAN-HEY-03-125</td>
                            <td>6560 <a class="btn btn-success">Winning</a></td>
                            <td>Open:</td>
                        </tr>
                        <tr class="text-center">
                            <td>*1</td>
                            <td>90.1</td>
                            <td>80.1</td>
                            <td>4</td>
                            <td>163lbs</td>
                            <td>Pulp</td>
                            <td>Garnica</td>
                            <td>$25.00/lb<a class="btn btn-primary" href="#">BID</a></td>
                            <td>$4750.00</td>
                            <td>SAN-HEY-03-125</td>
                            <td>6560 <a class="btn btn-success">Winning</a></td>
                            <td>Open:</td>

                        </tr>
                        <tr class="text-center">
                            <td>*1</td>
                            <td>90.1</td>
                            <td>80.1</td>
                            <td>4</td>
                            <td>163lbs</td>
                            <td>Pulp</td>
                            <td>Garnica</td>
                            <td>$25.00/lb<a class="btn btn-primary" href="#">BID</a></td>
                            <td>$4750.00</td>
                            <td>SAN-HEY-03-125</td>
                            <td>6560 <a class="btn btn-success">Winning</a></td>
                            <td>Open:</td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        </tbody>
        </table>
        </div>
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="container">
                <h3 style="color:#D1AF69">Black Coffee</h3>
            </div>
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="col">Weight</th>
                        <td scope="col">163/lbs</td>
                    </tr>
                    <tr>
                        <th scope="col">Rank</th>
                        <td scope="col">1a</td>
                    </tr>
                    <tr>
                        <th scope="col">Lot ID</th>
                        <td scope="col">01102</td>
                    </tr>
                    <tr>
                        <th scope="col">Score</th>
                        <td scope="col">90.1</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>
    <div class="container-fluid" id="footer1">
        <div class="row" style="padding: 20px; margin-right: 0; !important;">
            <div class="col-md-3 low">
                <h2><b>LEGAL</b></h2>
                <p>Term and Conditions</p>
                <p>Term of Use</p>
                <p> Privacy Policy</p>
                <p>Cookie Policy</p>

            </div>
            <div class="col-md-3 search-bar1 low">
                <h2><b>SEARCH</b></h2>
                <div style="
    position: relative; ">

                    <input type="text" placeholder="Search" class="search-bar">
                    <i class="fas fa-search search-icon"></i>
                </div>
            </div>
            <div class="col-md-3 low">
                <h2><b>QUICK LINKS</b></h2>
                <p>Contact us</p>
                <p> Blog</p>
                <p>FAQ</p>
                <p>Our Sponsors</p>

            </div>


            <div class="col-md-3 low">
                <h2><b>QIMA COFFE AUCTION</b></h2>
                <p> <img src="{{ asset('public/images/home-icon1.png') }}" style="margin-right:10px;"
                        alt=""> 2250 NW 22nd Ave #612 Po-rtland OR 97210</p>
                <p><img src="{{ asset('public/images/call-icon1.png') }}" alt=""
                        style="margin-right:10px;">(503) 208-2872</p>
                <p> <img src="{{ asset('public/images/message-icon1.png') }}" style="margin-right:10px;"
                        alt="">support@qimauction</p>


            </div>




            <div class=" row last-section ">
                <h3>© 2022 QIMA Coffee Auction. All Rights Reserved. </h3>
            </div>
        </div>
    </div>
    </section>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>


<script>
    // Set the date we're counting down to
    var date = `{{ date('m-d-Y H:i:s', strtotime($auction->startDate)) }}`;
    var countDownDate = new Date(date);
    // {new Date("Aug 9, 2022 00:00:00").getTime();}

    // Update the count down every 1 second
    var x = setInterval(function() {
        // debugger

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        if (hours < 10) {
            hours = "0" + hours;
        }
        if (seconds < 10) {
            seconds = "0" + seconds;
        }
        if (days < 10) {
            days = "0" + days;
        }
        if (minutes < 10) {
            minutes = "0" + minutes;
        }
        // Output the result in an element with id="demo"
        $(".real-timer").text(days + ":" + hours + ":" +
            minutes + ":" + seconds);
        //   document.getElementsByClassName("real-timer").innerHTML = days + ":" + hours + ":"
        //   + minutes + ":" + seconds + ":";

        // If the count down is over, write some text
        //   if (distance < 0) {
        //     clearInterval(x);
        //     document.getElementById("demo").innerHTML = "EXPIRED";
        //   }
    }, 1000);
    $("#signup-for-newsletter").on("click", function() {
        $("#newsltterModel").modal("show");
    });

    /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>
<script type="text/javascript">
    $(document).ready(function(e) {
        //start bid
        $(".startBid").click(function() {
            var id = $(this).attr('data-id');
            // $(".bidcollapse"+id).addClass("changecolor");
            if ($(".changetext" + id).text() == "Bid") {
                $(".changetext" + id).text("Close");
                $(".changetext" + id).addClass("changebuttontext");
            } else {
                $(".changetext" + id).text("Bid");
            }
        });
        $(".singlebid").on("click", function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            $.ajax({
                url: "{{ route('singlebiddata') }}",
                method: 'POST',
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    console.log(response);
                    var bidPrice = response.bid_amountNew;
                    var bidID = response.auction_product_id;
                    var increment = response.bidIncrement;
                    var paddleNo = response.userPaddleNo;
                    var nextIncrement = +increment + +bidPrice;
                    var outbid = response.outAutobid;
                    var autobidUserID = response.autoBidUser
                    var bidderLiablity = response.liablity;
                    var bidderID = response.user_id;
                    var bidderMaxBid = response.bidderMaxAmount;
                    var autoBidmax = response.autoBidmaxData;
                    $('.errorMsgAutoBid' + id).html('');
                    if (bidPrice < autoBidmax) {
                        $('.alertMessage' + id).html('<p>Your $' + bidPrice +
                            '/lb Bid is outed.</p>');
                    } else {
                        $('.alertMessage' + id).html('<p>Your $' + bidPrice +
                            '/lb Bid is confirmed.</p>');
                    }
                    socket.emit('add_bid_updates', {
                        "singleBidammounttesting": bidPrice,
                        "bidID": bidID,
                        "increment": increment,
                        "paddleNo": paddleNo,
                        "nextIncrement": nextIncrement,
                        "outbidresponse": outbid,
                        "autobidUserID": autobidUserID,
                        "bidderLiablity": bidderLiablity,
                        "bidderID": bidderID,
                        // "bidderMaxBid":bidderMaxBid,
                    });
                },
                error: function(error) {
                    console.log(error)
                }
            });

        });
        //Autobid
        $(".autobid").on("click", function(e) {
            e.preventDefault();
            $('.errorMsgAutoBid' + id).html('');
            var id = $(this).attr('data-id');
            var currentBidPrice = $('.bidData1' + id).html().replace(/[^0-9]/gi, '');
            var autobidamount = $('.autobidamount' + id).val();
            if (autobidamount <= currentBidPrice) {
                $('.errorMsgAutoBid' + id).html(
                    '<p>Please enter the amount greater than current bid amount.</p>');
                $('.autobidamount' + id).val('');
            } else {
                swal({
                    title: `Confirm Auto Bid $` + autobidamount + `?`,
                    text: "You will remain highest bidder until your limit reached.",
                    type: "error",
                    buttons: true,
                    dangerMode: true,
                }).then((result) => {
                    if (result) {
                        var auctionid = $('.auctionid' + id).val();
                        $.ajax({
                            url: "{{ route('autobiddata') }}",
                            method: 'POST',
                            data: {
                                id: id,
                                autobidamount: autobidamount,
                                auctionid: auctionid,
                                _token: "{{ csrf_token() }}",
                            },
                            success: function(response) {
                                console.log(response);
                                console.log(response);
                                var latestAutoBidId = response.id;
                                var bidPrice = response.bid_amountNew;
                                var bidID = response.auction_product_id;
                                var increment = response.bidIncrement;
                                var paddleNo = response.userPaddleNo;
                                var nextIncrement = +increment + +bidPrice;
                                var outbid = response.outAutobid;
                                var autobidUserID = response.autoBidUser
                                var bidderLiablity = response.liablity;
                                var bidderID = response.user_id;
                                var bidderMaxBid = response.bidderMaxAmount;
                                $('.errorMsgAutoBid' + id).html('');

                                socket.emit('add_bid_updates', {
                                    "singleBidammounttesting": bidPrice,
                                    "bidID": bidID,
                                    "increment": increment,
                                    "paddleNo": paddleNo,
                                    "nextIncrement": nextIncrement,
                                    "outbidresponse": outbid,
                                    "autobidUserID": autobidUserID,
                                    "bidderLiablity": bidderLiablity,
                                    "bidderID": bidderID,
                                    // "bidderMaxBid":bidderMaxBid,
                                });
                                socket.emit('auto_bid_updates', {
                                    "autobidamount": autobidamount,
                                    "latestAutoBidId":latestAutoBidId,
                                    'id': id,
                                    "bidID": bidID,
                                    'user_id': response.user_id,
                                });
                                $('.errorMsgAutoBid' + id).html('');
                                $('.errorMsgAutoBid' + id).html(
                                    '<p>Current autobid is $' + autobidamount +
                                    ' /lb.{<a href="javascript:void(0)" class="removeAutoBID" data-id=' +
                                    id + '>Remove</a>}</p>');
                                $('.autobidamount' + id).val('');
                                $('.alertMessage' + id).html('');
                                $(".singlebidClass" + id).css("display", "none");
                                $(".autobidClass" + id).css("display", "none");
                            },
                            error: function(error) {
                                console.log(error)
                            }
                        });
                    } else {

                    }

                });
            }
        });
        //remove autobid
        $(document).on("click", '.removeAutoBID', function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            swal({
                title: `Remove Auto Bid ?`,
                // text: "You will remain highest bidder until your limit reached.",
                type: "error",
                buttons: true,
                dangerMode: true,
            }).then((result) => {
                if (result) {
                    $.ajax({
                        url: "{{ route('removeautobid') }}",
                        method: 'POST',
                        data: {
                            id: id,
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(response) {
                        var auction_product_id = response.auction_product_id;
                        console.log(auction_product_id);
                            var outbid = response.outAutobid;
                            if (outbid == 0) {
                                $('.errorMsgAutoBid' + id).html('');
                                $(".singlebidClass" + id).css("display", "block");
                                $(".autobidClass" + id).css("display", "block");
                            }
                         
                                     socket.emit('auto_bid_delete', {
                                    "autobidamount": 0,
                                    "auction_product_id": auction_product_id,
                                });
                        },
                        error: function(error) {
                            console.log(error)
                        }
                    });
                } else {
                    swal('Your bid is safe');
                }
            })
        });
    });
                socket.on('add_bid_updates', function(data) {
                    if(data.outbidresponse == 0 && data.autobidUserID == {{Auth::user()->id}})
                    {
                        $('.errorMsgAutoBid'+data.bidID).html('');
                        $(".singlebidClass"+data.bidID ).css("display", "block");
                        $(".autobidClass"+data.bidID ).css("display", "block");
                        $('.errorMsgAutoBid'+data.bidID).html('You lost your Bid is Outed.');
                    }
                    // if(data.bidderID == {{Auth::user()->id}})
                    // {
                    //     $(".totalliability"+data.bidID).html('$' + data.bidderLiablity.toLocaleString('en-US')+'/lb');
                    //     $(".biddermaxbid"+data.bidID).html('$' + data.bidderMaxBid.toLocaleString('en-US')+'/lb');
                    // }
                    $(".waiting"+data.bidID).html('Open');
                    $(".bidcollapse"+data.bidID).addClass("changecolor");
                    $(".bidData1" + data.bidID).html('$' + data.singleBidammounttesting.toLocaleString('en-US')+'/lb');
                    $(".increment" + data.bidID).html('$' + data.nextIncrement.toLocaleString('en-US'));
                    $(".paddleno" + data.bidID).html(data.paddleNo);
                    $(".totalliability"+data.bidID).html('$' + data.bidderLiablity.toLocaleString('en-US')+'/lb');
                    $(".biddermaxbid"+data.bidID).html('$' + data.singleBidammounttesting.toLocaleString('en-US')+'/lb');
                });
                // if(data.user_id == {{Auth::user()->id}})
                    // {
                          // }
                socket.on('auto_bid_updates', function(data) {
                    
                        $('.errorMsgAutoBid'+ data.id).html('<p>Current autobid is $'+ data.autobidamount +' /lb.{<a href="javascript:void(0)" class="removeAutoBID" data-id='+data.id+'>Remove</a>}</p>');
                  
                });
</script>


</html>
