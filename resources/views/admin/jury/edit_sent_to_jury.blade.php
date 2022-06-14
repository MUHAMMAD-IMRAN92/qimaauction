@extends('admin.layout.default')
@section('title', 'All Transection')
@section('content')
 <style>
        label {
                display: table-row;
            }
        .chk {
            display: table;
            float: left;
            margin-right: 15px;
        }
        #chk {
            display: table-row;
            width: 100%;
        }
        .vl {
            border-left: 1px solid black;
            height: 500px;
            }
                                                                               
        /* Might want to wrap a span around your checkbox text */
        .checkboxtext
        {
        font-size: 110%;
        display: inline;
        }

        label.check-label{
            position: relative;
            top: -6px;
            left: -1px;
         }
        .checkbox-pad{
            margin-bottom: 10px;
        }        
 </style>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-sm-9 col-9 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-11">
                            {{-- <h2 class="content-header-title float-left mb-0">Send To Jury</h2> --}}
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                    <li class="breadcrumb-item"><a href="{{ url('/jury/index') }}">Jury</a>
                                    </li>
                                    <li class="breadcrumb-item active">Send To Jury
                                    </li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <div class="content-body">

                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">

                                    {{-- <h2 class="content-header-title float-left mb-0"
                                        style="text-align:center; width: auto;">Send
                                        To Jury</h2> --}}

                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">

                                        <div class="table-responsive col-lg-12">
                                            {{-- {{ url('/jury/send_to_jury') }} --}}
                                            <form action="{{ url('/jury/update_send_to_jury') }}" method="POST" autocomplete="off">
                                                @csrf
                                                <div class="form-group">
                                                    <div class="text-bold-600 font-medium-2 pb-1">
                                                        Please Select Auction
                                                    </div>
                                                    {{-- <p> <strong>Note:</strong> You can select auction.</p> --}}
                                                    <select class="form-control  @error('auction') is-invalid @enderror" name="auction_id" id="auction_id">
                                                        @foreach ($auctions as $key => $jury)
                                                          <option value="{{ $jury->id }}">{{ $jury->title }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('auction')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <div class="text-bold-600 font-medium-2 pb-1">
                                                        Please Select Jury
                                                    </div>
                                                    <p> <strong>Note:</strong> You can select multiple juries.</p>
                                                    <select class="select2 form-control  @error('juries') is-invalid @enderror" multiple="multiple" name="juries[]" id="juries">
                                                        <option value="{{ $selectedjury->id }}" selected>{{ $selectedjury->name }}</option>
                                                    </select>
                                                    @error('juries')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <div class="text-bold-600 font-medium-2 pb-1">
                                                        Please Select Product and Sample
                                                    </div>
                                                    @if(count($senttojury) > 0)
                                                    @foreach ($senttojury as $key => $product)
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                                <input type="hidden" name="products[]" value="{{ $product->product_id }}">
                                                                    <input type="text" class="form-control"  id="products" value="{{ $product->product_title }}">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input type="text" class="form-control"  name="samples[]" id="samples"  value="{{ $product->samples }}" placeholder="Enter Sample Id">              
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input type="number" class="form-control" name="postion[]" id="postion" value="{{$product->postion}}" placeholder="Postion">
                                                        </div>
                                                        <div class="col-md-4">
                                                               <div class="row checkbox-pad">
                                                                <div class="chk">
                                                                    <label class="check-label" for="male"> <b>T1</b> </label>
                                                                    <input type="radio" name="{{$key}}" value="1" class="chk1 pt-5" {{ $product->tables == 1 ? 'checked' : '' }} >
                                                                </div>
                                                                <div class="chk">
                                                                    <label class="check-label" for="male"> <b>T2</b> </label>
                                                                    <input type="radio" name="{{$key}}" value="2" class="chk2 pt-5" {{ $product->tables == 2 ? 'checked' : '' }}>
                                                                </div>
                                                                 <div class="chk">
                                                                    <label class="check-label" for="male"> <b>T3</b> </label>
                                                                    <input type="radio" name="{{$key}}" value="3" class="chk3 pt-5" {{ $product->tables == 3 ? 'checked' : '' }}>
                                                                 </div>
                                                                 <div class="chk">
                                                                    <label class="check-label" for="male"> <b>T4</b> </label>
                                                                    <input type="radio"  name="{{$key}}" value="4" class="chk4 pt-5" {{ $product->tables == 4 ? 'checked' : '' }}>
                                                                 </div>
                                                                 <div class="chk">
                                                                    <label class="check-label" for="male"> <b>T5</b> </label>
                                                                    <input type="radio"  name="{{$key}}" value="5" class="chk4 pt-5" {{ $product->tables == 5 ? 'checked' : '' }}>
                                                                 </div>
                                                               </div>
                                                         </div>
                                                    </div>
                                                    @endforeach
                                                    @else
                                                        <p>No Jury sample Sent yet</p>
                                                    @endif
                                                </div>
                                                @if(count($senttojury) > 0)
                                                <div style="margin-left: 39%">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                                @else
                                                @endif
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

