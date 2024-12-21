@extends('layouts.admin.admin_layout')
@section('content')
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="d-flex justify-content-between">
                    <h2>Testimonial</h2>
                </div>
            </div>



        </div>
    </div>
    <div class="row column1">
        <div class="white_shd full margin_bottom_30">

            <div class="full price_table padding_infor_info">
                <form class="form" method="post" action="{{ route('store_testimonial') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Title (English)</label>
                                <input type="text" class="form-control" name="title_en" id="brand_en" placeholder="title english" value="{{old('title_en')}}"/>
                                @error('title_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Title (Arabic)</label>
                                <input type="text" class="form-control" name="title_ar" id="title_ar" placeholder="title arabic" value="{{old('title_ar')}}"/>
                                @error('title_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Name (English)</label>
                                <input type="text" class="form-control" name="name_en" id="name_en" placeholder="name english" value="{{old('name_en')}}"/>
                                @error('name_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Name (Arabic)</label>
                                <input type="text" class="form-control" name="name_ar" id="name_ar" placeholder="name arabic" value="{{old('name_ar')}}"/>
                                @error('name_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Job title (English)</label>
                                <input type="text" class="form-control" name="job_title_en" id="job_title_en" placeholder="job title english" value="{{old('job_title_en')}}"/>
                                @error('job_title_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Job Title (Arabic)</label>
                                <input type="text" class="form-control" name="job_title_ar" id="job_title_ar" placeholder="job title arabic" value="{{old('job_title_ar')}}"/>
                                @error('job_title_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Description (English)</label>
                                <textarea class="form-control" name="description_en" id="description_en" placeholder="Enter description in English">{{ old('description_en') }}</textarea>
                                @error('description_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Description (Arabic)</label>
                                <textarea class="form-control" name="description_ar" id="description_ar" placeholder="Enter description in Arabic">{{ old('description_ar') }}</textarea>
                                @error('description_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                                             
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Image</label>
                                <input type="file" class="form-control" name="image" id="image" />
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Meta title</label>
                                <input type="text" class="form-control" name="metatitle" id="metatitle" />
                                
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Meta description</label>
                                <input type="text" class="form-control" name="metadescription" id="metadescription" />
                            </div>
                        </div>
                         -->
                    </div>
                    <div class="form-group mb-3">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
@section('js')
@endsection
