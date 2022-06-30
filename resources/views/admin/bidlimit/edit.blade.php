@extends('admin.layout.default')
@section('title', 'All Transection')
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Edit Bidlimit</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- // Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                {{-- <h4 class="card-title">Multiple Column</h4> --}}
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form" action="{{ url('/bidlimit/update') }}" method="POST" >
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-12 col-12">
                                                    <table class="table table-bordered" id="dynamicTable">
                                                        <tr>
                                                            <th>Min</th>
                                                            <th>Increment</th>
                                                            <th>Max</th>
                                                            <th colspan="2">Action</th>
                                                        </tr>
                                                        {{-- @dd($bidLimits); --}}
                                                        @foreach ($bidLimits as $key => $bidLimit)
                                                        <tr>
                                                            <input type="hidden" name="bidlimit" value="{{$bidLimit->id}}">
                                                            <td><input type="text" name="addmore[{{$key}}][min]" value="{{$bidLimit->min}}"  class="form-control min-value" /></td>
                                                            <td><input type="text" name="addmore[{{$key}}][increment]" value="{{$bidLimit->increment}}"  class="form-control" /></td>
                                                            <td><input type="text" name="addmore[{{$key}}][max]" value="{{$bidLimit->max}}"  class="form-control max-value" /></td>
                                                            <td><a type="button" name="add" id="add"><i class="fa-solid fa-circle-plus"></i></a></td>
                                                            <td><a type="button" class="remove-tr"><i class="fa-solid fa-circle-minus"></i></a></td>
                                                        </tr>
                                                        @endforeach
                                                        {{-- @php
                                                            $minVal     =   json_decode($bidLimits->min);
                                                            $increments =   json_decode($bidLimits->increment);
                                                            $maxVal     =   json_decode($bidLimits->max);
                                                        @endphp
                                                        <tr>
                                                            <td>
                                                            @foreach ($minVal as $minimum )
                                                            <input type="hidden" name="bidlimit" value="{{$bidLimits->id}}">
                                                                <input type="text" name="min[]" value="{{$minimum}}" id="min" class="form-control min-value" /><br>
                                                            @endforeach
                                                            </td>
                                                            <td>
                                                            @foreach ($increments as $increment )
                                                                <input type="text" name="increment[]" id="increment" value="{{$increment}}"  class="form-control" /><br>
                                                            @endforeach
                                                            </td>
                                                            <td>
                                                            @foreach ($maxVal as $maximum )
                                                            <input type="text" name="max[]" id="max" value="{{$maximum}}" class="form-control max-value" /><br>
                                                            @endforeach
                                                            </td>
                                                            <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                                                        </tr> --}}

                                                    </table>
                                                </div>
                                                <div class="col-12" style="margin-left: 39%">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic Floating Label Form section end -->

        </div>
    </div>
</div>
<script>
    $( document ).ready(function() {
    $("#increment").on("input", function(evt) {
   var self = $(this);
   self.val(self.val().replace(/[^0-9\.]/g, ''));
   if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57))
   {
     evt.preventDefault();
   }
 });
 $("#min").on("input", function(evt) {
   var self = $(this);
   self.val(self.val().replace(/[^0-9\.]/g, ''));
   if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57))
   {
     evt.preventDefault();
   }
 });
});
    var i = 0;
    $("#add").click(function(){
        ++i;
        var last_max_value = $(".max-value:last").val();
        last_max_value     = parseFloat(last_max_value)+0.1;
        $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][min]"  class="form-control min-value" value="'+last_max_value+'" /></td><td><input type="text" name="addmore['+i+'][increment]" class="form-control" /></td><td><input type="text" name="addmore['+i+'][max]" class="form-control max-value" /></td><td><a type="button" class="remove-tr"><i class="fa-solid fa-circle-minus"></i></a></td></tr>');
    });
    $(document).on('click', '.remove-tr', function(){
         $(this).parents('tr').remove();
    });

</script>
@endsection
