@extends('admin.layout.default')
@section('title', 'All Reviewed Samples')
@section('content')
<style>
    table.review-table{
        widows: 100%;
        display: flex;
        justify-content: center;
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
    table.review-table tbody tr{
        display: flex;
        flex-direction: column;
        /* height: 100%; */
    }
    /* table.review-table tbody tr td,table.review-table tbody tr th{
        flex: 1;
        min-width: max-content;
        min-height: 20px;
    } */
    table.review-table.table-bordered th, .table-bordered td {
     border: 1px solid #eacf99;
    }
    .waves-light{
        border-radius: 0 !important;
    }

   table.review-table tr td:nth-child(odd), table.review-table tr th:nth-child(odd) {
    background: rgba(34, 41, 47, 0.05);
}
.body-tags td{
    /* min-height: 54px !important; */
    /* padding: 15.5px !important; */
}

.table-bordered td,.table-bordered th{
    font-size: 14px;
    padding: 13.3px;
    min-height: 46px;
}
.review-button
{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* tbody tr th{
    padding: 15.5px !important;
} */
</style>
{{-- @dd($sampleID); --}}
<div class="app-content content">

    <div class="content-wrapper">
        <div class="content-body" style="margin-top: -10%,margin-left:-7%">
            <!-- maintenance -->
            <div class="review-button">
                <h1>Review Detail</h1>
                <a href="{{route('reviewdetail_csv',$sampleID)}}" target="_blank" id="export" class="btn btn-success float-right m-2" onclick="exportTasks(event.target);">Export</a>
            </div>


            {{-- <td>
                <div class="row" style="border: 1px solid red;">
               <div class="col-lg-6"><b>Aroma</b></div>
               <div class="col-lg-6"><b>Dry</b> <br> <b>Crust</b> <br> <b>Break</b></div>
               </div>
            </td> --}}
            <section class="row flexbox-container" style="margin-left: -63px;">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
                        <div class="card-content">
                            <div class="card-body text-center">
                                <div class="" style="overflow-x:auto;">
                                    <table class="table table-responsive table-bordered mb-0 review-table"
                                        style="background-color: rgb(255, 255, 255) ">
                                        <tbody>
                                        <tr>
                                            {{-- <td style="margin-top: 6px;"><b></b></td> --}}
                                            <th>Jury</th>
                                            <th>Total</th>
                                            <th>Product Title</th>
                                            <th>Sample</th>
                                            <th>Aroma Dry</th>
                                            <th>Aroma Crust</th>
                                            <th>Aroma Break</th>
                                            {{-- <th>Aroma Note</th> --}}
                                            <th>CleanUp</th>
                                            <th>Clean Sweet Note</th>
                                            <th>Sweetness</th>
                                            <th>Sweetness Note</th>
                                            <th>Acidity</th>
                                            <th>Acidity Note</th>
                                            <th>Flavour</th>
                                            <th>Flavour Note</th>
                                            <th>AfterTaste</th>
                                            <th>AfterTaste Note</th>
                                            <th>Balance</th>
                                            <th>Balance Note</th>
                                            <th>Overall</th>
                                            <th>Overall Note</th>
                                            <th>Roast</th>
                                            <th>Defect</th>
                                            <th>Defect Note</th>
                                        </tr>
                                            @foreach ($data as $samp)
                                            <tr>
                                                @foreach ($samp as $value => $sample)
                                                @if($value == "sweetness_note" || $value == "acidity_note" || $value == "aftertaste_note" || $value == "clean_sweet_note" || $value == "flavour_note" || $value == "defect_note" || $value == "overall_note" || $value == "balance_note")
                                                 <td class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="{{$sample}}">
                                                    <i class="fas fa-info-circle fa-3x" style="font-size: 14px;"></i>
                                                </td>
                                                 @else
                                                <td>{{ $sample }}</td>
                                                 @endif
                                                 @endforeach
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
<script>
    function exportTasks(_this) {
       let _url =`{{ route('reviewdetail_csv',$sampleID)}}`;
       window.location.href = _url;
    //    alert(_url);
    }
 </script>
