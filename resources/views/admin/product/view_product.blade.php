@extends('admin.layout.default')
@section('content')


    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Product Details</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ url('/product/index') }}">Products</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">View Product</a>
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a
                                    class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- app ecommerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-5 mt-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="card">
                                            <div class="card-header">
                                                {{-- <h4 class="card-title">Basic Example</h4> --}}
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div id="carousel-example-generic" class="carousel slide"
                                                        data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carousel-example-generic" data-slide-to="0"
                                                                class="active"></li>
                                                            <li data-target="#carousel-example-generic" data-slide-to="1">
                                                            </li>
                                                            <li data-target="#carousel-example-generic" data-slide-to="2">
                                                            </li>
                                                        </ol>
                                                        <div class="carousel-inner" role="listbox">
                                                            {{-- <div class="carousel-item active">
                                                        <img class="img-fluid" src="../../../app-assets/images/slider/02.jpg" alt="First slide">
                                                    </div> --}}
                                                            @php
                                                                $count = 1;
                                                            @endphp
                                                            @foreach ($product->images as $key => $img)
                                                                <div
                                                                    class="carousel-item {{ $count == 1 ? 'active' : '' }}">
                                                                    <img class="img-fluid"
                                                                        src="{{ url('storage/app/public/product/' . $img->image_name) }}"
                                                                        alt="Second slide">
                                                                </div>
                                                                @php
                                                                    $count++;
                                                                @endphp
                                                            @endforeach
                                                            {{-- <div class="carousel-item">
                                                        <img class="img-fluid" src="../../../app-assets/images/slider/01.jpg" alt="Third slide">
                                                    </div> --}}
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carousel-example-generic"
                                                            role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carousel-example-generic"
                                                            role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h5>{{ $product->product_title }}
                                    </h5>
                                    <p class="text-muted">by {{ App\Models\User::find($product->user_id)->name }}</p>

                                    <hr>
                                    <p>{{ $product->product_description }}</p>



                                    <hr>


                                    <div class="d-flex flex-column flex-sm-row">
                                        {{-- <a href="#" type="button" class="" data-toggle="modal"
                                            data-target="#inlineForm">
                                             <button
                                                class="btn btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0"><i
                                                    class="fa fa-plane mr-25"></i>Send To Jury</button></a> --}}
                                        {{-- <button class="btn btn-outline-danger"><i class="feather icon-heart mr-25"></i>WISHLIST</button> --}}
                                    </div>
                                    {{-- <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#inlineForm">
                                        Launch Modal
                                    </button> --}}

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel33" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel33">Send To Jury</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('/product/sent_to_jury') }}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <label>Jury: </label>
                                                        <div class="form-group">
                                                            <input type="hidden" name="product_id" value={{ $product->id }} class="form-control">
                                                            <div class="row">


                                                                @foreach ($juries as $jury)
                                                                    <div class="col-md-3">


                                                                        <fieldset>
                                                                            <div
                                                                                class="vs-checkbox-con vs-checkbox-primary">
                                                                                <input type="checkbox" name="jury[]"
                                                                                    value="{{ $jury->id }}">
                                                                                <span class="vs-checkbox">
                                                                                    <span class="vs-checkbox--check">
                                                                                        <i
                                                                                            class="vs-icon feather icon-check"></i>
                                                                                    </span>
                                                                                </span>
                                                                                <span
                                                                                    class="">{{ $jury->name }}</span>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>

                                                        <label>Samples: </label>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Please Enter Sample Seprated With commas"
                                                                name="samples" class="form-control">
                                                        </div>
                                                        <label>Message: </label>
                                                        <div class="form-group">
                                                            <textarea name="msg" class="form-control">
                                                                 </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary"
                                                            >Send</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- app ecommerce details end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection
