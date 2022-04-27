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
                            <h2 class="content-header-title float-left mb-0">Edit Product</h2>
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
                                                            placeholder="Product Title" name="id"
                                                            value={{ $product->id }} >
                                                        <div class="form-label-group">

                                                            <input type="text" id="product-title" class="form-control"
                                                                placeholder="Product Title" name="title"
                                                                value="{{ $product->product_title }}">
                                                            <label for="product-title">Product Title</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <textarea id="product-description" class="form-control" name="description">
                                                            {{ $product->product_description }}
                                                             </textarea>
                                                            <label for="product-description">Product Description</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <input type="file" id="image" class="form-control"
                                                                name="image[]" multiple>
                                                            <label for="city-column">Product Image</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
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
                                                    </div>
                                                    <div class="col-md-12 col-12">
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
                                                    </div>
                                                    <div class="col-md-12 col-12">
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
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <span>Select Image:</span> <br>
                                                            @foreach ($product->images as $img)
                                                                <img width="100px" height="100px"
                                                                    src="{{ url('storage/app/public/product/' . $img->image_name) }}"
                                                                    alt="">
                                                                <a
                                                                    href="{{ url('/product/delete_product_image/' . $img->id) }}">
                                                                    <i class="fa fa-times cross" aria-hidden="true"></i></a>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                    <div class="col-12" style="margin-left: 39%">
                                                        <button type="submit"
                                                            class="btn btn-primary mr-1 mb-1">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-outline-warning mr-1 mb-1">Reset</button>
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
@endsection
<script>

</script>
