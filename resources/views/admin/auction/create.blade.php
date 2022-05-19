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
                                <li class="breadcrumb-item"><a href="{{url('/') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{url('jury/index') }}">Juries</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Create Jury</a>
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
                                    <form class="form" action="{{ url('/auction/create') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="name" class="form-control @error('title') is-invalid @enderror" name="title" required>
                                                        <label for="name">Lot Title</label>
                                                        @error('title')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
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
                                                        <textarea id="product-detail" class="form-control" name="product_detail" @error('product_detail') is-invalid @enderror>
                                                    </textarea>
                                                        <label for="product-detail">Auction Detail</label>
                                                        @error('product_detail')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    </div>
                                                </div> 
                                                {{-- <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <div class="text-bold-600 font-medium-2">
                                                            Please Select Product
                                                        </div>
                                                        <p> <strong>Note:</strong> You can select multiple Products.</p>
                                                        <select class="select2 form-control" multiple="multiple"
                                                            name="products[]" id="product_select">
                                                            @foreach ($products as $key => $product)
                                                                <option value="{{ $product->id }}">
                                                                    {{ $product->product_title }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div> --}}
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
                                                       <div class="row">
                                                        <div class="col-lg-10">
                                                            <input type="text" class="form-control pickadate" name="startDate" placeholder="select Start Date"/>
                                                        </div>
                                                        <div class="col-lg-2" style="margin-left: -30px">
                                                            <input type='text' class="form-control pickatime" name="startTime" placeholder="select Start Time" />
                                                        </div>
                                                       </div>
                                                       <input type="hidden" name="">
                                                       <label for="date">Start Date & Time</label> 
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12 col-12">
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
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="farm" class="form-control @error('farm') is-invalid @enderror"  name="farm">
                                                        <label for="name">Farm</label>
                                                        @error('farm')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="file" id="image" class="form-control"
                                                        accept="image/png, image/jpeg"  name="image[]" multiple required>
                                                        <label for="city-column">Auction Image</label>
                                                        @error('image')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div> 
                                                   
                                                <div class="col-12" style="margin-left: 39%">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
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
   
<script>  
  $(document).load(function(){
$('.datepicker').pickadate({
  editable: true
})
});
      $(document).ready(function(){
        CKEDITOR.replace( 'product_detail' );
     
    });
 </script>
@endsection