@extends('layouts.user.user_layout')
@section('title', 'Exonvest || Home')
@section('content')
 <style>
     .rts-brand__slider--single img {
    width: 150px; /* Set your desired width */
    height: 150px; /* Set your desired height */
    object-fit: cover; /* Ensures the image fits within the dimensions without distortion */
    border-radius: 8px; /* Optional: Adds rounded corners */
    display: block; /* Ensures no inline spacing issues */
    margin: 0 auto; /* Centers the image horizontally */
}

 </style>
 <!-- HERO BANNER ONE -->
 <section id="home" class="rts-hero rts-hero__one banner-style-home-one">
        <div class="container">
            <div class="rts-hero__blur-area"></div>
            <div class="row align-items-end position-relative">
				<div class="col-lg-6">
                    <div class="rts-hero__images position-relative">

					</div>
                </div>
                <div class="col-lg-6">
                    <div class="rts-hero__content w-550">
                        <h2 class="heading" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">@lang('messages.slider_head')
                        </h2>
                        <p class="description" data-sal="slide-down" data-sal-delay="400" data-sal-duration="800">
                            @lang('messages.slider_para')</p>
                        <div class="rts-hero__content--group" data-sal="slide-down" data-sal-delay="500" data-sal-duration="800">
                            <a href="#about" class="primary__btn white__bg">@lang('messages.slider_btn')</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rts-hero__images position-relative">

					</div>
                </div>
            </div>
        </div>
    </section>
    <!-- HERO BANNER ONE END -->


    <!-- ABOUT US -->
    <div id="about" class="rts-about position-relative section__padding">
        <div class="container">
		<h2 class="text-center main-head mb-3">@lang('messages.about_head') </h2>
            <div class="mt-3 row justify-content-center align-items-center">

                <div class="col-xl-7 col-lg-7">
                    <div class="rts-about__content bg-white">
                        <h3>@lang('messages.about_headding')</h3>
                        <p class="description mb-5" data-sal="slide-down" data-sal-delay="400" data-sal-duration="800">
                           @lang('messages.about_Para')
                        </p>
						<div class="checkboxes mb-3">
    <div class="checkbox">
      <div class="checkmark"></div>
      <p>@lang('messages.about_p-1')</p>
    </div>
    <div class="checkbox">
      <div class="checkmark"></div>
      <p>@lang('messages.about_p-2')</p>
    </div>
    <div class="checkbox">
      <div class="checkmark"></div>
      <p>@lang('messages.about_p-3')</p>
    </div>
  </div>
						<a href="#about" class="primary__btn" target="_blank">@lang('messages.about_btn') </a>
                    </div>
                </div>
				<div class="col-xl-5 col-lg-5">
                    <div class="rts-about__image">
                        <img src="{{asset('assets/images/about/about-big.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="rts-about-shape"></div>
    </div>
    <!-- ABOUT US END -->





    <!-- BRAND AREA -->
    <div id="brands" class="rts-brand rts-brand__bg--section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-brand__wrapper pt-5 pb-5">
                        <div class="rts-brand__slider">
                            <div class="swiper-wrapper">
                            @if(!empty($brands))
                                @foreach($brands as $row) 
                                    <div class="swiper-slide">
                                        <div class="rts-brand__slider--single">
                                            <a href="#" aria-label="brand-link"><img width="153" height="148" src="{{ asset('uploads/brand/'.$row->image) }}" alt=""></a>
                                        </div>
                                    </div>
                                @endforeach                           
                            @endif
                                <!-- <div class="swiper-slide">
                                    <div class="rts-brand__slider--single">
                                        <a href="#" aria-label="brand-link"><img width="153" height="148" src="{{ asset('uploads/brand/'.$row->image) }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rts-brand__slider--single">
                                        <a href="#" aria-label="brand-link"><img src="{{asset('assets/images/brand/2.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rts-brand__slider--single">
                                        <a href="#" aria-label="brand-link"><img src="{{asset('assets/images/brand/3.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rts-brand__slider--single">
                                        <a href="#" aria-label="brand-link"><img src="a{{asset('assets/images/brand/4.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rts-brand__slider--single">
                                        <a href="#" aria-label="brand-link"><img src="{{asset('assets/images/brand/5.jpg')}}" alt=""></a>
                                    </div>
                                </div> -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND AREA END-->



	<!-- SEARCH DOMAIN -->
    <div class=" rts-domain-finder section__padding">
        <div class="container">
            <div class="ourteam">
            <div class="row ">
                <div class="col-lg-1"></div>
				<div class="col-lg-6">
                    <div class="aboutsec">
                        <h3 class="mb-3" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">@lang('messages.team_head')</h3>
                        <h4>@lang('messages.team_Headline')</h4>
						<p>@lang('messages.team_Subtext')</p>
						<a href="#about" class="primary__btn" target="_blank">@lang('messages.team_btn')</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- SEARCH DOMAIN END -->

	 <!-- HOSTING LATEST BLOG -->
    <section class="rts-blog  section__padding">
        <div class="container">
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-md-12 col-sm-10">
                    <div class="rts-section section-style-two">
                        <div class="rts-section__two">
                            <h2 class="title mb-0" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">
                               @lang('messages.impact_head')</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog start -->
            <div class="row g-30 mb--60 justify-content-center align-items-center ">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="##">
                            <img class="blog__thumb" src="{{asset('assets/images/blog/1.jpg')}}" alt="blog post thumb">
                        </a>
                        <div class="rts-blog__single--meta">

                            <a href="##" class="title">	@lang('messages.impact_item_1_head')</a>
                            <div class="rts-blog__single--author">
                                <p>@lang('messages.impact_item_1_para')</p>
                            </div>
							<div class=" text-center">
								<a href="#about" class="primary__btn" target="_blank">@lang('messages.impact_btn')</a>
							</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="##">
                            <img class="blog__thumb" src="{{asset('assets/images/blog/2.jpg')}}" alt="blog post thumb">
                        </a>
                        <div class="rts-blog__single--meta">

                            <a href="##" class="title">	@lang('messages.impact_item_2_head')</a>
                            <div class="rts-blog__single--author">
                                <p>@lang('messages.impact_item_2_para')</p>
                            </div>
							<div class=" text-center">
								<a href="#about" class="primary__btn" target="_blank">@lang('messages.impact_btn')</a>
							</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts-blog__single">
                        <a href="##">
                            <img class="blog__thumb" src="{{asset('assets/images/blog/3.jpg')}}" alt="blog post thumb">
                        </a>
                        <div class="rts-blog__single--meta">

                            <a href="##" class="title">	@lang('messages.impact_item_3_head')</a>
                            <div class="rts-blog__single--author">
                                <p>@lang('messages.impact_item_3_para')</p>
                            </div>
							<div class=" text-center">
								<a href="#about" class="primary__btn" target="_blank">@lang('messages.impact_btn')</a>
							</div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </section>

			<!-- SEARCH DOMAIN -->
    <div id="Community" class=" rts-domain-finder section__padding">
        <div class="container">
            <div class="communitybg">
            <div class="row ">
                <div class="col-lg-1"></div>
				<div class="col-lg-6">
                    <div class="aboutsec">
                        <h3 class="mb-3" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">@lang('messages.community_head') </h3>
                        <h4>@lang('messages.community_Headline')</h4>
						<p>@lang('messages.community_Subtext')</p>
						<a href="#about" class="primary__btn" target="_blank">@lang('messages.community_btn')</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- SEARCH DOMAIN END -->

	 <!-- HOSTING LATEST BLOG -->
    <section id="blog" class="rts-blog  section__padding">
        <div class="container">
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-md-12 col-sm-10">
                    <div class="rts-section section-style-two">
                        <div class="rts-section__twos">
                            <h2 class="title mb-0" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">
                               @lang('messages.blog_head')</h2>
                        </div>
                        <div class="rts-section-description">
                           <a href="{{url(empty(app()->getLocale())?'english'.'/'.'blog':request()->segment(1).'/'.'blog')}}" class="view__btn" target="_blank">@lang('messages.blog_btn')<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog start -->
			<div class="newblog rts-brand__wrapper pt-5 pb-5">
				 <div class="rts-testimonial__slider testimonial__slider--first">
                        <div class="swiper-wrapper">


                       @if(!empty($recent))
                        @foreach($recent as $row)

                            <div class="swiper-slide">
                                <div class="rts-blog__single">
                                    <a href="{{route('user.blog_detail', ['id' =>$row->id,'cate_slug'=>$row->blog_slug])}}">
                                        <img class="blog__thumb" src="{{ asset('uploads/blog/'.$row->main_image) }}" alt="blog post thumb">
                                    </a>
                                    <div class="rts-blog__single--meta">
                                        <div class="cat__date float-start text-left">
                                            <!-- <a href="#" class="cat">@lang('messages.blog_Subtext1')</a> -->
                                        </div>
                                        <a href="{{route('user.blog_detail', ['id' =>$row->id,'cate_slug'=>$row->blog_slug])}}" class="title  pb-3">{{$row->title}}</a>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-6 col-6 author text-start">
                                                <!-- <span><i class="fa fa-user"></i></span> By Natasha -->
                                            </div>
                                            <div class="col-lg-6 col-6  author__content text-end">
                                                <span><i class="fa fa-calendar"></i></span> <span>{{ date('d M, Y', strtotime($row->date)) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif
					</div>
					 <div class="rts-dot__button slider-center"></div>
				</div>
            </div>
		</div>
    </section>


    <!-- WHY CHOOSE US -->
    <section class="rts-whychoose pb-0 section__padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 order-change">
                    <div class="rts-whychoose__content">
						<div class="badgeview">
                            <div class="badge-bg-light ">@lang('messages.Testimonials')</div>
                        </div>
                        <h3 class="rts-whychoose__content--title text-white" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
                            @lang('messages.Testimonials_Subtext1')
                        </h3>
					</div>
                        <!-- single content-->
                        <div class="rts-testimonial__slider testimonial-slider-two">
                        <div class="swiper-wrapper">
                            <!-- single testimonial -->
                            @if(!empty($testimonial))
                            @foreach($testimonial as $row)
                            <div class="swiper-slide">
                                <div class="testimoniyalview">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-6 rts-testimonial__single">
                                            <div class="content">
                                                <p style="color:#fff;">{!! $row->description !!}</p>
                                            </div>
                                            <div class="author__meta">
                                                <div class="author__meta--details">
                                                    <a href="#">{{$row->name}}</a>
                                                    <span>{{$row->job}}</span>
                                                </div>
                                            </div>
                                            <!-- pagination dot -->
                                             <div class="pt-5 pb-5 rts-slider__btn hosting-slider">
                                                <div class="slide__btn rts-prev"><i class="fa-light fa-chevron-left"></i></div>
                                                <div class="slide__btn rts-next"><i class="fa-light fa-chevron-right"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="rts-whychoose__image">
                                               <div class="image-container" id="container-inside">
                                                   <div id="circle-xlarge"></div>
                                                   <div id="circle-xxlarge"></div>
                                                   <img src="{{ asset('uploads/testimonial/'.$row->image) }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif

                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="rts-shape">
            <div class="rts-shape__one"></div>
        </div>
    </section>
    <!-- WHY CHOOSE US END -->



	@endsection
