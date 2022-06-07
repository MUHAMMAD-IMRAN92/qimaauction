@extends('admin.layout.default')
@section('title', 'All Transection')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ url('product/index') }}">Products</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Create Product</a>
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
            {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
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
                                        <form class="form" action="{{ url('/product/create') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="product-title " class="form-control  @error('title') is-invalid @enderror"
                                                                name="title">
                                                            <label for="product-title">Product Title</label>
                                                            @error('title')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="sample" class="form-control @error('sample') is-invalid @enderror"
                                                                name="sample">
                                                            <label for="product-title">Sample ID</label>
                                                            @error('sample')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <input type="number" class="form-control @error('postion') is-invalid @enderror" name="postion" id="postion"  oninput="if (this.value > 9) this.value = 0;">
                                                            <label for="product-title">Position</label>
                                                            @error('postion')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <input type="number" class="form-control  @error('table') is-invalid @enderror" name="table" id="table"  oninput="if (this.value > 5 ) this.value = 1;">
                                                            <label for="product-title">Table</label>
                                                            @error('table')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <textarea id="product-description" class="form-control" name="description" >
                                                           </textarea>
                                                            <label for="product-description">Product Description</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <label for="product-category">Select Category</label>
                                                            <div class="form-group">
                                                                <select class="select2 form-control @error('category_id') is-invalid @enderror" name="category_id"
                                                                    id="product-category" required>
                                                                    <option selected>Please Select Category</option>
                                                                    @foreach ($category as $key => $cat)
                                                                        <option value="{{ $cat->id }}">
                                                                            {{ $cat->category_title }}</option>
                                                                    @endforeach
                                                                    @error('category_id')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <label for="product-flavour">Select Flavour</label>
                                                            <div class="form-group">
                                                                <select class="select2 form-control" name="flavour_id"
                                                                    id="product-flavour" required>
                                                                    <option selected>Please Select Flavour</option>
                                                                    @foreach ($flavour as $key => $flv)
                                                                        <option value="{{ $flv->id }}">
                                                                            {{ $flv->flavour_title }}</option>
                                                                    @endforeach
                                                                 
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <label for="product-lot-type">Lot Type</label>
                                                            <div class="form-group">
                                                                <select class="select2 form-control" name="pro_lot_type"
                                                                    id="product-lot-type" required>
                                                                    <option selected>Please Select Lot Type</option>
                                                                    <option value="1">Farmer Lot</option>
                                                                    <option value="2">Community Lot</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <label for="product-process">Select Process</label>
                                                            <div class="form-group">
                                                                <select class="select2 form-control" name="pro_process"
                                                                id="product-process" required>
                                                                <option selected>Please Select Flavour</option>
                                                                @foreach ($process as $key => $flv)
                                                                    <option value="{{ $flv->id }}">
                                                                        {{ $flv->title }}</option>
                                                                @endforeach

                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <label for="product-origin">Select Origin</label>
                                                            <div class="form-group">
                                                                <select class="select2 form-control" name="pro_origin"
                                                                    id="product-origin" required>
                                                                    <option selected>Please Select Origin</option>
                                                                    @foreach ($origin as $key => $org)
                                                                        <option value="{{ $org->id }}">
                                                                            {{ $org->region_name }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <label for="product-origin">Select Region</label>
                                                            <div class="form-group">
                                                                <select class="select2 form-control" name="region_id"
                                                                    id="product-origin" required>
                                                                    <option selected>Please Select Region</option>
                                                                    @foreach ($region as $key => $org)
                                                                        <option value="{{ $org->id }}">
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
                                                                        <option value="{{ $org->id }}">
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
                                                                        <option value="{{ $org->id }}">
                                                                            {{ $org->title }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 col-12">
                                                        <div class="form-label-group">
                                                            <input  type="file" id="image" class="form-control"
                                                            accept="image/png, image/jpeg" name="image[]" multiple required>
                                                            <label for="city-column">Product Image</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-2">
                                                        <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                                            alt="" style="max-height: 100px;max-width: 100px;">
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
    <script>
          $(document).ready(function (e) {        
                    $('#image').change(function(){
                            
                    let reader = new FileReader();

                    reader.onload = (e) => { 

                        $('#preview-image-before-upload').attr('src', e.target.result); 
                    }

                    reader.readAsDataURL(this.files[0]); 
                    
                    });
        });
    </script>
@endsection
