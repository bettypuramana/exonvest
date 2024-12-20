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
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{route('user.blog_detail')}}">
                            <img class="blog__thumb" src="{{asset('assets/images/blog/blog-1.png')}}" alt="blog post thumb">
                        </a>
                        <div class="rts-blog__single--meta">
                            <div class="cat__date">
                                <a href="#" class="cat">Web Hosting</a>
                                <span class="date">19 Sep, 2023</span>
                            </div>
                            <a href="{{route('user.blog_detail')}}" class="title">Attentive was born in 2015 help
                                sales teams VPS hosting</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{route('user.blog_detail')}}">
                            <img class="blog__thumb" src="{{asset('assets/images/blog/blog-2.png')}}" alt="blog post thumb">
                        </a>
                        <div class="rts-blog__single--meta">
                            <div class="cat__date">
                                <a href="#" class="cat">Web Hosting</a>
                                <span class="date">19 Sep, 2023</span>
                            </div>
                            <a href="{{route('user.blog_detail')}}" class="title">Attentive was born in 2015 help
                                sales teams VPS hosting</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{route('user.blog_detail')}}">
                            <img class="blog__thumb" src="{{asset('assets/images/blog/blog-3.png')}}" alt="blog post thumb">
                        </a>
                        <div class="rts-blog__single--meta">
                            <div class="cat__date">
                                <a href="#" class="cat">Web Hosting</a>
                                <span class="date">19 Sep, 2023</span>
                            </div>
                            <a href="{{route('user.blog_detail')}}" class="title">Attentive was born in 2015 help
                                sales teams VPS hosting</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{route('user.blog_detail')}}">
                            <img class="blog__thumb" src="{{asset('assets/images/blog/blog-6.png')}}" alt="blog post thumb">
                        </a>
                        <div class="rts-blog__single--meta">
                            <div class="cat__date">
                                <a href="#" class="cat">Web Hosting</a>
                                <span class="date">19 Sep, 2023</span>
                            </div>
                            <a href="{{route('user.blog_detail')}}" class="title">Attentive was born in 2015 help
                                sales teams VPS hosting</a>

                        </div>
                    </div>
                </div>
                 </div>
                </div>
                </section>




	@endsection
