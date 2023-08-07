<style>
      html body{
        background:white !important
    }
    .header-navbar.navbar-shadow{
        box-shadow:none !important;
    }
    .card{
        box-shadow:none !important;
    }
    .main-menu.menu-shadow{
        box-shadow:none !important;
    }.navbar-floating .header-navbar-shadow{
        background:white !important;
    }
    /* .btn-save-color{
        background:goldenrod !important;
    } */

</style>

@extends('user.layout.default')
@section('title', 'All Transection')
@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users edit start -->
            <section class="users-edit">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <ul class="nav nav-tabs mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                        <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Account Information</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                    <form class="form" action="{{ url('/userprofile/update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="media mb-2">
                                        {{-- <a class="mr-2 my-25" href="#">
                                            <img src="@if(Auth::user()->user_image) {{ url('/storage/app/public/profile_photo/' . $userData->user_image); }} @endif" alt="User Image" id="user-image" height="150" width="150"> <br>
                                        </a> --}}
                                        <div class="media-body mt-3">
                                            <h4 class="media-heading">{{$userData->name}}</h4>
                                            <div class="col-12 d-flex mt-1 px-0">
                                                <a href="#" class="btn btn-primary d-none d-sm-block mr-75" onclick="document.getElementById('profile_photo').click()">Change</a>
                                                <a href="javascript:void(0)" class="btn btn-outline-danger d-none d-sm-block removeimage" data-id="{{$userData->id}}">Remove</a>
                                                <input type="file" style="visibility:hidden" name="profile_photo" id="profile_photo" onchange="document.getElementById('user-image').src = window.URL.createObjectURL(this.files[0])">

                                            </div>
                                        </div>
                                    </div>
                                    <!-- users edit media object ends -->
                                    <!-- users edit account form start -->

                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" placeholder="Name" disabled name="name" value={{$userData->name}} required data-validation-required-message="This name field is required">
                                                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Company</label>
                                                    <input type="text" class="form-control" name="company" value={{$userData->company}} disabled placeholder="Company name">
                                                    @error('company') <span class="text-danger error">{{ $message }}</span>@enderror

                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="number" class="form-control" name="phone_no"  value={{$userData->phone_no}} disabled placeholder="">
                                                    @error('phone_no') <span class="text-danger error">{{ $message }}</span>@enderror

                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>E-mail</label>
                                                        <input type="email" class="form-control" placeholder="Email" value={{$userData->email}} readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Paddle Number</label>
                                                    <input type="number" class="form-control" name="paddle_number" disabled value={{$userData->paddle_number}} placeholder="Paddle Number">
                                                    @error('paddle_number') <span class="text-danger error">{{ $message }}</span>@enderror

                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 btn-save-color">Save
                                                    Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- users edit account form ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- users edit ends -->

        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
<script>
     //Remove Image
     $(document).ready(function() {
            $(".removeimage").on("click", function(e) {
        e.preventDefault();
        var id = $(this).attr('data-id');
        swal({
            title: `Are You sure to remove Image?`,
            type: "error",
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if (result) {
                $.ajax({
                url: "{{ route('removeuserimage') }}",
                async: false,
                method: 'POST',
                data: {
                    id: id,
                    _token: "{{ csrf_token() }}",
                },
                    success: function(response) {
                        swal('Image Removed Successfuly.');
                        window.location.reload();
                    },
                    error: function(error) {
                        console.log(error)
                    }
                });
            } else {
                swal('Your Image is safe.');
            }
        })

    });
            });
    </script>
@endsection
