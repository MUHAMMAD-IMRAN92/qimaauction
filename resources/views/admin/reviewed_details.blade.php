@extends('admin.layout.default')
@section('title', 'All Reviewed Samples')
@section('content')
<div class="app-content content" style="margin-top:12%">
  
    <div class="content-wrapper">
      
        <div class="content-body" style="margin-top: -10%,margin-left:-10%">
            <!-- maintenance -->
            <h1>Review Detail</h1>
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
                                                <td><b>Jury</b></td>
                                                <td><b>Dry</b></td>
                                                <td><b>Crust</b></td>
                                                <td><b>Break</b></td> 
                                                <td><b>CleanUp</b></td>
                                                <td><b>Sweetness</b></td>
                                                <td><b>Acidity</b></td>
                                                <td><b>Flavour</b></td>
                                                <td><b>AfterTaste</b></td>
                                                <td><b>Balance</b></td>
                                                <td><b>Overall</b></td>
                                                <td><b>Roast</b></td>
                                                <td><b>Defects</b></td> 
                                                <td><b>Total</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $samp)
                                            <tr>
                                                @foreach ($samp as $value => $sample)
                                                     <td>{{ $sample}}</td>
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