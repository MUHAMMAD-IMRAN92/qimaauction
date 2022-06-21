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
                                    <form class="form" action="{{ url('/auction/update') }}" method="POST" enctype="multipart/form-data" >
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
                                                            {{-- @dd($bidLimits); --}}
                                                            <td><input type="number" name="addmore[0][min]" value="" class="form-control" /></td>
                                                            <td><input type="text" name="addmore[0][increment]" id="increment" class="form-control" /></td>
                                                            <td><input type="number" name="addmore[0][max]"  class="form-control" /></td>
                                                            <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
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
            <!-- // Basic Floating Label Form section end -->

        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#image').change(function(){

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

                });
      // jQuery.datetimepicker.setLocale('de');
    //   CKEDITOR.replace( 'product_detail' );
      $.datetimepicker.setDateFormatter({
          parseDate: function (date, format) {
              var d = moment(date, format);
              return d.isValid() ? d.toDate() : false;
          },
          formatDate: function (date, format) {
              return moment(date).format(format);
          },
      });
      jQuery('#datetimepicker').datetimepicker({
          format:'DD-MM-YYYY h:mm',
          formatTime:'h:mm',
          formatDate:'DD.MM.YYYY',
          minDate: new Date(),
          });
      jQuery('#datetimepicker1').datetimepicker({
      format:'DD-MM-YYYY h:mm',
      formatTime:'h:mm',
      formatDate:'DD.MM.YYYY',
      minDate: new Date(),
      });
  });
</script>
@endsection
