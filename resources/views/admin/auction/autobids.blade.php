@extends('admin.layout.default')
@section('title', 'All Reviewed Samples')
@section('content')
    <div class="app-content content">
        @if (session('success'))
            <div class="col-md-12 alert alert-success">
                {{ session('success') }}
        @endif
        <div class="content-wrapper container">
            <div class="mb-3 row-md-12">
                <table class="table">
                    <thead>
                        {{-- <th>SNo.</th> --}}
                        <th>Paddle No </th>
                        <th>Amount</th>
                        <th>Action(s)</th>
                    </thead>
                    <tbody>
                       @foreach ($autobids as $key => $item)
                       <tr>
                        <td>
                            {{$item->latestuser->paddle_number}}
                        </td>
                        <td>
                            {{$item->bid_amount.'$'}}
                        </td>
                        <td>
                            <a href="{{route('updateAutoBids',['id'=>$item->id])}}">
                                Edit
                            </a>
                        </td>
                    </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
