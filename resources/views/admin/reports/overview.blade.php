<style>
    .table-heading {
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
            <div class="content-header row" style="display:block !important">
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
                                    <li class="breadcrumb-item active">Overview
                                    </li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
                <form method="get">
                    <div class="flex-align-center">
                        <div class="col-sm-6 col-12 ">
                            <select name="auction_id" class="form-control">
                                <option value="">Select Aution</option>
                                @foreach ($auctions as $auction)
                                    <option value="{{ $auction->id }}">{{ $auction->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-3 col-4">
                            <input type="submit" value="Get Data"
                                class="btn btn-primary mt-res-10 waves-effect waves-light  p-0 ">
                        </div>
                        @if (request()->auction_id != '')
                            <div class="col-sm-3 col-4 mt-res-10 custom_btn_align">
                                <a href="{{ route('auctionreport_csv', request()->auction_id) }}"
                                    class="btn btn-primary waves-effect waves-light" target="_blank" id="export"
                                    onclick="exportReport(event.target);">Export<a>
                            </div>
                        @endif

                    </div>
                </form>
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
                                        <table class="table zero-configuration" id="customer-table">
                                            <thead>
                                                <tr class="table-heading">
                                                    <th>Sr</th>
                                                    <th>Year</th>
                                                    <th>Total Proceeds</th>
                                                    <th>Avg. Price per Pound</th>
                                                    <th>Auction Run Time - 3 min clock</th>
                                                    <th>Auction Run Time - total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        @if (request()->auction_id != '')
                                                            {{ $year }}
                                                        @else
                                                        @endif
                                                    </td>
                                                    <td>${{ number_format($total) }}</td>
                                                    <td>${{ $avgPrice }}</td>
                                                    <td>{{ $timerTotal }}</td>
                                                    <td>{{ $auctionTimeTotal }}</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                {{-- <tr>
                                                        <th>Sr</th>
                                                        <th>Year</th>
                                                        <th>Total Proceeds</th>
                                                        <th>Avg. Price per Pound</th>
                                                        <th>Auction Run Time - 3 min clock</th>
                                                        <th>Auction Run Time - total</th>
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
    </div>
    <!-- END: Content-->
@endsection
<script>
    function exportReport(_this) {
        let _url = `{{ route('auctionreport_csv', request()->auction_id) }}`;
        window.location.href = _url;
    }
</script>
