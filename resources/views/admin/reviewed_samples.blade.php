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
            <section class="row flexbox-container">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
                        <div class="card-content">
                            <div class="card-body text-center">
                                {{-- <p class="text-right">  
                                      <a href="{{ url('/jury/send_to_jury') }}" class="btn btn-primary waves-effect waves-light custom_btn">Send To
                                    Jury</a></p> --}}
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0"
                                        style="background-color: rgb(255, 255, 255)">
                                        <thead>
                                            <tr>
                                                <th>Sr</th>
                                                <th>Samples</th>
                                                <th>Date</th>
                                                @if($opencupping)
                                                 <th>Users</th>
                                                @else
                                                <th>Jury Members</th>
                                                @endif
                                                <th>Action(s)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($samples as $value=>$sample)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $sample->samples }}</td>
                                                <td>{{date('m-d-Y',strtotime($dateArr[$value]))}}</td>
                                                <td>{{$reviewed[$value] .'/'.$sample->total}}</td> 
                                                {{-- ,'productId'=>$sample->product_id,'juryId'=>$sample->jury_id --}}
                                                @if($opencupping)
                                                <td> <a href="{{route('openCuppingReviewDetail',['sample'=>$sample->samples])}}"><span class="product-link-a">View</span></a></td>
                                                @else
                                                <td> <a href="{{route('review_detail',['sample'=>$sample->samples])}}"><span class="product-link-a">View</span></a></td>
                                                @endif
                                               
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