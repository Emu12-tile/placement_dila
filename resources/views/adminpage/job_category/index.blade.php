@extends('layouts.admin')

@section('content')
    {{-- TODO change this to componnent --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">

        <section class="hk-sec-wrapper mt-100">
            <div class="pull-right hk-sec-title">

                <a href="{{ route('jobcategory.create') }}" class="mr-25" data-toggle="tooltip" data-original-title="add">
                    <i class="icon-plus icon-4x"> </i> add </a>
            </div>
            <h5 class="hk-sec-title">በአስተዳዳሪው የተሞላ መረጃ </h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id="datable_1" class="table table-hover  table-bordered w-100  pb-30">
                                <thead>
                                    <tr>
                                        <th>ተ.ቁ</th>
                                        <th> የስራ ክፍል </th>

                                        <th>Action</th>



                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admins as $i => $admin)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $admin->job_category }}
                                            </td>

                                            <td>
                                                <form action="{{ route('jobcategory.destroy', $admin->id) }}"
                                                    method="POST">
                                                    {{-- <a href="{{ route('admin.category.show',$college->id) }}" class="mr-25" data-toggle="tooltip" data-original-title="show"> <i class="icon-eye"></i> </a> --}}
                                                    <a href="{{ route('jobcategory.edit', $admin->id) }}"
                                                        data-toggle="tooltip" data-original-title="Edit"> <i
                                                            class="icon-pencil"></i> </a>

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger pd-10">
                                                        <a data-toggle="tooltip" data-original-title="delete"> <i
                                                                class=" icon-trash txt-danger"></i> </a>
                                                    </button>
                                                </form>

                                            </td>
                                            {{-- <td>{{ $admin->performance + $hr->experience + $hr->resultbased + $hr->exam }} --}}
                                            </td>



                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- {!! $admins->links() !!} --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>





    </div>
@endsection
