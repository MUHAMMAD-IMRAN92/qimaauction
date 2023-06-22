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

        #previewContainer {
            display: flex;
            flex-wrap: wrap;
        }

        .previewItem {
            margin: 5px;
        }

        .previewItem img {
            width: 100px;
            height: 100px;
        }

        #sortable {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 60%;
        }

        #sortable li {
            margin: 0 3px 3px 3px;
            padding: 0.4em;
            padding-left: 1.5em;
            font-size: 1.4em;
            height: 18px;
        }

        #sortable li span {
            position: absolute;
            margin-left: -1.3em;
        }
    </style>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
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
                                <li class="breadcrumb-item active"><a href="#">Create Auction product</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body" style="margin-top: 30px">

                <div class="col-lg-12">
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <form action="{{ url('/auction/saveAuctionProduct') }}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="hidden" name="auction_id" value={{ $auction_id }}>
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
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Governorate</label>
                                                        <input type="text" class="form-control" name="governorate"
                                                            id="governorate" value="" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Village</label> <input type="text"
                                                            class="form-control" name="village" id="village"
                                                            value="" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Region</label> <input type="text"
                                                            class="form-control" name="region" id="region"
                                                            value="" required>

                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Genetic</label><input type="text"
                                                            class="form-control" name="genetic" id="genetic"
                                                            value="" required>

                                                    </div>
                                                </div> --}}
                                                {{-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Process</label><input type="text"
                                                            class="form-control" name="process" id="process"
                                                            value="" required>

                                                    </div>
                                                </div> --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Name</label><input type="text"
                                                            class="form-control" name="name" id="name"
                                                            value="" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Code</label><input type="text"
                                                            class="form-control" name="code" id="code"
                                                            value="" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Weight</label>
                                                        <input type="number" step="any" class="form-control"
                                                            name="weight" id="weight" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Size</label>
                                                        <input type="number" step="any" class="form-control"
                                                            name="size" id="size" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Rank</label>
                                                        <input type="text" class="form-control" name="rank"
                                                            id="rank" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Start Bid</label>
                                                        <input type="number" step="any" class="form-control"
                                                            name="start_price" id="start_price" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Reserve Price</label>
                                                        <input type="number" step="any" class="form-control"
                                                            name="reserve_price" id="reserve_price" value=""
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Packing Price</label>
                                                        <input type="number" step="any" class="form-control"
                                                            name="packing_cost" id="packing_cost" value=""
                                                            required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Heading One</label>
                                                        <input type="text" class="form-control" name="heading_one"
                                                            id="" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Heading Two</label>
                                                        <input type="text" class="form-control" name="heading_two"
                                                            id="" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Description One</label>
                                                        <textarea class="form-control" name="description_one" id="" value="" required> </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Description Two</label>
                                                        <textarea class="form-control" name="description_two" id="" value="" required> </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Altitude</label>
                                                        <input type="text" class="form-control" name="altitude"
                                                            id="" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Qoute</label>
                                                        <input type="text" class="form-control" name="qoute"
                                                            id="" value="" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Cupping Profile</label>
                                                        <input type="text" class="form-control" name="cupping_profile"
                                                            id="" value="" required>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Image</label>
                                                        <input type="file" class="form-control" name="images" multiple
                                                            required>
                                                    </div>
                                                </div> --}}
                                                {{-- <input type="file" id="fileInput" multiple>
                                                <div class="col-md-12">
                                                    <div id="previewContainer"></div>
                                                </div> --}}
                                                <div class="col-md-10">


                                                </div>
                                                <div class="col-md-2">
                                                    <button type="submit" name="button"
                                                        style="background-color: #d1af69; color:white"
                                                        class="btn save">Submit</button>

                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
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

        $("#product_id").on("change", function() {
            var productId = $(this).val();
            $('#auction_product_id').val(productId);
            $('#region').html('');
            $('#village').html('');
            var products = `{{ $products }}`;
            // console.log(products);
            var data = JSON.parse(products.replace(/&quot;/g, '"'));
            console.log(data);
            $(data).each(function(prod, value) {
                if (value.id == productId) {
                    if (value.region != null)
                        $('#region').val(value.region.title);
                    else
                        $('#region').val('----');
                    if (value.governorate != null)
                        $('#governorate').val(value.governorate.title);
                    else
                        $('#governorate').val('--');
                    // if(value.reviews != null)
                    // $('#jury_score').val(value.reviews.total_score);
                    // else
                    // $('#jury_score').val(0);
                    if (value.village != null)
                        $('#village').val(value.village.title);
                    else
                        $('#village').val('--');


                    if (value.product_title != null)
                        $('#name').val(value.product_title);
                    else
                        $('#sample').val('--');
                    if (value.sample != null)
                        $('#code').val(value.sample);
                    else
                        $('#code').val('--');


                    return;
                }
            });
        });
        $('#fileInput').on('change', function(e) {
            var files = e.target.files; // Get selected files

            // Clear previous previews
            $('#previewContainer').empty();

            // Loop through selected files
            for (var i = 0; i < files.length; i++) {
                var file = files[i];

                // Create file reader
                var reader = new FileReader();

                // Read file data
                reader.onload = (function(file) {
                    return function(e) {
                        // Create preview item
                        var previewItem = $('<div class="previewItem"></div>');

                        // Create preview image
                        var img = $('<img src="' + e.target.result + '">');

                        // Create deselect button
                        var deselectBtn = $(
                            '<button class="deselectBtn">Deselect</button>');

                        // Append image and deselect button to preview item
                        previewItem.append(img);
                        previewItem.append(deselectBtn);

                        // Append preview item to container
                        $('#previewContainer').append(previewItem);
                    };
                })(file);

                // Read file as data URL
                reader.readAsDataURL(file);
            }

            // Enable sorting for the preview items
            $('#previewContainer').sortable();
        });

        // Deselect button click event
        // $('#previewContainer').on('click', '.deselectBtn', function() {
        //     $(this).parent('.previewItem').remove();
        // });
    });
</script>
