<!DOCTYPE html>
<html lang="en">

<head>


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



    <title>Document</title>
    <style>
        @media print {
            #header {
                margin-top: 20mm;
                /* Adjust the margin for the header on the first page */
            }

            @page :first {
                #header {
                    margin-top: 20mm;
                    /* Adjust the margin for the header on the second page */
                }
            }
        }


        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(2) {
            /* background-color: #6d6a6a; */
        }

        /* #customers tr:nth-child(even) {
    background-color: #f2f2f2;
    } */

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            /* background-color: #5f5656; */
            color: rgb(29, 28, 28);
        }
    </style>
</head>

<body>

    <div id="element-to-print">
        <div id="header">
            {{-- @foreach ($formList as $i => $form) --}}
            <h1 style="font-family: Noto Sans Ethiopic, sans-serif; text-align:center ">ዲላ ዩኒቨርሲቲ </h1>
            <h3 style="text-align:center">የአስተዳደር ሠራተኞች ፕሮፋይል</h3>
        </div>
        <p>1/ የሠራተኛው ሙሉ ስም:-{{ $form->firstName }} {{ $form->middleName }} {{ $form->lastName }} </p>
        {{-- <p>2/ አሁን ያሉበት የስራ ክፍል፦{{ $form->job_category->job_category }} </p> --}}
        <p>2/ አሁን ያሉበት የስራ መደብ መጠርያ:-{{ $form->positionofnow }} &emsp;
            ደረጃ፦{{ $form->level }} &emsp; ደምወዝ:-{{ $form->fee }}
        </p>
        <p>3/ የተማሩት የት/ት ዝግጅትና የት/ት ደረጃ:-
        </p>
        <table id="customers" class="mb-15">
            <thead>
                <tr>

                    <th>የትምህርት ደረጃ</th>
                    <th>የትምህርት ዝግጅት</th>
                    <th>የጨረሱበት ዓመት</th>




                </tr>



            </thead>
            <tbody>
                @foreach ($form->education as $i => $fo)
                    <tr>

                        <td> {{ $fo->level ?? '' }}</td>
                        <td> {{ $fo->discipline ?? '' }}</td>
                        <td>{{ $fo->completion_date ?? '' }} </td>
                    </tr>
                    {{-- <tr>

                        <td>{{ $fo->discipline2 ?? '' }} </td>
                    </tr>
                    <tr>
                        <td> {{ $fo->bsc ?? '' }}</td>
                        <td> {{ $fo->discipline3 ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>{{ $fo->msc ?? '' }} </td>



                        <td>{{ $fo->discipline4 ?? '' }} </td>

                    </tr> --}}
                @endforeach
            </tbody>
        </table>
        <p>4/ በዩኒቨርስቲዉ የቅጥር
            ዘመን በኢትዮጵያ አቆጣጠር:-
            {{ $form->UniversityHiringEra }}

        </p>
        {{-- <p>5/ በዩኒቨርስቲዉ አገልግሎት ዘመን:-{{ $form->servicPeriodAtUniversity }} </p> --}}
        {{-- <p>6/ በሌላ መስርያ ቤት አገልግሎት ዘመን:-{{ $form->servicPeriodAtAnotherPlace }} </p> --}}
        <h5>5/ የሚወዳደሩበት የስራ ክፍልና የስራ መደብ</h5>
        <p> ምርጫ 1</p>

        <p> የስራ ክፍል :-{{ $form->job_category->job_category ?? '' }}</p>
        <p> የስራ መደብ፣ {{ $form->position->position ?? '' }}</p>
        <p>
            ምርጫ 2</p>
        <p> የስራ ክፍል:- {{ $form->jobcat2->job_category ?? '' }} </p>
        <p> የስራ መደብ:- {{ $form->choice2->position ?? '' }}</p>
        {{-- <div class="html2pdf__page-break"></div> --}}
        <p>6/ ጠቅላላ የስራ ልምድ ብዛትና የስራው አይነት</p>

        <table id="customers">
            <thead>
                <tr>
                    <th rowspan="2">ተ.ቁ</th>
                    <th rowspan="2">የአገልግሎት ዘመን ከ---እስከ---ዓ.ም</th>
                    <th rowspan="2">የሥራ ዓይነት</th>

                    <th colspan="3"> የአገልግሎት ጊዜ</th>
                    <th rowspan="2">ምርመራ</th>


                </tr>
                <tr>

                    <th>ዓመት</td>
                    <th>ወር</td>
                    <th>ቀን</td>
                </tr>

            </thead>
            <tbody>
                @foreach ($forms as $i => $fo)
                    <tr>
                        <td>{{ ++$i }}</td>
                        {{-- <td>{{ date('m/d/y', strtotime($form->startingDate)) }}-{{ date('m/d/y', strtotime($form->endingDate)) }} --}}
                        <td>
                            {{-- {{ Carbon::createFromFormat( $fo->startingDate)->format('d/m/y') }}-{{ $fo->endingDate }} --}}
                            {{-- {{   Carbon::createFromFormat('m/d/Y', $fo->startingDate)->format('d-m-Y')}} --}}
                            {{-- {{ Carbon::createFromFormat('d/m/Y', $fo->startingDate) }} --}}


                            ከ{{ Carbon::parse($fo->startingDate)->day }}/{{ Carbon::parse($fo->startingDate)->month }}/{{ Carbon::parse($fo->startingDate)->year }}
                            እስከ
                            {{ Carbon::parse($fo->endingDate)->day }}/{{ Carbon::parse($fo->endingDate)->month }}/{{ Carbon::parse($fo->endingDate)->year }}
                        </td>
                        </td>
                        <td>{{ $fo->positionyouworked }}</td>
                        <td>
                            <?php
                            
                            $fdate = Carbon::parse($fo->startingDate);
                            
                            $tdate = Carbon::parse($fo->endingDate);
                            
                            // $years = $tdate - $fdate;
                            
                            // echo abs($years);
                            //
                            
                            $days = $tdate->diffInDays($fdate);
                            $months = $tdate->diffInMonths($fdate);
                            
                            $years = $tdate->diffInYears($fdate);
                            // dd($fdate->diffForHumans($tdate));
                            // dd($years,$months,$days);
                            
                            $time = $tdate->diff($fdate);
                            echo $time->y;
                            //   {{$time->y}} year, {{$time->m}} months, {{$time->d}} days
                            // dd($time->y);
                            ?>
                        </td>
                        <td>
                            <?php
                            
                            $fdate = Carbon::parse($fo->startingDate);
                            
                            $tdate = Carbon::parse($fo->endingDate);
                            
                            // $months = $tdate - $fdate;
                            
                            //   echo abs($months);
                            $time = $tdate->diff($fdate);
                            echo $time->m;
                            ?>
                        </td>
                        <td>
                            <?php
                            
                            // $fdate = Carbon::parse($fo->startingDate);
                            
                            // $tdate = Carbon::parse($fo->endingDate);
                            $time = $tdate->diff($fdate);
                            // $days = $tdate - $fdate;
                            echo $time->d;
                            // echo abs($days);
                            ?>
                        </td>
                        <td></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div class="html2pdf__page-break"></div> --}}
        {{-- <p>9/ አገልግሎት ከዲፕሎማ/ዲግሪ በፊት:- {{ $form->serviceBeforeDiplo }} ፣ አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ
            {{ $form->serviceAfterDiplo }}</p> --}}
        <p>7/ የሁለት ተከታታይ የቅርብ ጊዜ የሥራ አፈጻፀም አማካይ ውጤት:-{{ $form->resultOfrecentPerform }}</p>
        <p>8/ የዲስፕሊን ጉድለት:-{{ $form->DisciplineFlaw }}</p>
        {{-- <p>9/ ተጨማሪ የሥራ ድርሻ:-{{ $form->MoreRoles }}</p> --}}
        <p>ቅጹን የሞላው ሰራተኛ ስም
            &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;
            ፊርማ&mdash;&mdash;&mdash;&mdash; ቀን&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</p>
        <p>ስለትክክለኛነቱ ያረጋገጠው የሰዉ ሀብት ባለሙያ ፊርማ&mdash;&mdash;&mdash;&mdash;&mdash;
            ቀን&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;
        </p>

    </div>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"
    integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    var element = document.getElementById("element-to-print")


    html2pdf(element, {
        margin: 20,

        filename: 'Application form.pdf',
        image: {
            type: 'jpeg',
            quality: 0.98
        },
        html2canvas: {
            scale: 3,
            logging: true,
            dpi: 192,
            letterRendering: true
        },
        jsPDF: {
            unit: 'mm',
            format: 'a4',
            orientation: 'portrait'

        }

    })


    setTimeout(function() {
        window.location.href = "{{ url('/hr') }}";
    }, 5000);
</script>

</html>
