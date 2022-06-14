@extends('admin.layout.default')
@section('title', 'All Transection')
@section('content')
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
                {{-- <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                    </div>
                </div>
            </div> --}}
            </div>
            <div class="content-body">
                <div class="col-lg-12">
                    <a class="btn btn-primary waves-effect waves-light" id="product" style="margin-left:75%;">Create
                        Auction Product<a>
                            <div class="modal" tabindex="-1" role="dialog" id="auction_model">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Create Jury Product</h5>
                                            {{-- <button class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button> --}}
                                        </div>
                                        <form id="auctionproduct">

                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Select Product</label>
                                                            <select class="select2 form-control" name="product_id"
                                                                id="product_id">
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
                                                            <label for="">Jury Score</label>
                                                            <input type="number" class="form-control" name="jury_score"
                                                                id="jury_score" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Weight</label>
                                                            <input type="number" class="form-control" name="weight"
                                                                id="weight" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Size</label>
                                                            <input type="number" class="form-control" name="size"
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

                                                    <div class="modal-footer">
                                                        <button type="submit" name="button"
                                                            style="background-color: #d1af69; color:white"
                                                            class="btn save">Submit</button>
                                                        <button type="button" data-dismiss="modal" class="btn  cancel"
                                                            aria-label="Close"
                                                            style="background-color: #d1af69;color:white">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                </div>
                <div class="col-lg-12 p-5">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration" id="auction-table">
                                        <thead>
                                            <tr>
                                                {{-- <th>Id</th> --}}
                                                <th>Title</th>
                                                <th>Weight</th>
                                                <th>Jury Score</th>
                                                <th>Action(s)</th>
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
                                                                {{ $auction->weight }}
                                                            </td>
                                                            <td>
                                                                {{ $auction->jury_score }}
                                                            </td>
                                                            <td id="edit" data-auctionId="{{ $auction->id }}"
                                                                style="width: 0.06%">
                                                                <i class="fas fa-edit"></i>
                                                            </td>
                                                            <td id="delete" data-auctionId="{{ $auction->id }}"
                                                                style="width: 0.06%">
                                                                <i class="fa fa-trash-o"></i>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                            @else
                                                <tr id="nodata">
                                                    <td></td>
                                                    <td >No Auction Product yet</td>
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

        @endsection
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                ////// save AuctionProduct /////
                
                $(".cancel").on("click", function() {
                    $("#auction_model").modal("hide");
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
                            $('#product_id')
                                .val(data.product_id)
                                .trigger('change');
                            $('input[name="weight"]').val(data.weight);
                            $('input[name="size"]').val(data.size);
                            $('input[name="rank"]').val(data.rank);
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
                            var rownumber = $('#rownumber').val();
                            var jury_score = $('#jury_score').val();
                            $.ajax({
                                type: 'POST',
                                url: `{{ route('saveAuctionProduct') }}`,
                                data: {
                                    productId: productId,
                                    auctionId: {{ $auctionId }},
                                    auction_product_id: auction_product_id,
                                    weight: weight,
                                    jury_score: jury_score,
                                    rank: rank,
                                    size: size,
                                    _token: "{{ csrf_token() }}",
                                },
                                success: function(data) {
                                    $('#auction_model').modal("hide");
                                    $('#nodata').modal('hide');
                                    var title = data.products[0].product_title;
                                    if (rownumber) {
                                        $('#' + rownumber).remove();
                                    }

                                    var markup = "<tr id="+ rownumber +"><td>" + title + "</td><td>" + data.weight +
                                        "</td><td>" +
                                        data.jury_score +
                                        "</td><td id='edit' data-auctionId=" + data.id +
                                        "><i class='fas fa-edit'></i></td><td id='delete' data-auctionId=" +
                                        data.id + "><i class='fas fa-trash-o'></i></td></tr>";
                                    $("table tbody").append(markup);
                                }
                            });
                });
               
                

                $("#product").on("click", function() {
                    // $("#auctionproduct").reset();
                         $('input[name="weight"]').val('');
                            $('input[name="size"]').val('');
                            $('input[name="rank"]').val('');
                            $('#product_id').val('');
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
                            $('#region').html(value.region.title);
                            $('#governorate').html(value.governorate.title);
                            $('#jury_score').html(value.reviews.total_score);
                            $('#jury_score').val(value.reviews.total_score);
                            $('#village').html(value.village.title);
                            return;
                        }
                    });
                });
            });
        </script>
