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
    .finalliabilitytr{
        text-align: center
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
        background: #E5E5E5;
        border-width: 1px 0px;
        border-style: solid;
        border-color: #9C9C9C;
    }

    .auctiontable thead th {
font-family: 'Montserrat';
    font-weight: 700;
    font-size: 16px;
    line-height: 20px;
    text-align: center;
    padding: 10px 8px;
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
    }


    .changecolorwining {
        background: #DBFFDA;
        border-width: 1px 0px;
        border-style: solid;
        border-color: #9C9C9C;
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
    font-size: 18px;
    line-height: 25px;
    text-align: center;
    padding: 2px;
    }

    .auctiontable tbody tr td {
    font-family: 'Montserrat';
    Font-size: 18px;
    Line-height: 22px;
    color: #000000;
    padding: 10px 4px;
    border: none;
    text-align: center;
    }

    .fw-bold{
        font-weight: bold;
    }
    .tr-bb{
            border-bottom: 1px solid #9C9C9C;
    }
    .yourscore{
        max-width: 40px;
        white-space: nowrap;
        text-overflow: ellipsis;
  overflow: hidden;
    }

    .auctiontabs a.active {
        background: #D1AF69 !important;
        border-width: 1px 1px 0px 1px;
        border-style: solid;
        border-color: #9C9C9C;
        border-radius: 10px 10px 0px 0px;
    }

    /* .changebuttontext {
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 25px;
        color: #FFFFFF;
    } */

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
            font-size: 10px;
        }
    }
    .singlebidbtn{
        background-color: #143D30;
        color: white;


    }
    .singlebidbtn:hover{
        color: white;
    }
    .startbidbtn{
        background-color: #143D30 !important;
        color: white;
    }
    .fa-star{
        color: #7A602B;
    }


