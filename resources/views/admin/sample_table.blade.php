
                                        <table class="table table-bordered mb-0 table-striped"
                                            style="background-color: rgb(255, 255, 255)">
                                            <thead class="bg-light black">
                                                <tr>
                                                    <th>Sr</th>
                                                     <th>Product Title</th>
                                                     <th>Sample ID</th>
                                                     <th>Jury Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- {{ Str::beforeLast(base64_decode($sample->temporary_link), '/') . '/' . $sample->temporary_link . '/' . $sample->product_id . '/' . $sample->jury_id }} --}}
                                                @foreach ($samples as $sample)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $sample->product_title }}</td>
                                                        <td>{{ $sample->samples }}</td>
                                                        <td>{{$sample->name}}</td>
                                                        <td> <a class="btn btn-success"
                                                                href="{{route('give_review',['juryId'=>$sample->jury_id,'table'=>$sample->tables,'sampleId'=>$sample->id  ])}}">Give
                                                                Review
                                                             </a>
                                                        </td>
                                                    </tr>
                                                @endforeach 
                                            </tbody>
                                        </table>
                            
                             