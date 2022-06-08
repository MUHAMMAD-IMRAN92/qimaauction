
                                        {{-- <div id="{{$tables}}" class="tabcontent"> --}}
                                            <table class="table table-striped"
                                            style="background-color: rgb(255, 255, 255)">
                                            <thead style="color: #d8940d; border:#d8940d" class="table-bordered">
                                                <tr>
                                                    <th>Sr</th>
                                                     <!-- <th>Product Title</th> -->
                                                     <th>Sample ID</th>
                                                     <th>Position</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- {{ Str::beforeLast(base64_decode($sample->temporary_link), '/') . '/' . $sample->temporary_link . '/' . $sample->product_id . '/' . $sample->jury_id }} --}}
                                                @foreach ($samples as $sample)
                                                    <tr>
                                                        <td data-title="Sr No">{{ $loop->iteration }}</td>
                                                        <!-- <td>{{ $sample->product_title }}</td> -->
                                                        <td data-title="Sample ID">{{ $sample->samples }}</td>
                                                        <td data-title="Position">{{$sample->postion}}</td>
                                                        <td data-title="Action">
                                                            @if($sample->is_hidden==0)
                                                            <a class="btn btn-success"
                                                                href="{{route('give_review',['juryId'=>$sample->jury_id,'table'=>$sample->tables,'sampleId'=>$sample->id  ])}}">CUP SAMPLE
                                                             </a>
                                                             @else
                                                             <a class="btn btn-disabled"   href="{{route('give_review',['juryId'=>$sample->jury_id,'table'=>$sample->tables,'sampleId'=>$sample->id  ])}}"
                                                                >Completed
                                                             </a>
                                                             @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{-- </div> --}}

