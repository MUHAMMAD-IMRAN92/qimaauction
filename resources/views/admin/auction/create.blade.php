@extends('admin.layout.default')
@section('title', 'All Transection')
@section('content')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <style>
        input[type="file"] {
            display: block;
        }

        .imageThumb {
            max-height: 75px;
            border: 2px solid;
            padding: 1px;
            cursor: pointer;
        }

        .pip {
            display: inline-block;
            margin: 10px 10px 0 0;
        }

        .remove {
            display: block;
            background: #444;
            border: 1px solid black;
            color: white;
            text-align: center;
            cursor: pointer;
        }

        .remove:hover {
            background: white;
            color: black;
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
                                    <li class="breadcrumb-item"><a href="{{ url('auction/index') }}">Auction</a>
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

                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    {{-- <h4 class="card-title">Multiple Column</h4> --}}
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" action="{{ url('/auction/create') }}" method="POST"
                                            enctype="multipart/form-data" autocomplete="off">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-6">
                                                        <div class="form-label-group">
                                                            <input type="text" id="name"
                                                                class="form-control @error('title') is-invalid @enderror"
                                                                name="title" required>
                                                            <label for="name">Title</label>
                                                            @error('title')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-6">
                                                        <div class="form-label-group">
                                                            <input type="datetime-local" class="form-control"
                                                                name="startDatetime" placeholder="select Start Date /UK" />
                                                            <label for="name">Date Time</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-6">
                                                        <div class="form-label-group">
                                                            <select class="form-select form-select-lg mb-3 form-control"
                                                                aria-label=".form-select-lg example " name="is_active">
                                                                <option value="" selected>Select Status</option>

                                                                <option value="1">Active</option>
                                                                <option value="0">In Active</option>
                                                            </select>
                                                            @error('is_Active')
                                                                <span class="text-danger error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-6">
                                                        <div class="form-label-group">
                                                            <select class="form-select form-select-lg mb-3 form-control"
                                                                aria-label=".form-select-lg example " name="status">
                                                                <option value="" selected>Select Status</option>
                                                                <option value="2">Cupping</option>
                                                                <option value="3">Sample Purchase</option>

                                                            </select>
                                                            @error('is_Active')
                                                                <span class="text-danger error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-6">
                                                        <div class="form-label-group">
                                                            <input type="text" id="name"
                                                                class="form-control @error('button_title') is-invalid @enderror"
                                                                name="button_title" required>
                                                            <label for="name">Button Title</label>
                                                            @error('button_title')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-6">
                                                        <div class="form-label-group">
                                                            <input type="text" id="sample_link"
                                                                class="form-control @error('sample_link') is-invalid @enderror"
                                                                name="sample_link" disabled>
                                                            <label for="sample_link">Sample Link</label>
                                                            @error('sample_link')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <textarea id="product-detail" class="form-control" name="product_detail" @error('product_detail') is-invalid @enderror>
                                                            </textarea>
                                                            <label for="product-detail">Auction Detail</label>
                                                            @error('product_detail')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-6 mt-1">
                                                        <div class="form-label-group d-flex">

                                                            <div class="">
                                                                <label class="" for="image"> Image
                                                                </label>
                                                                <input type="radio" name="media_type" value="1"
                                                                    class="" checked>
                                                            </div>
                                                            <div class="ml-2">
                                                                <label class="" for="video"> Video
                                                                </label>
                                                                <input type="radio" name="media_type" value="2"
                                                                    class="">
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-6 col-6 ">
                                                        <div class="form-label-group ">
                                                            <input type="file" id="image" class="form-control"
                                                                accept="" name="image[]"
                                                                required>
                                                            <label for="city-column">Auction Image/Video</label>
                                                            @error('image')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-12 mt-2">
                                                            <img id="preview-image-before-upload"
                                                                src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                                                alt=""
                                                                style="max-height: 100px;max-width: 100px;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-6">
                                                        <div class="form-label-group">
                                                            <input type="file" id="logo" class="form-control"
                                                                accept="image/png, image/jpeg" name="logo" required>
                                                            <label for="city-column">Auction Logo</label>
                                                            @error('logo')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-12 mb-2">
                                                            <img id="preview-image-before-upload-logo"
                                                                src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                                                alt=""
                                                                style="max-height: 100px;max-width: 100px;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <textarea id="summernote" class="form-control" name="product_detail" @error('product_detail') is-invalid @enderror>
                                                    </textarea>
                                                            <label for="product-detail">Auction Timmings</label>
                                                            @error('product_detail')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <textarea id="blurb" class="form-control" name="blurb" @error('blurb') is-invalid @enderror>
                                                            </textarea>
                                                            <label for="blurb">Blurb</label>
                                                            @error('product_detail')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="field" align="left">
                                                            <h3>Upload International Jury Images</h3>
                                                            <input type="file" id="files" class="form-control"
                                                                name="jury_images[]" multiple />
                                                        </div>
                                                    </div>
                                                    {{--
                                                    <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <label for="product-category">Select Product</label>
                                                        <div class="form-group">
                                                            <select class="select2 form-control" name="product_id"
                                                                id="product_id">
                                                                <option selected disabled>Please Select product</option>
                                                                @foreach ($products as $key => $prod)
                                                                    <option value="{{ $prod->id }}">
                                                                        {{ $prod->product_title }}</option>
                                                                @endforeach

                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <label for="product-category">Select Genetics</label>
                                                        <div class="form-group">
                                                            <select class="select2 form-control" name="genetic_id"
                                                                id="genetic_id">
                                                                <option selected disabled>Please Select genetics</option>
                                                                @foreach ($genetics as $key => $prod)
                                                                    <option value="{{ $prod->id }}">
                                                                        {{ $prod->title }}</option>
                                                                @endforeach

                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <label for="product-category">Select Process</label>
                                                        <div class="form-group">
                                                            <select class="select2 form-control" name="process_id"
                                                                id="process_id">
                                                                <option selected disabled>Please Select process</option>
                                                                @foreach ($process as $key => $prod)
                                                                    <option value="{{ $prod->id }}">
                                                                        {{ $prod->title }}</option>
                                                                @endforeach

                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="number" id="lotnumber" class="form-control @error('lotnumber') is-invalid @enderror"  name="lotnumber" required>
                                                        <label for="name">Lot No</label>
                                                        @error('lotnumber')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="lottitle" class="form-control @error('lottitle') is-invalid @enderror"  name="lottitle" required>
                                                        <label for="name">Lot Title</label>
                                                        @error('lottitle')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="farm" class="form-control @error('farm') is-invalid @enderror"  name="farm">
                                                        <label for="name">Farm</label>
                                                        @error('farm')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div>
                                            --}}
                                                    {{-- <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                            <input type="text" class="form-control pickadate" placeholder="select End  Date" name="endDate"/>
                                                        </div>
                                                        <div class="col-sm-2" style="margin-left: -30px">
                                                            <input type='text' class="form-control pickatime" placeholder="select End Time" name="endTime" />
                                                        </div>
                                                        </div>
                                                        <input type="hidden" name="">
                                                        <label for="date">End Date & Time</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="start_bid_price" class="form-control @error('start_bid_price') is-invalid @enderror"
                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"
                                                         name="start_bid_price" value="">
                                                        <label for="start_bid_price">Start Bid Price</label>
                                                        @error('start_bid_price')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="increment_bid_price" class="form-control @error('increment_bid_price') is-invalid @enderror"
                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"
                                                         name="increment_bid_price">
                                                        <label for="increment_bid_price">Increment Bid Price</label>
                                                        @error('increment_bid_price')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="reserved_bid_price" class="form-control @error('reserved_bid_price') is-invalid @enderror"
                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');"
                                                        name="reserved_bid_price">
                                                        <label for="reserved_bid_price">Reserved Bid Price</label>
                                                        @error('reserved_bid_price')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="number" id="weight" class="form-control @error('weight') is-invalid @enderror" name="weight">
                                                        <label for="name">Weight</label>
                                                        @error('weight')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="number" id="size" class="form-control @error('size') is-invalid @enderror"  name="size">
                                                        <label for="name">Size</label>
                                                        @error('size')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                    </div>
                                                </div>
                                                  <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="number" id="score" class="form-control @error('score') is-invalid @enderror"  name="score">
                                                        <label for="name">Score</label>
                                                        @error('score')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="rank" class="form-control @error('rank') is-invalid @enderror"  name="rank">
                                                        <label for="name">Rank</label>
                                                        @error('rank')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                    </div>
                                                </div>
                                                --}}


                                                    <div class="col-12 mt-1" style="margin-left: 39%">
                                                        <button type="submit"
                                                            class="btn btn-primary mr-1 mb-1">Submit</button>
                                                        {{-- <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Floating Label Form section end -->

            </div>
        </div>
    </div>
    {{-- <div id="summernote"></div> --}}

    <script>
        $('#summernote').summernote({
            placeholder: '',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $(document).ready(function(e) {

            $('#image').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });
            $('#logo').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload-logo').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });
            $('select[name="status"]').on('change', function() {
                var value = $(this).val();
                // alert(value)
                if (value == 3) {
                    $('#sample_link').prop('disabled', false)
                } else {

                    $('#sample_link').prop('disabled', true)
                }
            });
            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function(e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            $("<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result +
                                "\" title=\"" + file.name + "\"/>" +
                                "<br/><span class=\"remove\">Remove image</span>" +
                                "</span>").insertAfter("#files");
                            $(".remove").click(function() {
                                $(this).parent(".pip").remove();
                            });

                            // Old code here
                            /*$("<img></img>", {
                            class: "imageThumb",
                            src: e.target.result,
                            title: file.name + " | Click to remove"
                            }).insertAfter("#files").click(function(){$(this).remove();});*/

                        });
                        fileReader.readAsDataURL(f);
                    }
                    console.log(files);
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });
        $(document).load(function() {
            $('.datepicker').pickadate({
                editable: true
            })

        });
    </script>
@endsection
