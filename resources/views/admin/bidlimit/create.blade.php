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
                        {{-- <h2 class="content-header-title float-left mb-0">Create Auction</h2> --}}
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{url('jury/index') }}">Bid Limit</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="#">Create Bid Limit</a>
                                </li>
                            </ol>
                        </div>
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
                                    <form class="form" action="{{ url('/bidlimit/save') }}" method="POST" autocomplete="off">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-12 col-12">
                                                    <table class="table table-bordered" id="dynamicTable">
                                                        <tr>
                                                            <th>Min</th>
                                                            <th>Increment</th>
                                                            <th>Max</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" name="addmore[0][min]" value="0" id="min" class="form-control min-value" /></td>
                                                            <td><input type="text" name="addmore[0][increment]" id="increment"  class="form-control" />  <span class="asteric" id ="error1" style="color: red;"></span></td>
                                                            <td><input type="text" name="addmore[0][max]" id="max" class="form-control max-value" /><span class="asteric" id ="error2" style="color: red;"></span></td>
                                                            <td><a type="button" name="add" id="add"><i class="fa-solid fa-circle-plus"></i></a></td>
                                                        </tr>
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
        </div>
    </div>
</div>

   <script>
    $( document ).ready(function() {
        $('#increment').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error1').css("visibility", "hidden");
        }
    });
        $('#max').on('keyup', function () {
        if ($(this).val().length > 0) {
            $(this).closest('div').find('#error2').css("visibility", "hidden");
        }
    });
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
        if($.trim($('#increment').val()) == '')
        {
            $("#error1").text("Increment field cannot be left blank!");
             return;
        }
        else if( $.trim($('#max').val()) == '')
        {
            $("#error2").text("Max field cannot be left blank!");
             return;
        }
        {
            ++i;
        var last_max_value = $(".max-value:last").val();
        last_max_value     = parseFloat(last_max_value)+0.1;
        $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][min]"  class="form-control min-value" value="'+last_max_value+'" /></td><td><input type="text" name="addmore['+i+'][increment]" class="form-control" /></td><td><input type="text" name="addmore['+i+'][max]" class="form-control max-value" /></td><td><a type="button" class="remove-tr"><i class="fa-solid fa-circle-minus"></i></a></td></tr>');
        }
    });
    $(document).on('click', '.remove-tr', function(){
         $(this).parents('tr').remove();
    });


</script>
@endsection
