{{-- <div id="{{$tables}}" class="tabcontent"> --}}

<table class="table table-striped" style="background-color: rgb(255, 255, 255)">
    <thead style="color: #d8940d; border:#d8940d" class="table-bordered">
        <tr>
            {{-- <th>Sr</th> --}}
            <!-- <th>Product Title</th> -->
            <th>Position</th>
            <th>Sample ID</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {{-- {{ Str::beforeLast(base64_decode($sample->temporary_link), '/') . '/' . $sample->temporary_link . '/' . $sample->product_id . '/' . $sample->jury_id }} --}}
        @foreach ($samples as $sample)
            <tr>
                {{-- <td data-title="Sr No">{{ $loop->iteration }}</td> --}}
                <!-- <td>{{ $sample->product_title }}</td> -->
                <td data-title="Position">{{ $sample->postion }}</td>
                <td data-title="Sample ID">{{ $sample->samples }}</td>
                <td data-title="Action">
                    @if (count($samplesHidden) > 0 && $sample->is_hidden == 0)
                        <a class="btn btn-success" target="_blank"
                            href="{{ route('give_review', ['juryId' => $sample->jury_id, 'table' => $sample->tables, 'sampleId' => $sample->id, 'auctionId' => $auctionId]) }}">CUP
                            SAMPLE
                        </a>
                    @else
                        Completed
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{-- </div> --}}
