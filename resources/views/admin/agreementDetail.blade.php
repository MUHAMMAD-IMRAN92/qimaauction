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
            <form action="{{route('agreement')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row-md-12">
                <div class="form-group">
                    <label for="" class="form-label"><b>Title: </b></label>
                    <input type="text" name="title" id="title" class="form-control col-lg-5"
                        value="{{ $agreement->title ?? '' }}">
                </div>
              <input type="hidden" name="id"  value="{{$agreement->id}}">
                <div class="form-group">
                    {{-- <label for="" class="form-label"><b>Slug:</b></label> --}}
                    <input type="hidden" name="slug" id="slug" class="form-control col-lg-5"
                        value="{{ $agreement->slug }}" >
                </div>
                
                <div class="form-group">
                    <label for="" class="form-label"><b>Description:</b></label>
                    <textarea type="file" name="detail" id="detail" class="form-control col-lg-5"
                        value="{{ $agreement->detail }}"> 
                      @if(Storage::disk('public')->has($agreement->slug))
                           {{ Storage::disk('public')->get($agreement->slug);  }}
                     @else
                          Description
                      @endif
                    </textarea>
                </div>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-success">Update Agreement</button>
          </form>

        </div>
    </div>
    <script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('detail');
    </script>
@endsection
