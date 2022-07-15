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
                        <div class="card">
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
                                                                <td id="product{{ $auction->id }}" type="button"
                                                                    style="width:100%;color:white;height:40px;text-align: center; line-height: 65px; margin-bottom:18px"
                                                                    class="btn product"
                                                                    data-auctionProductId="{{ $auction->id }}"
                                                                    data-toggle="modal" data-target="#auction_model">
                                                                    <b>
                                                                        <h6><b>{{ $pro->product_title }}</b></h6>
                                                                    </b>
                                                                </td>
                                                                <td id="price{{ $auction->id }}" allign="right">
                                                                    {{ isset($auction->latestBidPrice) ? $auction->latestBidPrice->bid_amount : $auction->start_price }}
                                                                </td>
                                                                @if (isset($auction->latestBidPrice->user))
                                                                    <td id="paddleNo{{ $auction->id }}" allign="right"
                                                                        class="user" data-toggle="modal"
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
                                                                <input type="hidden" id="pweight{{ $auction->id }}" value="{{$auction->weight}}">
                                                                <td allign="right" id="liability{{ $auction->id }}">
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
                                                                            style="width: 80px; border-radius : 1px;padding:4px; border: 1px solid #d1af69;" {{(isset($latestAutoBidPrice)) ? '' : 'disabled'}}>
                                                                        <input type="hidden"
                                                                            id="userId{{ $auction->id }}"
                                                                            value="{{ isset($auction->latestAutoBidPrice) ? $auction->latestAutoBidPrice->user_id : '--' }}">
                                                                        <button data-id="{{ $auction->id }}" id="editbtn{{ $auction->id }}" {{(isset($latestAutoBidPrice)) ? '' : 'disabled'}}
                                                                            class="autobid btn btn-sm success" 
                                                                            style="font-size:16px;">save </button>
                                                                            <div class="errormsgautobid errorMsgAutoBid{{ $auction->id }}"></div>                                                                    
                                                                           
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
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="auction-table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>User</th>
                                                    <th>Paddle Number</th>
                                                    <th>Liability</th>
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
            </div>
        </div>

        <script>
            $(document).ready(function() {
                var socket = io('<?= env('SOCKETS') ?>');
                socket.on('auto_bid_updates', function(data) {
                     var amount = (+data.autobidamount).toFixed(2);
                    $("#autoBidAmount" + data.id).val(amount);
                    $("#autobidId" +  data.id).val(data.latestAutoBidId);
                    $("#userId" + data.bidID).val(data.user_id);
                    $("#autoBidAmount" + data.id).prop('disabled', false);
                    $("#editbtn" + data.bidID).prop('disabled', false);
                });
                socket.on('auto_bid_delete', function(data) {
                
                    // if (data.autobidamount == 0) {
                        $("#autoBidAmount" + data.auction_product_id).val(0);
                        $("#autoBidAmount" + data.auction_product_id).prop('disabled', true);
                        $("#editbtn" + data.auction_product_id).prop('disabled', true);
                        // $('.editblock' + data.auction_product_id).html('No Auto Bid');
                    // }
                });

                socket.on('add_bid_updates', function(data) {
                    $("#price" + data.bidID).html(data.singleBidammounttesting);
                    $("#paddleNo" + data.bidID).html(data.paddleNo);
                    var pweight =  $('#pweight' + data.bidID).val();
                    // $("#liability" + data.bidID).html(data.singleBidammounttesting * pweight );
                    // $("#autoBidAmount" + data.id).val(data.autobidamount);
                    // $("#userId" + data.bidID).val(data.user_id);
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

    @endsection
