@extends('admin.layout.default')
@section('title', 'All Transection')
@section('content')
    <style>
        .errormsgautobid {
            background: #DBFFDA;
            margin-top: 0px;
        }

        .table thead th {
            font-size: 16px;
            text-align: center;
        }

        .table tr td {
            vertical-align: -webkit-baseline-middle !important;
            margin: 5px;
            text-align: center;
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

        .heading-table-auction {
            font-family: 'Montserrat' !important;
            font-size: 27px !important;
            font-weight: 800 !important;
            line-height: 32px !important;
            letter-spacing: 0.2em !important;
            text-align: center;
            color: rgba(231, 132, 96, 1) !important;
            padding: 20px !important;
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

        .table th td {
            margin-left: 42px;
            align-items: !important end;
            display: !important flex;
        }

        .publishWinner {
            display: none;
        }

        #publish_auction_winners {
            width: fit-content;
            float: right;

        }
    </style>

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="modal fade" id="auction_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
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
        <div class="modal fade" id="user_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><b>User Detail</b></h5>
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button> --}}
                    </div>
                    <div class="modal-body">
                        <b>Name</b>&ensp;&ensp;&ensp;&ensp; : <span class="col-md-5" id="name"></span><br><br>
                        <b>Email</b>&ensp;&ensp;&ensp;&ensp; : <span class="col-md-5" id="email"></span><br><br>
                        <b>Phone No</b> : <span class="col-md-5" id="phone"></span><br><br>
                        <b>Company</b> : <span class="col-md-5" id="company"></span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="content-header row">
                @if (auth()->user()->id == 3)
                    <div class="col-12 custom_btn_align mb-1">
                        <a class="btn btn-primary waves-effect waves-light resetauction"@if (isset($auction) && $auction->is_hidden == 1) style="display:none;" @endif
                            data-id="{{ $auction->id }}" id="resetauction">Reset Timer</a>
                        <a class="btn btn-primary waves-effect waves-light endauction"
                            @if (isset($auction) && $auction->is_hidden == 1) style="display:none;" @endif data-id="{{ $auction->id }}"
                            id="endauction">End Auction</a>

                        <a class="btn btn-primary waves-effect waves-light @if (isset($auction) && $auction->is_hidden == 0) publishWinner @endif"
                            data-id="{{ $auction->id }}" id="publish_auction_winners">Publish
                            Winners</a>

                    </div>
                @endif

                <div class="content-header-left col-md-9 col-lg-12 mb-2">
                    <nav>
                        <div class="col-4">
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">Auction</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Liability</a>
                                <a class="nav-item nav-link" id="nav-winner-tab" data-toggle="tab" href="#nav-winner"
                                    role="tab" aria-controls="nav-winner" aria-selected="false">Winners</a>
                            </div>
                        </div>
                    </nav>
                    {{-- @if (isset($auction) && $auction->startTime != '') --}}

                    {{-- @endif --}}

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body card-dashboard col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table" id="auction-table">
                                                <thead class="table-heading">
                                                    <tr>
                                                        {{-- <th>Id</th> --}}
                                                        <th>Rank</th>
                                                        <th>Product</th>
                                                        <th>Winning Bid</th>
                                                        <th>Paddle No</th>
                                                        {{-- <th>Reserved Price</th> --}}
                                                        <th>Liability</th>
                                                        <th>Auto Bid</th>
                                                        {{-- <th>Bid History</th> --}}
                                                        {{-- <th>Action(s)</th> --}}
                                                        <th></th>
                                                        {{-- <th>Group Bid</th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i = 0;
                                                    @endphp
                                                    @if (isset($auction_products))
                                                        @foreach ($auction_products as $key1 => $auction)
                                                            @foreach ($auction->products as $key => $pro)
                                                                @if ($key1 == 0)
                                                                    <tr>
                                                                        <td colspan="14">
                                                                            <h5 class="inner-data heading-table-auction">
                                                                                NATURALS AND DEEP FERMENTATION</h5>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                                @if ($key1 == 18)
                                                                    <tr>
                                                                        <td colspan="14">
                                                                            <h5 class="inner-data heading-table-auction">
                                                                                Alchemy</h5>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                                <tr id="{{ ++$i }}" class="mb-1">

                                                                    <td class="">{{ $auction->rank }}
                                                                    </td>
                                                                    <td id="product{{ $auction->id }}" type="button"
                                                                        style="width:100%;color:white;height:40px;text-align: center; line-height: 65px; margin-bottom:18px"
                                                                        class="btn product"
                                                                        data-auctionProductId="{{ $auction->id }}"
                                                                        data-toggle="modal" data-target="#auction_model">
                                                                        <b>
                                                                            <h6 style="min-width: max-content;">
                                                                                <b>{{ $pro->product_title }}</b>
                                                                            </h6>
                                                                        </b>
                                                                    </td>
                                                                    <td id="price{{ $auction->id }}" allign="right">
                                                                        ${{ isset($auction->latestBidPrice) ? $auction->latestBidPrice->bid_amount : $auction->start_price }}lbs
                                                                    </td>
                                                                    @if (isset($auction->latestBidPrice->user))
                                                                        <td id="paddleNo{{ $auction->id }}"
                                                                            allign="right" class="user"
                                                                            data-toggle="modal" data-target="#user_model"
                                                                            data-userId="{{ $auction->latestBidPrice->user->first()->id }}">
                                                                            <b><a
                                                                                    href="#">{{ $auction->latestBidPrice->user->first()->paddle_number }}</a></b>
                                                                        </td>
                                                                    @else
                                                                        <td id="paddleNo{{ $auction->id }}"
                                                                            allign="right" class="user"
                                                                            data-toggle="modal" data-target=""
                                                                            data-userId="0">
                                                                            ---
                                                                        </td>
                                                                    @endif
                                                                    {{-- <td allign="right">
                                                                    {{ $auction->reserve_price }}
                                                                </td> --}}
                                                                    <input type="hidden" id="pweight"
                                                                        value="{{ $auction->weight }}">
                                                                    <td allign="right" id="liability{{ $auction->id }}">
                                                                        @php
                                                                            $bidprice = isset($auction->latestBidPrice) ? '$' . $auction->weight * $auction->latestBidPrice->bid_amount : '---';
                                                                        @endphp
                                                                        {{ $bidprice }}
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

                                                                        <input type="text"
                                                                            value="{{ $latestAutoBidPrice ?? '0' }}"
                                                                            name="autoBidAmount"
                                                                            id="autoBidAmount{{ $auction->id }}"
                                                                            min="0" pattern="[0-9]{10}"
                                                                            maxlength="10"
                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                                                            style="width: 80px; border-radius : 1px;padding:4px; border: 1px solid #d1af69;"
                                                                            {{ isset($latestAutoBidPrice) ? '' : 'disabled' }}>
                                                                        <input type="hidden"
                                                                            id="userId{{ $auction->id }}"
                                                                            value="{{ isset($auction->latestAutoBidPrice) ? $auction->latestAutoBidPrice->user_id : '--' }}">
                                                                        {{-- <button data-id="{{ $auction->id }}"
                                                                        id="editbtn{{ $auction->id }}"
                                                                        {{ isset($latestAutoBidPrice) ? '' : 'disabled' }}
                                                                        class="autobid btn btn-sm success"
                                                                        style="font-size:16px;">save </button> --}}
                                                                        <div
                                                                            class="errormsgautobid errorMsgAutoBid{{ $auction->id }}">
                                                                        </div>

                                                                    </td>
                                                                    <td>
                                                                        <button data-id="{{ $auction->id }}"
                                                                            id="editbtn{{ $auction->id }}"
                                                                            {{ isset($latestAutoBidPrice) ? '' : 'disabled' }}
                                                                            class="autobid btn btn-primary waves-effect waves-light"
                                                                            style="font-size:16px;">save </button>
                                                                    </td>
                                                                    {{-- <td><button data-id="{{ $auction->id }}"
                                                                            id="bid-{{ $auction->id }}"
                                                                            class="btn btn-primary waves-effect openGroupSidebar">
                                                                            Details </button></td> --}}

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
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table" id="auction-table">
                                                <thead>
                                                    <tr>
                                                        {{-- <td></td> --}}
                                                        <th>Rank</th>
                                                        <th>Company</th>
                                                        <th>Product Name</th>
                                                        <th>Liability</th>
                                                        {{-- <th></th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i = 0;
                                                    @endphp
                                                    @if (count($auction_products) > 0)
                                                        @foreach ($auction_products as $key1 => $auction)
                                                            @foreach ($auction->products as $key => $pro)
                                                                @if ($key1 == 0)
                                                                    <tr>
                                                                        <td colspan="14">
                                                                            <h5 class="inner-data heading-table-auction">
                                                                                NATURALS AND DEEP FERMENTATION</h5>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                                @if ($key1 == 18)
                                                                    <tr>
                                                                        <td colspan="14">
                                                                            <h5 class="inner-data heading-table-auction">
                                                                                Alchemy</h5>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                                <tr id="{{ ++$i }}">
                                                                    {{-- <td class="headerSortUp headerSortDown move">
                                                                   <a href=""></a>
                                                               </td> --}}
                                                                    {{-- <td>
                                                                   {{ isset($auction->latestBidPrice->user) ? $auction->latestBidPrice->user->first()->name : '--' }}
                                                               </td> --}}
                                                                    <td>
                                                                        {{ $auction->rank }}
                                                                    </td>
                                                                    <td>
                                                                        @php

                                                                            $user = \App\Models\User::where('id', $pro->user_id)->first();
                                                                        @endphp
                                                                        {{ $user->company ?? '' }}
                                                                    </td>
                                                                    <td>

                                                                        <h6 style="min-width: max-content;">
                                                                            {{ $pro->product_title }}
                                                                        </h6>

                                                                    </td>
                                                                    {{-- <td id="paddleNo{{ $auction->id }}{{ $auction->id }}">
                                                                   {{ isset($auction->latestBidPrice->user) ? $auction->latestBidPrice->user->first()->paddle_number : '--' }}
                                                               </td> --}}
                                                                    <td
                                                                        id="liability{{ $auction->id }}{{ $auction->id }}">
                                                                        @php
                                                                            $bidprice = isset($auction->latestBidPrice) ? '$' . $auction->weight * $auction->latestBidPrice->bid_amount : '---';
                                                                        @endphp
                                                                        {{ $bidprice }}
                                                                    </td>
                                                                </tr>
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
                        <div class="tab-pane fade" id="nav-winner" role="tabpanel" aria-labelledby="nav-winner-tab">
                            <div class="tab-pane fade auction-data table-responsive show active" id="nav-home"
                                role="tabpanel" aria-labelledby="nav-home-tab">
                                @if ($auction->is_hidden == 0)


                                    <table class="table auctiontable">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col">Rank</th>
                                                <th scope="col">Jury Score</th>
                                                <th scope="col">Weight</th>
                                                <th scope="col">Highest Bid</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Process</th>
                                                <th scope="col">Genetics</th>
                                                <th scope="col">High Bidder</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-head-border">

                                                <td colspan="14">
                                                    <h5 class="inner-data heading-table-auction">NATURAL AND DEEP
                                                        FERMENTATION
                                                    </h5>
                                                </td>
                                            </tr>
                                            @foreach ($natAuctionProducts as $auctionProduct)
                                                <tr
                                                    class="tr-bb table-pt-res text-center bidcollapse{{ $auctionProduct->id }}">
                                                    <td class="fw-bold td-res-pl">{{ $auctionProduct->rank }}</td>
                                                    <td class="fw-bold td-res-pl">{{ $auctionProduct->jury_score }}</td>
                                                    <td class="td-res-pl">{{ $auctionProduct->weight }}lbs</td>
                                                    <td class="fw-bold td-res-pl">
                                                        <div>
                                                            <span
                                                                class="bidData1{{ $auctionProduct->id }} intialinc">${{ isset($auctionProduct->highestbid) ? $auctionProduct->highestbid->bid_amount : $auctionProduct->start_price }}/lbs</span>
                                                        </div>
                                                    </td>
                                                    @foreach ($auctionProduct->products as $products)
                                                        <td class="fw-bold text-underline td-res-pl name-append"><a
                                                                class="openbtn openSidebar "data-id="{{ $auctionProduct->id }} "
                                                                data-productid="{{ $products->id }}"
                                                                data-image="{{ @$auctionProduct->auctionProductImages[0]->image }}"
                                                                data-image1="{{ @$auctionProduct->auctionProductImages[1]->image }}">
                                                                {{ $products->product_title }}
                                                            </a>

                                                        </td>
                                                    @endforeach
                                                    @foreach ($auctionProduct->products as $products)
                                                        {{-- @if ($products->pro_process == '1') --}}
                                                        <td class="td-res-pl">{{ $auctionProduct->process }}</td>
                                                        {{-- @elseif ($products->pro_process == '2')
                                                    <td class="td-res-pl">Slow Dried</td>
                                                @else
                                                    <td class="td-res-pl">Alchemy</td>
                                                @endif --}}
                                                    @endforeach
                                                    @foreach ($auctionProduct->products as $products)
                                                        {{-- @if ($products->genetic_id == '1') --}}
                                                        <td class="td-res-pl">{{ $auctionProduct->genetic }}</td>
                                                        {{-- @elseif ($products->genetic_id == '2')
                                                    <td class="td-res-pl">Bourbon</td>
                                                @else
                                                    <td class="td-res-pl">SL28</td>
                                                @endif --}}
                                                    @endforeach
                                                    @if ($auctionProduct->winnerNames)
                                                        <td style="width: 500px !important"
                                                            class="paddleno{{ $auctionProduct->id }} fw-bold td-res-pl">
                                                            <span
                                                                class="{{ $auction->is_hidden_winners == 0 ? 'name-anchors' : '' }} ">{{ $auctionProduct->winnerNames->company ?? '---' }}</span>

                                                        </td>
                                                    @elseif (isset($auctionProduct->highestbid))
                                                        @foreach ($auctionProduct->highestbid->user as $userData)
                                                            <td style="width: 500px !important"
                                                                class="paddleno{{ $auctionProduct->id }} fw-bold td-res-pl">
                                                                <span
                                                                    class="{{ $auction->is_hidden_winners == 0 ? 'name-anchors' : '' }} ">{{ $userData->company ?? '---' }}</span>
                                                                {{-- <a
                                                                class="{{ $auction->is_hidden_winners == 1 ? 'name-spans' : 'name-spans-block' }}">__</a> --}}
                                                            </td>
                                                        @endforeach
                                                    @else
                                                        <td class="paddleno{{ $auctionProduct->id }} td-res-pl">Awaiting
                                                            Bid
                                                        </td>
                                                    @endif
                                                    <td class=""> <i class="fa fa-pencil editIcon"
                                                            data-id="{{ $auctionProduct->id }}"></i></td>
                                                </tr>
                                                <tr class="hide-table-padding bid-row">
                                                    <td colspan="13">
                                                        <div id="collapseOne{{ $auctionProduct->id }}" class="collapse">
                                                            <div class="card">
                                                                <h5 class="card-header">You need to login to Bid.</h5>
                                                                <div class="card-body">
                                                                    <a href="{{ route('customer.login') }}"
                                                                        class="btn btn-success">Login</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="table-head-border">

                                                <td colspan="14">
                                                    <h5 class="inner-data heading-table-auction ">ALCHEMY</h5>
                                                </td>

                                            </tr>
                                            @foreach ($auctionProducts as $auctionProduct)
                                                <tr
                                                    class="tr-bb table-pt-res text-center bidcollapse{{ $auctionProduct->id }}">
                                                    <td class="fw-bold td-res-pl">{{ $auctionProduct->rank }}</td>
                                                    <td class="fw-bold td-res-pl">{{ $auctionProduct->jury_score }}</td>
                                                    <td class="td-res-pl">{{ $auctionProduct->weight }}lbs</td>
                                                    <td class="fw-bold td-res-pl">
                                                        <div>
                                                            <span
                                                                class="bidData1{{ $auctionProduct->id }} intialinc">${{ isset($auctionProduct->highestbid) ? $auctionProduct->highestbid->bid_amount : $auctionProduct->start_price }}/lbs</span>
                                                        </div>
                                                    </td>
                                                    @foreach ($auctionProduct->products as $products)
                                                        <td class="fw-bold text-underline td-res-pl name-append"><a
                                                                class="openbtn openSidebar "data-id="{{ $auctionProduct->id }} "
                                                                data-productid="{{ $products->id }}"
                                                                data-image="{{ @$auctionProduct->auctionProductImages[0]->image }}"
                                                                data-image1="{{ @$auctionProduct->auctionProductImages[1]->image }}">
                                                                {{ $products->product_title }}
                                                            </a>

                                                        </td>
                                                    @endforeach
                                                    @foreach ($auctionProduct->products as $products)
                                                        {{-- @if ($products->pro_process == '1') --}}
                                                        <td class="td-res-pl">{{ $auctionProduct->process }}</td>
                                                        {{-- @elseif ($products->pro_process == '2')
                                                    <td class="td-res-pl">Slow Dried</td>
                                                @else
                                                    <td class="td-res-pl">Alchemy</td>
                                                @endif --}}
                                                    @endforeach
                                                    @foreach ($auctionProduct->products as $products)
                                                        {{-- @if ($products->genetic_id == '1') --}}
                                                        <td class="td-res-pl">{{ $auctionProduct->genetic }}</td>
                                                        {{-- @elseif ($products->genetic_id == '2')
                                                    <td class="td-res-pl">Bourbon</td>
                                                @else
                                                    <td class="td-res-pl">SL28</td>
                                                @endif --}}
                                                    @endforeach
                                                    @if ($auctionProduct->winner_names)
                                                        <td style="width: 500px !important"
                                                            class="paddleno{{ $auctionProduct->id }} fw-bold td-res-pl">
                                                            <span
                                                                class="{{ $auction->is_hidden_winners == 0 ? 'name-anchors' : '' }} ">{{ $auctionProduct->winner_names->company ?? '---' }}</span>

                                                        </td>
                                                    @elseif (isset($auctionProduct->highestbid))
                                                        @foreach ($auctionProduct->highestbid->user as $userData)
                                                            <td style="width: 500px !important"
                                                                class="paddleno{{ $auctionProduct->id }} fw-bold td-res-pl">
                                                                <span
                                                                    class="{{ $auction->is_hidden_winners == 0 ? 'name-anchors' : '' }} ">{{ $userData->company ?? '---' }}</span>
                                                                <a
                                                                    class="{{ $auction->is_hidden_winners == 1 ? 'name-spans' : 'name-spans-block' }}">__</a>
                                                            </td>
                                                        @endforeach
                                                    @else
                                                        <td class="paddleno{{ $auctionProduct->id }} td-res-pl">Awaiting
                                                            Bid
                                                        </td>
                                                    @endif
                                                    <td class=""> <i class="fa fa-pencil editIcon"
                                                            data-id="{{ $auctionProduct->id }}"></i></td>
                                                </tr>
                                                {{-- <tr class="hide-table-padding bid-row">
                                            <td colspan="13">
                                                <div id="collapseOne{{ $auctionProduct->id }}" class="collapse">
                                                    <div class="card">
                                                        <h5 class="card-header">You need to login to Bid.</h5>
                                                        <div class="card-body">
                                                            <a href="{{ route('customer.login') }}"
                                                                class="btn btn-success">Login</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> --}}
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <center>
                                        <h3 class="inner-data heading-table-auction">Auction Is In Progress !
                                        </h3>
                                    </center>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" tabindex="-1" role="dialog" id="editModal">
                <form action="{{ url('/updateCompanyName') }}" method="POST">
                    @csrf
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Companies</label>
                                            <input type="hidden" name="product_id" id="auctionProductId" placeholder=""
                                                class="form-control">
                                            <input type="hidden" name="auction_id" id=""
                                                value="{{ $auction->id }}"placeholder="" class="form-control">
                                            <textarea name="companies" id="" cols="20" rows="6"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-dark">Submit</button>
                                <button type="button" id="close" class="btn btn-secondary"
                                    data-dismiss="editModal">Close</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="groupbid_sidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeGroupSidebar()">&times;</a>
                <div class="sidebar-container">
                    <div class="groupbid-sidebar">
                        <div class="grouplot-listing">
                            <h3 class="mb-2 fw-bold">Group Bidding details</h3>
                            <div class="lot-bidding-details mb-2">
                                <p><span class="fw-bold">Product: </span> Coffee</p>
                                <p><span class="fw-bold">Total Weight: </span> 147.25/lbs</p>
                                {{-- <p><span class="fw-bold">Status: </span> Preparing</p> --}}
                            </div>

                            <div class="groupbid-offers active-offers">
                                <p>Offers:</p>
                                <ul id="offers">
                                    {{-- <li> <span>29</span>
                                         <p>Paddle # 1042</p>
                                         <p>Weight: 100.00/lbs</p>
                                         <p>Amount: $23.61</p>
                                        </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>



        <script>
            function closeGroupSidebar() {

                $("#groupbid_sidebar").removeClass('sidebaropen-width');
            }

            $(".openGroupSidebar").click(function() {
                $("#groupbid_sidebar").addClass('sidebaropen-width');
                var id = $(this).attr('data-id');
                $.ajax({
                    url: "{{ route('groupbidadminsidebar') }}",
                    method: 'POST',
                    data: {
                        id: id,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        var offerData = response.OffersData;
                        console.log(offerData)
                        var i;
                        $('#offers').empty();
                        for (i = 0; i < offerData.length; ++i) {
                            var weight = offerData[i].weight / 20;
                            $('#offers').append("<li><span class='lotid'>" + offerData[i]
                                .auction_product_id + "</span><p>Amount:$" + offerData[i].amount +
                                "<br>Bags:" + weight + "</p></li>");

                        }
                    },
                    error: function(error) {
                        console.log(error)
                    }
                });
            })

            //             function showBidConfirm() {
            //     $(".bid-confirm-sec").addClass('show-bidconfirm');
            // }
            // function hideBidConfirm() {
            //     $(".bid-confirm-sec").removeClass('show-bidconfirm');
            // }

            $(document).ready(function() {
                var socket = io('<?= env('SOCKETS') ?>');
                socket.on('auto_bid_updates', function(data) {
                    var amount = (+data.autobidamount).toFixed(2);
                    var current_amount = $("#autoBidAmount" + data.id).val();
                    if (amount > current_amount) {
                        // $("#paddleno" + data.bidID).html(data.paddleNo);
                        $("#price" + data.bidID).html('$' + data.bid_amountNew + 'lbs');
                        $("#liability" + data.bidID).html('$' + data.liability);
                        $("#autoBidAmount" + data.id).val(amount);
                        $("#autobidId" + data.id).val(data.latestAutoBidId);
                        $("#userId" + data.bidID).val(data.user_id);
                        $("#paddleNo" + data.bidID).attr('data-userId', data.user_id);
                        $("#paddleNo" + data.bidID).attr('data-target', "#user_model");
                        $("#paddleNo" + data.bidID).html('<b>' + data.paddleNo + '</b>');
                        $("#paddleNo" + data.bidID + data.bidID).html('<b>' + data.paddleNo + '</b>');
                        $("#liability" + data.bidID + data.bidID).html('$' + data.liability);
                        $("#autoBidAmount" + data.id).prop('disabled', false);
                        $("#editbtn" + data.bidID).prop('disabled', false);
                    }
                });
                socket.on('auto_bid_delete', function(data) {
                    $('.errorMsgAutoBid' + data.auction_product_id).hide();
                    $("#autoBidAmount" + data.auction_product_id).val(0);
                    // $("#paddleNo" + data.auction_product_id).attr('data-userId', '0');
                    //  $("#paddleNo" + data.auction_product_id).attr('data-target', "");
                    //  $("#paddleNo" + data.auction_product_id).html('--');
                    $("#autoBidAmount" + data.auction_product_id).prop('disabled', true);
                    $("#editbtn" + data.auction_product_id).prop('disabled', true);
                });
                socket.on('add_bid_updates', function(data) {
                    $("#price" + data.bidID).html('$' + data.singleBidammounttesting + '/lbs');
                    $("#paddleNo" + data.bidID).attr('data-userId', data.latestSingleBidUser);
                    $("#paddleNo" + data.bidID).attr('data-target', "#user_model");
                    $("#liability" + data.bidID).html('$' + data.liability);
                    $("#liability" + data.bidID + data.bidID).html(data.liability);
                    $("#paddleNo" + data.bidID).html('<b>' + data.paddleNo + '</b>');
                    $("#paddleNo" + data.bidID + data.bidID).html('<b>' + data.paddleNo + '</b>');
                    $("#liability" + data.bidID + data.bidID).html('$' + data.liability);

                });

                $(".headerSortDown,.headerSortUp,.top,.bottom").click(function() {
                    var row = $(this).parents("tr:first");
                    if ($(this).is(".headerSortUp")) {
                        row.insertBefore(row.prev());
                    } else if ($(this).is(".headerSortDown")) {
                        row.insertAfter(row.next());
                    } else if ($(this).is(".top")) {
                        //row.insertAfter($("table tr:first"));
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
                            // $("#auction_model").modal("show");
                        }
                    });
                });
                //endauction
                $(".endauction").on("click", function(e) {
                    e.preventDefault();
                    var id = $(this).attr('data-id');
                    swal({
                        title: `Are You sure to End Auction ?`,
                        type: "error",
                        buttons: true,
                        dangerMode: true,
                    }).then((result) => {
                        if (result) {
                            $.ajax({
                                url: "{{ route('auctionEnd') }}",
                                async: false,
                                method: 'POST',
                                data: {
                                    id: id,
                                    _token: "{{ csrf_token() }}",
                                },
                                success: function(response) {
                                    swal('Auction is Ended');
                                    var auctionstatus = response;
                                    if (auctionstatus == 1) {
                                        $(".endauction").hide();
                                        $(".resetauction").hide();
                                    }
                                    socket.emit('add_auction_status', {
                                        "auctionstatus": auctionstatus
                                    });
                                    $('#publish_auction_winners').css('display', 'block');
                                },
                                error: function(error) {
                                    console.log(error)
                                }
                            });
                        } else {
                            swal('Your Auction is safe');
                        }
                    })
                });
                $(".publishWinner").on("click", function(e) {
                    e.preventDefault();
                    var id = $(this).attr('data-id');
                    var auctionstatus = 1;
                    swal({
                        title: `Are You sure to Publish Winners ?`,
                        type: "error",
                        buttons: true,
                        dangerMode: true,
                    }).then((result) => {
                        if (result) {
                            // alert('imran');
                            $.ajax({
                                url: "{{ route('publish-winners') }}",
                                async: false,
                                method: 'GET',
                                data: {
                                    id: id,
                                    _token: "{{ csrf_token() }}",
                                },
                                success: function(response) {
                                    swal('Auction is Ended');
                                    var auctionstatus = response;
                                    if (auctionstatus == 1) {
                                        $(".endauction").hide();
                                        $(".resetauction").hide();
                                    }
                                    socket.emit('add_auction_status', {
                                        "auctionstatus": auctionstatus
                                    });


                                },
                                error: function(error) {
                                    console.log(error)
                                }
                            });

                        } else {
                            swal('Your Auction is safe');
                        }
                    })
                });
                $(".resetauction").on("click", function(e) {
                    e.preventDefault();
                    var id = $(this).attr('data-id');
                    swal({
                        title: `Are You sure to reset Timer ?`,
                        type: "error",
                        buttons: true,
                        dangerMode: true,
                    }).then((result) => {
                        if (result) {
                            $.ajax({
                                url: "{{ route('auctionReset') }}",
                                async: false,
                                method: 'POST',
                                data: {
                                    id: id,
                                    _token: "{{ csrf_token() }}",
                                },
                                success: function(response) {
                                    swal('Timer is Reset');
                                    var timerreset = response;
                                    socket.emit('add_timer_reset', {
                                        "timerreset": timerreset
                                    });
                                },
                                error: function(error) {
                                    console.log(error)
                                }
                            });
                        } else {
                            swal('Your Auction is safe');
                        }
                    })
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
                            // $("#auction_model").modal("show");
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
                    var currentBidPrice = ($('#price' + id).html());
                    var newcurrentbidprice = Number(currentBidPrice.replace(/[^0-9\.]+/g, ""));
                    if (autobidamount >= newcurrentbidprice) {
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
                                                autobidamount + ' Bid is confirmed.</p>')
                                            .delay(800).fadeIn(400);
                                        // $('.errorMsgAutoBid' + id).delay(2000);
                                        // $('#product' + id).addClass("mt-5");
                                        $('#autobidamount' + id).val('');
                                        socket.emit('auto_bid_update_user_amount', {
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
            //group bid sockets data
            socket.on('add_groupbid_updates', function(data) {
                // console.log(data.adminofferData);
                var offerData = data.adminofferData;
                var i;
                $('#offers').empty();
                for (i = 0; i < offerData.length; ++i) {
                    var weight = offerData[i].weight / 20;
                    $('#offers').append("<li><span class='lotid'>" + offerData[i].auction_product_id +
                        "</span><p>Amount:$" + offerData[i].amount + "<br>Bags:" + weight + "</p></li>");

                }
            });

            $('.editIcon').on('click', function() {
                console.log($(this).data('id'));
                $('#auctionProductId').val($(this).data('id'))
                $('#editModal').show();
            })

            $('#close').on('click', function() {
                $('#editModal').hide();
            })
        </script>

    @endsection
