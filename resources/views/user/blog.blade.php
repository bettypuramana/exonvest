@extends('layouts.user.user_layout')
@section('title', 'Exonvest || Blogs')
@section('content')
 <!-- shared hosting banner -->
 <div class="rts-hosting-banner rts-hosting-banner-bg banner-default-height">
        <div class="container">
            <div class="row">
                <div class="banner-area">
                    <div class="rts-hosting-banner rts-hosting-banner__content w-530 contact__banner">
                        <h4 class="text-white banner-title">
                            @lang('messages.Blog')
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shared hosting banner end-->

   <section class="rts-blog section__padding">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-md-start g-30">
                @if(!empty($blog))
                  @foreach($blog as $row)
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="rts-blog__single">
                            <a href="{{route('user.blog_detail' ,['id' =>$row->id])}}">
                                <img class="blog__thumb" src="{{ asset('uploads/blog/'.$row->main_image) }}" alt="blog post thumb">
                            </a>
                            <div class="rts-blog__single--meta">
                                <div class="cat__date">
                                    <a href="#" class="cat">Web Hosting</a>
                                    <span class="date">{{ date('d M, Y', strtotime($row->date)) }}</span>
                                </div>
                                <a href="{{route('user.blog_detail', ['id' =>$row->id])}}" class="title">{{$row->title}}</a>

                            </div>
                        </div>
                    </div>
                  @endforeach                           
                @endif
            </div>
        </div>
    </section>




	@endsection
