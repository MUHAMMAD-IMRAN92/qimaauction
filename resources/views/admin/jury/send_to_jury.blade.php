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

                                    <h2 class="content-header-title float-left mb-0"
                                        style="text-align:center; width: 100%;">Send
                                        To Jury</h2>

                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">

                                        <div class="table-responsive">
                                            <form action="{{ url('/jury/send_to_jury') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <div class="text-bold-600 font-medium-2">
                                                        Please Select Jury
                                                    </div>
                                                    <p> <strong>Note:</strong> You can select multiple juries.</p>
                                                    <select class="select2 form-control" multiple="multiple"
                                                        name="juries[]">
                                                        @foreach ($juries as $key => $jury)
                                                            <option value="{{ $jury->id }}">{{ $jury->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <div class="text-bold-600 font-medium-2">
                                                        Please Select Product
                                                    </div>
                                                    <p> <strong>Note:</strong> You can select multiple Products.</p>
                                                    <select class="select2 form-control" multiple="multiple"
                                                        name="products[]" id="product_select">
                                                        @foreach ($products as $key => $product)
                                                            <option value="{{ $product->id }}">
                                                                {{ $product->product_title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group" id="pro_div">
                                                    <!-- Striped rows start -->
                                                    <div class="row" id="table-striped">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h4 class="card-title">Select Products:</h4>
                                                                </div>
                                                                <div class="card-content">
                                                                    <div class="card-body">

                                                                    </div>
                                                                    <div class="">
                                                                        <table class="table table-striped mb-0">
                                                                            <thead>
                                                                                <th>Product Title</th>
                                                                                <th>Sample Title</th>
                                                                                <th></th>
                                                                            </thead>
                                                                            <tbody id="product_table_body">


                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Striped rows end -->
                                                </div>
                                                <div style="margin-left: 39%">
                                                    <button type="submit" class="btn btn-primary ">Submit</button>
                                                </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
   
    $(function() { 
        // var jq14 = jQuery.noConflict(true); 
        $('#product_select').change(function() {
            // console.log($('#product_select').options);
            // var selected = $("#product_select :selected").map((_, e) => e.text).get();
            // alert(selected);
            var html = '';
            $("#product_select :selected").map((_, e) => {
                // html += '<input pleaceholder="this"/>';
                // console.log(element);
                html += `<tr>`;
                html += ` <td scope = "col">` + e.text + `</td>`;
                html +=
                    `<td scope = "col">  <input type="text" name="samples[]" class="form-control"  id="basicInput" placeholder="Enter sample title" style="width:28% !important"></td>`;
                html += `<td scope = "col"><input type="hidden" name="product_ids[]" value="` +
                    e.value +
                    `" class="form-control"  id="basicInput" placeholder="Enter sample title" style="width:28% !important"></td>`
                html += `</tr>`;
            });
            // console.log(html);
            $('#product_table_body').html(html);
        });
    });
</script>
