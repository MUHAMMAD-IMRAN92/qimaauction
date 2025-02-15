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
                            <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Bid Limit
                                    </li>
                                </ol>
                            </div>
                    </div>
                </div>
                </div>
                <div class=" col-6 custom_btn_align">
                    <a href="{{ url('/bidlimit/create') }}" class="btn btn-primary waves-effect waves-light">Create
                        Bid Limit<a>
                    <a href="{{ url('/bidlimit/edit') }}" class="btn btn-primary waves-effect waves-light">Edit<a>
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
                                            <table class="table zero-configuration" id="bidlimit-table">
                                                <thead>
                                                    <tr>
                                                        <th>Sr</th>
                                                        <th>Min</th>
                                                        <th>Increment</th>
                                                        <th>Max</th>
                                                        {{-- <th>Action(s)</th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i=1;
                                                    @endphp
                                                    @foreach ($bidLimits as $bidLimit)
                                                        <tr>
                                                            <td>{{$i++}}</td>
                                                            <td>{{$bidLimit->min}}</td>
                                                            <td>{{$bidLimit->increment}}</td>
                                                            <td>{{$bidLimit->max}}</td>
                                                        </tr>
                                                    @endforeach
                                                    {{-- @php
                                                        $i  =  1;
                                                    @endphp
                                                    @foreach ($bidLimits as $bid)
                                                    @php
                                                        $minVal     =   json_decode($bid->min);
                                                        $increments =   json_decode($bid->increment);
                                                        $maxVal     =   json_decode($bid->max);
                                                    @endphp
                                                    <tr>
                                                        <td>{{$i++}}</td>
                                                        <td>
                                                            @foreach ($minVal as $minimum )
                                                                {{$minimum}} <br>
                                                            @endforeach
                                                    </td>
                                                        <td>
                                                            @foreach ($increments as $increment )
                                                                {{$increment}} <br>
                                                            @endforeach
                                                    </td>
                                                        <td>
                                                            @foreach ($maxVal as $maximum )
                                                                {{$maximum}} <br>
                                                            @endforeach
                                                        </td>
                                                        <td> <a href="{{ url('bidlimit/edit',$bid->id) }}"><i class="fas fa-edit text-primary"></i></a>
                                                            </td>
                                                    </tr>
                                                    @endforeach --}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- <script>
    $(document).ready(function() {
           var t = $('#bidlimit-table').DataTable({
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
                url: '<?= asset('/bidlimit/allBidlimit') ?>'
            },
            "columns": [{
                    "data": null
                },
                {
                    "mRender": function(data, type, row) {
                        return '<td >' +
                            row.min + '</td>';
                    }
                },
                {

                    "mRender": function(data, type, row) {
                        return '<td>' +
                            row.increment + '</td>';
                    }
                },
                {
                "mRender": function(data, type, row) {
                    return '<td>' +
                        row.max + '</td>';
                }
                },
                // {
                //     "mRender": function(data, type, row) {
                //         var ids = btoa(row.id);
                //         return `<td>` +
                //             `<a class="" href="/bidlimit/edit/` + ids +
                //             `">Edit</a>&nbsp&nbsp` +
                //             `<a class="" href="/bidlimit/delete/` + ids +
                //             `">Delete</a>` +
                //             '</td>'
                //     }
                // },
            ],
            "columnDefs": [{
                "orderable": false,
                "targets": [0, 1, 2]
            }, ]
        });

        t.on('draw.dt', function() {
            var BlogInfo = $('#bidlimit-table').DataTable().page.info();
            t.column(0, {
                page: 'current'
            }).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1 + BlogInfo.start;
            });

        }).draw();
    });
</script> --}}
