@extends('admin.layout.default')
@section('title', 'All Transection')
@section('content')
    <style>
        .errormsgautobid {
            background: #DBFFDA;
            margin-top: 12px;
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

        .headerSortDown:after,
        .headerSortUp:after {
            content: ' ';
            position: relative;
            left: 10px;
            border: 7px solid transparent;
        }

        .headerSortDown:after {
            top: 3px;
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
                        Size : <p class="form-control" id="size"></p>
                        Weight : <p class="form-control" id="weight"></p>
                        Rank : <p class="form-control" id="rank"></p>
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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <nav>
                        <div class="col-4">
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">Auction</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Liability</a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table class="table  table-responsive table-hover" id="auction-table">
                            <thead>
                                <tr>
                                    {{-- <th>Id</th> --}}
                                    <td></td>
                                    <th>Product</th>
                                    <th>Winning Bid</th>
                                    <th>Winning Paddle</th>
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
                                                <td id="product{{ $auction->id }}" type="button" 
                                                    style="width:100%;color:white;height:40px;text-align: center; line-height: 65px; margin-bottom:18px" class="btn btn-primary mt-1 product"
                                                    data-auctionProductId="{{ $auction->id }}" data-toggle="modal"
                                                    data-target="#auction_model">
                                                    <b>
                                                        <h6>{{ $pro->product_title }}</h6>
                                                    </b>
                                                </td>

                                                <td id="price{{ $auction->id }}">
                                                    {{ isset($auction->latestBidPrice) ? $auction->latestBidPrice->bid_amount : $auction->start_price }}
                                                </td>
                                                <td id="paddleNo{{ $auction->id }}">
                                                    {{ isset($auction->latestBidPrice->user) ? $auction->latestBidPrice->user->first()->paddle_number : '--' }}
                                                </td>
                                                <td>
                                                    {{ $auction->reserve_price }}
                                                </td>

                                                <td>
                                                    @php
                                                        $bidprice = isset($auction->latestBidPrice) ? $auction->latestBidPrice->bid_amount : $auction->start_price;
                                                    @endphp
                                                    {{ $auction->weight * $bidprice }}
                                                </td>
                                                {{-- data all --}}
                                                @if (isset($auction->latestAutoBidPrice))
                                                    <td>
                                                        <input type="hidden" id="autobidId{{ $auction->id }}"
                                                            value="{{ $auction->latestAutoBidPrice->id }}">
                                                        @php
                                                            $latestAutoBidPrice = isset($auction->latestAutoBidPrice) ? $auction->latestAutoBidPrice->bid_amount : null;          
                                                        @endphp
                                                        <input type="number" value="{{ $latestAutoBidPrice ?? '0' }}"
                                                            name="autoBidAmount" id="autoBidAmount{{ $auction->id }}"
                                                            style="width: 105px; border-radius : 3px;padding:6px">
                                                        <button data-id="{{ $auction->id }}"
                                                            class="autobid btn btn-success">Edit</button>
                                                        <div class="errormsgautobid errorMsgAutoBid{{ $auction->id }}">
                                                        </div>
                                                    </td>
                                                @else
                                                    <td>
                                                        No Auto Bid
                                                    </td>
                                                @endif
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
                    <div class="container tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <table class="table table-bordered table-responsive table-striped" id="auction-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>User</th>
                                    <th>Paddle Number</th>
                                    <th>Liability</th>
                                    <th></th>
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
                                                    <td class="headerSortUp headerSortDown move">
                                                        <a href=""></a>
                                                    </td>
                                                    <td>
                                                        {{ isset($auction->latestBidPrice->user) ? $auction->latestBidPrice->user->first()->name : '--' }}
                                                    </td>
                                                    <td id="paddleNo{{ $auction->id }}">
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
                                            <td >No record yet</td>
                                        </tr>
                                @endif

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // var socket = io('http://localhost:5002');
              var socket = io('<?= env('SOCKETS') ?>');
            socket.on('add_bid_updates', function(data) {
                $("#price" + data.bidID).html('$' + data.singleBidammounttesting);
                $("#paddleNo" + data.bidID).html(data.paddleNo);
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


            // Update Auto Bid Data
            $(".autobid").on("click", function(e) {
                e.preventDefault();
                $('.errorMsgAutoBid').hide();
                $('.errorMsgAutoBid' + id).hide();
                var id = $(this).attr('data-id');
                var autobidId = $("#autobidId" + id).val();
                var autobidamount = $('#autoBidAmount' + id).val();
                var currentBidPrice = ($('#price' + id).html()).replace(/\s/g, '');
                console.log(currentBidPrice, autobidamount)
                if (parseFloat(autobidamount) >= parseFloat(currentBidPrice)) {
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
                                    $('.errorMsgAutoBid' + id).html('<p>Your $' +
                                        autobidamount + ' Bid is confirmed.</p>');
                                    $('#product' + id).addClass("mt-3");
                                    $('#autobidamount' + id).val('');
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
                    $('#product' + id).addClass("mt-4");
                    $('#autobidamount' + id).val('');
                }
            })
            // End Update Auto Bid Data

        });
    </script>

@endsection
