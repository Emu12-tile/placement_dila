@extends('layouts.form')
@section('content')
    <div class="hk-pg-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper mt-100">
                        @if (session('success'))
                            <div class="alert alert-success" id="success-message"
                                style="background-color: green; color: white;">
                                {{ session('success') }}
                            </div>
                        @endif
                        <h3 class="hk-sec-title text-white text-center color-wrap  "
                            style=" background-color:#088c13; padding:10px;">ዲላ ዩኒቨርሲቲ የሰራተኞች የስራ
                            ድልድል ማወዳደርያ ቅፅ</h3>
                        <div class="row">
                            <div class="col-sm">
                                <form action="{{ route('add.createForm') }}" class="employee-form" id='add_form' method="POST">
                                    @csrf
                                    <div class="form-section">
                                        <input type="hidden" name="page" value="1">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">የመጀመሪያ ስም *</label>
                                                <input class="form-control @error('firstName') is-invalid @enderror"
                                                    id="firstName" placeholder="የመጀመሪያ ስም" value="{{ old('firstName') }}"
                                                    type="text" name="firstName">
                                                @error('firstName')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="lastName">የአያት ስም *</label>
                                                <input class="form-control @error('lastName') is-invalid @enderror"
                                                    id="lastName" placeholder="የአያት ስም" value="{{ old('lastName') }}"
                                                    type="text" name="lastName">
                                                @error('lastName')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="middleName">የአባት ስም *</label>
                                                <input class="form-control @error('middleName') is-invalid @enderror"
                                                    id="middleName" placeholder="የአባት ስም" value="{{ old('middleName') }}"
                                                    type="text" name="middleName">
                                                @error('middleName')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="sex">ጾታ *</label>
                                                <select class="form-control custom-select "value="{{ old('sex') }}"
                                                    id="sex" name="sex">

                                                    <option value="ሴት " {{ old('sex') == 'ሴት' ? 'selected' : '' }}>ሴት
                                                    </option>
                                                    <option value="ወንድ"{{ old('sex') == 'ወንድ' ? 'selected' : '' }}>ወንድ
                                                    </option>

                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label mb-10" for="email">ኢሜይል (የዲላ ኢሜይል ብቻ
                                                    ይጠቀሙ) </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="icon-envelope-open"></i></span>
                                                    </div>
                                                    <input name="email" type="email"
                                                        class="form-control
                                                        @error('email') is-invalid @enderror"
                                                        id="email" placeholder="@du.edu.et"
                                                        value="{{ old('email') }}">
                                                    @error('email')
                                                        <span class=" error invalid-feedback">
                                                            <strong>የዲላ ኢሜይል ብቻ ይጠቀሙ</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                @if ($errors->any())
                                                    <span class=" error" style="color:red">
                                                        <strong>{{ $errors->getBag('default')->first('custom_email_error') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label mb-10">ስልክ
                                                    ቁጥር</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                    </div>
                                                    <input type="tel"name="phone" id="phone"
                                                        class="form-control @error('phone') is-invalid @enderror"
                                                        placeholder="phone" value="{{ old('phone') }}">
                                                    @error('phone')
                                                        <span class=" error invalid-feedback">
                                                            <strong>ትክክለኛዉን ስልክ
                                                                ቁጥር ያስገቡ</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-section">
                                        <input type="hidden" name="page" value="2">
                                        <div class="row">

                                            <div class="col-md-4 form-group">
                                                <label for="positionofnow">አሁን ያሉበት የስራ ክፍል -> የስራ መደብ</label>
                                                <input type="text" value="{{ old('positionofnow') }}"
                                                    class="form-control @error('positionofnow') is-invalid @enderror"
                                                    id="positionofnow" placeholder="አሁን ያሉበት የስራ መደብ" name="positionofnow">
                                                @error('positionofnow')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-4 form-group">
                                                <label for="level">አሁን ያሉበት ደረጃ </label>
                                                <input type="text" value="{{ old('level') }}"
                                                    class="form-control @error('level') is-invalid @enderror"
                                                    id="level" placeholder="አሁን ያሉበት ደረጃ" name="level">
                                                @error('level')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                {{-- <select class="form-control custom-select d-block w-100 " id="level"
                                                    name="level">
                                                    @foreach ($level as $col)
                                                        <option value="{{ $col->id }}"
                                                            {{ old('level_id') == $col->id ? 'selected' : '' }}>
                                                            {{ $col->level }}</option>
                                                    @endforeach
                                                </select> --}}
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="fee">ደምወዝ (ETB)</label>
                                                <input class="form-control @error('fee') is-invalid @enderror"
                                                    id="fee" placeholder="ደምወዝ" value="{{ old('fee') }}"
                                                    type="number" name="fee">
                                                @error('fee')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <h3 class="text-white text-center mt-3 mb-4  "
                                            style=" background-color:#088c13; margin:center">
                                            ያለዎትን የትምህርት ዝግጅትና የትምህርት ደረጃ ያስገቡ
                                        </h3>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class=" educ row">
                                                    <div class="col-md-4">

                                                        <label for="level">የትምህርት ደረጃ</label>
                                                        <input type="text" name="addMoreFields[0][level]"
                                                            value="{{ old('level') }}"
                                                            class="form-control  @error('level') is-invalid @enderror"
                                                            id="level" placeholder="educational level ">
                                                        @error('level')
                                                            <span class=" error invalid-feedback">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="discipline">የትምህርት ዝግጅት (በተቋም) </label>
                                                        <input type="text" name="addMoreFields[0][discipline]"
                                                            value="{{ old('discipline') }}"
                                                            class="form-control  @error('discipline') is-invalid @enderror"
                                                            id="discipline" placeholder=" የትምህርት ዝግጅት (በተቋም)">
                                                        @error('discipline')
                                                            <span class=" error invalid-feedback">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>


                                                    <div class="col-md-3">
                                                        <label for="completion_date">completion_date </label>
                                                        <input type="text" name="addMoreFields[0][completion_date]"
                                                            value="{{ old('completion_date') }}"
                                                            class="form-control  @error('completion_date') is-invalid @enderror"
                                                            id="completion_date" placeholder="completion_date">
                                                        @error('completion_date')
                                                            <span class=" error invalid-feedback">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0)"
                                                            class="btn color-wrap text-white bg-blue-dark-4  addrow mt-40 "
                                                            style=" border-radius:50%">+</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="text-white text-center mt-3 mb-4 navigation "
                                            style=" background-color:#088c13; margin:center">
                                        </h3>
                                        {{-- <button class="text-white text-left mt-3 mb-4 mr-150"
                                            style=" background-color:rgb(17,40,77)">
                                            ምርጫ 1</button>

                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for=""> የስራ ክፍሉ</label>


                                                <select class="form-control custom-select d-block w-100 dynamic "
                                                    value="{{ old('job_category_id') }}" name="job_category_id"
                                                    id="job_category_id">
                                                    <option value="">Chose </option>
                                                    @foreach ($job_category as $col)
                                                        <option value="{{ $col->id }}"
                                                            {{ old('job_category_id') == $col->id ? 'selected' : '' }}>
                                                            {{ $col->job_category }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="col-md-6 form-group">

                                                <label for="position_id"> የስራ መደብ</label>
                                                <select class="form-control custom-select d-block w-100  positionofone"
                                                    id="position_id" name="position_id"
                                                    value="{{ old('position_id') }}">
                                                    <option value="0" disabled="true" selected="true"> position
                                                    </option>


                                                </select>
                                                <div id="detailsd" class=" font-20 ">


                                                </div>
                                                <div id="details" class=" ml-25 ">


                                                </div>
                                                <div id="details2" class=" ml-25 ">


                                                </div>
                                                <div id="details4" class=" ml-25 "></div>

                                                <div id="details3" class=" ml-25 ">


                                                </div>

                                            </div>


                                        </div>
                                        <button class="text-white text-left mt-3 mb-4" style=" background-color:rgb(17,40,77)">
                                            ምርጫ 2</button>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for=""> የስራ ክፍሉ</label>


                                                <select class="form-control custom-select d-block w-100  dynamic2"
                                                    value="{{ old('jobcat2_id ') }}" name="jobcat2_id">
                                                    <option value="">Chose </option>
                                                    @foreach ($jobcat2 as $col)
                                                        <option value="{{ $col->id }}"
                                                            {{ old('jobcat2_id') == $col->id ? 'selected' : '' }}>
                                                            {{ $col->job_category }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-md-6 form-group">

                                                <label for="choice2_id"> የስራ መደብ</label>
                                                <select class="form-control custom-select d-block w-100  positionofone"
                                                    id="choice2_id" name="choice2_id">
                                                    <option value="0" disabled="true" selected="true"> position
                                                    </option>


                                                </select>
                                                <div id="detaild" class=" font-20 "></div>
                                                <div id="detail" class=" ml-25 ">


                                                </div>
                                                <div id="detail2" class=" ml-25 ">


                                                </div>
                                                <div id="detail4" class=" ml-25 "></div>

                                                <div id="detail3" class=" ml-25 ">


                                                </div>

                                            </div>




                                        </div> --}}

                                    </div>
                                    <div class="form-section ">
                                        <input type="hidden" name="page" value="3">
                                        <div class="row">

                                            <div class="col-md-6 form-group">
                                                <label for="resultOfrecentPerform" class=""> የሁለት ተከታታይ የቅርብ ጊዜ
                                                    የሥራ
                                                    አፈጻፀም አማካይ
                                                    ውጤት(ከ100 በቁጥር)</label>
                                                <input
                                                    class="form-control mt-25
                                                    @error('resultOfrecentPerform') is-invalid @enderror"
                                                    id="resultOfrecentPerform" placeholder=" የሁለት ተከታታይ የቅርብ ጊዜ የሥራ አፈጻፀም"
                                                    value="{{ old('resultOfrecentPerform') }}" type="decimal"
                                                    name="resultOfrecentPerform">
                                                @error('resultOfrecentPerform')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                            <div class="col-md-6 form-group">
                                                <label for="DisciplineFlaw"> የዲስፕሊን ጉድለት</label>
                                                <input class="form-control @error('DisciplineFlaw') is-invalid @enderror"
                                                    id="DisciplineFlaw" placeholder=" የዲስፕሊን ጉድለት"
                                                    value="{{ old('DisciplineFlaw') }}" type="text"
                                                    name="DisciplineFlaw">
                                                @error('DisciplineFlaw')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="MoreRoles"> ተጨማሪ የሥራ ድርሻ</label>
                                                <input class="form-control @error('MoreRoles') is-invalid @enderror"
                                                    id="MoreRoles" placeholder=" የዲስፕሊን ጉድለት"
                                                    value="{{ old('MoreRoles') }}" type="text" name="MoreRoles">
                                                @error('MoreRoles')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                        </div>
                                        <h3 class="text-white text-center mt-3 mb-4   "
                                            style=" background-color:#088c13; margin:center nav navmore">የስራ
                                            ልምድ(በኢትዮጵያ አቆጣጠር
                                            ብቻ)</h3>
                                        <div id="myform">
                                            <div class="row">
                                                <div class="col-sm">

                                                    <div class=" formgr row">

                                                        <div class="col-md-3">

                                                            <label for="startingDate">የጀመሩበት ዓመት(ወር/ቀን/ዓመት)</label>
                                                            <input type="date"
                                                                name="addMoreInputFields[0][startingDate]"
                                                                value="{{ old('startingDate') }}"
                                                                class="form-control  @error('startingDate') is-invalid @enderror"
                                                                id="startingDate" placeholder=" ">
                                                            @error('startingDate')
                                                                <span class=" error invalid-feedback">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror

                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="endingDate">ያበቃበት ቀን(ወር/ቀን/ዓመት) </label>
                                                            <input type="date" min="startingDate"
                                                                name="addMoreInputFields[0][endingDate]"
                                                                value="{{ old('endingDate') }}"
                                                                class="form-control  @error('endingDate') is-invalid @enderror"
                                                                id="endingDate" placeholder=" endingDate">
                                                            @error('endingDate')
                                                                <span class=" error invalid-feedback">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="positionyouworked">የስራ መደብ </label>
                                                            <input type="text"
                                                                name="addMoreInputFields[0][positionyouworked]"
                                                                value="{{ old('positionyouworked') }}"
                                                                class="form-control  @error('positionyouworked') is-invalid @enderror"
                                                                id="positionyouworked" placeholder="የሰሩበት የስራ መደብ">
                                                            @error('positionyouworked')
                                                                <span class=" error invalid-feedback">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0)"
                                                                class="btn color-wrap text-white bg-blue-dark-4  addRow mt-40 "
                                                                style=" border-radius:50%">+</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-navigation mt-3">
                                        <button type="button"
                                            class="previous btn bg-red-dark-3 text-white float-left">&lt;
                                            Previous</button>
                                        <button type="button" class="next btn bg-blue-dark-3 text-white float-right">Next
                                            &gt;</button>
                                        <button type="submit" id="submit_form"
                                            class="btn bg-green-dark-3 text-white float-right">Submit</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://raw.github.com/mattpowell/localstorageshim/master/localstorageshim.min.js" type="text/javascript">
    </script>

    <script>
        $(document).ready(function() {
            var i = 0
            setTimeout(function() {
                $('#success-message').fadeOut('slow');
            }, 5000);
            $(".addRow").click(function(e) {
                ++i;
                e.preventDefault();
                $("#myform").append(`
                        <div class="row" >
                                    <div class="col-sm">

                                            <div class=" formgr row">

                                                <div class="col-md-3">
                                                <label for="startingDate"></label>

                                                    <input type="date" name="addMoreInputFields[${i}][startingDate]" value="{{ old('startingDate') }}"
                                                        class="form-control  @error('startingDate') is-invalid @enderror"
                                                        id="startingDate" placeholder=" ">
                                                    @error('startingDate')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div class="col-md-3">
                                                  <label for="endingDate"></label>
                                                    <input type="date" name="addMoreInputFields[${i}][endingDate]" value="{{ old('endingDate') }}}"
                                                        class="form-control  @error('endingDate') is-invalid @enderror"
                                                        id="endingDate" placeholder=" endingDate">
                                                    @error('endingDate')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="positionyouworked"></label>

                                                    <input type="text" name="addMoreInputFields[${i}][positionyouworked]" value="{{ old('positionyouworked') }}"
                                                        class="form-control  @error('positionyouworked') is-invalid @enderror"
                                                        id="positionyouworked" placeholder="የሰሩበት የስራ መደብ">
                                                    @error('positionyouworked')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div>

                                                    <a href="javascript:void(0)" class="btn btn-danger  removeRow mt-20 "
                                                        style=" border-radius:50%">-</a>
                                                </div>
                                            </div>

                                        </div>
                                </div>





                    `);
            });

            $(document).on('click', '.removeRow', function(e) {

                e.preventDefault();

                let row_item = $(this).parents('.formgr');
                $(row_item).remove();
            });

            var j = 0;

            $(".addrow").click(function(e) {
                ++j;
                e.preventDefault();
                $(".navigation").before(`
                <div class="row">
                    <div class="col-sm">
                        <div class=" educ row">
                            <div class="col-md-4">

                                <label for="level">የትምህርት ደረጃ</label>
                                <input type="text" name="addMoreFields[${j}][level]"
                                value="{{ old('level') }}"
                                class="form-control  @error('level') is-invalid @enderror"
                                id="level" placeholder="educational level ">
                                @error('level')
                                <span class=" error invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror

                            </div>
                            <div class="col-md-4">
                                <label for="discipline">የትምህርት ዝግጅት (በተቋም) </label>
                                <input type="text"
                                    name="addMoreFields[${j}][discipline]"
                                    value="{{ old('discipline') }}"
                                    class="form-control  @error('discipline') is-invalid @enderror"
                                    id="discipline" placeholder=" የትምህርት ዝግጅት (በተቋም)">
                                @error('discipline')
                                    <span class=" error invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                                                    <div class="col-md-3">
                                                        <label for="completion_date">completion_date </label>
                                                        <input type="text" name="addMoreFields[${j}][completion_date]"
                                                            value="{{ old('completion_date') }}"
                                                            class="form-control  @error('completion_date') is-invalid @enderror"
                                                            id="completion_date" placeholder="completion_date">
                                                        @error('completion_date')
                                                            <span class=" error invalid-feedback">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                <div>
                               <a href="javascript:void(0)" class="btn btn-danger  removerow mt-20 "
                                                        style=" border-radius:50%">-</a>
                            </div>
                        </div>
                    </div>
                </div>



                    `);
            });

            $(document).on('click', '.removerow', function(e) {

                e.preventDefault();
                // $this.parents('')
                let row_item = $(this).parents('.educ');
                $(row_item).remove();
            });
            var m = 0;
            $(".addMorerole").click(function(e) {
                ++m;
                e.preventDefault();
                $("#morerole").append(`

                                                <div class="row">
                                                    <div class="col-sm">

                                                        <div class=" form_more_role row">
                                                            <div class="col-md-6 ">
                                                                <label for="more_role"> ተጨማሪ የሥራ ድርሻ</label>
                                                                <input class="form-control"
                                                                    @error('more_role') is-invalid @enderror"
                                                                    id="MoreRoles" placeholder="ተጨማሪ የሥራ ድርሻ"
                                                                    value="{{ old('more_role') }}" type="text"
                                                                    name="addMoreRoles[${m}][more_role]">
                                                                @error('more_role')
                                                                    <span class=" error invalid-feedback">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0)"
                                                                    class="btn color-wrap text-white bg-red-dark-4  removeMorerole mt-40 "
                                                                    style=" border-radius:50%">-</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                    `);
            });

            $(document).on('click', '.removeMorerole', function(e) {

                e.preventDefault();
                // $this.parents('')
                let row_item = $(this).parents('.form_more_role');
                $(row_item).remove();
            });


            $(document).on('change', '.dynamic', function() {
                // console.log("hmm its change");

                // var cat_id = $(this).val();
                var cat_id = $(this).val();

                var div = $(this).parent();


                var op = " ";

                $.ajax({
                    type: "GET",
                    url: "try/job",
                    data: {
                        "id": cat_id
                    },
                    success: function(data) {

                        op += '<option value="0" selected disabled>select</option>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].position +
                                '</option>';
                        }

                        $('select[name="position_id"]').html(" ");
                        $('select[name="position_id"]').append(op);
                    },
                    error: function() {

                    }
                });
            });
            $(document).on('change', '#position_id', function() {
                var selected = $(this).val();
                var a = $(this).parent();
                var di = " ";
                var div = " ";
                div21 = " ";
                var div2 = " ";
                var div3 = " ";
                // console.log(selected);
                $.ajax({
                    url: "/try/selection",
                    type: "GET",
                    data: {
                        "id": selected
                    },
                    dataType: "json",

                    success: function(data) {

                        di += " <b>ስራዉ የሚፈልገው ዝቅተኛ መስፈርት </b>  "
                        $('#detailsd').html(" ");
                        $('#detailsd').append(di);

                        div += " <b> የስራ ልምድ (በ አመት):</b> " + data.experience
                        $('#details').html(" ");
                        $('#details').append(div);

                        div2 += "<b> የትምህርት ደረጃ:</b> " + data.edu_level

                        $('#details2').html(" ");
                        $('#details2').append(div2);
                        div21 += "<b> የትምህርት ዝግጅት:</b> " + data.education_type

                        $('#details4').html(" ");
                        $('#details4').append(div21);
                        div3 += "<b> ደረጃ:</b> " + data.level

                        $('#details3').html(" ");
                        $('#details3').append(div3);


                    },
                    error: function() {

                    }

                });




            });
            $(document).on('change', '.dynamic2', function() {
                // console.log("hmm its change");

                var categ_id = $(this).val();

                console.log(categ_id);
                var div = $(this).parent();


                var op = " ";

                $.ajax({
                    type: "GET",
                    url: "try/categ2",
                    data: {
                        "id": categ_id
                    },
                    success: function(data) {

                        op += '<option value="0" selected disabled>select</option>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].position +
                                '</option>';
                        }

                        $('select[name="choice2_id"]').html(" ");
                        $('select[name="choice2_id"]').append(op);
                    },
                    error: function() {

                    }
                });
            });
            $(document).on('change', '#choice2_id', function() {
                var selected = $(this).val();
                var a = $(this).parent();
                var di = " ";
                var div = " ";
                var div21 = " ";
                var div2 = " ";
                var div3 = " ";
                // console.log(selected);
                $.ajax({
                    url: "/try/selection2",
                    type: "GET",
                    data: {
                        "id": selected
                    },
                    dataType: "json",

                    success: function(data) {

                        di += " <b>ስራዉ የሚፈልገው ዝቅተኛ መስፈርት </b>  "
                        $('#detaild').html(" ");
                        $('#detaild').append(di);

                        div += "<b> የስራ ልምድ(በ አመት):</b> " + data.experience
                        $('#detail').html(" ");
                        $('#detail').append(div);

                        div2 += "<b> የትምህርት ደረጃ:</b> " + data.edu_level

                        $('#detail2').html(" ");
                        $('#detail2').append(div2);
                        div21 += "<b> የትምህርት ዝግጅት:</b> " + data.education_type

                        $('#detail4').html(" ");
                        $('#detail4').append(div21);
                        div3 += "<b> ደረጃ:</b> " + data.level

                        $('#detail3').html(" ");
                        $('#detail3').append(div3);


                    },
                    error: function() {

                    }

                });




            });
            $(function() {
                var $sections = $('.form-section');

                function navigateTo(index) {
                    $sections.removeClass('current').eq(index).addClass('current');
                    $('.form-navigation .previous').toggle(index > 0);
                    var atTheEnd = index >= $sections.length - 1;
                    $('.form-navigation .next').toggle(!atTheEnd);
                    $('.form-navigation [Type=submit]').toggle(atTheEnd);

                    const step = document.querySelector('.step' + index);
                    step.style.backgroundColor = "#17a2b8";
                    step.style.color = "white";
                }

                function curIndex() {
                    return $sections.index($sections.filter('.current'));


                }
                $('.form-navigation .previous').click(function() {
                    navigateTo(curIndex() - 1);
                });
                $('.form-navigation .next').click(function() {
                    $('.employee-form').parsley().whenValidate({
                        group: 'block-' + curIndex()
                    }).done(function() {
                        navigateTo(curIndex() + 1);
                    });
                });
                $sections.each(function(index, section) {
                    $(section).find(':input').attr('data-parsley-group', 'block-' + index);

                });
                navigateTo(0);
            });
        });

        // Function to handle form submission
    </script>
@endsection
