@extends('admin.layout.default')
@section('title', 'All Reviewed Samples')
@section('content')
<style>
    table .table-bordered  thead, .table-bordered td {
     border: 1px solid #eacf99;
    }
    .review-button
    {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <?php
        $final_array = [];
        $all_jury=[];
        $all_samples=[];

        ?>
        {{-- {{dump($reviews)}} --}}
        @forelse ($reviews as $value=>$sample)
        <?php
        $all_jury[$sample->jury_id] = $sample->name;
        $all_samples[$sample->sampleId] = $sample->sampleId;
        ?>
        @empty
        @endforelse
        @forelse ($all_jury as $k=>$v)
        @forelse ($all_samples as $k1=>$v1)
        <?php
            $final_array[$k][$v1] = "-";
            ?>
        @empty
        @endforelse
        @empty
        @endforelse
           {{-- {{print_r($final_array)}} --}}
        @forelse ($reviews as $value=>$sample)
        <?php
        //  dump($sample->sampleId);dump($sample->jury_id);
        $final_array[$sample->jury_id][$sample->sampleId] = $sample->total;

        ?>
        @empty
        @endforelse
        <br><br>
        {{-- {{print_r($final_array)}} --}}

        <div class="content-body">
            <!-- maintenance -->
            <div class="review-button">
            <h1>Reviewed Samples Summary</h1>
            <a href="{{route('reviewsummary_csv')}}" target="_blank" id="export" class="btn btn-success float-right m-2" onclick="exportTasks(event.target);">Export</a>
            </div>
            <section class="row flexbox-container">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
                        <div class="card-content">
                            <div class="card-body text-center">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 review-table table-striped table-bordered"
                                        style="background-color: rgb(255, 255, 255)">
                                        <thead>
                                            <tr>
                                                <td>Samples</td>
                                                @forelse ($all_samples as $jury=>$sample)
                                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                                <td><b>{{ $sample }}</b></td>
                                            @empty
                                            @endforelse
                                                {{-- <th>Sr</th> --}}
                                                {{-- <th>Jury</th> --}}
                                                {{-- <th>Jury</th>
                                                <th>Product</th>
                                                <th>Sample Id</th>
                                                <th>Total</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($final_array as $jury=>$sample)

                                            <tr>

                                            @forelse ($sample as $sid=>$stotal)

                                                    @if($loop->first)
                                                    <td>{{ $all_jury[$jury] }}</td>
                                                    @endif
                                                    <td>{{$stotal}}</td>
                                                    @empty
                                            @endforelse

                                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                                {{-- <td>{{ $sample->name }}</td>
                                                <td>{{ $sample->product }}</td>
                                                <td>{{ $sample->sampleId }}</td>
                                                <td>{{$sample->total}}</td> --}}
                                            </tr>
                                            @empty
                                                <tr><td></td><td></td><td></td><td>No Sample for review</td></tr>
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
<script>
    function exportTasks(_this) {
       let _url =`{{ route('reviewsummary_csv')}}`;
       window.location.href = _url;
    }
 </script>
