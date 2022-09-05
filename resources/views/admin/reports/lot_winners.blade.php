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
            <div class="content-header row" style="display:block !important ">
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

                <form method="get">
                    <div class="flex-align-center">
                        <div class="col-sm-6 col-12">
                            <select name="auction_id" class="form-control">
                                <option value="">Select Aution</option>
                                @foreach ($auctions as $auction)
                                    <option value="{{ $auction->id }}">{{ $auction->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-3 col-4">
                            <input type="submit" value="Get Data"
                                class="btn btn-primary mt-res-10 waves-effect waves-light p-0 ">
                        </div>
                        @if (request()->auction_id != '')
                            <div class="col-sm-3 col-4 mt-res-10 custom_btn_align">
                                <a href="{{ route('lotwinners_report_csv', request()->auction_id) }}"
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
                                            <table class="table zero-configuration" id="customer-table"
                                                data-page-length='50'>
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
                                                        <th>Delivery Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @if (!empty($auctionWinners))
                                                        @foreach ($auctionWinners as $winners)
                                                            @if ($winners)
                                                                <tr>
                                                                    <td>{{ $winners->aproducts->rank }}</td>
                                                                    <td>{{ $winners->aproducts->jury_score }}</td>
                                                                    <td>{{ $winners->products->product_title }}</td>
                                                                    <td>{{ $winners->aproducts->weight }}</td>
                                                                    <td>${{ number_format($winners->bid_amount, 2) }}</td>
                                                                    <td>${{ number_format($winners->total_value, 2) }}</td>
                                                                    <td>{{ $winners->users->company ?? '---' }}</td>
                                                                    <td>{{ $winners->delivery_status }}
                                                                        <a href=""
                                                                            class="btn btn-primary waves-effect waves-light"id="export"
                                                                            data-toggle="modal"
                                                                            data-target="#exampleModal{{$winners->id}}">Change<a>
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal{{$winners->id}}" tabindex="-1"
                                                                role="dialog" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">
                                                                                Shipping & Delivery Details</h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form method="POST" action="">
                                                                            @csrf
                                                                            <div class="modal-body">

                                                                                <div class="form-label-group">
                                                                                    <select
                                                                                        class="form-select form-select-lg mb-3 form-control status{{$winners->id}}"
                                                                                        aria-label=".form-select-lg example "
                                                                                        name="delivery_status"
                                                                                        id="delivery_status"
                                                                                        data-id="{{ $winners->id }}">
                                                                                        <option value="" selected>
                                                                                            Select Status
                                                                                        </option>
                                                                                        <option
                                                                                            value="Pending"{{ $winners->delivery_status == 'Pending' ? 'selected' : '' }}>
                                                                                            Pending</option>
                                                                                        <option
                                                                                            value="Preparing"{{ $winners->delivery_status == 'Preparing' ? 'selected' : '' }}>
                                                                                            Preparing</option>
                                                                                        <option
                                                                                            value="Delivered"{{ $winners->delivery_status == 'Delivered' ? 'selected' : '' }}>
                                                                                            Delivered</option>
                                                                                        <option
                                                                                            value="Shipped"{{ $winners->delivery_status == 'Shipped' ? 'selected' : '' }}>
                                                                                            Shipped</option>

                                                                                    </select>
                                                                                    <div id="shipping_details{{$winners->id}}"
                                                                                        @if($winners->delivery_status != 'Shipped') style="display: none; @endif">
                                                                                        <select
                                                                                            class="form-select form-select-lg mb-3 form-control"
                                                                                            id="shipping_company{{$winners->id}}">
                                                                                            <option value=""selected>
                                                                                                Select Company
                                                                                            </option>
                                                                                            <option value="Fedex"{{$winners->shipping_company == 'Fedex' ? 'selected' : '' }}>Fedex
                                                                                            </option>
                                                                                            <option value="DHL"{{$winners->shipping_company == 'DHL' ? 'selected' : '' }}>DHL
                                                                                            </option>
                                                                                        </select>
                                                                                        <div class="form-group">
                                                                                            <label>URL</label>
                                                                                            <input type="url"
                                                                                                class="form-control"
                                                                                                name="company_url"
                                                                                                id="company_url{{$winners->id}}"
                                                                                                value="{{$winners->company_url ?? ''}}}">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label>Tracking Number</label>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                name="tracking_number"
                                                                                                id="tracking_number{{$winners->id}}"
                                                                                                value="{{$winners->tracking_number ?? ''}}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal">Close</button>
                                                                                <button type="button"
                                                                                    class="btn btn-primary" id="delivery_details" data-id="{{$winners->id}}">Save
                                                                                    changes</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
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
    <script>
        function exportReport(_this) {
            let _url = `{{ route('lotwinners_report_csv', request()->auction_id) }}`;
            window.location.href = _url;
        }
    </script>
    <script>
        $(document).on('change', '#delivery_status', function(e) {
            var id = $(this).attr('data-id');
            var status = $('.status'+id).val();
            if (status == 'Shipped') {
                $('#shipping_details'+id).show();
            } else {
                $('#shipping_details'+id).hide();
            }
        });
        $(document).on('click', '#delivery_details', function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            var status = $('.status'+id).val();
            var company = $('#shipping_company'+id).val();
            var url = $('#company_url'+id).val();
            var tracking_num = $('#tracking_number'+id).val();
            $.ajax({
                url: "{{ route('savedeliverystatus') }}",
                method: 'POST',
                data: {
                    id: id,
                    value: status,
                    company: company,
                    url: url,
                    tracking_num: tracking_num,
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    console.log(response.id)
                    var winnerid = response.id;
                    $("#exampleModal"+id).hide();
                    location.reload();
                },
                error: function(error) {
                    console.log(error)
                }
            });
        });
    </script>

@endsection
