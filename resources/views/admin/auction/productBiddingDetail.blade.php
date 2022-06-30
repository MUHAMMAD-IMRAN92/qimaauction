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
                                <table class="table table-bordered table-responsive" id="auction-table">
                                    <thead>
                                        <tr>
                                            {{-- <th>Id</th> --}}
                                            <th>Product</th>
                                            <th>Winning Bid</th>
                                            <th>Reserved Price</th>
                                            <th>Paddle No.</th>
                                            <td>Liability</td>
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
                                                    <tr id="{{ ++$i }}">
                                                        <td>
                                                            {{ $pro->product_title }}
                                                        </td>
                                                        {{-- <td>
                                                            {{ $auction->weight }}
                                                        </td>
                                                        <td>
                                                            {{ $auction->size }}
                                                        </td> --}}
                                                        <td id="price{{ $auction->id }}">
                                                            {{ $auction->start_price }}
                                                        </td>
                                                        <td>
                                                            {{ $auction->reserve_price }}
                                                        </td>
                                                        <td id="paddleNo{{ $auction->id }}">
                                                            4
                                                        </td>
                                                        <td>
                                                            {{$auction->weight * $auction->start_price}}
                                                        </td>
                                                        <td>
                                                            <input type="number" value="{{$auction->autoBidAmount ?? '0'}}" name="autoBidAmount" id="autoBidAmount">
                                                            {{-- <input type="button" value="edit" class="btn btn-sm btn-success"> --}}
                                                            <button>Edit</button>
                                                        </td>
                                                        {{-- <td>       
                                                    <a href="{{url('/auction/bidHistory/'.$auction->id)}}">
                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    </a>
                                                </td> --}}
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
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <table class="table table-bordered table-responsive" id="auction-table">
                            <thead>
                                <tr>
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
                                @if (isset($auction_products))
                                    @foreach ($auction_products as $auction)
                                        @foreach ($auction->products as $key => $pro)
                                            <tr id="{{ ++$i }}">
                                                <td>
                                                    User3
                                                </td>
                                                <td id="paddleNo{{ $auction->id }}">
                                                    4
                                                </td>
                                                <td>
                                                    {{$auction->weight * $auction->start_price}}
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
        $(document).ready(function() {
            var socket = io('http://localhost:5002');
            //   var socket = io('<?= env('SOCKETS') ?>');
            socket.on('add_bid_updates', function(data) {
                alert(data.bidID);
                $("#price" + data.bidID).html('$' + data.singleBidammounttesting);
                $("#paddleNo" + data.bidID).html(data.paddleNo);
            });
        });
    </script>

@endsection
