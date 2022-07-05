<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best of Yemen Auction 2022</title>
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
        var socket = io('http://localhost:5002');
        // var socket = io('<?= env('SOCKETS') ?>');
    </script>

    <style>
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
            .auctiontable tbody tr td
            {
                font-family: 'Playfair Display';
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
                line-height: 29px;
                /* text-align: center; */
                color: #000000;
            }
            .auctiontabs a.active
            {
                background: #D1AF69 !important;
                border-width: 1px 1px 0px 1px;
                border-style: solid;
                border-color: #9C9C9C;
                border-radius: 10px 10px 0px 0px;
            }
            .changecolor
            {
                background: #FFFEA2;
                border-width: 1px 0px;
                border-style: solid;
                border-color: #9C9C9C;
            }
            .changecolorred
            {
                background:red;
                border-width: 1px 0px;
                border-style: solid;
                border-color: #9C9C9C;
            }
            .changebuttontext
            {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
                line-height: 25px;
                /* identical to box height */
                color: #FFFFFF;
            }
            .alertmsg
            {
                background: #DBFFDA;
                margin-top: 120px;
            }
            .errormsgautobid
            {
                background: #DBFFDA;
                margin-top: 12px;
            }
            .liabilitytable thead
            {
                box-sizing: border-box;
                background: #E5E5E5;
                border-width: 1px 0px;
                border-style: solid;
                border-color: #9C9C9C;

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

        .alertmsg {
            background: #DBFFDA;
            margin-top: 120px;
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
    <div class="row">
        <div class="col-2 ">
            <ul class="nav navbar-nav float-right">
                <li class="dropdown dropdown-user nav-item">
                    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                        @php
                            $user = Auth::user();
                        @endphp
                        <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">
                                {{ Str::upper($user->name) }}</span></div><span><img class="round"
                                src="../../../public/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar"
                                height="40" width="40"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('logout') }}"
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
    <div class="row">
        <div class="col-lg-12 pb-2 text-center section-4-img">
            <img src="./images/LOGO_0003_Vector-Smart-Object 1.png" alt="">
        </div>
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
                                <td>Rank{{ $auctionProduct->rank }}</td>
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
                                        <span class="bidData1{{ $auctionProduct->id }}">${{$auctionProduct->latestBidPrice->bid_amount ?? $auctionProduct->start_price}}/lb</span>
                                        @if ($user)
                                        <a class=" btn btn-primary accordion-toggle collapsed startBid changetext{{$auctionProduct->id}}"  data-id="{{ $auctionProduct->id }}" id="accordion1"
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
                                                    <form action="{{ url('/accept-agrements') }}" method="POST"
                                                        autocomplete="off">
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
                                                                    target="_blank">Terms And Conditions.</a></label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="agreement" name="bid_agrement_id" value="3"
                                                                required>
                                                            <label for="agreement">I've read and agree to the <a
                                                                    href="{{ url('/bid_agreement') }}"
                                                                    target="_blank">Bid Agreement.</a></label>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-primary" type="submit">Proceed For
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
                                                    <div class="input-group mb-3" style="justify-content: flex-end;">
                                                        <p class="mr-1 increment{{ $auctionProduct->id }}">
                                                            @php
                                                                //increment in singlebid price
                                                                $incPriceSinglebid               =  $auctionProduct->latestBidPrice->bid_amount ?? $auctionProduct->start_price;
                                                                $bidLimitSinglebid               =   App\Models\Bidlimit::where('min','<',$incPriceSinglebid)->orderBy('min','desc')->limit(1)->get();
                                                                $bidIncrementSinglebid           =   $bidLimitSinglebid[0]->increment ?? '';
                                                                $finalIncSinglebid               =   $incPriceSinglebid + $bidIncrementSinglebid;
                                                            @endphp
                                                            ${{number_format($finalIncSinglebid,1)}}
                                                        </p>
                                                        <div>
                                                            <button class="btn btn-success singlebid singlebidClass{{$auctionProduct->id}}"
                                                                id="{{ $auctionProduct->id }}"
                                                                href="javascript:void(0)"
                                                                data-id="{{ $auctionProduct->id }}" style="border-radius: 5px;">Bid Now</button>
                                                        </div>
                                                    </div>
                                                    <div id="alertMessage"
                                                        class="alertmsg alertMessage{{ $auctionProduct->id }}"></div>
                                                </div>
                                                <div class="col-4">
                                                    <form class="form-inline" action="" method="POST" >
                                                        @csrf
                                                            <input type="hidden" class="form-control auctionid{{$auctionProduct->id }}" value="{{$auctionProduct->auction_id}}" id="autobidamount" >
                                                          $ &nbsp;<input type="number" name="autobidamount" class="form-control autobidamount{{ $auctionProduct->id }}" id="autobidamount" style="width: 50%;" >
                                                          &nbsp;<button class="btn btn-success autobid autobidClass{{$auctionProduct->id}}"
                                                        type="submit" href="javascript:void(0)" data-id="{{ $auctionProduct->id }}">Auto Bid</button>
                                                        <div  class="errormsgautobid errorMsgAutoBid{{$auctionProduct->id}}"></div>
                                                    </form>
                                                </div>
                                                    <div class="col-4">
                                                        <table class="table mt-2">
                                                            <tr>
                                                                <th scope="col">Bid</th>
                                                                <td
                                                                    scope="col"class="bidData3{{ $auctionProduct->id }}">
                                                                    ${{ $auctionProduct->start_price }}/lb</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col">Packing Cost</th>
                                                                <td scope="col">${{ $auctionProduct->packing_cost }}/lb
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col">Weight</th>
                                                                <td scope="col">{{ $auctionProduct->weight }}lbs</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="col">Total Liability</th>
                                                                <td scope="col">$4134.50/lb</td>
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
    <section class="section-4">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 pb-2 text-center section-4-img">
                    <img src="./images/LOGO_0003_Vector-Smart-Object 1.png" alt="">
                </div>
                <div class="col-lg-12 text-center section-4-text-1">
                    <p class="time real-timer m-0"></p>
                    <p class="date">AUGUST 9<sup>th</sup> </p>
                </div>
            </div>


            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">

                </div>
                <div class="col card-display-3">
                    <div class="card bg-none text-color h-100">
                        <p class="m-0 text-start">2:00pm BST &nbsp;- London, United Kingdom</p>
                        <p class="m-0 text-start">6:00am PDT &nbsp;- LA, USA</p>
                        <p class="m-0">9:00am EDT &nbsp;&nbsp;- NY, USA</p>
                        <p class="m-0">3:00pm CEST - Amsterdam, Netherlands</p>
                        <p class="m-0">4:00pm AST &nbsp;&nbsp;- Riyadh, Saudi Arabia</p>
                        <p class="m-0">5:00pm GST &nbsp;&nbsp;- Dubai, UAE</p>
                        <p class="m-0">9:00pm HKT &nbsp;&nbsp;- Hong Kong, Hong Kong</p>
                        <p class="m-0">10:00pm JST &nbsp;&nbsp;- Tokyo, Japan</p>
                        <p class="m-0">10:00pm KST &nbsp;- Seoul, South Korea</p>
                        <p class="m-0">11:00pm AEST - Sydney, Australia</p>
                    </div>
                </div>

            </div>
            <hr class=" text-white border" style="margin-top:40px;">
            <div class="footerz">
                <div class="row text-center">
                    <div class="col-12 my-2">
                        <span class="text-color-size">For the latest news and updates</span>
                    </div>
                    <div class="col-12">
                        <a type="button" class="btn btn-outline-light" id="signup-for-newsletter"
                            href="javascript:void(0)">SIGN UP FOR NEWSLETTER</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="modal" tabindex="-1" role="dialog" id="newsltterModel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">SIGN UP FOR NEWSLETTER</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" placeholder="Enter Your Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" placeholder="Enter Your Email" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark">Submit</button>
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    </div>
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
        $(".startBid").click(function(){
    var id = $(this).attr('data-id');
    // $(".bidcollapse"+id).addClass("changecolor");
    if($(".changetext"+id).text()=="Bid"){
                        $(".changetext"+id).text("Close");
                        $(".changetext"+id).addClass("changebuttontext");
                    }
                    else {
                        $(".changetext"+id).text("Bid");
                    }
  });
        $(".singlebid").on("click", function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            $(".waiting"+id).html('Open');
            $(".bidcollapse"+id).addClass("changecolor");
            $.ajax({
                url: "{{ route('singlebiddata') }}",
                method: 'POST',
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    console.log(response);
                    var bidPrice        =   response.bid_amount;
                    var bidID           =   response.auction_product_id;
                    var increment       =   response.bidIncrement;
                    var paddleNo        =   response.user_paddleNo;
                    var nextIncrement   =   +increment + +bidPrice;
                    var outbid          =   response.outAutobid;
                    var userID          =   response.autoBidUserID;
                    $('.alertMessage'+id).html('<p>Your $'+ bidPrice +'/lb Bid is confirmned.</p>');
                    socket.emit('add_bid_updates', {
                        "singleBidammounttesting": bidPrice,
                        "bidID": bidID,
                        "increment":increment,
                        "paddleNo":paddleNo,
                        "nextIncrement":nextIncrement,
                        "outbidresponse":outbid,
                        "userID":userID,
                    });

                    //
                },
                error: function(error) {
                    console.log(error)
                }
            });

        });
        //Autobid
        $(".autobid").on("click", function(e) {
            e.preventDefault();
            $('.errorMsgAutoBid'+id).html('');
            $(".waiting"+id).html('Open');
            var id               = $(this).attr('data-id');
            var currentBidPrice  = $('.bidData1'+id).html().replace(/[^0-9]/gi, '');
            var autobidamount    = $('.autobidamount'+id).val();
            if(autobidamount <= currentBidPrice)
            {
                $('.errorMsgAutoBid'+id).html('<p>Please enter the amount greater than current bid amount.</p>');
                $('.autobidamount'+id).val('');
            }
            else
            {
            swal({
            title: `Confirm Auto Bid $` + autobidamount + `?`,
            text: "You will remain highest bidder until your limit reached.",
            type: "error",
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if(result)
            {
                var auctionid   = $('.auctionid'+id).val();
                $.ajax({
                    url: "{{ route('autobiddata') }}",
                    method: 'POST',
                    data: {
                        id: id,
                        autobidamount:autobidamount,
                        auctionid:auctionid,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        console.log(response);
                        $('.errorMsgAutoBid'+id).html('<p>Current autobid is $'+ autobidamount +' /lb.{<a href="javascript:void(0)" class="removeAutoBID" data-id='+id+'>Remove</a>}</p>');
                        $('.autobidamount'+id).val('');
                        $(".singlebidClass"+id ).css("display", "none");
                        $(".autobidClass"+id ).css("display", "none");
                        // var bidPrice    =   response.bid_amount;
                        //
                    },
                    error: function(error) {
                        console.log(error)
                    }
                });
            }
            else {

                }

                });
            }
        });
            //remove autobid
            $(document).on("click",'.removeAutoBID', function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            swal({
            title: `Remove Auto Bid ?`,
            // text: "You will remain highest bidder until your limit reached.",
            type: "error",
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if(result)
            {
                $.ajax({
                    url: "{{ route('removeautobid') }}",
                    method: 'POST',
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        console.log(response);
                        var outbid  =   response.outAutobid;
                        if(outbid == 0)
                        {
                            $('.errorMsgAutoBid'+id).html('');
                            $(".singlebidClass"+id ).css("display", "block");
                            $(".autobidClass"+id ).css("display", "block");
                        }
                    },
                    error: function(error) {
                        console.log(error)
                    }
                });
            }
            else
            {
                swal('Your bid is safe');
            }
        })
            });
        })
</script>
<script>
    socket.on('add_bid_updates', function(data) {
        if(data.outbidresponse == 0 && data.userID == {{Auth::user()->id}})
        {
            $('.errorMsgAutoBid'+data.bidID).html('');
            $(".singlebidClass"+data.bidID ).css("display", "block");
            $(".autobidClass"+data.bidID ).css("display", "block");
            $(".bidcollapse"+data.bidID).addClass("changecolorred");
            $('.errorMsgAutoBid'+data.bidID).html('You lost your Bid is Outed.');
        }
        $(".bidData1" + data.bidID).html('$' + data.singleBidammounttesting.toLocaleString('en-US')+'/lb');
        $(".increment" + data.bidID).html('$' + data.nextIncrement.toLocaleString('en-US'));
        $(".bidData3" + data.bidID).html('$' + data.singleBidammounttesting.toLocaleString('en-US') + '/lb');
        $(".paddleno" + data.bidID).html(data.paddleNo);
    })
</script>

</html>
