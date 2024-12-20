@extends('layouts.user.user_layout')
@section('title', 'Exonvest || Community')
@section('content')
    <!-- shared hosting banner -->
    <div class="rts-hosting-banner rts-hosting-banner-bg banner-default-height">
        <div class="container">
            <div class="row">
                <div class="banner-area">
                    <div class="rts-hosting-banner rts-hosting-banner__content w-530 contact__banner">
                        <h4 class="text-white banner-title">
                            @lang('messages.Community')
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
                <div class="col-lg-12 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <h3>Welcome to Community</h3>
                        <img class="blog__thumb" src="{{ asset('assets/images/about/Community_image.png') }}"
                            alt="blog post thumb">

                        <div class="rts-blogs pt-3 pb-3">
                            <p class="text-left">Exonvest is proud to offer an incredible range of shopping, dining,
                                leisure, and hospitality experiences through some of the world’s most iconic brands. With a
                                presence across the Middle East, North Africa, Türkiye, Europe, and beyond, we bring
                                exceptional experiences directly to you. Whether you're shopping your favorite brands online
                                or enjoying delicious meals from popular food chains at home, there's something for
                                everyone. Discover it all with Exonvest!</p>
                        </div>
                    </div>
                </div>
            </div>

{{--
            <div class="row justify-content-sm-center justify-content-md-start g-30">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{ route('user.blog_detail') }}">
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-1.png') }}"
                                alt="blog post thumb">
                        </a>
                        <div class="rts-blog__single--meta">
                            <a href="{{ route('user.blog_detail') }}" class="title">Attentive was born in 2015 help
                                sales teams VPS hosting</a>
                            <p>Lorem ipsum is the most well known filler text and comes from various passages of a book from
                                Cicero, written in 45 BC.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{ route('user.blog_detail') }}">
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-2.png') }}"
                                alt="blog post thumb">
                        </a>
                        <div class="rts-blog__single--meta">
                            <a href="{{ route('user.blog_detail') }}" class="title">Attentive was born in 2015 help
                                sales teams VPS hosting</a>
                            <p>Lorem ipsum is the most well known filler text and comes from various passages of a book from
                                Cicero, written in 45 BC.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{ route('user.blog_detail') }}">
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-3.png') }}"
                                alt="blog post thumb">
                        </a>
                        <div class="rts-blog__single--meta">
                            <a href="{{ route('user.blog_detail') }}" class="title">Attentive was born in 2015 help
                                sales teams VPS hosting</a>
                            <p>Lorem ipsum is the most well known filler text and comes from various passages of a book from
                                Cicero, written in 45 BC.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="{{ route('user.blog_detail') }}">
                            <img class="blog__thumb" src="{{ asset('assets/images/blog/blog-6.png') }}"
                                alt="blog post thumb">
                        </a>
                        <div class="rts-blog__single--meta">
                            <a href="{{ route('user.blog_detail') }}" class="title">Attentive was born in 2015 help
                                sales teams VPS hosting</a>
                            <p>Lorem ipsum is the most well known filler text and comes from various passages of a book from
                                Cicero, written in 45 BC.</p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>



@endsection
