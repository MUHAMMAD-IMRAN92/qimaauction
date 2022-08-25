<style>
    .table-heading{
    font-size: 5rem !important;
  }
</style>

@extends('admin.layout.default')
@section('title', 'All Transection')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row " style="display:block !important ">
                <div class="content-header-left col-md-6 col-sm-6 col-6 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-11">
                            {{-- <h2 class="content-header-title float-left mb-0">Categories</h2> --}}
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Reports
                                    </li>
                                    <li class="breadcrumb-item active">Bidder Summary
                                    </li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-4 ">
                <form method="get">
                    <select name="auction_id" class="form-control">
                    <option value="">Select Aution</option>
                        @foreach ($auctions as $auction)
                            <option value="{{$auction->id}}">{{$auction->title}}</option>
                        @endforeach
                    </select>
                    <input type="submit" value="Get Data" class="btn btn-primary waves-effect waves-light mt-1 p-0 " >
                </form>
                </div>
                @if(request()->auction_id != '')
                    <div class="col-12 custom_btn_align mb-2">
                        <a href="{{route('bidder_summary_csv',request()->auction_id)}}" class="btn btn-primary waves-effect waves-light " target="_blank" id="export" onclick="exportReport(event.target);">Export<a>
                    </div>
                @endif
            </div>
            <div class="content-body">

                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">

                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">

                                        <div class="table-responsive">
                                            <table class="table zero-configuration" id="customer-table"   data-page-length='50'>
                                                <thead>
                                                    <tr class="table-heading">
                                                        <th>Sr</th>
                                                        <th>Bidding Company</th>
                                                        <th>Former Name</th>
                                                        <th>Bid Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $i=0; @endphp
                                                    @foreach($userMaxBids as $userMaxBid)
                                                    <?php
                                                      foreach ($userMaxBid->products->groupBy('id') as $product){
                                                          $i++;
                                                    ?>
                                                    <tr>
                                                        <td>{{$i}}</td>
                                                        <td>{{$userMaxBid->company}}</td>
                                                        <td>{{$product[0]->product_title}}</td>
                                                        <td>${{$product[0]->bid_amount}}</td>
                                                    </tr>
                                                      <?php } ?>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>

                                                </tfoot>
                                            </table>
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
<script>
    function exportReport(_this) {
       let _url =`{{ route('bidder_summary_csv',request()->auction_id)}}`;
       window.location.href = _url;
    }

 </script>
