@extends('admin.layout.default')
@section('title', 'All Transection')
@section('content')
    <style>
        .cross {
            margin-bottom: 134px;
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
                            {{-- <h2 class="content-header-title float-left mb-0">Edit Product</h2> --}}
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ url('product/index') }}">Products</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Edit Product</a>
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
                                        <form class="form" action="{{ url('/product/edit') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-12">
                                                        <input type="hidden" id="product-title" class="form-control"
                                                            name="id" value={{ $product->id }}>
                                                        <div class="form-label-group">

                                                            <input type="text" id="product-title" class="form-control"
                                                                name="title" value="{{ $product->product_title }}">
                                                            <label for="product-title">Product Title</label>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="sample" class="form-control @error('sample') is-invalid @enderror"
                                                                name="sample" value="{{$product->sample}}">
                                                            <label for="product-title">Sample ID</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <input type="number" class="form-control @error('postion') is-invalid @enderror" name="postion" id="postion"
                                                            value="{{$product->postion}}"  oninput="if (this.value > 9) this.value = 0;">
                                                            <label for="product-title">Position</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <input type="number" class="form-control  @error('table') is-invalid @enderror" value="{{$product->table}}" name="table" id="table"  oninput="if (this.value > 5 ) this.value = 1;">
                                                            <label for="product-title">Table</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <textarea id="product-description" class="form-control" name="description">
                                                            {{ $product->product_description }}
                                                             </textarea>
                                                            <label for="product-description">Product Description</label>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <label for="product-category">Select Category</label>
                                                            <div class="form-group">
                                                                <select class="select2 form-control" name="pro_category"
                                                                    id="product-category">
                                                                    <option selected>Please Select Category</option>
                                                                    @foreach ($category as $key => $cat)
                                                                        <option value="{{ $cat->id }}"
                                                                            {{ $cat->id == $product->category_id ? 'selected' : '' }}>
                                                                            {{ $cat->category_title }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <label for="product-flavour">Select Flavour</label>
                                                            <div class="form-group">
                                                                <select class="select2 form-control" name="pro_flavour"
                                                                    id="product-flavour">
                                                                    <option selected>Please Select Flavour</option>
                                                                    @foreach ($flavour as $key => $flv)
                                                                        <option value="{{ $flv->id }}"
                                                                            {{ $flv->id == $product->flavour_id ? 'selected' : '' }}>
                                                                            {{ $flv->flavour_title }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <label for="product-lot-type">Lot Type</label>
                                                            <div class="form-group">
                                                                <select class="select2 form-control" name="pro_lot_type"
                                                                    id="product-lot-type" required>
                                                                    <option >Please Select Lot Type</option>
                                                                    <option {{ 1 == $product->pro_lot_type ? 'selected' : '' }} value="1">Farmer Lot</option>
                                                                    <option {{ 2 == $product->pro_lot_type ? 'selected' : '' }} value="2">Community Lot</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <label for="product-process">Select Process</label>
                                                            <div class="form-group">
                                                                <select class="select2 form-control" name="pro_process"
                                                                    id="product-process" required>
                                                                    <option>Please Select Process</option>
                                                                    <option {{ 1 == $product->pro_process ? 'selected' : '' }}  value="1">Natural</option>
                                                                    <option {{ 2 == $product->pro_process ? 'selected' : '' }}  value="2">Slow Dried</option>
                                                                    <option {{ 3 == $product->pro_process ? 'selected' : '' }}  value="3">Alchemy</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    <!-- <div class="col-md-12 col-12">
                                                                                                    <div class="form-label-group">
                                                                                                        <label for="product-origin">Select Origin</label>
                                                                                                        <div class="form-group">
                                                                                                            <select class="select2 form-control" name="pro_origin"
                                                                                                                id="product-origin">
                                                                                                                @foreach ($origin as $key => $org)
    <option selected>Please Select Origin</option>
                                                                                                                    <option value="{{ $org->id }}"
                                                                                                                        {{ $org->id == $product->origin_id ? 'selected' : '' }}>
                                                                                                                        {{ $org->region_name }}</option>
    @endforeach

                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div> -->
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <label for="product-origin">Select Country</label>
                                                            <div class="form-group">
                                                                <select class="select2 form-control" name="governorate_id"
                                                                    id="country_id" required>
                                                                    <option value="" selected>Please Select
                                                                        Country</option>
                                                                    @foreach ($country as $key => $cont)
                                                                        <option value="{{ $cont->id }}"
                                                                            {{ $cont->id == $product->count_id ? 'selected' : '' }}>
                                                                            {{ $cont->title }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <label for="product-origin">Select Region</label>
                                                            <div class="form-group">
                                                                <select class="select2 form-control" name="region_id"
                                                                    id="product-origin" required>
                                                                    <option selected>Please Select Region</option>
                                                                    @foreach ($region as $key => $org)
                                                                        <option value="{{ $org->id }}"
                                                                            {{ $org->id == $product->region_id ? 'selected' : '' }}>
                                                                            {{ $org->title }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <label for="product-origin">Select Village</label>
                                                            <div class="form-group">
                                                                <select class="select2 form-control" name="village_id"
                                                                    id="village_id" required>
                                                                    <option selected>Please Select Village</option>
                                                                    @foreach ($village as $key => $org)
                                                                        <option value="{{ $org->id }}"
                                                                            {{ $org->id == $product->village_id ? 'selected' : '' }}>
                                                                            {{ $org->title }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <label for="product-origin">Select Governorate</label>
                                                            <div class="form-group">
                                                                <select class="select2 form-control" name="governorate_id"
                                                                    id="governorate_id" required>
                                                                    <option selected>Please Select Governorate</option>
                                                                    @foreach ($governorator as $key => $org)
                                                                        <option value="{{ $org->id }}"
                                                                            {{ $org->id == $product->governorate_id ? 'selected' : '' }}>
                                                                            {{ $org->title }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <input type="file" id="image" class="form-control"
                                                                name="image[]" multiple>
                                                            <label for="city-column">Product Image</label>
                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <span>Select Image:</span> <br>
                                                            <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                                            alt="" style="max-height: 100px;max-width: 100px;">

                                                            @foreach ($product->images as $img)
                                                                <img width="100px" height="100px"
                                                                    src="{{ url('storage/app/public/product/' . $img->image_name) }}"
                                                                    alt="">
                                                                <a
                                                                    href="{{ url('/product/delete_product_image/' . $img->id) }}">
                                                                    <i class="fa fa-times cross" aria-hidden="true"></i></a>
                                                            @endforeach

                                                        </div>
                                                    </div> --}}
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <label for="product-category">Select Acutions</label>
                                                            <div class="form-group">
                                                                <select
                                                                    class="select2 form-control @error('category_id') is-invalid @enderror"
                                                                    name="auction[]" multiple id="product-category"
                                                                    required>
                                                                    {{-- <option value="" >Please Select Category</option> --}}
                                                                    @foreach ($auctions as $key => $auct)
                                                                        <option value="{{ $auct->id }}"
                                                                            {{ in_array($auct->id, $auction_products) > 0 ? 'selected' : '' }}>
                                                                            {{ $auct->title }}</option>
                                                                    @endforeach
                                                                    @error('category_id')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" style="margin-left: 39%">
                                                        <button type="submit"
                                                            class="btn btn-primary mr-1 mb-1">Submit</button>
                                                        <button type="submit"
                                                            class="btn btn-outline-warning mr-1 mb-1">Cancel</button>
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
    <script>
        $(document).ready(function(e) {
            $('#image').change(function() {

                let reader = new FileReader();
                ()
                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });
            $('#country_id').on('change', function(e) {
                // let from = $('#governorate_dropdown').val();

                let id = $('#country_id').val();
                $.ajax({
                    url: "{{ url('/filterBycountry') }}",
                    type: "GET",
                    data: {
                        'id': id,

                    },
                    success: function(data) {
                        console.log(data.view);
                        $('#governorate_id').empty();

                        let html =
                            ' <option value="0" selected disabled>Select Governorate</option>';
                        data.forEach(region => {
                            html += '<option value="' + region.id + '">' + region
                                .title + '</option>';
                        });


                        $('#governorate_id').append(html);
                        // $('#tables').html(data.view);

                    }
                });
            });
            $('#governorate_id').on('change', function(e) {
                // let from = $('#governorate_dropdown').val();

                let id = $('#governorate_id').val();
                $.ajax({
                    url: "{{ url('/filterBygovernrate') }}",
                    type: "GET",
                    data: {
                        'id': id,

                    },
                    success: function(data) {
                        console.log(data.view);
                        $('#product-origin').empty();

                        let html =
                            ' <option value="0" selected disabled>Select Region</option>';
                        data.forEach(region => {
                            html += '<option value="' + region.id + '">' + region
                                .title + '</option>';
                        });


                        $('#product-origin').append(html);
                        // $('#tables').html(data.view);

                    }
                });
            });
            $('#product-origin').on('change', function(e) {

                let id = $('#product-origin').val();
                // let from = e.target.value;

                $.ajax({
                    url: "{{ url('/filterByregions') }}",
                    type: "GET",
                    data: {
                        'id': id,
                    },
                    success: function(data) {
                        $('#village_id').empty();
                        let html =
                            ' <option value="0" selected disabled>Select Village</option>';
                        data.forEach(village => {
                            html += '<option value="' + village.id + '">' +
                                village
                                .title + '</option>';
                        });


                        $('#village_id').append(html);
                        // $('#tables').html(data.view);
                        console.log(data);


                    }
                });
            });
        });
    </script>
@endsection
