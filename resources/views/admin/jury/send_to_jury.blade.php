@extends('admin.layout.default')
@section('title', 'All Transection')
@section('content')
 <style>
     input[type=checkbox]
        {
        /* Double-sized Checkboxes */
        -ms-transform: scale(2); /* IE */
        -moz-transform: scale(2); /* FF */
        -webkit-transform: scale(2); /* Safari and Chrome */
        -o-transform: scale(2); /* Opera */
        transform: scale(2);
        padding: 10px;
        }
        label {
                display: table-row;
            }
        .chk {
            display: table;
            float: left;
            margin-right: 15px;
        }
        #chk {
            display: table-row;
            width: 100%;
        }
        .vl {
            border-left: 1px solid black;
            height: 500px;
            }
                                                                               
        /* Might want to wrap a span around your checkbox text */
        .checkboxtext
        {
        font-size: 110%;
        display: inline;
        }

        label.check-label{
            position: relative;
            top: -6px;
            left: -1px;
         }

        table.jury-table.table-bordered th, .table-bordered td {
                border: 1px solid #eacf99;
                text-align: center;
                }
                table.jury-table.tbody{
                    overflow-x: hidden;
                }
         .sample-id-fields input{
             margin-bottom: 10px;
         }       
 </style>
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

                                    {{-- <h2 class="content-header-title float-left mb-0"
                                        style="text-align:center; width: auto;">Send
                                        To Jury</h2> --}}

                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">

                                        <div class="table-responsive">
                                            {{-- {{ url('/jury/send_to_jury') }} --}}
                                            <form action="{{ url('/jury/send_to_jury') }}" method="POST" autocomplete="off">
                                                @csrf
                                                <div class="form-group">
                                                    <div class="text-bold-600 font-medium-2 pb-1">
                                                        Please Select Auction
                                                    </div>
                                                    {{-- <p> <strong>Note:</strong> You can select auction.</p> --}}
                                                    <select class="form-control  @error('auction') is-invalid @enderror" name="auction_id" id="auction_id">
                                                        @foreach ($auctions as $key => $jury)
                                                          <option value="{{ $jury->id }}">{{ $jury->title }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('auction')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <div class="text-bold-600 font-medium-2 pb-1">
                                                        Please Select Jury
                                                    </div>
                                                    <p> <strong>Note:</strong> You can select multiple juries.</p>
                                                    <select class="select2 form-control  @error('juries') is-invalid @enderror" multiple="multiple" name="juries[]" id="juries">
                                                         @php
                                                              $arr = array();
                                                         @endphp
                                                        @foreach ($juries as $key => $jury)
                                                          @if(in_array($jury->name,$arr))
                                                            <option value="{{ $jury->id }}">{{ $jury->name.'('.$jury->email.')' }}</option>
                                                          @else
                                                             @php
                                                                 array_push($arr,$jury->name)
                                                             @endphp
                                                          <option value="{{ $jury->id }}">{{ $jury->name }}</option>
                                                          @endif
                                                        @endforeach
                                                    </select>
                                                    @error('juries')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <div class="text-bold-600 font-medium-2 pb-1">
                                                        Please Select Product and Sample
                                                    </div>
                                                    {{-- <p> <strong>Note:</strong> You can select Product.</p> --}}
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                                @foreach ($products as $key => $product)
                                                                <input type="hidden" name="products[]" value="{{ $product->id }}">
                                                                    <input type="text" class="form-control"  id="products" value="{{ $product->product_title }}">
                                                                @endforeach
                                                        </div>
                                                    
                                                        <div class="col-md-4 sample-id-fields">
                                                            {{-- <span id="exist" class="danger"></span> --}}
                                                           {{-- <input type="text" class="form-control s1"  id="sampleId1" placeholder="Enter Sample Id">
                                                           <span id="exist1" class="danger"></span>
                                                           <input type="text" class="form-control s1"  id="sampleId2" placeholder="Enter Sample Id">
                                                           <span id="exist2" class="danger"></span>
                                                           <input type="text" class="form-control s1"  id="sampleId3" placeholder="Enter Sample Id">
                                                           <span id="exist3" class="danger"></span>
                                                           <input type="text" class="form-control s1"  id="sampleId4" placeholder="Enter Sample Id">
                                                           <span id="exist4" class="danger"></span> --}}
                                                           
                                                        </div>
                                                        <div class="col-md-4">
                                                            @foreach ($products as $key => $product)
                                                               <div class="row checkbox-pad">
                                                                <div class="chk">
                                                                    <label class="check-label" for="male"> <b>T1</b> </label>
                                                                    <input type="radio" name="{{$key}}" value="1" class="chk1 pt-5" >
                                                                </div>
                                                                <div class="chk">
                                                                    <label class="check-label" for="male"> <b>T2</b> </label>
                                                                    <input type="radio" name="{{$key}}" value="2" class="chk2 pt-5">
                                                                </div>
                                                                 <div class="chk">
                                                                    <label class="check-label" for="male"> <b>T3</b> </label>
                                                                    <input type="radio" name="{{$key}}" value="3" class="chk3 pt-5">
                                                                 </div>
                                                                 <div class="chk">
                                                                    <label class="check-label" for="male"> <b>T4</b> </label>
                                                                    <input type="radio"  name="{{$key}}" value="4" class="chk4 pt-5">
                                                                 </div>
                                                               </div>
                                                                 @endforeach
                                                         </div>
                                                        {{-- <div class="pt-2">
                                                            <button type="button" class="btn btn-primary btn-sm ml-1" id="save">Save</button>
                                                        </div> --}}
                                                    </div>
                                                    @error('products')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <!-- Striped rows start -->
                                                    <div class="row" id="table-striped">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                {{-- <div class="card-header">
                                                                    <h4 class="card-title">Select Products:</h4>
                                                                </div> --}}
                                                                {{-- <div class="card-content">
                                                                    <div class="card-body">

                                                                    </div>
                                                                    <div class="row-md-8">
                                                                        <table class="table jury-table table-striped table-bordered mb-0">
                                                                            <thead>
                                                                                <th colspan="2">Table1:<b> Natural</b></th>
                                                                                <th colspan="2">Table2:<b> Natural</b></th>
                                                                                <th colspan="2">Table3:<b> Processed</b></th>
                                                                                <th colspan="2">Table4:<b> Processed</b></th>
                                                                            </thead>
                                                                            <tbody id="product_table_body">
                                                                                <tr>
                                                                                    <td>
                                                                                        Product
                                                                                    </td>
                                                                                    <td>
                                                                                        Sample ID
                                                                                    </td>
                                                                                    <td>
                                                                                        Table
                                                                                    </td>
                                                                                </tr>
                                                                                
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Striped rows end -->
                                                </div>
                                                <div style="margin-left: 39%">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
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
        $(document).on('click', 'input[type="checkbox"]', function() {      
                $('input[type="checkbox"]').not(this).prop('checked', false);      
            }); 
        // $(".s1").on('keyup',function(cb){delay(cb,1000);});
        //   $("#name").on('focusout',handler(function(cb){cb();}));
        // var jq14 = jQuery.noConflict(true); 
        // $('.s1').keyup(function(e) {
        //     $.ajax({
        //             type:'POST',
        //             url:`{{route('sample_search')}}`,
        //             data:{
        //                 sample:$(this).val(),
        //                 _token: "{{ csrf_token() }}"
        //             },
        //             success: function( msg ) {
        //                if(msg.exists)
        //                 {
        //                     $('#exist').html('SampleId Alreay Exist');
        //                 }
        //                 else
        //                 {
        //                     $('#exist').html('');
        //                 }   
        //             }
        //         });

        // });
       
            // $(".s1").focusout(function() {
            // var productId = $('#product_select').find(":selected").val();
            // var juries = $('#juries').val();
            // var auction_id = $('#auction_id').val();
            //  var table  = $('.chk1').val()
            // var samples =  $(this).val();
            // $.ajax({
            //         type:'POST',
            //         url:`{{route('ajax_send_to_jury')}}`,
            //         data:{
            //             juries:juries,
            //             auction_id:auction_id,
            //             table:table,
            //             samples:samples,
            //             productId:productId,
            //             _token: "{{ csrf_token() }}"
            //         },
            //         success: function( msg ) {
            //             if(msg.exists)
            //             {
            //                 $('#exist').html('Alreay Exist');
            //             }
            //             else
            //             {
            //                 $('#exist').html('Created Successfuly');
            //             }   
            //         },
            //         error:function(err){
            //             console.log(err);
            //         }
            //     });
            // });
         

            
        // $('.chk1').click(function (key) {
        //     $("#sampleId1").removeAttr("disabled");
        // });
        // $('.chk2').click(function (key) {
        //     $("#sampleId2").removeAttr("disabled");
        // });
        // $('.chk3').click(function (key) {
        //     $("#sampleId3").removeAttr("disabled");
        // });
        // $('.chk4').click(function (key) {
        //     $("#sampleId4").removeAttr("disabled");
        // });
      

        // $('#save').click(function() {
        //     var productId = $('#product_select').find(":selected").val();
        //     var product =  $('#product_select').find(":selected").text();
            
        //     var sList = "";
        //     var html = '';
        //     html += `<tr>`;
        //         var shouldappend;
        //         $('input[type=checkbox]').each(function (key) {
        //             var index = ++key;        
        //             var sampleid =  $('#sampleId'+ index +'').val();
        //              if(sampleid){
        //                 $.ajax({
        //                         type:'POST',
        //                         url:`{{route('sample_search')}}`,
        //                         data:{
        //                             sample:sampleid,
        //                             _token: "{{ csrf_token() }}"
        //                         },
        //                         success: function( msg ) {
        //                         if(msg.exists)
        //                             {
        //                                 $('#exist'+ index +'').html('SampleId Already Exist');
        //                                 // this.shouldappend = false;
        //                                 return false;
        //                             }
        //                             else
        //                             {
        //                                 // this.shouldappend = true;
        //                                 $('#exist'+ index +'').html('');
        //                             }   
        //                         }
        //                     });
        //                     if(this.checked)
        //                     {
        //                         html += ``;
        //                         html += `<td>` + product + `</td><td>` + sampleid + `</td><input type="hidden" name="tables[]" value="` + index + `" required><input type="hidden" name="products[]" value="` + productId + `" required><input type="hidden" name="samples[]" value="` + sampleid + `" required>`;
        //                     } 
        //                     else
        //                     {
        //                         html += ``;
        //                         html += `<td>-</td><td>-</td>`;
        //                     }   
        //               $(this).prop('checked', false);  
        //              }
        //         //   $('#sampleId'+ index +'').val('');
        //         //   $('#sampleId'+ index +'').attr("disabled", true);
        //         });
        //         html += `</tr>`;
        //     // console.log(html);\
        //         $('#product_table_body').append(html);
        //        $('#sampleId').val('');
            
        // });
    });
</script>
