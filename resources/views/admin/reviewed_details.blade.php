@extends('admin.layout.default')
@section('title', 'All Reviewed Samples')
@section('content')
<style>
    table{
        margin-left:-23%; 
    }
   table tr {
    display: inline-flex;
    flex-direction: column;
}
</style>
<div class="app-content content">
  
    <div class="content-wrapper">
      
        <div class="content-body" style="margin-top: -10%,margin-left:-10%">
            <!-- maintenance -->
            <h1>Review Detail</h1>
            {{-- <td>
                <div class="row" style="border: 1px solid red;">
               <div class="col-lg-6"><b>Aroma</b></div>
               <div class="col-lg-6"><b>Dry</b> <br> <b>Crust</b> <br> <b>Break</b></div>
               </div>
            </td> --}}
            <section class="row flexbox-container">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
                        <div class="card-content">
                            <div class="card-body text-center">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0"
                                        style="background-color: rgb(255, 255, 255)">                                   
                                        <tr>
                                            <td><b></b></td>
                                            <td><b>Jury</b></td>
                                            <td><b>Aroma Dry</b></td>
                                            <td><b>Aroma Crust</b></td>
                                            <td><b>Aroma Break</b></td> 
                                            <td><b>Aroma Note</b></td>
                                            <td><b>CleanUp</b></td>
                                            <td><b>Clean Sweet Note</b></td>
                                            <td><b>Sweetness</b></td>
                                            <td><b>Acidity</b></td>
                                            <td><b>Flavour</b></td>
                                            <td><b>Flavour Note</b></td>
                                            <td><b>AfterTaste</b></td>
                                            <td><b>Balance</b></td>
                                            <td><b>Overall</b></td>
                                            <td><b>Roast</b></td>                 
                                            <td><b>Defect</b></td>
                                            <td><b>Defect Note</b></td>  
                                        </tr>
                                            @foreach ($data as $samp)
                                            <tr>
                                                @foreach ($samp as $value => $sample)
                                                @if($value == "aroma_note" || $value == "clean_sweet_note" || $value == "flavour_note" || $value == "defect_note")
                                                 <td><button type="button" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="{{$sample}}">
                                                    <i class="fas fa-info-circle"></i>
                                                  </button>
                                                </td>
                                                 @else
                                                <td><b>{{ $sample }}</b></td>
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