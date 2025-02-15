@extends('admin.layout.default')
@section('title', 'All Reviewed Samples')
@section('content')
<style>
    table.review-table{
        widows: 100%;
        /* display: flex;
        justify-content: center;
        align-items: center;
        overflow:hidden; */
    }
    table.review-table tbody{
        /* margin-left: -5%;
        flex-wrap: no-wrap;
        overflow-x: auto;
        margin: 20px; */
        /* display: flex;
        flex-direction: row;
        width: 100%;
        max-width: 100%;*/
        overflow-x: scroll; 
        /* gap: 20px; */
    }
    table.review-table tbody tr{
        /* display: flex;
        flex-direction: column; */
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
    
    table.review-table tbody tr td,table.review-table tbody tr th {
      
    /* display: inline-flex;
    flex-direction: column;
    flex-wrap: wrap; */
   
    /* width: 7%; */
   }
   table.review-table tr td:nth-child(odd), table.review-table tr th:nth-child(odd) {
    /* background: rgba(34, 41, 47, 0.05); */
}
.body-tags td{
    /* min-height: 54px !important; */
    /* padding: 15.5px !important; */
}

/* tbody tr th{
    padding: 15.5px !important;
} */
</style>
<div class="app-content content">
  
    <div class="content-wrapper">
      
        <div class="content-body" style="margin-top: -10%,margin-left:-7%">
            <!-- maintenance -->
            <h1>Review Detail</h1>
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
                                    <table class="table table-responsive table-bordered mb-0 review-table striped bordered"
                                        style="background-color: rgb(255, 255, 255)">                                   
                                        <tbody>
                                        <tr>
                                            {{-- <td style="margin-top: 6px;"><b></b></td> --}}
                                            <th>User</th>
                                            <th>Total</th>
                                            <th>Product Title</th>       
                                            <th>Sample</th>
                                            <th>Aroma Dry</th>
                                            <th>Quaility Notes</th>
                                            <th>Aroma Break</th> 
                                            <th>Uniformity</th>
                                            <th>CleanUp</th>
                                            <th>Sweetness</th>
                                            <th>Acidity</th>
                                            <th>Flavour</th>
                                            <th>After Taste</th>
                                            <th>Balance</th>
                                            <th>Body</th>
                                            <th>Overall</th>
                                            <th>Roast</th>                 
                                            <th>Defect</th>
                                            <th>Note</th>  
                                        </tr>
                                            @foreach ($data as $samp)
                                            <tr>
                                                @foreach ($samp as $value => $sample)
                                                @if($value == "note" || $value == 'quality_notes')
                                                 <td  data-toggle="tooltip" data-placement="top" title="{{$sample}}">
                                                    <i class="fas fa-info-circle"></i>
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