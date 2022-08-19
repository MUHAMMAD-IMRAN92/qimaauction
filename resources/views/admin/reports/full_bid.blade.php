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
                                    <li class="breadcrumb-item active">Full Bid
                                    </li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-6 custom_btn_align">
                    <a href="{{route('fullbid_csv')}}" class="btn btn-primary waves-effect waves-light" target="_blank" id="export" onclick="exportReport(event.target);">Export<a>
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
                                            <table class="table zero-configuration" id="customer-table" data-page-length='100'>
                                                <thead>
                                                    <tr class="table-heading">
                                                        <th>Sr</th>
                                                        <th>Bid Amount</th>
                                                        <th>Bidder Company Name</th>
                                                        <th>Lot</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($singlebids as $singlebid )
                                                         <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>${{$singlebid->bid_amount}}</td>
                                                        @foreach ($singlebid->user as $user)
                                                        <td>{{$user->company}}</td>
                                                        @endforeach
                                                        <td>#{{$loop->iteration}} {{$singlebid->products->product_title}}</td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                                <tfoot>
                                                    {{-- <tr>
                                                      <th>Sr</th>
                                                        <th>Bid Amount</th>
                                                        <th>Bidder Company Name</th>
                                                        <th>Lot</th>
                                                    </tr> --}}
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
       let _url =`{{ route('fullbid_csv')}}`;
       window.location.href = _url;
    }
 </script>
