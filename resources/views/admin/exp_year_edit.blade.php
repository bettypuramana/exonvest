@extends('layouts.admin.admin_layout')
@section('content')
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="d-flex justify-content-between">
                    <h2>Experience Years</h2>
                </div>
            </div>



        </div>
    </div>
    <div class="row column1">
        <div class="white_shd full margin_bottom_30">

            <div class="full price_table padding_infor_info">
                <form class="form" method="post" action="{{ route('admin.update_experience_years', $experience_year->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Year (English)</label>
                                <input type="text" class="form-control" name="year_en" id="year_en" placeholder="Year english" value="{{$experience_year->experience_en}}"/>
                                @error('year_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Year (Arabic)</label>
                                <input type="text" class="form-control" name="year_ar" id="year_ar" placeholder="Year arabic" value="{{$experience_year->experience_ar}}"/>
                                @error('year_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
                            </button>
                            {{-- <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                Cancel
                            </button> --}}
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
@section('js')
@endsection