.table td, .table th {
    vertical-align: middle !important;
}
.intialinc
{
    style=float: left;
    width:75px;
}
.tdtimer
{
    display: flex;
        justify-content: center;
}
.tdtimer p
{
    margin-bottom: 0px;
}
/* hamza css starts */
/* .hide-table-padding {
    display: none;
} */
.table-container {
    width: 90%;
    margin: 0 auto;
}
.sidebar-container{
    padding: 20px 30px;
}
.lot-header h4 {
        font-family: Montserrat;
        font-size: 72px;
        line-height: 87px;
        font-weight: 700;
        color: #232B38;
    }

    .lot-header h3 {
    font-family: Montserrat;
    font-size: 60px;
    line-height: 70px;
    font-weight: 900;
    color: black;
    }

    .lot-header h5 {
        font-family: Montserrat;
        font-size: 30px;
        line-height: 40px;
        font-weight: 700;
        color: #232B38;
    }

    .lot-description p {
        font-family: Montserrat;
        font-size: 20px;
        line-height: 24px;
        font-weight: 300;
        color: #232B38;
    }

    .lot-description p span {
        font-weight: 700;
    }

    .lot-featured-img img {
        width: 100%;
        height: auto;
        margin-bottom: 10px;
    }

    .lot-genetis p {
        font-family: Montserrat;
        font-size: 14px;
        line-height: 17px;
        font-weight: 400;
        color: #232B38;
    }

    .lot-genetis h3 {
        font-family: Montserrat;
        font-size: 28px;
        line-height: 36px;
        font-weight: 300;
        color: #232B38;
    }

    .lot-genetis h3 span {
        font-weight: 700;
    }

    .moreBtn {
           display: block;
    margin-bottom: 15px;
    }
    .moreBtn button{
font-size: 20px;
    line-height: 24px;
    font-weight: 600;
    font-family: Montserrat;
    color: white;
    background-color: black;
    text-align: center;
    padding: 10px 5px;
    border-radius: 3px;
    width: 100%;
    }
    .text-underline{
        text-decoration: underline;
    }

    /* hamza starts ends */
       @media (max-width: 1199px) {
        .tablenav a {
            font-size: 10px;
        }
        .lot-header h4 {
        font-size: 72px;
        line-height: 87px;
    }
    .lot-header h3 {
font-size: 60px;
    line-height: 65px;
    }

    .lot-header h5 {
 font-size: 32px;
    line-height: 36px;
    }

    .lot-description p {
        font-size: 18px;
        line-height: 21px;
    }
    .lot-genetis p {
        font-size: 14px;
        line-height: 17px;
    }

    .lot-genetis h3 {
        font-size: 28px;
        line-height: 34px;
    }
    .moreBtn button{
    font-size: 18px;
    line-height: 20px;
    max-width: 190px;
    }
    .auctiontable tbody tr td {
    Font-size: 12px;
    Line-height: 16px;
}
.auctiontable thead th {
    font-size: 12px;
    line-height: 16px;
}
.auctiontable tbody tr td a {
    font-size: 12px;
    line-height: 18px;
}
    }

    .lot-header h3 {
        font-family: Montserrat;
        font-size: 96px;
        line-height: 117px;
        font-weight: 900;
        color: black;
    }

    .lot-header h5 {
        font-family: Montserrat;
        font-size: 40px;
        line-height: 48px;
        font-weight: 700;
        color: #232B38;
    }

    .lot-description p {
        font-family: Montserrat;
        font-size: 20px;
        line-height: 24px;
        font-weight: 300;
        color: #232B38;
    }

    .lot-description p span {
        font-weight: 700;
    }

    .lot-featured-img img {
        width: 100%;
        height: auto;
    }

    .lot-genetis p {
        font-family: Montserrat;
        font-size: 14px;
        line-height: 17px;
        font-weight: 400;
        color: #232B38;
    }

    .lot-genetis h3 {
        font-family: Montserrat;
        font-size: 32px;
        line-height: 39px;
        font-weight: 300;
        color: #232B38;
    }

    .lot-genetis h3 span {
        font-weight: 700;
    }

    .moreBtn {
        display: block;
    }

    /* hamza starts ends */
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
            {{ $auction->startDate }}
            {{ date('Y-m-d H:i:s') }}
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
    {{-- <div class="container box text-center section-4-text-1 auction_started" style="display: none;">
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
    </div> --}}
    <section>

        <div class="table-container">
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
                                <th scope="col" >Jury Score</th>
                                <th scope="col" >Your Score</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Increment</th>
                                <th scope="col">Bid</th>
                                <th scope="col"></th>
                                <th scope="col">Total Value</th>
                                <th scope="col">Name</th>
                                <th scope="col">Process</th>
                                <th scope="col">Genetics</th>
                                <th scope="col" >High Bidder</th>
                                <th scope="col" >Time Left</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($auctionProducts as $auctionProduct)
                                @php
                                    //increment in singlebid price
                                    $incPriceSinglebid = isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount : $auctionProduct->start_price;
                                    $bidLimitSinglebid = App\Models\Bidlimit::where('min', '<', $incPriceSinglebid)
                                        ->orderBy('min', 'desc')
                                        ->limit(1)
                                        ->get();
                                    $bidIncrementSinglebid = $bidLimitSinglebid[0]->increment ?? '';
                                    $finalIncSinglebid = $incPriceSinglebid + $bidIncrementSinglebid;
                                    $isEmpty = sizeof($singleBids);
                                @endphp
                                <tr class="tr-bb text-center bidcollapse{{ $auctionProduct->id }}
                                    @if (isset($auctionProduct->singleBidPricelatest->user_id) && $auctionProduct->singleBidPricelatest->user_id == Auth::user()->id) changecolor @endif">
                                    <td class="fw-bold">{{ $auctionProduct->rank }}</td>
                                    <td class="fw-bold">{{$auctionProduct->jury_score}}</td>
                                    <td contenteditable='true' class="text-underline yourscore" data-id="{{ $auctionProduct->id }}" id="score">{{$auctionProduct->userscore->your_score ?? '-'}}</td>
                                    <td>{{ $auctionProduct->weight }}/lb</td>
                                    <td class="increment{{$auctionProduct->id}}">${{ number_format($bidIncrementSinglebid, 1) }}</td>
                                    <td class="fw-bold">
                                        <div>
                                            <span class="bidData1{{ $auctionProduct->id }} intialinc" >${{ isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount : $auctionProduct->start_price }}/lb</span>
                                       </div>
                                    </td>
                                    <td>    @if($auction->auctionStatus() =='active')
                                            <a class=" startbidbtn btn-success btn accordion-toggle collapsed startBid changetext{{ $auctionProduct->id }}"
                                                data-id="{{ $auctionProduct->id }}" auction-id="{{$auctionProduct->auction_id}}" id="accordion1"
                                                data-toggle="collapse" data-parent="#accordion1"
                                                href="#collapseOne{{ $auctionProduct->id }}">Bid</a>
                                                @endif</td>
                                    @if (isset($auctionProduct->singleBidPricelatest->user_id) && $auctionProduct->singleBidPricelatest->user_id == Auth::user()->id)
                                    <td class="liability{{ $auctionProduct->id}}">
                                        ${{ isset($auctionProduct->latestBidPrice) ? number_format($auctionProduct->latestBidPrice->bid_amount * $auctionProduct->weight,1) : number_format($auctionProduct->start_price * $auctionProduct->weight,1) }}/lb
                                    </td>
                                        @else
                                        <td class="liability{{ $auctionProduct->id}}">---</td>
                                        @endif
                                    @foreach ($auctionProduct->products as $products)
                                    <td class="fw-bold text-underline"><a class="openbtn openSidebar"data-id="{{ $auctionProduct->id }}">{{$products->product_title}}  </a></td>

                                        {{-- @if ($products->pro_lot_type == '1')
                                            <td>Farmer Lot</td>
                                        @else
                                            <td>Community Lot</td>
                                        @endif --}}
                                    @endforeach
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
                                    @if ($products->genetic_id == '1')
                                    <td>Yemenia</td>
                                    @elseif ($products->genetic_id == '2')
                                        <td>Bourbon</td>
                                    @else
                                        <td>SL28</td>
                                    @endif
                                    @endforeach
                                    @if (isset($auctionProduct->singleBidPricelatest))
                                        @foreach ($auctionProduct->singleBidPricelatest->user as $userData)
                                            <td class="paddleno{{ $auctionProduct->id }} fw-bold">
                                                {{ $userData->paddle_number ?? '---' }}</td>
                                        @endforeach
                                    @else
                                        <td class="paddleno{{ $auctionProduct->id }}">Awaiting Bid</td>
                                    @endif
                                    <td>
                                        <div >
                                            <span class="waiting{{ $auctionProduct->id }}">
                                                @if ($auction->auctionStatus() != 'active')
                                                    -
                                                @else
                                                <div class="tdtimer">
                                                        <p class="minutes">-</p>
                                                        <p>:</p>
                                                        <p class="seconds">-</p>
                                                </div>
                                                {{-- @elseif (isset($auctionProduct->openCheck) || isset($auctionProduct->openCheckautobid))
                                                    Open
                                                @else
                                                    Waiting Bid --}}
                                                @endif
                                            </span>
                                        </div>
                                    </td>
                                    {{-- <td>
                                        <a class="openbtn openSidebar"data-id="{{ $auctionProduct->id }}"
                                            style="color: #000000;"> ⋮ </a>
                                    </td> --}}
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
                                                            <p class="mr-1 mt-2 nextincrement{{ $auctionProduct->id }}">
                                                                ${{ number_format($finalIncSinglebid, 1) }}
                                                            </p>
                                                            <div>
                                                                @if(isset($auctionProduct->latestSingleBid->user_id) && $auctionProduct->latestSingleBid->user_id == Auth::user()->id)
                                                                <button class="btn" style="background: #B3B3B3;  cursor: not-allowed;color:#FFFFFF;">Bid Now</button>
                                                                @else
                                                                <button
                                                                    class="singlebidbtn btn singlebid singlebidClass{{ $auctionProduct->id }}"
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
                                                            &nbsp;<input type="number" min="0"
                                                                name="autobidamount"
                                                                class="form-control autobidamount{{ $auctionProduct->id }}"
                                                                id="autobidamount" style="width: 50%;">
                                                            &nbsp;
                                                            @if (isset($auctionProduct->latestAutoBidPrice))
                                                                @if ($auctionProduct->latestAutoBidPrice->auction_product_id == $auctionProduct->id &&
                                                                    $auctionProduct->latestAutoBidPrice->user_id != auth()->user()->id)
                                                                    <button
                                                                        class="btn singlebidbtn  btn-success autobid autobidClass{{ $auctionProduct->id }}"
                                                                        type="submit" href="javascript:void(0)"
                                                                        data-id="{{ $auctionProduct->id }}">Auto
                                                                        Bid</button>
                                                                    <div
                                                                        class="errormsgautobid errorMsgAutoBid{{ $auctionProduct->id }}">
                                                                    </div>
                                                                @endif
                                                            @else
                                                                <button
                                                                    class="btn singlebidbtn  autobid autobidClass{{ $auctionProduct->id }}"
                                                                    type="submit" href="javascript:void(0)"
                                                                    data-id="{{ $auctionProduct->id }}">Auto
                                                                    Bid</button>
                                                            @endif
                                                            @if (isset($auctionProduct->latestAutoBidPrice->bid_amount) &&
                                                                $auctionProduct->latestAutoBidPrice->user_id == auth()->user()->id)
                                                                <button
                                                                    class="btn btn-success autobid autobidClass{{ $auctionProduct->id }}"
                                                                    style="display: none" type="submit"
                                                                    href="javascript:void(0)"
                                                                    data-id="{{ $auctionProduct->id }}">Auto
                                                                    Bid</button>
                                                                <div
                                                                    class="errormsgautobid errormsgautobid{{ $auctionProduct->id }}">
                                                                    <p>Current autobid is
                                                                        {{ $auctionProduct->latestAutoBidPrice->bid_amount }}
                                                                        <a href="javascript:void(0)" class="removeAutoBID"
                                                                            data-id="{{ $auctionProduct->id }}">Remove</a>
                                                                    </p>
                                                                </div>
                                                            @endif
                                                            <div
                                                                class="errormsgautobid errorMsgAutoBid{{ $auctionProduct->id }}{{ $auctionProduct->id }}">
                                                            </div>

                                                            @if (isset($auctionProduct->latestAutoBidPrice))
                                                                @if ($auctionProduct->latestAutoBidPrice->auction_product_id == $auctionProduct->id &&
                                                                    $auctionProduct->latestAutoBidPrice->user_id != auth()->user()->id)
                                                                    <div
                                                                        class="errormsgautobid errorMsgAutoBid{{ $auctionProduct->id }}">
                                                                    </div>
                                                                @endif
                                                            @endif
                                                        </form>
                                                    </div>

                                                    <div class="col-4 AutoSingleBidClick{{ $auctionProduct->id }}" style="display: none" >
                                                        <table class="table mt-2">
                                                            <tr>
                                                                <th scope="col">Bid</th>
                                                                <td
                                                                    scope="col"class="biddermaxbid{{ $auctionProduct->id }}">
                                                                    {{ isset($auctionProduct->latestBidPrice) ? number_format($auctionProduct->latestBidPrice->bid_amount,1) : number_format($auctionProduct->start_price,1) }}/lb
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col">Weight</th>
                                                                <td scope="col">{{ $auctionProduct->weight }}lbs
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col" class="totalliabilitytext{{ $auctionProduct->id }}">Total Liability</th>
                                                                <td scope="col"
                                                                    class="totalliability{{ $auctionProduct->id }}">
                                                                    {{ isset($auctionProduct->latestAutoBidPrice->bid_amount) ? number_format($auctionProduct->latestAutoBidPrice->bid_amount * $auctionProduct->weight,1) : number_format($auctionProduct->weight * $finalIncSinglebid,1) }}
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
                    <div class="table-responsive">
                        <table class="table table-responsive auctiontable">
                            <thead>
                                <tr>
                                    <th scope="col">Rank</th>
                                    <th scope="col" >Jury Score</th>
                                    <th scope="col" >Your Score</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Weight</th>
                                    <th scope="col">Process</th>
                                    <th scope="col">Genetics</th>
                                    <th scope="col" >Current Bid</th>
                                    <th scope="col" >Your Liability</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">High Bidder</th>
                                    <th scope="col">Time Left</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total_liability = 0; @endphp
                                @foreach ($auctionProducts as $auctionProduct)
                                    @php
                                        $isEmpty = sizeof($singleBids);
                                    @endphp
                                    <tr @if (isset($auctionProduct->singleBidPricelatest->user_id) && $auctionProduct->singleBidPricelatest->user_id == Auth::user()->id) {{ '' }} @else style="display:none;" @endif
                                        class="tr-bb text-center liabilitybidcollapse{{ $auctionProduct->id }}"
                                        @if (isset($auctionProduct->singleBidPricelatest->user_id) && $auctionProduct->singleBidPricelatest->user_id == Auth::user()->id) style="background: #DBFFDA;" @endif>
                                        <td class="fw-bold"><i class="fa fa-star" aria-hidden="true"></i>{{ $auctionProduct->rank }}</td>
                                        <td class="fw-bold">{{$auctionProduct->jury_score}}</td>
                                        <td>--</td>
                                        <td>{{ $auctionProduct->size }}</td>
                                        <td class="fw-bold">{{ $auctionProduct->weight }}/lb</td>
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
                                        @if ($products->genetic_id == '1')
                                        <td>Yemenia</td>
                                        @elseif ($products->genetic_id == '2')
                                            <td>Bourbon</td>
                                        @else
                                            <td>SL28</td>
                                        @endif
                                        @endforeach
                                        <td>
                                            <div style="display: flex; align-items:center; gap:10px;">
                                                <span
                                                    class="bidData1{{ $auctionProduct->id }}">${{ isset($auctionProduct->latestBidPrice) ? number_format($auctionProduct->latestBidPrice->bid_amount,1) : number_format($auctionProduct->start_price,1) }}/lb</span>

                                            </div>
                                        </td>
                                        @php
                                            if (isset($auctionProduct->singleBidPricelatest)) {
                                                if ($auctionProduct->singleBidPricelatest->user_id == Auth::user()->id) {
                                                    $datavalue = isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount * $auctionProduct->weight : $auctionProduct->start_price * $auctionProduct->weight;
                                                    $total_liability = $total_liability + $datavalue;
                                                }
                                            }
                                        @endphp
                                        <td class="liability{{ $auctionProduct->id }}">
                                            ${{ isset($auctionProduct->latestBidPrice) ? number_format($auctionProduct->latestBidPrice->bid_amount * $auctionProduct->weight,1) : number_format($auctionProduct->start_price * $auctionProduct->weight,1) }}/lb
                                        </td>

                                        @foreach ($auctionProduct->products as $products)
                                        <td class="fw-bold text-underline"> <a class="openbtn openSidebar"data-id="{{ $auctionProduct->id }}"> {{$products->product_title}} </a></td>

                                            {{-- @if ($products->pro_lot_type == '1')
                                                <td>Farmer Lot</td>
                                            @else
                                                <td>Community Lot</td>
                                            @endif --}}
                                        @endforeach
                                        @if (isset($auctionProduct->singleBidPricelatest))
                                            @foreach ($auctionProduct->singleBidPricelatest->user as $userData)
                                                <td class="auctionpaddleno{{ $auctionProduct->id }}">
                                                    {{ $userData->paddle_number }}@if (isset($auctionProduct->singleBidPricelatest->user_id) && $auctionProduct->singleBidPricelatest->user_id == Auth::user()->id)
                                                    @endif
                                                </td>
                                            @endforeach
                                        @else
                                            <td class="auctionpaddleno{{ $auctionProduct->id }}">---</td>
                                        @endif
                                        <td>
                                            <div style="display: flex;">
                                                <span class="waiting{{ $auctionProduct->id }}">
                                                    @if (isset($auctionProduct->openCheck) || isset($auctionProduct->openCheckautobid))
                                                        Open
                                                    @else
                                                        Awaiting Bid
                                                    @endif
                                                </span>
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
                                <tr class="finalliabilitytr">
                                    <th >Total Liability</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="finalliability">${{ number_format($total_liability,1)}}/lb</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
              <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="sidebar-container">
                    <div class="lot-header">
                        <h3 class="rank"></h3>
                            <h3 class="juryscore"></h3>
                            <h5 class="name"></h5>
                            <h5 class="code"></h5>
                    </div>
                    <hr>
                    <div class="lot-description">
                        <p>LOT SIZE: <span class="size"></span></p>
                        <p>CURRENT BID: <span class="currentbid"></span></p>
                        <p>TOTAL VALUE: <span class="totalvalue"></span></p>
                        <hr>
                        <p>WINNING BIDDER: <span class="paddleno"></span></p>
                    </div>
                    <div class="lot-featured-img">
                        <img class="img-status">
                        <input type="hidden" name="image-source"
                        value="{{asset('/public/images/product_images/')}}"
                        id="image-source" />
                    </div>
                    <div class="lot-description">
                        <p>PROCESS: <span class="proprocess"></span></p>
                    </div>
                    <div class="lot-genetis">
                        <h3>GENETICS <span class="genetics"></span></h3>

                    </div>

                    <div class="moreBtn"></div>
                </div>
            </div>
            {{-- <div id="mySidebar" class="sidebar">
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
            </div> --}}

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
    $("#signup-for-newsletter").on("click", function() {
        $("#newsltterModel").modal("show");
    });

    /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
    function openNav() {
        document.getElementById("mySidebar").style.width = "500px";
        document.getElementById("main").style.marginLeft = "500px";
    }

    /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft ="0";
    }
