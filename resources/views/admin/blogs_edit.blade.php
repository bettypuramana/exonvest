@extends('layouts.admin.admin_layout')
@section('content')
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="d-flex justify-content-between">
                    <h2>Blog</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row column1">
        <div class="white_shd full margin_bottom_30">
            <div class="full price_table padding_infor_info">
                <form class="form" method="post" action="{{ route('update_blog', $blog->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Title (English)</label>
                                <input type="text" class="form-control" name="title_en" id="brand_en" placeholder="title english"  value="{{ old('title_en', $blog->title_en) }}"/>
                                @error('title_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Title (Arabic)</label>
                                <input type="text" class="form-control" name="title_ar" id="title_ar" placeholder="title arabic"  value="{{ old('title_ar', $blog->title_ar) }}"/>
                                @error('title_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Description (English)</label>
                                <textarea class="form-control" name="description_en" id="description_en" placeholder="Enter description in English">{{ old('description_en', $blog->description_en) }}</textarea>
                                @error('description_en')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Description (Arabic)</label>
                                <textarea class="form-control" name="description_ar" id="description_ar" placeholder="Enter description in Arabic">{{ old('description_ar', $blog->description_ar) }}</textarea>
                                @error('description_ar')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Date</label>
                                <input type="date" class="form-control" name="date" id="date" value="{{ old('date', $blog->date) }}" />
                                @error('date')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Tag</label>
                                <select class="form-control" name="tag_id[]" id="tag_id" multiple>
                                    <!-- <option value="" disabled selected>Select Tag</option> -->
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}" 
                                            {{ in_array($tag->id, json_decode($blog->tag, true) ?? []) ? 'selected' : '' }}>
                                            {{ $tag->name_en }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('tag_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>                       
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Image</label>
                                <input type="file" class="form-control" name="image" id="image" />
                                <input type="hidden" class="form-control" name="old" id="old" value="{{ $blog->main_image }}" />
                                @if($blog->main_image)
                                    <img src="{{ asset('uploads/blog/' . $blog->main_image) }}" alt="Blog Image" class="img-thumbnail mt-2" width="150">
                                @endif
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Meta title</label>
                                <input type="text" class="form-control" name="metatitle" id="metatitle" value="{{ old('metatitle', $blog->meta_title) }}"/>
                                
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label class="mb-2">Meta description</label>
                                <input type="text" class="form-control" name="metadescription" id="metadescription" value="{{ old('metadescription', $blog->meta_description) }}" />
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
