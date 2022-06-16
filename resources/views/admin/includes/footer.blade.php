 <!-- BEGIN: Footer-->
 <footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0">
        <span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        {{-- <button class="btn btn-primary btn-icon scroll-top" style="position: inherit" type="button"><i class="feather icon-arrow-up"></i></button> --}}
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('public/app-assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('public/js/app.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('public/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('public/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('public/app-assets/js/core/app.js') }}"></script>
<script src="{{ asset('public/app-assets/js/scripts/components.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('public/app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>

<!-- END: Page JS-->

<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('public/app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
<script src="{{ asset('public/app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
<script src="{{ asset('public/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('public/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('public/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ asset('public/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
<script src="{{ asset('public/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('public/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('public/app-assets/js/scripts/datatables/datatable.js') }}"></script>
<script src="{{ asset('public/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('public/app-assets/js/scripts/forms/select/form-select2.js') }}"></script>
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('public/datepicker/jquery.datetimepicker.css')}}">
<script src="{{ asset('public/datepicker/jquery.js')}}"></script>
<script src="{{ asset('public/datepicker/jquery.datetimepicker.js')}}"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> --}}
<script src="{{asset('public/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('public/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('public/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('public/app-assets/vendors/js/pickers/pickadate/picker.time.js')}}"></script>
<script src="{{asset('public/app-assets/vendors/js/pickers/pickadate/legacy.js')}}"></script>
<script src="{{asset('public/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
 <script>
     $('document').ready(function()
        {
            $('textarea').each(function(){
                    $(this).val($(this).val().trim());
                }
            );
        });
     </script>
</body>
<!-- END: Body-->

</html>