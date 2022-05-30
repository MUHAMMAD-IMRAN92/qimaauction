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
            <h1>Reviewed Samples Summary </h1>
            <section class="row flexbox-container">
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
                                                <th>Jury</th>
                                                <th>Product</th>
                                                <th>SampleId</th>
                                                <th>total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($reviews as $value=>$sample)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $sample->name }}</td>
                                                <td>{{ $sample->product }}</td>
                                                <td>{{ $sample->sampleId }}</td>
                                                <td>{{$sample->total}}</td>
                                            </tr>
                                            @empty
                                                <tr><td></td><td></td><td>No Sample for review</td></tr>
                                            @endforelse
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