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
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ url('jury/index') }}">Auction</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Create Auction</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 custom_btn_align">
                    <a class="btn btn-primary waves-effect waves-light" style="color: white;" id="product">Create Auction
                        Product<a>
                </div>
                <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table zero-configuration" id="auction-table">
                                        <thead>
                                            <tr>
                                                {{-- <th>Id</th> --}}
                                                <th>Title</th>
                                                <th>Weight</th>
                                                <th>Size</th>
                                                <th>Rank</th>
                                                {{-- <th>Jury Score</th> --}}
                                                <th>Action(s)</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 0;
                                            @endphp
                                            @if (isset($auction_products))
                                                @foreach ($auction_products as $auction)
                                                    @foreach ($auction->products as $key => $pro)
                                                        <tr id="{{ ++$i }}">
                                                            <td>
                                                                {{ $pro->product_title }}
                                                            </td>
                                                            <td>
                                                                {{ $auction->weight }}
                                                            </td>
                                                            <td>
                                                                {{ $auction->size }}
                                                            </td>
                                                            <td>
                                                                {{ $auction->rank }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                            @else
                                                {{-- <tr id="nodata">
                                                    <td></td>
                                                    <td >No Auction Product yet</td>
                                                </tr> --}}
                                            @endif

                                        </tbody>

                                    </table>
                                </div>
                </div>
            </div>
        </div>
    </div>



@endsection
