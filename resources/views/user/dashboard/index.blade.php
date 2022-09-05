@extends('user.layout.default')
@section('title', 'All Transection')
@section('content')

   <!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-center pb-0">
                                <div class="avatar bg-rgba-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-users text-primary font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">{{$auctionCount}}</h2>
                                <p class="mb-0">Auctions</p>
                            </div>
                            {{-- <div class="card-content">
                                <div id="line-area-chart-1"></div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-center pb-0">
                                <div class="avatar bg-rgba-success p-50 m-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-credit-card text-success font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">{{$bidCount}}</h2>
                                <p class="mb-0">Total Bids</p>
                            </div>
                            {{-- <div class="card-content">
                                <div id="line-area-chart-2"></div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-center pb-0">
                                <div class="avatar bg-rgba-danger p-50 m-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-shopping-cart text-danger font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">{{$bidCountUser}}</h2>
                                <p class="mb-0">Your bids</p>
                            </div>
                            {{-- <div class="card-content">
                                <div id="line-area-chart-3"></div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-center pb-0">
                                <div class="avatar bg-rgba-warning p-50 m-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-package text-warning font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">{{$winner}}</h2>
                                <p class="mb-0">Winning</p>
                            </div>
                            {{-- <div class="card-content">
                                <div id="line-area-chart-4"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
@endsection
