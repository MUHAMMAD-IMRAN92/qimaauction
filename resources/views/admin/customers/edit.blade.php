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
                        {{-- <h2 class="content-header-title float-left mb-0">Edit Category</h2> --}}
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{url('customer/index') }}">Customers</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Edit Customer</a>
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
                                    <form class="form" action="{{ url('/customer/update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="hidden" class="form-control"  name="id" value={{ $customer->id }}>
                                                        <input type="text" id="name" class="form-control"  name="name" value="{{$customer->name}}" required>
                                                        <label for="name">Name</label>
                                                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="email" id="email" class="form-control"  name="email" value="{{$customer->email}}" required>
                                                        <label for="email">Email</label>
                                                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="password" id="password" class="form-control"  name="password" value="{{$customer->password}}" required>
                                                        <label for="password">Password</label>
                                                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror

                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="number" id="phone" class="form-control"  name="phone_no" value="{{$customer->phone_no}}" required>
                                                        <label for="phone">Phone No</label>
                                                        @error('phone_no') <span class="text-danger error">{{ $message }}</span>@enderror

                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <input type="number" id="bid_limit" class="form-control"  name="bid_limit" value="{{$customer->bid_limit}}" required>
                                                        <label for="bid_limit">Bid Limit/lb</label>
                                                        @error('bid_limit') <span class="text-danger error">{{ $message }}</span>@enderror

                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12">
                                                    <div class="form-label-group">
                                                        <select class="form-select form-select-lg mb-3 form-control" aria-label=".form-select-lg example " name="status">
                                                            <option value="">Select Status</option>
                                                            <option value="Verified"{{ $customer->status == 'Verified' ? 'selected' : '' }}>Verified</option>
                                                            <option value="Pending" {{ $customer->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                            <option value="Blocked" {{ $customer->status == 'Blocked' ? 'selected' : '' }}>Blocked</option>
                                                          </select>
                                                        @error('status') <span class="text-danger error">{{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                                <div class="col-12" style="margin-left: 39%">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                    <button type="submit" class="btn btn-outline-warning mr-1 mb-1">Cancel</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $( document ).ready(function() {
        $("#phone").keypress(function(event) {
  return /\d/.test(String.fromCharCode(event.keyCode));
});
$("#bid_limit").on("input", function(evt) {
   var self = $(this);
   self.val(self.val().replace(/[^0-9\.]/g, ''));
   if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57))
   {
     evt.preventDefault();
   }
 });
});

    </script>

    </script>
@endsection
