@extends('admin.layout.default')
@section('title', 'All Transection')
@section('content')
    <style>
        .modal {
            /* width: 1750px; */
            /* margin-left: -144px;
            margin-top: -144px; */
        }
    </style>
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
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ url('jury/index') }}">Auction</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Create Auction</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table zero-configuration" id="auction-table">
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Bid Price</th>
                                    <th>Paddle No.</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @forelse ($bidhistory as $auction)
                                            <tr>
                                                <td>
                                                    {{ $auction->name }}
                                                </td>
                                                <td>
                                                    {{ $auction->bid_amount }}
                                                </td>
                                                <td>
                                                    {{ $auction->paddle_number }}
                                                </td>
                                            </tr>
                                    @empty
                                      <tr>
                                        <td>
                                        No bit history</td></tr>
                                    @endforelse

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script></script>

@endsection
