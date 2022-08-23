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
                        <h2 class="content-header-title float-left mb-0">Edit Auction</h2>
                        {{-- <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{url('jury/index') }}">Juries</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Create Jury</a>
                                </li>
                            </ol>
                        </div> --}}
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
                                    <form class="form" action="{{ url('/auction/update') }}" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6 col-6">                                                    <div class="form-label-group">
                                                        <input type="text" id="name" class="form-control" value="{{$auction->title}}" placeholder="Title" name="title">
                                                        <label for="name">Title</label>
                                                        @error('title')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-6">
                                                    <div class="form-label-group">
                                                        <input type="datetime-local" class="form-control" name="startDatetime" value="{{$auction->startDate}}" placeholder="select Start Date /UK"/>
                                                        <label for="name">Date Time</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-6">
                                                    <div class="form-label-group">
                                                        <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example " name="is_active">
                                                            <option value="" selected>Select Status</option>
                                                            <option value="1"{{$auction->is_active == '1' ? 'selected' : ''}}>Active</option>
                                                            <option value="0"{{$auction->is_active == '0' ? 'selected' : ''}}>In Active</option>
                                                          </select>
                                                        @error('role') <span class="text-danger error">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                                <input type="hidden" name="id" value="{{$auction->id}}">
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <textarea id="product-detail" class="form-control" name="product_detail" rows="2" cols="5">
                                                            {{ $auction->product_detail }}
                                                         </textarea>
                                                        <label for="product-detail">Auction Detail</label>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <label for="product-category">Select Product</label>
                                                        <div class="form-group">
                                                            <select class="select2 form-control" name="product_id"
                                                                id="product_id">
                                                                <option selected disabled>Please Select product</option>
                                                                @foreach ($products as $key => $prod)
                                                                    <option value="{{ $prod->id }}" {{($prod->id == $auction->product_id) ? 'selected' : ''}}>
                                                                        {{ $prod->product_title }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div> --}}

                                                {{-- <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <label for="product-category">Select Genetics</label>
                                                        <div class="form-group">
                                                            <select class="select2 form-control" name="genetic_id"
                                                                id="genetic_id">
                                                                <option selected disabled>Please Select genetics</option>
                                                                @foreach ($genetics as $key => $prod)
                                                                    <option value="{{ $prod->id }}" {{($prod->id == $auction->genetic_id) ? 'selected' : ''}}>
                                                                        {{ $prod->title }}</option>
                                                                @endforeach

                                                            </select>

                                                        </div>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <label for="product-category">Select Process</label>
                                                        <div class="form-group">
                                                            <select class="select2 form-control" name="process_id"
                                                                id="process_id">
                                                                <option selected disabled>Please Select process</option>
                                                                @foreach ($process as $key => $prod)
                                                                    <option value="{{ $prod->id }}" {{($prod->id == $auction->process_id) ? 'selected' : ''}}>
                                                                        {{ $prod->title }}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="number" id="lotnumber" class="form-control @error('lotnumber') is-invalid @enderror" value="{{$auction->lotnumber}}" name="lotnumber" required>
                                                        <label for="name">Lot No</label>
                                                        @error('lotnumber')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="lottitle" class="form-control @error('lottitle') is-invalid @enderror"  name="lottitle" value="{{$auction->lottitle}}" required>
                                                        <label for="name">Lot Title</label>
                                                        @error('lottitle')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="farm" class="form-control @error('farm') is-invalid @enderror" value="{{$auction->farm}}" placeholder="farm" name="farm">
                                                        <label for="name">Farm</label>
                                                        @error('farm')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div>
                                                <input type="hidden" name="id" value="{{$auction->id}}">
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                       <div class="row">
                                                        <div class="col-lg-10">
                                                            <input type="text" class="form-control pickadate" name="startDate" value="{{$auction->startDate}}"/>
                                                        </div>
                                                        <div class="col-lg-2" style="margin-left: -30px">
                                                            <input type='text' class="form-control pickatime" name="startTime" value="{{$auction->startTime}}" />
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
                                                            <input type="text" class="form-control pickadate" name="endDate" value="{{$auction->endDate}}"/>
                                                            </div>
                                                        <div class="col-sm-2" style="margin-left: -30px">
                                                            <input type='text' class="form-control pickatime" name="endTime" value="{{$auction->endTime}}" />
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
                                                        value="{{$auction->start_bid_price}}"
                                                        placeholder="start_bid_price" name="start_bid_price">
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
                                                        placeholder="increment_bid_price" name="increment_bid_price" value="{{$auction->increment_bid_price}}">
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
                                                        placeholder="reserved_bid_price" name="reserved_bid_price" value="{{$auction->reserved_bid_price}}">
                                                        <label for="reserved_bid_price">Reserved Bid Price</label>
                                                        @error('reserved_bid_price')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="number" id="weight" class="form-control @error('weight') is-invalid @enderror" value="{{$auction->weight}}" placeholder="weight" name="weight">
                                                        <label for="name">Weight</label>
                                                        @error('weight')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="number" id="size" class="form-control @error('size') is-invalid @enderror" value="{{$auction->size}}" placeholder="size" name="size">
                                                        <label for="name">Size</label>
                                                        @error('size')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                    </div>
                                                </div>
                                                  <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="number" id="score" class="form-control @error('score') is-invalid @enderror" value="{{$auction->score}}" placeholder="score" name="score">
                                                        <label for="name">Score</label>
                                                        @error('score')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="rank" class="form-control @error('rank') is-invalid @enderror" value="{{$auction->rank}}" placeholder="rank" name="rank">
                                                        <label for="name">Rank</label>
                                                        @error('rank')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                    </div>
                                                </div> --}}

                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="file" id="image" class="form-control @error('image') is-invalid @enderror""
                                                            name="image[]" multiple>
                                                        <label for="city-column">Auction Image</label>
                                                        @error('image')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-2">
                                                    <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                                                        alt="" style="max-height: 100px;max-width: 100px;">
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <span>Select Image:</span> <br>
                                                        @foreach ($auctionimages->images as $img)
                                                            <img width="100px" height="100px"
                                                                src="{{ url('storage/app/public/auction/' . $img->image_name) }}"
                                                                alt="">
                                                            <a
                                                                href="{{ url('/auction/delete_product_image/' . $img->id) }}">
                                                                <i class="fa fa-times cross" aria-hidden="true"></i></a>
                                                        @endforeach
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
    $(document).ready(function(){
        $('#image').change(function(){

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

                });
      // jQuery.datetimepicker.setLocale('de');
    //   CKEDITOR.replace( 'product_detail' );
      $.datetimepicker.setDateFormatter({
          parseDate: function (date, format) {
              var d = moment(date, format);
              return d.isValid() ? d.toDate() : false;
          },
          formatDate: function (date, format) {
              return moment(date).format(format);
          },
      });
      jQuery('#datetimepicker').datetimepicker({
          format:'DD-MM-YYYY h:mm',
          formatTime:'h:mm',
          formatDate:'DD.MM.YYYY',
          minDate: new Date(),
          });
      jQuery('#datetimepicker1').datetimepicker({
      format:'DD-MM-YYYY h:mm',
      formatTime:'h:mm',
      formatDate:'DD.MM.YYYY',
      minDate: new Date(),
      });
  });
</script>
@endsection
