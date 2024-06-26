@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ route('lowresource.lowresource') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title"> የመመዘኛ መስፈርቶች ከቡድን መሪ በታች
                    </h5>
                    {{-- <p class="mb-40">A tiny editable jQuery Bootstrap spreadsheet. Just start typing to edit, or move around
                    with arrow keys or mouse clicks!</p> --}}

                    <div class="row">

                        <div class="col-sm">

                            {{-- <div class="row"> --}}
                            {{-- <div class="col-md-6"> --}}

                            <div class="table-wrap mb-20">
                                <div class="table-responsive">

                                    <table class="table table-active table-bordered mb-0">
                                        <thead class="thead-active">
                                            <tr>
                                                <th>ተ.ቁ</th>
                                                <th>የመመዘኛ መስፈርቶች</th>
                                                @role('hr')
                                                    <th>የ ማወዳደርያ ነጥብ(100%)</th>
                                                @endrole

                                            </tr>
                                        </thead>

                                        <tbody>

                                            @role('hr')
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td> ለትምህርት ዝግጅት የሚሰጥ ነጥብ</td>
                                                    <td>

                                                        <button class="btn bg-blue-dark-4 text-white" type="button"
                                                            data-toggle="collapse" data-target="#collapseExample"
                                                            aria-expanded="false" aria-controls="collapseExample">
                                                            40
                                                        </button>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ </td>
                                                    <td><button class="btn bg-blue-dark-4 text-white" type="button"
                                                            data-toggle="collapse" data-target="#collapse2"
                                                            aria-expanded="false" aria-controls="collapseExample">
                                                            30
                                                        </button></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>ለውጤት ተኮር ምዘና</td>
                                                    <td>30</td>

                                                </tr>
                                            @endrole

                                        </tbody>

                                    </table>

                                </div>
                            </div>

                            {{-- </div> --}}


                            {{-- <div class="col-md-6 "> --}}
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">

                                    <div class="table-wrap mb-20 ">
                                        <div class="table-responsive">
                                            <table class="table table-active table-bordered mb-0">
                                                <thead class="thead-active">
                                                    <tr>
                                                        <th>ተ.ቁ</th>

                                                        <th>የማወዳደሪያ መስፈርት</th>
                                                        <th>ቡድን መሪ በታች(40%)</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>

                                                        <td> የስራ መደቡ የሚጠይቀው ዝቅተኛ ትምህርት
                                                            ዝግጅት የመጀመሪያ ዲግሪ ለሆኑ የስራ መደቦች</td>
                                                        <td>

                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1.1</th>
                                                        <td> ፒ.ኤች.ዲ (ሶስተኛ ዲግሪ) የትምህርት ዝግጅት
                                                            ያለው</td>
                                                        <td>40</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1.2</th>
                                                        <td>ሁለተኛ ዲግሪ የትምህርት ዝግጅት ያለው</td>
                                                        <td>36</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1.3</th>
                                                        <td>የመጀመሪያ ዲግሪ የትምህርት ዝግጅት ያለው</td>
                                                        <td>32</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>

                                                            የስራ መደቡ የሚጠይቀው ዝቅተኛ ትምህርት
                                                            ዝግጅት የኮሌጅ ዲፕሎማ ወይም ደረጃ ሶስት
                                                            ለሆኑ የስራ መደቦች
                                                    </tr>
                                                    </td>
                                                    <td></td>

                                                    <tr>
                                                        <th scope="row">2.1</th>
                                                        <td>የመጀመሪያ ዲግሪ የትምህርት ዝግጅት ያለው</td>
                                                        <td>40</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2.2</th>
                                                        <td>ደረጃ 4 ወይም ደረጃ 5 የትምህርት ዝግጅት ያለው

                                                        </td>
                                                        <td>36</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2.3</th>
                                                        <td> የኮሌጅ ዲፕሎማ ወይም ደረጃ ሶስት የትምህርት
                                                            ዝግጅት ያለው

                                                        </td>
                                                        <td>32</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2.4</th>
                                                        <td> 10+2 ወይም ደረጃ 2 የትምህርት ዝግጅት ያለው

                                                        </td>
                                                        <td>28</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2.5</th>
                                                        <td>10+1 ወይም ደረጃ 1 የትምህርት ዝግጅት ያለው

                                                        </td>
                                                        <td>24</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2.6</th>
                                                        <td>በቀድሞ 12ኛ ወይም በአዲሱ 10ኛ ክፍል እና
                                                            በታች የትምህርት ዝግጅት ያለው

                                                        </td>
                                                        <td>20</td>

                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="collapse" id="collapse2">
                                <div class="card card-body">

                                    <div class="table-wrap mb-20 ">
                                        <div class="table-responsive">
                                            <table class="table table-active table-bordered mb-0">
                                                <thead class="thead-active">
                                                    <tr>
                                                        <th>ተ.ቁ</th>

                                                        <th>የማወዳደሪያ መስፈርት</th>
                                                        <th>ቡድን መሪ እና በታች(30%)</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>

                                                        <td> አስር ዓመት እና በላይ አግባብነት ያለው የስራ
                                                            ልምድ ያለው </td>
                                                        <td>
                                                            30
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td> ሰባት ዓመት እና ከአስር ዓመት በታች አግባብነት
                                                            ያለው የስራ ልምድ ያለው </td>
                                                        <td>25</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>አምስት ዓመት እና ከሰባት ዓመት በታች
                                                            አግባብነት ያለው የስራ ልምድ ያለው</td>
                                                        <td>20</td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>ከአምሰት አመት በታች አግባብነት ያለው የስራ
                                                            ልምድ ያለው</td>
                                                        <td>15</td>

                                                    </tr>

                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <form action="{{ route('resource.update', $hr->id) }}" method="POST" id="add_evaluation">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    {{-- <div class="col-md-6"> --}}


                                    <div class="col-sm">
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-bordered mb-0">
                                                    <thead class="thead-active">
                                                        <tr>

                                                            <th>ሙሉ ስም</th>

                                                            {{-- <th>የትምህርት ደረጃ</th> --}}
                                                            <th>ጾታ</th>
                                                            <th>የትምህርት ደረጃና የትምህርት ዝግጅት</th>

                                                            <th>የሚወዳደሩበት የስራ መደብ</th>
                                                            <th> ያለዎት የስራ ልምድ </th>

                                                            <th>የሁለት ተከታታይ የስራ አፈጻጸም አማካይ ውጤት </th>
                                                            <th>ተጨማሪ ይመልከቱ</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>

                                                            <td>{{ $hr->form->full_name }}
                                                            </td>
                                                            <td>{{ $hr->form->sex }}
                                                            </td>


                                                            <td>
                                                                @foreach ($edu as $type)
                                                                    ({{ $type->level }},
                                                                    {{ $type->discipline }},{{ $type->completion_date }})
                                                                    ,
                                                                @endforeach
                                                            </td>

                                                            <td>{{ $hr->form->position->position }}</td>

                                                            <td>
                                                                @foreach ($forms as $fo)
                                                                    <?php

                                                                    $fdate = Carbon::parse($fo->startingDate);

                                                                    $tdate = Carbon::parse($fo->endingDate);

                                                                    // $years = $tdate - $fdate;
                                                                    $days = $tdate->diffInDays($fdate);
                                                                    $months = $tdate->diffInMonths($fdate);

                                                                    $years = $tdate->diffInYears($fdate);
                                                                    // dd($fdate->diffForHumans($tdate));
                                                                    // dd($years,$months,$days);

                                                                    $time = $tdate->diff($fdate);
                                                                    // echo $time->y;

                                                                    echo $time->y, 'ዓመት', 'ከ', $time->m, ' ወር በ(', $fo->positionyouworked, '), ';

                                                                    ?>
                                                                @endforeach
                                                            </td>

                                                            <td>
                                                                {{ $hr->form->resultOfrecentPerform }}
                                                            </td>
                                                            <td data-toggle="collapse" data-target="#more"
                                                                aria-expanded="false" aria-controls="collapseExample">more
                                                                <i class='ion ion-md-arrow-round-forward'></i>


                                                            </td>





                                                        </tr>

                                                    </tbody>
                                                </table>
                                                {{-- {!! $hrs->links() !!} --}}

                                            </div>
                                        </div>
                                    </div>
                                    {{-- </div> --}}
                                </div>
                                <div class="collapse" id="more">
                                    <div class="card card-body">

                                        <div class="table-wrap mb-20 ">
                                            <div class="table-responsive">
                                                <table class="table table-active table-bordered mb-0">
                                                    <thead class="thead-active">
                                                        <tr>


                                                            <th>አሁን ያሉበት የስራ መደብ</th>
                                                            <th>ደረጃ</th>
                                                            <th>ደምወዝ</th>
                                                            <th>በዩኒቨርስቲዉ የቅጥር ዘመን
                                                                በኢትዮጵያ</th>
                                                            <th>በዩኒቨርስቲዉ አገልግሎት ዘመን
                                                                (በዓመት,የስራ
                                                                መደብ)</th>
                                                            <th>በሌላ መስርያ ቤት አገልግሎት
                                                                ዘመን(በዓመት,የስራ
                                                                መደብ)</th>
                                                            <th>አገልግሎት ከዲፕሎማ
                                                                በፊት(በዓመት,የስራ መደብ)</th>
                                                            <th>አገልግሎት ከዲፕሎማ/ዲግሪ
                                                                በኋላ(በዓመት, የስራ መደብ)</th>
                                                            <th>የዲስፕሊን ጉድለት</th>
                                                            <th>ተጨማሪ የሥራ ድርሻ</th>


                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>

                                                            <td>{{ $hr->form->positionofnow }}</td>
                                                            <td>{{ $hr->form->level }}</td>
                                                            <td>{{ $hr->form->fee }}</td>
                                                            <td>{{ $hr->form->UniversityHiringEra }}</td>
                                                            <td>{{ $hr->form->servicPeriodAtUniversity }}</td>
                                                            <td>{{ $hr->form->servicPeriodAtAnotherPlace }}</td>
                                                            <td>{{ $hr->form->serviceBeforeDiplo }}</td>
                                                            <td>{{ $hr->form->serviceAfterDiplo }}</td>
                                                            <td>{{ $hr->form->DisciplineFlaw }}</td>
                                                            <td>{{ $hr->form->MoreRoles }}</td>

                                                        </tr>

                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    @role('hr')
                                        <div class="col-md-4">
                                            <div class="row form-group">
                                                <label for="performance">ለትምህርት ዝግጅት የሚሰጥ ነጥብ</label>
                                                <input type="float" value="{{ $hr->performance }}"
                                                    class="form-control @error('performance') is-invalid @enderror"
                                                    id="performance" placeholder="ለትምህርት ዝግጅት" name="performance" min="0"
                                                    max="40">
                                                @error('performance')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="row form-group">
                                                <label for="experience">ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ</label>
                                                <input type="float" value="{{ $hr->experience }}"
                                                    class="form-control @error('experience') is-invalid @enderror"
                                                    id="experience" placeholder="ለስራ ልምድ" name="experience" min="0"
                                                    max="30">
                                                @error('experience')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="row form-group">
                                                <label for="resultbased">ለውጤት ተኮር ምዘና </label>
                                                <input type="float"
                                                    value="{{ $hr->resultbased }}"
                                                    class="form-control @error('resultbased') is-invalid @enderror"
                                                    id="resultbased" placeholder="ለውጤት ተኮር ምዘና " name="resultbased"
                                                    min="0" max="30">
                                                @error('resultbased')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="row form-group">
                                                <label for="resultbased">Remark </label>
                                                <textarea type="text" class="form-control @error('remark') is-invalid @enderror" id="remark"
                                                    placeholder="remark " name="remark">{{ $hr->remark }}</textarea>
                                                @error('remark')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="table-wrap mb-20 ">
                                                <div class="table-responsive" id="table-container">
                                                    <table class="table table-active table-bordered mb-0 addclass">
                                                        <thead class="thead-active">
                                                            <tr>
                                                                <th>ዓመት-ወር-ቀን</th>


                                                                <th>ብዜት</th>
                                                                <th>ዓመት-ወር-ቀን</th>
                                                                <th></th>


                                                            </tr>
                                                            <tr></tr>
                                                        </thead>

                                                        <tbody>
                                                            @foreach ($forms as $fo)
                                                                <tr data-id="{{ $fo->id }}">
                                                                    <td>



                                                                        <?php

                                                                        $fdate = Carbon::parse($fo->startingDate);

                                                                        $tdate = Carbon::parse($fo->endingDate);
                                                                        $experience = $fo->positionyouworked;
                                                                        // $days = $tdate->diffInDays($fdate);
                                                                        // $months = $tdate->diffInMonths($fdate);

                                                                        // $years = $tdate->diffInYears($fdate);

                                                                        $time = $tdate->diff($fdate);

                                                                        echo $time->y, '-', $time->m, '-', $time->d, ' (', $experience, ')';
                                                                        ?>


                                                                    </td>

                                                                    <td>
                                                                        <div class="col-md-10">

                                                                            <select
                                                                                class="form-control custom-select select  mt-15">
                                                                                <option selected>Select</option>
                                                                                <option value="0">0</option>
                                                                                <option value="0.5">1/2</option>
                                                                                <option value="1">1</option>
                                                                            </select>

                                                                        </div>
                                                                    </td>
                                                                    <td id="add">

                                                                    </td>

                                                                </tr>
                                                            @endforeach
                                                            <tr>
                                                                <td colspan="2" class="text-center">ድምር</td>
                                                                {{-- <td></td> --}}
                                                                <td id="total-year"></td>
                                                                <td>- {{ preg_replace('/[^0-9]/', '', $hr->form->position->experience) }}</td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    @endrole
                                    <input type="hidden" name="type" value="low">





                                </div>
                                <div class="form-group row mb-0 pull-right">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn bg-blue-dark-4 text-white"
                                            id="add_btn">save</button>
                                    </div>
                                </div>





                            </form>
                            {{-- @endif --}}
                            {{-- @endforeach --}}

                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
