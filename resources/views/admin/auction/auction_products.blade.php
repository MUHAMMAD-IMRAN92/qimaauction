@extends('admin.layout.default')
@section('title', 'All Transection')
@section('content')
    <style>
        /* .custom_btn_align{
        display: contents;
      } */
        /* .content-header.row{
        margin-right: -15px;
        margin-left: 30px;
        align-items: center;
      } */

        .row {
            margin-left: 0;
            margin-right: 0;
        }
    </style>
    <div class="app-content content">
        {{-- <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div> --}}
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12">
                    <div class="row breadcrumbs-top">
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
                <div class="col-12 col-md-3 custom_btn_align">
                    <a class="btn btn-primary waves-effect waves-light"
                        href="{{ url('add_product_to_auction/' . request()->id) }}" style="color: white;"
                        id="">Create Auction
                        Product<a>
                            {{-- <a class="btn btn-primary waves-effect waves-light" style="color: white;" id="product">Create Auction
                        Product<a> --}}
                </div>
            </div>
            <div class="content-body" style="margin-top: 30px">
                <div class="col-lg-12">
                    <div class="modal" tabindex="-1" role="dialog" id="auction_model">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" style="display: block">Create Auction Product</h5>
                                </div>
                                <form id="auctionproduct">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Select Product</label>
                                                    <select class="select2 form-control" name="product_id" id="product_id">
                                                        <option selected disabled>Please Select product</option>
                                                        @foreach ($products as $key => $prod)
                                                            <option value="{{ $prod->id }}">
                                                                {{ $prod->product_title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="hidden" id="rownumber" value="">
                                            <input type="hidden" name="auction_product_id" id="auction_product_id">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Governorate</label>
                                                    <p class="form-control" id="governorate"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Village</label>
                                                    <p class="form-control" id="village"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Region</label>
                                                    <p class="form-control" id="region"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Weight</label>
                                                    <input type="number" step="any" class="form-control" name="weight"
                                                        id="weight" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Size</label>
                                                    <input type="number" step="any" class="form-control" name="size"
                                                        id="size" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Rank</label>
                                                    <input type="text" class="form-control" name="rank" id="rank"
                                                        value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Start Bid</label>
                                                    <input type="number" step="any" class="form-control"
                                                        name="start_price" id="start_price" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Reserve Price</label>
                                                    <input type="number" step="any" class="form-control"
                                                        name="reserve_price" id="reserve_price" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Packing Price</label>
                                                    <input type="number" step="any" class="form-control"
                                                        name="packing_cost" id="packing_cost" value="" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer float-right">
                                                <button type="submit" name="button"
                                                    style="background-color: #d1af69; color:white"
                                                    class="btn save">Submit</button>
                                                <button type="button" data-dismiss="modal"
                                                    class="btn btn-outline-warning cancel" aria-label="Close"
                                                    style="color:black">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration" id="auction-table">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Start Price</th>
                                                <th>Reserve Price</th>
                                                <th>Weight</th>
                                                <th>Size</th>
                                                <th>Rank</th>
                                                <th>Action(s)</th>
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
                                                                {{ $auction->weight }}
                                                            </td>
                                                            <td>
                                                                {{ $auction->size }}
                                                            </td>
                                                            <td>
                                                                {{ $auction->rank }}
                                                            </td>
                                                            {{-- <td>
                                                                {{ $auction->jury_score }}
                                                            </td> --}}
                                                            <div>
                                                                <td>
                                                                    {{-- <i id="edit"
                                                                        data-auctionId="{{ $auction->id }}"
                                                                        class="fas fa-edit"></i>
                                                                    <i id="delete"  data-auctionId="{{ $auction->id }}"
                                                                        class="fa fa-trash-o"></i> --}}
                                                                    {{-- <a href="{{route('prductBiddingDetail',['id' => $auction->id])}}" id="view" data-auctionId="{{ $auction->id }}"
                                                                        class="fa fa-eye"></a> --}}
                                                                    <span class="product-link-a" id="edit"
                                                                        data-auctionId="{{ $auction->id }}">Edit</span>
                                                                    <span class="product-link-a" id="delete"
                                                                        data-auctionId="{{ $auction->id }}">Delete</span>
                                                                </td>
                                                            </div>
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
            </div>
        @endsection
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.5.1/socket.io.min.js"></script>
        <script>
            $(document).ready(function() {
                // var socket = io('http://localhost:5002');
                var socket = io('<?= env('SOCKETS') ?>');
                ////// save AuctionProduct /////
                socket.on('add_bid_updates', function(data) {
                    // $("#price").html('$'+data.singleBidammounttesting);
                    $("#price" + data.bidID).html('$' + data.singleBidammounttesting);
                    // $(".bidData3"+data.bidID).html('$'+data.singleBidammounttesting);
                    // alert(data.singleBidammounttesting);
                })
                $(".cancel").on("click", function() {
                    $("#auction_model").modal("hide");
                });
                $("#view").on("click", function() {
                    $("#auction_product_detail").modal("show");
                });

                $('body').on('click', '#delete', function() {
                    var auctioProductId = $(this).attr("data-auctionId");
                    swal({
                            title: "Are you sure?",
                            // text: "Once deleted, you will not be able to recover this imaginary file!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                $.ajax({
                                    type: 'DELETE',
                                    url: `{{ route('deleteAuctionProduct') }}`,
                                    data: {
                                        auctioProductId: auctioProductId,
                                        _token: "{{ csrf_token() }}",
                                    },
                                    success: function(data) {

                                        swal("Product has been deleted!", {
                                            icon: "success",
                                        });
                                    }
                                });
                                $(this).closest('tr').remove();
                            } else {
                                swal("Your product  is safe!");
                            }
                        });
                });
                //////////////////////////// Edit Functionality  ////////////////////////////
                $('body').on('click', '#edit', function() {
                    var auctioProductId = $(this).attr("data-auctionId");
                    var rown = $(this).closest('tr').attr('id');
                    $('#rownumber').val(rown);
                    $.ajax({
                        type: 'POST',
                        url: `{{ route('getAuctionProduct') }}`,
                        data: {
                            auctioProductId: auctioProductId,
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(data) {
                            $('#product_id').val(data.product_id)
                                .trigger('change');
                            $('input[name="weight"]').val(data.weight);
                            $('input[name="size"]').val(data.size);
                            $('input[name="rank"]').val(data.rank);
                            $('input[name="start_price"]').val(data.start_price);
                            $('input[name="reserve_price"]').val(data.reserve_price);
                            $('input[name="packing_cost"]').val(data.packing_cost);
                            $('input[name="auction_product_id"]').val(data.id);
                            $('.save').html('Update');
                            $('#auction_model').modal("show");
                        }
                    });
                    $("#auction_model").modal("show");
                });
                //////////////////////////// End Edit Functionality  ////////////////////////////
                $('#auctionproduct').on('submit', function(e) {
                    e.preventDefault();
                    var productId = $('#product_id').val();
                    var auction_product_id = $('#auction_product_id').val();
                    var weight = $('#weight').val();
                    var rank = $('#rank').val();
                    var size = $('#size').val();
                    var start_price = $('#start_price').val();
                    var reserve_price = $('#reserve_price').val();
                    var packing_cost = $('#packing_cost').val();
                    var rownumber = $('#rownumber').val();
                    // var jury_score = $('#jury_score').val();
                    $.ajax({
                        type: 'POST',
                        url: `{{ route('saveAuctionProduct') }}`,
                        data: {
                            productId: productId,
                            auctionId: {{ $auctionId }},
                            auction_product_id: auction_product_id,
                            weight: weight,
                            // jury_score: jury_score,
                            rank: rank,
                            size: size,
                            start_price: start_price,
                            reserve_price: reserve_price,
                            packing_cost: packing_cost,
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(data) {
                            $('#auction_model').modal("hide");
                            // $('#nodata').modal('hide');
                            var title = data.products[0].product_title;
                            if (rownumber) {
                                var id = rownumber;
                            } else {
                                var id = data.id;
                            }
                            var markup = "<tr id=" + id + "><td>" + title + "</td><td>" + data
                                .start_price + "</td><td>" + data
                                .reserve_price + "</td><td>" + data
                                .weight + "</td><td>" + data.size + "</td><td>" + data.rank +
                                "</td><td><span id='edit' data-auctionId=" + data.id +
                                " class='product-link-a'>Edit</span> <span id='delete' data-auctionId=" +
                                data
                                .id + " class='product-link-a'>Delete</span></td></tr>";
                            if (rownumber) {
                                $('#' + id).replaceWith(markup);
                            } else
                                $("table tbody").append(markup);
                        }
                    });
                });

                $("#product").on("click", function() {
                    $('#product_id').val('')
                        .trigger('change');
                    $('input[name="weight"]').val('');
                    $('input[name="size"]').val('');
                    $('input[name="rank"]').val('');
                    $('input[name="start_price"]').val('');
                    $('input[name="reserve_price"]').val('');
                    $('input[name="packing_cost"]').val('');
                    $('#governorate').html('');
                    $('#village').html('');
                    $('#region').html('');
                    // $('#jury_score').html('');
                    $('input[name="auction_product_id"]').val('');
                    $('.save').html('Create');
                    $("#auction_model").modal("show");
                });
                $("#product_id").on("change", function() {
                    var productId = $(this).val();
                    $('#region').html('');
                    $('#village').html('');
                    var products = `{{ $products }}`;
                    // console.log(products);
                    var data = JSON.parse(products.replace(/&quot;/g, '"'));
                    $(data).each(function(prod, value) {
                        if (value.id == productId) {
                            if (value.region != null)
                                $('#region').html(value.region.title);
                            else
                                $('#region').html('----');
                            if (value.governorate != null)
                                $('#governorate').html(value.governorate.title);
                            else
                                $('#governorate').html('--');
                            // if(value.reviews != null)
                            // $('#jury_score').val(value.reviews.total_score);
                            // else
                            // $('#jury_score').val(0);
                            if (value.village != null)
                                $('#village').html(value.village.title);
                            else
                                $('#village').html('--');
                            return;
                        }
                    });
                });
            });
        </script>
