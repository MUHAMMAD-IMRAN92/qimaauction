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
                                    <li class="breadcrumb-item active">Categories
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 custom_btn_align">
                    <a href="{{ url('/categories/create') }}" class="btn btn-primary waves-effect waves-light">Create
                        Category<a>
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
                                            <table class="table zero-configuration" id="category-table">
                                                <thead>
                                                    <tr class="table-heading">
                                                        <th>Sr</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Image</th>
                                                        <th>Action(s)</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Sr</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Image</th>
                                                        <th>Action(s)</th>

                                                    </tr>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var t = $('#category-table').DataTable({
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
                url: '<?= asset('/categories/allcategories') ?>'
            },
            "columns": [{
                    "data": null
                },
                {

                    "mRender": function(data, type, row) {
                        return '<td >' +
                            row.category_title + '</td>';
                    }
                },
                {

                    "mRender": function(data, type, row) {
                        return '<td>' +
                            row.category_description + '</td>';
                    }
                },
                {

                    "mRender": function(data, type, row) {
                        return '<td>' +
                            `<img width="100px" height="100px" src="{{ url('/storage/app/public/category/`+row.category_image+ `')}}" alt="">`+
                            `</td>`

                    }
                },
                {

                    "mRender": function(data, type, row) {
                                    var ids = btoa(row.id);
                                    return `<td>` +
                                        `<a  href="/categories/edit/`+ids+`">Edit</a>&nbsp&nbsp` +
                                            // `<a  href="/categories/delete/`+ids+`"><i class="fa fa-eye-slash" style="font-size:20px;color:red"></i></a>` +
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
            var BlogInfo = $('#category-table').DataTable().page.info();
            t.column(0, {
                page: 'current'
            }).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1 + BlogInfo.start;
            });

        }).draw();
    });
</script>
