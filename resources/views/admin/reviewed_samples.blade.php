@extends('admin.layout.default')
@section('title', 'All Reviewed Samples')
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- maintenance -->
            <h1>Reviewed Samples</h1>
            <section class="row flexbox-container" style="margin-top: 10%">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
                        <div class="card-content">
                            <div class="card-body text-center">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0"
                                        style="background-color: rgb(255, 255, 255)">
                                        <thead>
                                            <tr>
                                                <th>Sr</th>
                                                <th>Samples</th>
                                                <th>Date</th>
                                                <th>Jury Members</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($samples as $value=>$sample)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $sample->samples }}</td>
                                                    <td>{{$dateArr[$value]}}</td>
                                                    <td>{{$sample->total}}</td>
                                                    <td> <a href="{{route('review_detail',['sample'=>$sample->samples])}}"><i class="fa fa-eye-slash" aria-hidden="true"></i></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- maintenance end -->

        </div>
    </div>
</div>
@endsection