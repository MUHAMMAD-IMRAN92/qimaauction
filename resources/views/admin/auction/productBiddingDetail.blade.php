@extends('admin.layout.default')
@section('title', 'All Transection')
@section('content')
    <style>
        .modal {
            /* width: 1750px; */
            /* margin-left: -144px;
            margin-top: -144px; */
        }
    </style>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            {{-- <h2 class="content-header-title float-left mb-0">Create Auction</h2> --}}
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ url('jury/index') }}">Auction</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Create Auction</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table zero-configuration" id="auction-table">
                            <thead>
                                <tr>
                                    {{-- <th>Id</th> --}}
                                    <th>Title</th>
                                    <th>Start Price</th>
                                    <th>Reserved Price</th>
                                    {{-- <th>Paddle No.</th> --}}
                                    <th>Bid History</th>
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
                                            <tr id="{{ ++$i }}">
                                                <td>
                                                    {{ $pro->product_title }}
                                                </td>
                                                <td>
                                                    {{ $auction->start_price }}
                                                </td>
                                                <td>
                                                    {{ $auction->reserve_price }}
                                                </td>
                                                <td>       
                                                    <a href="{{url('/auction/bidHistory/'.$auction->id)}}">
                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    </a>
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

    <script>
          // var socket = io('http://localhost:5002');
          var socket = io('<?= env('SOCKETS') ?>');
                ////// save AuctionProduct /////
        socket.on('add_bid_updates', function (data) {
              
            // $("#price").html('$'+data.singleBidammounttesting);
            $("#price"+data.bidID).html('$'+data.singleBidammounttesting);
            // $(".bidData3"+data.bidID).html('$'+data.singleBidammounttesting);
        // alert(data.singleBidammounttesting);
        })

    </script>

@endsection
