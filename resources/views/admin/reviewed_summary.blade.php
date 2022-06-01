@extends('admin.layout.default')
@section('title', 'All Reviewed Samples')
@section('content')
<style>
     table.review-table{
        widows: 100%;
        display: flex;
        /* justify-content: center; */
        align-items: center;
        overflow:hidden;
    }
    table.review-table tbody{
        /* margin-left: -5%;
        flex-wrap: no-wrap;
        overflow-x: auto;
        margin: 20px; */
        display: flex;
        flex-direction: row;
        width: 100%;
        max-width: 100%;
        overflow-x: scroll;
        /* gap: 20px; */
    }
    table.review-table tbody tr td,table.review-table tbody tr th{
        flex: 1;
        min-width: max-content;
        min-height: 50px;
    }
    table.review-table tbody tr{
        display: flex;
        flex-direction: column;
        /* height: 100%; */
    }
    /* table.review-table tbody tr td,table.review-table tbody tr th{
        flex: 1;
        min-width: max-content;
        min-height: 50px;
    } */
    table.review-table.table-bordered th, .table-bordered td {
     border: 1px solid #eacf99;
    }
    

   table.review-table tr td:nth-child(odd), table.review-table tr th:nth-child(odd) {
    background: rgba(34, 41, 47, 0.05);
}
</style>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- maintenance -->
            <h4 class="pt-5">Reviewed Samples Summary </h4>
            <section class="row flexbox-container">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
                        <div class="card-content">
                            <div class="card-body text-center">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0 review-table" 
                                        style="background-color: rgb(255, 255, 255)">
                                        {{-- <thead> --}}
                                            <tr>
                                                {{-- <th>Sr</th> --}}
                                                <th>Jury</th>
                                                <th>Product</th>
                                                <th>SampleId</th>
                                                <th>total</th>
                                            </tr>
                                        {{-- </thead> --}}
                                        {{-- <tbody> --}}
                                            @forelse ($reviews as $value=>$sample)
                                            <tr>
                                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                                <td>{{ $sample->name }}</td>
                                                <td>{{ $sample->product }}</td>
                                                <td>{{ $sample->sampleId }}</td>
                                                <td>{{$sample->total}}</td>
                                            </tr>
                                            @empty
                                                <tr><td></td><td></td><td>No Sample for review</td></tr>
                                            @endforelse
                                        {{-- </tbody> --}}
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