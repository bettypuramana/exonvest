@extends('layouts.user.user_layout')
@section('content')
 <!-- shared hosting banner -->
 <div class="rts-hosting-banner rts-hosting-banner-bg banner-default-height">
        <div class="container">
            <div class="row">
                <div class="banner-area">
                    <div class="rts-hosting-banner rts-hosting-banner__content w-530 contact__banner">
                        <h4 class="text-white banner-title">
                            Blog
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shared hosting banner end-->

   <section class="rts-blog pt-120">
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

   
    <!-- CTA AREA -->
    <div id="contact" class="rts-cta bg-white">
        <div class="container">
            <div class="row">
				<div class="col-lg-7">
					<h3 class="cta__title" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
						Stay Inspired</h3>
					<p data-sal="slide-down" data-sal-delay="400" data-sal-duration="800">Be the first to know about new ethical brands, impactful stories, and tips for sustainable living. Subscribe to our newsletter and make every day count.</p>
				</div>
				<div class="col-lg-5">
					<div class="cta-image rts-footer__widget footer__widget">
						<form action="#" class="newsletter mx-40">
                            <input type="email" class="home-one" name="email" placeholder="Enter mail" required>
                            <span class="icon"><i class="fa-regular fa-envelope-open"></i></span>
                            <button type="submit" class="view__btn" aria-label="Submit">Subscribe</button>
                        </form>
					</div>
				</div>
            </div>
        </div>
    </div>
    <!-- CTA AREA END  -->
	
	
	
	@endsection