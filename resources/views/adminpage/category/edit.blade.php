@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">
                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ url('category') }}"> Back</a>
                    </div>
                    <h5 class="hk-sec-title">Edit በአስተዳዳሪው የሚሞላ መረጃ</h5>
                    {{-- <p class="mb-25">Edit staff forms </p> --}}

                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ url('update-category/' . $admin->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">የ ትምህርት ደረጃ</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $admin->category }}"
                                            name="category"class="form-control @error('category') is-invalid @enderror"
                                            id="inputname" placeholder="">
                                        @error('category')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-0 pull-right">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
