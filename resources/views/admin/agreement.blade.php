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
        <div class="content-wrapper container">
            {{-- <form action="{{route('agreement')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @foreach ($agreement as $key => $arg)
            <div class="mb-3 row-md-12">
                <div class="form-group">
                    <label for="" class="form-label"><b>Title: </b></label>
                    <input type="text" name="title[{{$key}}]" id="title" class="form-control col-lg-5"
                        value="{{ $arg->title }}">
                </div>
                <div class="form-group">
                    <label for="" class="form-label"><b>Slug:</b></label>
                    <input type="text" name="slug[{{$key}}]" id="slug" class="form-control col-lg-5"
                        value="{{ $arg->slug }}">
                </div>
                <div class="form-group">
                    <label for="" class="form-label"><b>Description:</b></label>
                    <textarea type="file" name="detail[{{$key}}]" id="detail" class="form-control col-lg-5"
                        value="{{ $arg->detail }}"> {{ Storage::disk('public')->get('agreement'.$key);  }}</textarea>
                </div>
            </div>
        @endforeach
            <button type="submit" name="submit" value="submit" class="btn btn-success">Update Agreement</button>
          </form> --}}
            <div class="mb-3 row-md-12">
                <table class="table">
                    <thead>
                        {{-- <th>SNo.</th> --}}
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Action(s)</th>
                    </thead>
                    <tbody>
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
    <script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('detail[0]');
        CKEDITOR.replace('detail[1]');
        CKEDITOR.replace('detail[2]');
    </script>
@endsection