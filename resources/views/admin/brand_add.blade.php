@extends('layouts.admin.admin_layout')
@section('content')
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="d-flex justify-content-between">
                    <h2>Brand</h2>
                </div>
            </div>



        </div>
    </div>
    <div class="row column1">
        <div class="white_shd full margin_bottom_30">

            <div class="full price_table padding_infor_info">
                <form class="form" method="post" action="{{ route('store_brand') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                    <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label class="mb-2">Category</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value="" disabled selected>Select a category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->category_en }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Brand (English)</label>
                                <input type="text" class="form-control" name="brand_en" id="brand_en" placeholder="brand english" value="{{old('brand_en')}}"/>
                                @error('brand_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Brand (Arabic)</label>
                                <input type="text" class="form-control" name="brand_ar" id="brand_ar" placeholder="brand arabic" value="{{old('brand_ar')}}"/>
                                @error('brand_ar')
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
                                <label class="mb-2">Logo</label>
                                <input type="file" class="form-control" name="image" id="image" />
                                @error('image')
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
