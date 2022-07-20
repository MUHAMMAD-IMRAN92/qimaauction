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
        // var socket = io('http://localhost:500');
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

    /* Footer css */
    #footer1 {
        background-color: #D1AF69;
        color: black;
        padding: 0px 40px;


    }

    #footer1 .search-bar {
        margin-top: 10px;
        width: 80%;

        color: #646C78;
        background-color: #D1AF69;

        border: 1px solid #646C78;
        border-radius: 3px;

    }

    #footer1 h2 {
        font-size: 18px;
        margin-bottom: 10px;
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
        margin-top: 40px;
    }


    @media all and (max-width : 999px) {

        #footer1 {
            display: flex;
            flex-direction: column;
            text-align: center;

        }

        #footer1 .search-bar {
            width: 40%;
            margin-bottom: 20px;
            margin-left: 20px;
        }

    }

    @media all and (max-width : 768px) {
        .last-section h3 {
            font-size: 17px !important;
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
        position: relative;
        top: 1px;
        right: 25px;
    }

    .img-vector {
        width: 8px;
        margin-bottom: 3px;
        margin-right: 6px;
    }

    p {
        font-style: normal;
        font-weight: 500;
        font-size: 17px;
        line-height: 20px;
    }

    b {

        font-style: normal;
        font-weight: 600;
        font-size: 24px;
        line-height: 30px;
    }

    .footer-head {
        padding: 20px;
    }

    .position-bar {

        position: relative;
    }

    .p-low {

        line-height: 35px;
        display: block;
    }

    .p-low img {
        margin-right: 10px;
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
    /* .sidebar a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    } */

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
        background: #DBFFDA;
        border-width: 1px 0px;
        border-style: solid;
        border-color: #9C9C9C;
    }

    .changecolorlosing {
        background: #FFFFFF;
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

    .box {
        width: 295px;
        border: 3px solid #D1AF69;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .boxrow {
        text-align: center;
        gap: 20px;
        justify-content: center;
    }

    .boxrow h2 {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        font-size: 56px;
        line-height: 88px;
        text-align: center;
        color: #4D3705;
    }

    .boxrow p {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        text-align: center;
        color: #4D3705;
    }

    .tablenav {
        margin-top: 40px;
    }

    @media all and (max-width : 768px) {
        .tablenav a {
            font-size: 12px !important;
        }

    }

    @media all and (max-width : 600px) {
        .box {
            width: 300px;
        }

        .boxrow h2 {
            font-size: 37px;
            gap: 5px;
        }

    }

    @media all and (max-width : 340px) {
        .tablenav a {
            font-size: 10px;
        }
    }
    .disabledbbtn
    {

    }
    /* sidebar css */

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
    </section>
    <div class="container box text-center section-4-text-1 auction_pending" style="display: none;width:auto;">
        <div class="row boxrow">
            {{$auction->startDate}}
            {{date('Y-m-d H:i:s')}}
            <p class="timer_text"></p>
        </div>
        <div class="row boxrow ">
            <div class="col-2">
                <h2 class="days">-</h2>
                <p>Days</p>
            </div>
            <div>
                <h2>:</h2>
            </div>
            <div class="col-2">
                <h2 class="hours">-</h2>
                <p>Hours</p>
            </div>
            <div>
                <h2>:</h2>
            </div>
            <div class="col-2">
                <h2 class="minutes">-</h2>
                <p>Minutes</p>
            </div>
            <div>
                <h2>:</h2>
            </div>
            <div class="col-2">
                <h2 class="seconds">-</h2>
                <p>Seconds </p>
            </div>
        </div>
        <div class="row boxrow">
            <div class="col-8 ">
                <p id="countdown" style="color: red;font-size: small;"></p>
            </div>
        </div>
    </div>
    <div class="container box text-center section-4-text-1 auction_started" style="display: none;">
        <div class="row boxrow">
            <p class="timer_text"></p>
        </div>
        <div class="row boxrow">

            <div class="col-3">
                <h2 class="minutes">-</h2>
                <p>Minutes</p>
            </div>
            <div>
                <h2>:</h2>
            </div>
            <div class="col-3">
                <h2 class="seconds">-</h2>
                <p>Seconds </p>
            </div>
        </div>
        <div class="row boxrow">
            <div class="col-8 ">
                <p id="countdown" style="color: red;font-size: small;"></p>
            </div>
        </div>
    </div>
    {{-- @if($auction->auctionStatus() == "active")
    {
        <div class="container box text-center section-4-text-1">
            <div class="row boxrow">
                <div class="col-3">
                    <h2 id="minutes">03</h2>
                    <p>Minutes</p>
                </div>
                <div>
                    <h2>:</h2>
                </div>
                <div class="col-3">
                    <h2 id="seconds">00</h2>
                    <p>Seconds </p>
                </div>
            </div>
            <div class="row boxrow">
                <div class="col-8 ">
                    <p id="countdown" style="color: red;font-size: small;"></p>
                </div>
            </div>
        </div>
    }
    @elseif ($auction->auctionStatus() == "pending")
    {
        <div class="row">
        <div class="col-lg-12 text-center section-4-text-1">
            <p class="time real-timer m-0"></p>
            @php
                $date = date('j F Y', strtotime($auction->startDate));
            @endphp
            <p class="date">{{ $date }}</p>
        </div>
        </div>
    }
    @endif --}}
    <section>

        <div class="container">
            <nav class="tablenav">
                <div class="col-sm-5 col-8" style="padding-left: 0; !important">
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
                                <th scope="col">Your Bid</th>
                                <th scope="col">Current Bid</th>
                                <th scope="col">Lot Name</th>
                                <th scope="col">High Bidder</th>
                                <th scope="col" colspan="2">Time Left</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($auctionProducts as $auctionProduct)
                                @php
                                    $openCheck = App\Models\SingleBid::where('auction_product_id', $auctionProduct->id)->first();
                                    $openCheckautobid = App\Models\AutoBid::where('auction_product_id', $auctionProduct->id)->first();
                                    $singleBidPricelatest = App\Models\SingleBid::where('auction_product_id', $auctionProduct->id)
                                        ->orderBy('bid_amount', 'desc')
                                        ->first();
                                    // dd($singleBidPricelatest);
                                    $userBid = App\Models\SingleBid::where('auction_product_id', $auctionProduct->id)
                                        ->where('user_id', Auth::user()->id)
                                        ->orderBy('bid_amount', 'desc')
                                        ->first();
                                    $isEmpty = sizeof($singleBids);

                                @endphp
                                <tr class="text-center bidcollapse{{ $auctionProduct->id }}
                                    @if (isset($singleBidPricelatest->user_id) && $singleBidPricelatest->user_id == Auth::user()->id) changecolor @endif "
                                    >
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
                                    <td class="userbid{{ $auctionProduct->id }}"
                                        @if (isset($singleBidPricelatest->user_id) && $singleBidPricelatest->user_id != Auth::user()->id) style="color: #e78460;" @endif>
                                        {{ $userBid->bid_amount ?? '---' }}</td>
                                    <td>
                                        <div style="display: flex; align-items:center; gap:10px;">
                                            <span
                                                class="bidData1{{ $auctionProduct->id }}">${{ isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount : $auctionProduct->start_price }}/lb</span>
                                                @if($auction->auctionStatus() =='active')
                                            <a class=" btn btn-primary accordion-toggle collapsed startBid changetext{{ $auctionProduct->id }}"
                                                data-id="{{ $auctionProduct->id }}" auction-id="{{$auctionProduct->auction_id}}" id="accordion1"
                                                data-toggle="collapse" data-parent="#accordion1"
                                                href="#collapseOne{{ $auctionProduct->id }}">Bid</a>
                                                @endif
                                        </div>
                                    </td>
                                    @foreach ($auctionProduct->products as $products)
                                        @if ($products->pro_lot_type == '1')
                                            <td>Farmer Lot</td>
                                        @else
                                            <td>Community Lot</td>
                                        @endif
                                    @endforeach
                                    @if (isset($singleBidPricelatest))
                                        @foreach ($singleBidPricelatest->user as $userData)
                                            <td class="paddleno{{ $auctionProduct->id }}">
                                                {{ $userData->paddle_number ?? '---' }}</td>
                                        @endforeach
                                    @else
                                        <td class="paddleno{{ $auctionProduct->id }}">---</td>
                                    @endif
                                    <td>
                                        <div style="display: flex;">
                                            <span class="waiting{{ $auctionProduct->id }}">
                                                @if($auction->auctionStatus() !='active')
                                                    -
                                                @elseif (isset($openCheck) || isset($openCheckautobid))
                                                    Open
                                                @else
                                                    Waiting Bid
                                                @endif
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="openbtn openSidebar"data-id="{{$auctionProduct->id}}" style="color: #000000;"> ⋮ </a>
                                    </td>
                                </tr>
                                @if (!isset($agreement) ||
                                    $agreement->privacy_policy_id != '1' ||
                                    $agreement->terms_conditions_id != '2' ||
                                    $agreement->bid_agrement_id != '3')
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
                                                            <p class="mr-1 mt-2 increment{{ $auctionProduct->id }}">
                                                                @php
                                                                    //increment in singlebid price
                                                                    $incPriceSinglebid = isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount : $auctionProduct->start_price;
                                                                    $bidLimitSinglebid = App\Models\Bidlimit::where('min', '<', $incPriceSinglebid)
                                                                        ->orderBy('min', 'desc')
                                                                        ->limit(1)
                                                                        ->get();
                                                                    $bidIncrementSinglebid = $bidLimitSinglebid[0]->increment ?? '';
                                                                    $finalIncSinglebid = $incPriceSinglebid + $bidIncrementSinglebid;
                                                                     // check latest bid user
                                                                    $latestSingleBid     =   App\Models\SingleBid::where('auction_product_id',$auctionProduct->id)->orderBy('created_at','desc')->first();
                                                                @endphp
                                                                ${{ number_format($finalIncSinglebid, 1) }}
                                                            </p>
                                                            <div>
                                                                @if(isset($latestSingleBid->user_id) && $latestSingleBid->user_id == Auth::user()->id)
                                                                <button class="btn btn-success" style="background: #B3B3B3;  cursor: not-allowed;color:#FFFFFF;">Bid Now</button>
                                                                @else
                                                                <button
                                                                    class="btn btn-success singlebid singlebidClass{{ $auctionProduct->id }}"
                                                                    id="{{ $auctionProduct->id }}"
                                                                    href="javascript:void(0)"
                                                                    data-id="{{ $auctionProduct->id }}"
                                                                    style="border-radius: 5px;">Bid Now</button>
                                                                @endif

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
                                                                    {{ isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount : $auctionProduct->start_price }}/lb
                                                                </td>
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
                                                                    {{ $auctionProduct->weight * $finalIncSinglebid }}
                                                                </td>
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
                <div class="container" style="
                padding-left: inherit;">
                    <div class="table-responsive">
                        <table class="table table-responsive auctiontable">
                            <thead>
                                <tr>
                                    <th scope="col">Rank</th>
                                    <th scope="col">Jury Score</th>
                                    <th scope="col">Your Score</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Weight</th>
                                    <th scope="col">Process</th>
                                    <th scope="col">Genetics</th>
                                    <th scope="col">Current Bid</th>
                                    <th scope="col">Total Liability</th>
                                    <th scope="col">Lot Name</th>
                                    <th scope="col">High Bidder</th>
                                    <th scope="col">Time Left</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total_liability = 0; @endphp
                                @foreach ($auctionProducts as $auctionProduct)
                                    @php
                                        $openCheck = App\Models\SingleBid::where('auction_product_id', $auctionProduct->id)->first();
                                        $openCheckautobid = App\Models\AutoBid::where('auction_product_id', $auctionProduct->id)->first();
                                        $singleBidPricelatest = App\Models\SingleBid::where('auction_product_id', $auctionProduct->id)
                                            ->orderBy('bid_amount', 'desc')
                                            ->first();
                                        $userBid = App\Models\SingleBid::where('auction_product_id', $auctionProduct->id)
                                            ->where('user_id', Auth::user()->id)
                                            ->orderBy('bid_amount', 'desc')
                                            ->first();
                                        $isEmpty = sizeof($singleBids);
                                    @endphp
                                    <tr
                                        class="text-center liabilitybidcollapse{{ $auctionProduct->id }}"
                                        @if (isset($singleBidPricelatest) && $singleBidPricelatest->user_id == Auth::user()->id) style="background: #DBFFDA;"  @else style="display:none;"@endif
                                        >
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
                                            <div style="display: flex; align-items:center; gap:10px;">
                                                <span
                                                    class="bidData1{{ $auctionProduct->id }}">${{ isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount : $auctionProduct->start_price }}/lb</span>

                                            </div>
                                        </td>
                                        @php
                                        if(isset($auctionProduct->latestBidPrice) &&  $singleBidPricelatest->user_id == Auth::user()->id)
                                        {
                                            $datavalue =isset($auctionProduct->latestBidPrice) ? ($auctionProduct->latestBidPrice->bid_amount *  $auctionProduct->weight) :  ($auctionProduct->start_price  *  $auctionProduct->weight);
                                              $total_liability =   $total_liability + $datavalue;
                                        }

                                        @endphp
                                        <td class="liability{{ $auctionProduct->id }}">{{  isset($auctionProduct->latestBidPrice) ? ($auctionProduct->latestBidPrice->bid_amount *  $auctionProduct->weight) :  ($auctionProduct->start_price  *  $auctionProduct->weight)}}</td>

                                           @foreach ($auctionProduct->products as $products)
                                            @if ($products->pro_lot_type == '1')
                                                <td>Farmer Lot</td>
                                            @else
                                                <td>Community Lot</td>
                                            @endif
                                        @endforeach
                                        @if (isset($singleBidPricelatest))
                                            @foreach ($singleBidPricelatest->user as $userData)
                                                <td class="auctionpaddleno{{ $auctionProduct->id }}">
                                                    {{ $userData->paddle_number }}@if (isset($singleBidPricelatest->user_id) && $singleBidPricelatest->user_id == Auth::user()->id)

                                                    @endif
                                                </td>
                                            @endforeach
                                        @else
                                            <td class="auctionpaddleno{{ $auctionProduct->id }}">---</td>
                                        @endif
                                        <td>
                                            <div style="display: flex;">
                                                <span class="waiting{{ $auctionProduct->id }}">
                                                    @if (isset($openCheck) || isset($openCheckautobid))
                                                        Open
                                                    @else
                                                        Waiting Bid
                                                    @endif
                                                </span>
                                                <a class="openbtn" onclick="openNav()" style="color: #000000;"> ⋮</a>
                                            </div>
                                        </td>
                                    </tr>

                                @endforeach

                                {{-- <tr>
                                    <th scope="row">Value:</th>
                                    <td></td>
                                    <td>12</td>
                                    <td>489</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <td>$25,682.00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Packing:</th>
                                    <td></td>
                                    <td></td>
                                    <td>$0.60/lb</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <td>$200.00</td>
                                </tr> --}}
                                <tr  class="finalliabilitytr">
                                    <th scope="row">Your Liability</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <td class="finalliability">{{$total_liability}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
                            <td scope="col" class="weight">---</td>
                        </tr>
                        <tr>
                            <th scope="col">Rank</th>
                            <td scope="col" class="rank">---</td>
                        </tr>
                        <tr>
                            <th scope="col">Lot Name</th>
                            <td scope="col" class="lotName"> ---</td>
                        </tr>
                        <tr>
                            <th scope="col">Score</th>
                            <td scope="col" class="score">---</td>
                        </tr>
                    </tbody>
                </table>
                <div class="moreBtn" style="display:flex;justify-content: center;"></div>
            </div>

    </section>
    <section>
        <div class="container-fluid" id="footer1">
            <div class="row footer-head  ">
                <div class="offset-lg-1 col-lg-2 low">
                    <h2><b>LEGAL</b></h2>
                    <p>Term and Conditions</p>
                    <p>Term of Use</p>
                    <p> Privacy Policy</p>
                    <p>Cookie Policy</p>

                </div>
                <div class="col-lg-3 search-bar1 low">
                    <h2><b>SEARCH</b></h2>
                    <div class="position-bar">

                        <input type="text" placeholder="Search" class="search-bar">
                        <i class="fa fa-search search-icon"></i>
                    </div>
                </div>
                <div class="col-lg-2 low">
                    <h2><b>QUICK LINKS</b></h2>
                    <p><img src="{{ asset('public/images/Vector.png') }}" alt="" class="img-vector">
                        Contact us</p>
                    <p> <img src="{{ asset('public/images/Vector.png') }}" alt="" class="img-vector"> Blog
                    </p>
                    <p> <img src="{{ asset('public/images/Vector.png') }}" alt="" class="img-vector"> FAQ
                    </p>
                    <p> <img src="{{ asset('public/images/Vector.png') }}" alt="" class="img-vector"> Our
                        Sponsors</p>

                </div>
                <div class="col-lg-4 low">
                    <h2 class="h2-low"><b>QIMA COFFEE AUCTION</b></h2>
                    <p class="p-low"> <img src="{{ asset('public/images/home-icon1.png') }}" alt=""> 2250
                        NW 22nd Ave #612
                        Portland OR 97210</p>
                    <p class="p-low"><img src="{{ asset('public/images/call-icon1.png') }}" alt="">(503)
                        208-2872</p>
                    <p class="p-low"> <img src="{{ asset('public/images/message-icon1.png') }}"
                            alt="">support@qimacoffeeauction.com</p>
                </div>
            </div>
            <div class="last-section ">
                <h3>© 2022 QIMA Coffee Auction. All Rights Reserved. </h3>
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
        //OpenSidebar
        $(".openSidebar").click(function(){
            var id = $(this).attr('data-id');
            $.ajax({
                url: "{{ route('opensidebar') }}",
                method: 'POST',
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    $(".weight").html(response.weight);
                    $(".rank").html(response.rank);
                    if(response.products[0].pro_lot_type == 1)
                    {
                        $(".lotName").html('Farmer Lot');
                    }
                    else
                    {
                        $(".lotName").html('Community Lot');
                    }
                    $(".score").html(response.jury_score);
                    $(".moreBtn").html('<a href="{{ url('productdetail',':id')}}"><button  style="background: #143D30; color:#FFFFFF;padding: 10px 25px;">More Information</button></a>')
                    document.getElementById("mySidebar").style.width = "250px";
                    document.getElementById("main").style.marginLeft = "250px";
                },
                error: function(error) {
                    console.log(error)
                }
            });
        });
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
                    var bidPrice            = response.bid_amountNew;
                    var bidID               = response.auction_product_id;
                    var increment           = response.bidIncrement;
                    var paddleNo            = response.userPaddleNo;
                    var nextIncrement       = +increment + +bidPrice;
                    var outbid              = response.outAutobid;
                    var autobidUserID       = response.autoBidUser
                    var bidderLiablity      = response.liablityInc;
                    var liabiltyUser        = response.liabiltyUser;
                    var bidderID            = response.user_id;
                    var bidderMaxBid        = response.bidderMaxAmount;
                    var autoBidmax          = response.autoBidmaxData;
                    var checkTimer          = response.timerCheck;
                    var userBidAmount       = response.userBidAmount;
                    var winningBidder       = response.winningBidder;
                    var latestSingleBidUser = response.latestSingleBidUser;
                    var bidAmountUser       = response.bidAmountUser;
                    var liability           = response.liability;
                    var checkStartTimer     = response.checkStartTimer;
                    // alert(latestSingleBidUser);
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
                        "bidID"                  : bidID,
                        "increment"              : increment,
                        "paddleNo"               : paddleNo,
                        "nextIncrement"          : nextIncrement,
                        "outbidresponse"         : outbid,
                        "autobidUserID"          : autobidUserID,
                        "bidderLiablity"         : bidderLiablity,
                        "bidderID"               : bidderID,
                        "userBidAmount"          : userBidAmount,
                        "winningBidder"          : winningBidder,
                        "latestSingleBidUser"    : latestSingleBidUser,
                        "bidAmountUser"          : bidAmountUser,
                        "liabiltyUser"           : liabiltyUser,
                        "checkTimer"             : checkTimer,
                        "liability"              : liability,
                        "checkStartTimer"        : checkStartTimer,
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
            var id              = $(this).attr('data-id');
            var currentBidPrice = $('.bidData1' + id).html();
            var autobidamount   = $('.autobidamount' + id).val();
            console.log(autobidamount,currentBidPrice);
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
                                console.log('response');
                                console.log(response);
                                if(response.message !== null)
                                {
                                    $('.errorMsgAutoBid' + id).html(response.message);
                                }
                                else
                                {
                                var latestAutoBidId = response.id;
                                var bidPrice        = response.bid_amountNew;
                                var bidID           = response.auction_product_id;
                                var increment       = response.bidIncrement;
                                var paddleNo        = response.userPaddleNo;
                                var nextIncrement   = +increment + +bidPrice;
                                var outbid          = response.outAutobid;
                                var autobidUserID   = response.bidder_user_id;
                                var bidderLiablity  = response.liablity;
                                var bidderID        = response.user_id;
                                var bidderMaxBid    = response.bidderMaxAmount;
                                $('.errorMsgAutoBid' + id).html('');
                                socket.emit('add_bid_updates', {
                                    "singleBidammounttesting": bidPrice,
                                    "bidID"                  : bidID,
                                    "increment"              : increment,
                                    "paddleNo"               : paddleNo,
                                    "nextIncrement"          : nextIncrement,
                                    "outbidresponse"         : outbid,
                                    "autobidUserID"          : autobidUserID,
                                    "bidderLiablity"         : bidderLiablity,
                                    "bidderID"               : bidderID,
                                    // "bidderMaxBid":bidderMaxBid,
                                });
                                 socket.emit('auto_bid_updates', {
                                    "autobidamount"     : autobidamount,
                                    "latestAutoBidId"   : latestAutoBidId,
                                    'id'                : id,
                                    "bidID"             : bidID,
                                    'user_id'           : response.user_id,
                                });                                $('.errorMsgAutoBid' + id).html('');
                                $('.errorMsgAutoBid' + id).html(
                                    '<p>Current autobid is $' + autobidamount +
                                    ' /lb.{<a href="javascript:void(0)" class="removeAutoBID" data-id=' +
                                    id + '>Remove</a>}</p>');
                                    $('.autobidamount' + id).val('');
                                    $('.alertMessage' + id).html('');
                                    $(".singlebidClass" + id).css("display", "none");
                                    $(".autobidClass" + id).css("display", "none");
                                }
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
                type        : "error",
                buttons     : true,
                dangerMode  : true,
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
                            console.log(response); var auction_product_id = response.auction_product_id;
                            var outbid = response.outAutobid;
                            if (outbid == 0) {
                                $('.errorMsgAutoBid' + id).html('');
                                $(".singlebidClass" + id).css("display", "block");
                                $(".autobidClass" + id).css("display", "block");
                            }
                                     socket.emit('auto_bid_delete', {
                                    "autobidamount"     : 0,
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
    })
</script>
<script>
    var total = 0;
    var interval ;
    var empty = '{{$isEmpty}}';
    socket.on('add_bid_updates', function(data) {
        console.log(data.autobidUserID,{{ Auth::user()->id }},data.outbidresponse);
        if (data.outbidresponse == 0 && data.autobidUserID == {{ Auth::user()->id }}) {
            $('.errorMsgAutoBid' + data.bidID).html('');
            $(".singlebidClass" + data.bidID).css("display", "block");
            $(".autobidClass" + data.bidID).css("display", "block");
            $('.errorMsgAutoBid' + data.bidID).html('You lost your Bid is Outed.');
        }
        if (data.winningBidder == {{ Auth::user()->id }}) {
            $(".liabilitybidcollapse" + data.bidID).show();
            $(".finalliabilitytr").show();
            $(".userbid" + data.bidID).css("color", "black");
            $(".bidcollapse" + data.bidID).removeClass("changecolorlosing");
            $(".liabilitybidcollapse" + data.bidID).addClass("changecolor");
            $(".bidcollapse" + data.bidID).addClass("changecolor");
            $(".auctionpaddleno" + data.bidID).html(data.paddleNo);
        } else {
            console.log("command");
            $(".bidcollapse" + data.bidID).addClass("changecolorlosing");
            $(".bidcollapse" + data.bidID).removeClass("changecolor");
            $(".liabilitybidcollapse" + data.bidID).hide();
            $(".userbid" + data.bidID).css("color", "#e78460");
        }
        if (data.latestSingleBidUser == {{ Auth::user()->id }}) {
            $(".singlebidClass" + data.bidID).attr("disabled", true);
            $(".singlebidClass" + data.bidID).css('background', '#B3B3B3');
            // $(".singlebidClass" + data.bidID).css('color', 'black');

        } else {
            $(".singlebidClass" + data.bidID).attr("disabled", false);
            $(".singlebidClass" + data.bidID).css('background', '#28a745');
        }
        if (data.bidAmountUser == {{ Auth::user()->id }}) {
            $(".userbid" + data.bidID).html(data.userBidAmount.toLocaleString('en-US') + '/lb');
        }
        if (data.liabiltyUser == {{ Auth::user()->id }}) {
            total = total + data.liability;
            $(".liability" + data.bidID).html('$' + data.liability.toLocaleString('en-US') + '/lb');
            $(".finalliability").html('$' + total.toLocaleString('en-US') + '/lb');
            $(".totalliability" + data.bidID).html('$' + data.bidderLiablity.toLocaleString('en-US') + '/lb');
        }
        if (data.checkTimer == 0) {
            window.empty = data.checkTimer;
            resetTimer(data);
        }
        $(".waiting" + data.bidID).html('Open');
        // $(".bidcollapse" + data.bidID).addClass("changecolor");
        $(".bidData1" + data.bidID).html('$' + data.singleBidammounttesting.toLocaleString('en-US') + '/lb');
        $(".increment" + data.bidID).html('$' + data.nextIncrement.toLocaleString('en-US'));
        $(".paddleno" + data.bidID).html(data.paddleNo);
        $(".biddermaxbid" + data.bidID).html('$' + data.singleBidammounttesting.toLocaleString('en-US') +
        '/lb');
    })
    function resetTimer(data){
        var timer_text = "";
        var hours= 0;
        var days= 0;
        @php
        $isEmpty = sizeof($singleBids);
        @endphp

        if("{{$auction->auctionStatus()}}" == "active"){
            @php
            $date_a = new DateTime($auction->endTime);
            $date_b = new DateTime(date('Y-m-d H:i:s'));
            $date_c = new DateTime($auction->startDate);

            $interval   = date_diff($date_a,$date_b);
            $interva13  = date_diff($date_b,$date_c);

            $interval2  = $interval->format('%i:%s');
            $interval3  = $interva13->format('%d:%h:%i:%s');
            @endphp
            if(data && data.checkTimer==0){
                $('.auction_pending').hide();
                $('.auction_started').show();
                var timer_text = "Auction Ending in";
                var timer2     = "03:00";
                var timer = timer2.split(':');

            }
            else if(window.empty !=0 ){
                $('.auction_pending').hide();
                $('.auction_started').show();
                var timer_text = "Auction Ending in";
                var timer2     = "03:00";
                var timer = timer2.split(':');

            }
            else{
                $('.auction_started').show();
                $('.auction_pending').hide();
                var timer_text = "Auction Ending in";
                var timer2     = "{{$interval2}}";
                var timer = timer2.split(':');

            }
        }
        else if("{{$auction->auctionStatus()}}" == "ended")
        {

        }
        // else if("{{$auction->auctionStatus()}}" == "running")
        // {

        // }
        else{
                $('.auction_started').hide();
                $('.auction_pending').show();
            var timer_text = "Auction Starting in";
            var timer2     = "{{$interval3}}";
            var timer = timer2.split(':');

        }
            $('.timer_text').html(timer_text);
            clearInterval(interval);
            if(timer.length > 2){
                     days   = parseInt(timer[0], 10);
                     hours  = parseInt(timer[1], 10);
                    var minutes = parseInt(timer[2], 10);
                    var seconds = parseInt(timer[3], 10);
                }
                else{
                    var minutes = parseInt(timer[0], 10);
                    var seconds = parseInt(timer[1], 10);
                }
            $('.days').html(days.toString().padStart(2, "0"));
                $('.hours').html(hours.toString().padStart(2, "0"));
                $('.minutes').html(minutes.toString().padStart(2, "0"));
                $('.seconds').html(seconds.toString().padStart(2, "0"));
                if(window.empty!=0 && "{{$auction->auctionStatus()}}" == "active"){
                    return;
                }
             window.interval = setInterval(function() {
                var timer    = timer2.split(':');
                //by parsing integer, I avoid all extra string processing
                if(timer.length > 2){
                     days   = parseInt(timer[0], 10);
                     hours  = parseInt(timer[1], 10);
                    var minutes = parseInt(timer[2], 10);
                    var seconds = parseInt(timer[3], 10);
                }
                else{
                    var minutes = parseInt(timer[0], 10);
                    var seconds = parseInt(timer[1], 10);
                }

                --seconds;
                minutes = (seconds < 0) ? --minutes : minutes;
                seconds = (seconds < 0) ? 59 : seconds;
                seconds = seconds.toString().padStart(2, "0");
                //minutes = (minutes < 10) ?  minutes : minutes;
                $('.days').html(days.toString().padStart(2, "0"));
                $('.hours').html(hours.toString().padStart(2, "0"));
                $('.minutes').html(minutes.toString().padStart(2, "0"));
                $('.seconds').html(seconds);
                if (minutes < 0) clearInterval(interval);
                //check if both minutes and seconds are 0
                if ((seconds <= 0) && (minutes <= 0)) {
                    clearInterval(interval);
                    // set is_hidden of auction = 1
                    window.location = window.location.href + "?ended=1";//location.reload();
                }
                if(timer.length > 2){
                    timer2 = days + ':' + hours + ':' + minutes + ':' + seconds;
                }else{
                    timer2 = minutes + ':' + seconds;
                }
            }, 1000);
    }
    $(function(){
        resetTimer();
    })
</script>

</html>