</script>
<script type="text/javascript">
    $(document).ready(function(e) {
        //OpenSidebar
        $(".openSidebar").click(function() {
            var id = $(this).attr('data-id');
            $.ajax({
                url: "{{ route('opensidebar') }}",
                method: 'POST',
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    console.log(response);
                    var rank       = response.rank;
                    var juryscore  = response.jury_score;
                    var name       = response.products[0].product_title;
                    var code       = response.products[0].sample;
                    var size       = response.size;
                    var currentbid = {{isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount : $auctionProduct->start_price }}
                    var totalvalue = {{ isset($auctionProduct->latestBidPrice) ? $auctionProduct->latestBidPrice->bid_amount * $auctionProduct->weight : $auctionProduct->start_price * $auctionProduct->weight }}
                    var paddleno   = $('.paddleno'+id).html();
                    var process    = response.products[0].pro_process;
                    var genetics   = response.products[0].genetic_id;
                    var image      = response.winning_images[0].image_1;
                    var url        = '{{ route("productsidebar", ":id") }}';
                    url            = url.replace(':id',rank);
                    $(".weight").html(response.weight);
                    $(".rank").html('#'+rank);
                    $(".juryscore").html(juryscore);
                    $(".name").html(name);
                    $(".code").html(code);
                    $(".size").html(size+'LBS');
                    $(".currentbid").html('$'+currentbid.toLocaleString('en-US'));
                    $(".totalvalue").html('$'+totalvalue.toLocaleString('en-US'));
                    $(".paddleno").html(paddleno);
                    if (genetics == 1)
                    {
                        $(".genetics").html('Yemenia');
                    }
                    else if(genetics == 2)
                    {
                        $(".genetics").html('Bourbon');
                    }
                    else
                    {
                        $(".genetics").html('SL28');
                    }
                    if (process == 1)
                    {
                        $(".proprocess").html('Natural');
                    }
                    else if(process == 2)
                    {
                        $(".proprocess").html('Slow Dried');
                    }
                    else
                    {
                        $(".proprocess").html('Alchemy');
                    }
                    if (response.products[0].pro_lot_type == 1) {
                        $(".lotName").html('Farmer Lot');
                    } else {
                        $(".lotName").html('Community Lot');
                    }
                    $(".score").html(response.jury_score);
                    var source = $("#image-source").val();
                    var res = source.concat('/'+image);
                    $('.img-status').attr('src', res);
                    $(".moreBtn").html(
                        '<a href="'+url+'" target="blank"><button >More Information</button></a>'
                        )
                    document.getElementById("mySidebar").style.width = "450px";
                },
                error: function(error) {
                    console.log(error)
                }
            });
        });
        //start bid
        $(".startBid").click(function() {
            var id = $(this).attr('data-id');
            if ($(".changetext" + id).text() == "Bid") {
                $(".changetext" + id).text("Close");
                $(".changetext" + id).addClass("changebuttontext");
            } else {
                $(".changetext" + id).text("Bid");
            }
        });
        //userscore save
        $(".yourscore").keypress(function (e) {
            if($(this).html() == "---")
            {
             $(this).html("");
            }
            if (String.fromCharCode(e.keyCode).match(/[^0-9]/g)) return false;
        });
        $(".yourscore").focusout(function(e) {
            e.preventDefault();
            var id    = $(this).attr('data-id');
            let value = $(this).html();
            $.ajax({
                url: "{{ route('saveyourscore') }}",
                method: 'POST',
                data: {
                    id: id,
                    value:value,
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    console.log(response);

                },
                error: function(error) {
                    console.log(error)
                }
            });

        });
        $(".singlebid").on("click", function(e) {
            e.preventDefault();
            var id                = $(this).attr('data-id');
            var singlebidamount   = $('.nextincrement' + id).html();
            swal({
                title: `Confirm  Bid` + singlebidamount +`?`,
                // text: "You will remain highest bidder until your limit reached.",
                type        : "error",
                buttons     : true,
                dangerMode  : true,
            }).then((result) => {
                if (result) {
            $.ajax({
                url: "{{ route('singlebiddata') }}",
                async: false,
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
                    var finaltotalliability = response.finaltotalliability;
                    $('.errorMsgAutoBid' + id).html('');
                    $('.errorMsgAutoBid' + id + id).html('');
                    $(".totalliabilitytext" + id).html('Total Liability')
                    if (bidPrice > autoBidmax) {
                        $('.alertMessage' + id).html('<p>Your $' + bidPrice +
                            '/lb Bid is outed.</p>');
                    } else {
                        $('.alertMessage' + id).html('<p>Your $' + bidPrice +
                            '/lb Bid is confirmed.</p>');
                    }
                    // $(".autobidamount" + id).addClass("mt-1");
                    // $(".autobidamount" + id).removeClass("mb-1");
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
                        "finaltotalliability"    : finaltotalliability,
                        // "bidderMaxBid":bidderMaxBid,
                    });
                },
                error: function(error) {
                    console.log(error)
                }
            });
          }
        });
            $(".AutoSingleBidClick" + id).css("display", "block");
        });
        //Autobid
        $(".autobid").on("click", function(e) {
            e.preventDefault();
            $('.errorMsgAutoBid' + id).html('');
            var id              = $(this).attr('data-id');
            var currentBidPrice = $('.bidData1' + id).html();
            var autobidamount   = $('.autobidamount' + id).val();
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
                            async: false,
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
                                if (response.message !== null) {
                                    $('.errorMsgAutoBid' + id).html('');
                                    $('.errorMsgAutoBid' + id + id).html('');
                                    $('.errorMsgAutoBid' + id + id).html(response
                                        .message);
                                } else {
                                    var latestAutoBidId = response.id;
                                    var bidPrice = response.bid_amountNew;
                                    var bidID = response.auction_product_id;
                                    var increment = response.bidIncrement;
                                    var paddleNo = response.userPaddleNo;
                                    var nextIncrement = +increment + +bidPrice;
                                    var outbid = response.outAutobid;
                                    var autobidUserID = response.bidder_user_id;
                                    var bidderLiablity = response.liablity;
                                    var bidderID = response.user_id;
                                    var bidderMaxBid = response.bidderMaxAmount;
                                    var userbidAmount   = response.bid_amount;
                                    var totalAutoBidLiability = response.totalAutoBidLiability;
                                    $('.errorMsgAutoBid' + id).html('');
                                    $(".bidcollapse" + bidID).addClass(
                                        "changecolor");
                                    $(".liabilitybidcollapse" + bidID).addClass(
                                        "changecolor");
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
                                        "latestAutoBidId": latestAutoBidId,
                                        'id': id,
                                        "bidID": bidID,
                                        'user_id': response.user_id,
                                        "userbidAmount":userbidAmount,
                                        "totalAutoBidLiability": totalAutoBidLiability,
                                    });
                                    $('.errorMsgAutoBid' + id).html('');
                                    $('.errorMsgAutoBid' + id + id).html('');
                                    $('.errorMsgAutoBid' + id + id).html(
                                        '<p>Current autobid is $' +
                                        autobidamount +
                                        ' /lb.{<a href="javascript:void(0)" class="removeAutoBID" data-id=' +
                                        id + '>Remove</a>}</p>');
                                    $('.autobidamount' + id).val('');
                                    $('.alertMessage' + id).html('');
                                    $(".singlebidClass" + id).css("display",
                                         "none");
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
            $(".AutoSingleBidClick" + id).css("display", "block");
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
                            console.log(response);
                            var auction_product_id = response.auction_product_id;
                            var outbid = response.outAutobid;
                            if (outbid == 0) {
                                $('.errorMsgAutoBid' + id).html('');
                                $('.errorMsgAutoBid' + id + id).html('');
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
</script>
<script>
    var total = 0;
    var interval;
    var empty = '{{ $isEmpty }}';
    socket.on('auto_bid_updates', function(data) {

        // $(".waiting" + data.bidID).html('Open');
        $(".paddleno" + data.bidID).html(data.paddleNo);
        $(".userbid" + data.bidID).css("color", "black");

        $(".userbid" + data.bidID).html('$' + data.userbidAmount.toLocaleString('en-US') + '/lb');
        $(".totalliabilitytext" + data.bidID).html('Maximum Liability')
         $(".totalliability" + data.bidID).html('$' + data.totalAutoBidLiability.toLocaleString('en-US') + '/lb');

        // if(data.user_id == {{Auth::user()->id}})
        // {
        //     $('.errorMsgAutoBid' + data.id).html('');
        //     $('.errorMsgAutoBid' + data.id + data.id).html('');
        //     $('.errorMsgAutoBid'+ data.id + data.id ).html('<p>Current autobid is $'+ data.autobidamount +' /lb.{<a href="javascript:void(0)" class="removeAutoBID" data-id='+data.id+'>Remove</a>}</p>');
        // }
    });
    socket.on('auto_bid_delete', function(data) {
        $('.errorMsgAutoBid' + data.auction_product_id).html('');
        $(".autobidamount" + data.auction_product_id).removeClass("mb-2");
        $('.errorMsgAutoBid' + data.auction_product_id + data.auction_product_id).html('');
        $(".bidcollapse" + data.auction_product_id).removeClass("changecolor");
        var weight = $("#auctionWeight").val();
        var finalIncSinglebid = $("#finalIncSinglebid").val();
        var total = 0;
         var total = (finalIncSinglebid * weight);
        $(".totalliability" + data.auction_product_id).html('$' + total.toLocaleString('en-US') + '/lb');
        $(".AutoSingleBidClick" + data.auction_product_id).css("display", "none");
    });
    socket.on('add_bid_updates', function(data) {
        if (data.outbidresponse == 0 && data.autobidUserID == {{ Auth::user()->id }}) {
            $('.errorMsgAutoBid' + data.bidID).hide();
            $('.errorMsgAutoBid' + data.bidID + data.bidID).html('');
            $(".autobidamount" + data.bidID).addClass("mb-2");
            $(".singlebidClass" + data.bidID).css("display", "block");
            $(".autobidClass" + data.bidID).css("display", "block");
            $(".autobidClass" + data.bidID).css("margin-top", "-53px");
            $(".autobidClass" + data.bidID).css("margin-left", "158px");
            $(".bidcollapse" + data.bidID).removeClass("changecolor");
            $('.errorMsgAutoBid' + data.bidID + data.bidID).html('You lost your Bid is Outed.');
        }
        if (data.winningBidder == {{ Auth::user()->id }}) {
            total = total;
            // $(".bidcollapse"+data.bidID).removeClass("changecolor");
            $(".liabilitybidcollapse" + data.bidID).show();
            $(".finalliabilitytr").show();
            $(".userbid" + data.bidID).css("color", "black");
            $(".bidcollapse" + data.bidID).addClass("changecolor");
            $(".liabilitybidcollapse" + data.bidID).addClass("changecolor");
            $(".auctionpaddleno" + data.bidID).html(data.paddleNo);
        } else if (data.winningBidder != undefined) {
            total = 0;
            $(".liabilitybidcollapse" + data.bidID).hide();
            $(".bidcollapse" + data.bidID).removeClass("changecolor");
            $(".userbid" + data.bidID).css("color", "#e78460");
        }
        if (data.latestSingleBidUser == {{ Auth::user()->id }}) {
            $(".singlebidClass" + data.bidID).attr("disabled", true);
            $(".singlebidClass" + data.bidID).css('background', '#a6a6a6');
            $(".singlebidClass" + data.bidID).css('color', '#ffffff');
        }
       else {
            $(".singlebidClass" + data.bidID).attr("disabled", false);
            $(".singlebidClass" + data.bidID).css('background', '#143D30');
        }
        if (data.bidAmountUser == {{ Auth::user()->id }}) {
            $(".userbid" + data.bidID).html('$' + data.userBidAmount.toLocaleString('en-US') + '/lb');
        }
        if (data.liabiltyUser == {{ Auth::user()->id }}) {
            total = total + data.liability;
            $(".liability" + data.bidID).html('$' + data.liability.toLocaleString('en-US') + '/lb');
            $(".finalliability").html('$' + data.finaltotalliability.toLocaleString('en-US') + '/lb');
        }

        else
        {
            var liablity            =   $(".liability" + data.bidID).html();
            var resliablity         =   parseFloat(liablity.replace(/[^\d\.]*/g, ''));
            var totalliabilty       =   $(".finalliability").html();
            var restotalliabilty    =   parseFloat(totalliabilty.replace( /[^\d\.]*/g, ''));
            var final               =   restotalliabilty-resliablity;
            $(".finalliability").html('$'+ final.toLocaleString('en-US') + '/lb');

        }
        if (data.checkTimer == 0) {
            window.empty = data.checkTimer;
            resetTimer(data);
        }
        // $(".waiting" + data.bidID).html('Open');
        // $(".bidcollapse" + data.bidID).addClass("changecolor");
        $(".bidData1" + data.bidID).html('$' + data.singleBidammounttesting.toLocaleString('en-US') + '/lb');
        $(".nextincrement" + data.bidID).html('$' + data.nextIncrement.toLocaleString('en-US'));
        $(".increment" + data.bidID).html('$' + data.increment.toLocaleString('en-US'));
        $(".paddleno" + data.bidID).html(data.paddleNo);
        $(".biddermaxbid" + data.bidID).html('$' + data.singleBidammounttesting.toLocaleString('en-US') +
            '/lb');
        $(".totalliability" + data.bidID).html('$' + data.bidderLiablity.toLocaleString('en-US') + '/lb');

    })

    function resetTimer(data) {
        var timer_text = "";
        var hours = 0;
        var days = 0;
        @php
            $isEmpty = sizeof($singleBids);
        @endphp

        if ("{{ $auction->auctionStatus() }}" == "active") {
            @php
            $date_a = new DateTime($auction->endTime);
            $date_b = new DateTime(date('Y-m-d H:i:s'));
            $date_c = new DateTime($auction->startDate);

            $interval   = date_diff($date_a,$date_b);
            $interva13  = date_diff($date_b,$date_c);

            $interval2  = $interval->format('%i:%s');
            $interval3  = $interva13->format('%d:%h:%i:%s');
            @endphp
            if (data && data.checkTimer == 0) {
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
        } else if ("{{ $auction->auctionStatus() }}" == "ended") {

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
                window.location = window.location.href + "?ended=1"; //location.reload();
            }
            if (timer.length > 2) {
                timer2 = days + ':' + hours + ':' + minutes + ':' + seconds;
            } else {
                timer2 = minutes + ':' + seconds;
            }
        }, 1000);
    }
    $(function() {
        resetTimer();
    })
</script>

</html>

