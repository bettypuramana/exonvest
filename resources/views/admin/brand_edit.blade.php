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
                <form class="form" method="post" action="{{ route('update_brand', $brand->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label class="mb-2">Category</label>
                                <select class="form-control" name="category_id[]" id="category_id" multiple>
                                    <option value="" disabled>Select a category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ in_array($category->id, explode(',', $brand->category_id)) ? 'selected' : '' }}>
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
                                <input type="text" class="form-control" name="brand_en" id="brand_en" placeholder="brand english" value="{{ old('brand_en', $brand->brand_en) }}"/>
                                @error('brand_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Brand (Arabic)</label>
                                <input type="text" class="form-control" name="brand_ar" id="brand_ar" placeholder="brand arabic" value="{{ old('brand_ar', $brand->brand_ar) }}"/>
                                @error('brand_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Description (English)</label>
                                <textarea class="form-control" name="description_en" id="description_en" placeholder="Enter description in English">{{ old('description_en', $brand->description_en) }}</textarea>
                                @error('description_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Description (Arabic)</label>
                                <textarea class="form-control" name="description_ar" id="description_ar" placeholder="Enter description in Arabic">{{ old('description_ar', $brand->description_ar) }}</textarea>
                                @error('description_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Facebook</label>
                                <input type="text" class="form-control" name="facebook" id="facebook" placeholder="facebook " value="{{ old('facebook', $brand->facebook) }}"/>
                                @error('facebook')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Instagram</label>
                                <input type="text" class="form-control" name="instagram" id="instagram" placeholder="instagram " value="{{ old('instagram', $brand->instagram) }}"/>
                                @error('instagram')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Youtube</label>
                                <input type="text" class="form-control" name="youtube" id="youtube" placeholder="youtube " value="{{ old('youtube', $brand->youtube) }}"/>
                                @error('youtube')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Twitter</label>
                                <input type="text" class="form-control" name="twitter" id="twitter" placeholder="twitter" value="{{ old('twitter', $brand->twitter) }}"/>
                                @error('twitter')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Main Website</label>
                                <input type="text" class="form-control" name="main_website" id="main_website" placeholder="Main Website" value="{{ old('main_website', $brand->main_website) }}"/>
                                @error('main_website')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">TikTok</label>
                                <input type="text" class="form-control" name="tiktok" id="tiktok" placeholder="TikTok" value="{{ old('tiktok', $brand->tiktok) }}"/>
                                @error('tiktok')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Logo</label>
                                <input type="file" class="form-control" name="image" id="image" />
                                <input type="hidden" class="form-control" name="old" id="old" value="{{ $brand->image }}" />
                                @if ($brand->image)
                                    <img src="{{ asset('uploads/brand/' . $brand->image) }}" alt="Brand Logo" width="100">
                                @endif
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Meta title</label>
                                <input type="text" class="form-control" name="metatitle" id="metatitle" value="{{ old('meta_title', $brand->meta_title) }}"/>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Meta description</label>
                                <input type="text" class="form-control" name="metadescription" id="metadescription" value="{{ old('meta_description', $brand->meta_description) }}" />
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
