<style>
    .table-heading{
    font-size: 5rem !important;
  }
  .auction-heading{
    text-align: center;
    font-family: 'Montserrat';
  }
  .auction-heading h2{
    font-size:2rem !important;
    margin-bottom:20px ;
  }
  /* auction table css  */
  .auctiontable thead {
        background: #E5E5E5;
        border-width: 1px 0px;
        border-style: solid;
        border-color: #9C9C9C;
    }

    .auctiontable thead th {
        font-family: 'Montserrat';
        font-weight: 700;
        font-size: 16px;
        line-height: 20px;
        text-align: center;
        padding: 10px 8px;
    }
    html body{
        background:white !important
    }

</style>
@extends('user.layout.default')
@section('title', 'All Transection')
@section('content')
    <!-- BEGIN: Content-->
    
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row" style="display:block !important ">
                <div class="content-header-left col-md-6 col-sm-6 col-6 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-11">
                            {{-- <h2 class="content-header-title float-left mb-0">Categories</h2> --}}
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/user-dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Winning Lots
                                    </li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
                    <!-- <form method="get">
                        <div class="flex-align-center">
                        <div class="col-sm-6 col-12">
                        <select name="auction_id" class="form-control">
                        <option value="">Select Aution</option>
                            @foreach ($auctions as $auction)
                                <option value="{{$auction->id}}">{{$auction->title}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="col-sm-3 col-4">
                        <input type="submit" value="Get Data" class="btn btn-primary mt-res-10 waves-effect waves-light p-0 " >
                        </div>
                                            {{-- @if(request()->auction_id != '')
                        <div class="col-sm-3 col-4 mt-res-10 custom_btn_align">
                            <a href="{{route('lotwinners_report_csv',request()->auction_id)}}" class="btn btn-primary waves-effect waves-light" target="_blank" id="export" onclick="exportReport(event.target);">Export<a>
                        </div>
                    @endif --}}
                         </div>
                    </form> -->


            </div>
            <div class="auction-heading">
                <h2>AUCTION 2022</h2>
            </div>

            <div class="content-body">

                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">

                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                    <table class="table auctiontable">
                        <thead>
                            <tr class="text-center">
                            <th>Rank</th>
                                                        <th>Score</th>
                                                        <th>Farmer</th>
                                                        <th>Weight (lbs)</th>
                                                        <th>Bid</th>
                                                        <th>Total Value</th>
                                                        <th>Company</th>
                                                        <th>Delivery Status</th>
                            </tr>
                        </thead>
                       
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

