@extends('admin.layout.default')
@section('title', 'All Reviewed Samples')
@section('content')
    <style>
        /* .form-group {
                display:flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
           } */
    </style>
    <div class="app-content content">
        @if (session('success'))
            <div class="col-md-12 alert alert-success">
                {{ session('success') }}
        @endif
        <div class="content-wrapper">
             <div class="content-header row mb-2">
                    <div class="breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Agreement
                                    </li>
                                </ol>
                            </div>
                </div>
            </div>
          <div class="card">
            <div class="card-content">
                <div class="card-body card-dashboard col-lg-12">
            <div class="mb-3 row-md-12">
                <table class="table">
                    <thead class="table-heading">
                        {{-- <th>SNo.</th> --}}
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Action(s)</th>
                    </thead>
                    <tbody class="bordered">
                       @foreach ($agreement as $key => $item)
                       <tr>
                        <td>
                            {{$item->title}}
                        </td>
                        <td>
                            {{$item->slug}}
                        </td>
                        <td>
                            <a href="{{url('agreement/'.$item->slug)}}">Edit</a>
                        </td>
                    </tr>
                       @endforeach
                        {{-- <tr>
                            <td class="table-active">
                                2
                            </td>
                            <td>
                                Terms & condition
                            </td>
                            <td>
                                <a href="{{url('agreement/terms-condition')}}">Edit</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table-active">
                                3
                            </td>
                            <td>
                                Bidding Agreement
                            </td>
                            <td>
                                <a href="{{url('agreement/bidding-agreement')}}">Edit</a>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
                </div>
            </div>
          </div>

        </div>
    </div>
    <script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('detail[0]');
        CKEDITOR.replace('detail[1]');
        CKEDITOR.replace('detail[2]');
    </script>
@endsection
