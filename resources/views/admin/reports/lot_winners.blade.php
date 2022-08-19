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
            <div class="content-header row">
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
                                    <li class="breadcrumb-item active">Lot Winners
                                    </li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-6 custom_btn_align">
                    <a href="{{route('lotwinners_report_csv')}}" class="btn btn-primary waves-effect waves-light" target="_blank" id="export" onclick="exportReport(event.target);">Export<a>
                </div>
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
                                            <table class="table zero-configuration" id="customer-table" data-page-length='50'>
                                                <thead>
                                                    <tr class="table-heading">
                                                        {{-- <th>Sr</th> --}}
                                                        <th>Rank</th>
                                                        <th>Score</th>
                                                        <th>Farmer</th>
                                                        <th>Weight (lbs)</th>
                                                        <th>High Bid</th>
                                                        <th>Total Value</th>
                                                        <th>Company</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- @dd($auctionProducts); --}}
                                                    @foreach ($auctionProducts as  $product)
                                                    <tr>
                                                        {{-- <td>{{$loop->iteration}}</td> --}}
                                                        <td>{{$product->rank}}</td>
                                                        <td>{{$product->jury_score}}</td>
                                                        @foreach ($product->products as $productData)
                                                            <td>{{$productData->product_title}}</td>
                                                        @endforeach
                                                        <td>{{$product->weight}}</td>
                                                        <td>${{ isset($product->highestbid) ? $product->highestbid->bid_amount : $product->start_price }}</td>
                                                        <td>${{ isset($product->highestbid) ? $product->highestbid->bid_amount * $product->weight : $product->start_price*$product->weight }}</td>
                                                        @if (isset($product->highestbid))
                                                            @foreach ($product->highestbid->user as $userData)
                                                                <td>{{ $userData->company ?? '---' }}</td>
                                                            @endforeach
                                                            @else
                                                            <td>---</td>
                                                        @endif
                                                    </tr>

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
       let _url =`{{ route('lotwinners_report_csv')}}`;
       window.location.href = _url;
    }
 </script>
{{-- <script>
    $(document).ready(function() {
        $('#customer-table').dataTable( {
    "pageLength": 50
  } );
} );

    </script> --}}
