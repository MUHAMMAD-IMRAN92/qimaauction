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

        .text-field {
            display: block;
            margin-top: 10px;
        }

        .previewItem {
            text-align: center;
        }

        .fa-trash:before {
            content: "\f1f8";
            position: absolute;
            top: 8%;
            color: red;
            margin-left: 10px;

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
                                <li class="breadcrumb-item"><a href="{{ url('auction/index') }}">Auction</a>
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
                                    <form action="{{ url('/auction/saveAuctionProduct') }}" method="post"
                                        enctype="multipart/form-data">
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
                                                                <option value="{{ $prod->id }}" {{$auction_products->product_id ==$prod->id ? 'selected' : '' }}>
                                                                    {{ $prod->product_title }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <input type="hidden" id="rownumber" value="">
                                                <input type="hidden" name="auction_product_id"
                                                    value={{ $auction_products->auction_id }}>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Governorate</label>
                                                        <input type="text" class="form-control" name="governorate"
                                                            id="governorate" value="{{ $auction_products->governorate }}"
                                                            required>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Village</label> <input type="text"
                                                            class="form-control" name="village" id="village"
                                                            value="{{ $auction_products->village }}" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Region</label> <input type="text"
                                                            class="form-control" name="region" id="region"
                                                            value="{{ $auction_products->region }}" required>

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Name</label><input type="text"
                                                            class="form-control" name="name" id="name"
                                                            value="{{ $auction_products->name }}" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Code</label><input type="text"
                                                            class="form-control" name="code" id="code"
                                                            value="{{ $auction_products->code }}" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Weight</label>
                                                        <input type="number" step="any" class="form-control"
                                                            name="weight" id="weight"
                                                            value="{{ $auction_products->weight }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Size</label>
                                                        <input type="number" step="any" class="form-control"
                                                            name="size" id="size"
                                                            value="{{ $auction_products->size }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Rank</label>
                                                        <input type="text" class="form-control" name="rank"
                                                            id="rank" value="{{ $auction_products->rank }}"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Start Bid</label>
                                                        <input type="number" step="any" class="form-control"
                                                            name="start_price" id="start_price"
                                                            value="{{ $auction_products->start_price }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Reserve Price</label>
                                                        <input type="number" step="any" class="form-control"
                                                            name="reserve_price" id="reserve_price"
                                                            value="{{ $auction_products->reserve_price }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Packing Price</label>
                                                        <input type="number" step="any" class="form-control"
                                                            name="packing_cost" id="packing_cost"
                                                            value="{{ $auction_products->packing_cost }}" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Heading One</label>
                                                        <input type="text" class="form-control" name="heading_one"
                                                            id="" value="{{ $auction_products->heading_1 }}"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Heading Two</label>
                                                        <input type="text" class="form-control" name="heading_two"
                                                            id="" value="{{ $auction_products->heading_2 }}"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Description One</label>
                                                        <textarea class="form-control" name="description_one" id="" value="" required> {{ $auction_products->description_1 }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Description Two</label>
                                                        <textarea class="form-control" name="description_two" id="" value="" required>{{ $auction_products->description_2 }} </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Altitude</label>
                                                        <input type="text" class="form-control" name="altitude"
                                                            id="" value="{{ $auction_products->altitude }}"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Qoute</label>
                                                        <input type="text" class="form-control" name="qoute"
                                                            id="" value="{{ $auction_products->qoute }}"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Cupping Profile</label>
                                                        <input type="text" class="form-control" name="cupping_profile"

                                                            value="{{ $auction_products->cup_profile }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Image</label>
                                                        <input type="file" id="fileInput" class="form-control"
                                                            name="images[]" multiple>
                                                    </div>
                                                </div>
                                                {{-- <input type="file" id="fileInput" multiple> --}}
                                                <div class="col-md-12">
                                                    <div id="previewContainer"></div>
                                                </div>
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

                    if (value.genetic != null)
                        $('#genetic').val(value.genetic.title);
                    else
                        $('#genetic').val('--');
                    if (value.product_title != null)
                        $('#name').val(value.product_title);
                    else
                        $('#sample').val('--');
                    if (value.sample != null)
                        $('#code').val(value.sample);
                    else
                        $('#code').val('--');

                    if (value.pro_process == 1)
                        $('#process').val('Natural');
                    else if (value.pro_process == 2)
                        $('#process').val('Slow Dried');
                    else if (value.pro_process == 3)
                        $('#process').val('Alchemy');
                    else if (value.pro_process == 4)
                        $('#process').val('Deep Fermentation');
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
                        // Create unique identifier for the preview item
                        var identifier = file.name;

                        // Create preview item
                        var previewItem = $('<div class="previewItem" data-identifier="' +
                            identifier + '"></div>');

                        // Create preview image
                        var img = $('<img class="image-preview" src="' + e.target.result +
                            '">');
                        var input = $(
                            '<input class="text-field" type="text" name="sequence[]" >');
                        // Create deselect button
                        var deselectBtn = $('<i class="deselectBtn fa fa-trash"></i>');

                        // Append image and deselect button to preview item
                        previewItem.append(img);
                        previewItem.append(deselectBtn);
                        previewItem.append(input);

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
        $('#previewContainer').on('click', '.deselectBtn', function() {
            var previewItem = $(this).parent('.previewItem');
            var identifier = previewItem.data('identifier');

            // Remove the preview item
            previewItem.remove();

            // Update the image path or the number of images shown in the input type file
            var fileInput = $('#fileInput')[0];
            var files = fileInput.files;

            // Create a new FileList excluding the removed file
            var newFileList = new DataTransfer();
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                if (file.name !== identifier) {
                    newFileList.items.add(file);
                }
            }

            // Update the input type file with the new FileList
            fileInput.files = newFileList.files;
        });


        // Deselect button click event

    });
</script>
