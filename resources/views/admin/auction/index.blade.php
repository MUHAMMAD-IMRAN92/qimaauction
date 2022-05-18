@extends('admin.layout.default')
@section('title', 'All Transection')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-sm-9 col-9 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-11">
                            <h2 class="content-header-title float-left mb-0">Auction</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Auction
                                    </li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-3 custom_btn_align">
                            <a href="{{ url('/auction/create') }}" class="btn btn-primary waves-effect waves-light">Create
                                Auction<a>
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
                                            <table class="table zero-configuration" id="auction-table">
                                                <thead>
                                                    <tr>
                                                        <th>Sr</th>
                                                        <th>Title</th>
                                                        <th>Detail</th>
                                                        <th>Bid Amount</th>
                                                        <th>StartDate</th>
                                                        <th>EndDate</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                             
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var t = $('#auction-table').DataTable({
            "processing": true,
            "serverSide": true,
            "deferRender": true,
            "aaSorting": [
                [1, 'asc']
            ],
            "language": {
                "searchPlaceholder": "Search here"
            },
            "ajax": {
                url: '<?= asset('/auction/allauction') ?>'
            },
            "columns": [{
                    "data": null
                },
                {
                    "mRender": function(data, type, row) {
                        return '<td >' +
                            row.title + '</td>';
                    }
                },
                {

                    "mRender": function(data, type, row) {
                        return '<td>' +
                            row.product_detail + '</td>';
                    }
                },
                {

                    "mRender": function(data, type, row) {
                        return '<td>' +
                            row.start_bid_price +'$' + '</td>';
                    }
                },
                {
                "mRender": function(data, type, row) {
                    return '<td>' +
                        row.startDate + ' ' + row.startTime + '</td>';
                }
                },
                {

                "mRender": function(data, type, row) {
                    return '<td>' +
                        row.endDate + ' ' + row.endTime + '</td>';
                }
                },
                {
                    "mRender": function(data, type, row) {
                        var ids = btoa(row.id);
                        return `<td>` +
                            `<a class="" href="/auction/edit/` + ids +
                            `"><i class='fa fa-edit' style='font-size:20px;color:#d1af69'></i></a>&nbsp&nbsp` +
                            `<a class="" href="/auction/delete/` + ids +
                            `"><i class="fa fa-trash-o" style="font-size:20px;color:red"></i></a>` +
                            '</td>'
                    }
                },
            ],
            "columnDefs": [{
                "orderable": false,
                "targets": [0, 1, 2]
            }, ]
        });

        t.on('draw.dt', function() {
            var BlogInfo = $('#auction-table').DataTable().page.info();
            t.column(0, {
                page: 'current'
            }).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1 + BlogInfo.start;
            });

        }).draw();
    });
</script>
