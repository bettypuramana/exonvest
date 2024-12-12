@extends('layouts.user.user_layout')
@section('content')
 
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
                        <h2 class="heading" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">Empowering Ethical Choices, Building a Better World
                        </h2>
                        <p class="description" data-sal="slide-down" data-sal-delay="400" data-sal-duration="800">
                            Partnering with responsible brands to create a future of integrity, trust, and impact</p>
                        <div class="rts-hero__content--group" data-sal="slide-down" data-sal-delay="500" data-sal-duration="800">
                            <a href="#about" class="primary__btn white__bg">Discover Ethically Sourced Brands</a>
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
		<h2 class="text-center main-head mb-3">About Exonvest </h2>
            <div class="mt-3 row justify-content-center align-items-center">
                
                <div class="col-xl-7 col-lg-7">
                    <div class="rts-about__content bg-white">
                        <h3>Together, Shaping a Sustainable Future</h3>
                        <p class="description mb-5" data-sal="slide-down" data-sal-delay="400" data-sal-duration="800">
                            At Exonvest, we bridge the gap between conscious consumers and ethical brands. Our mission is simple: to make responsible choices accessible and impactful. By connecting with brands that prioritize sustainability and fairness, every decision you make contributes to a brighter, greener tomorrow.
                        </p>
						<div class="checkboxes mb-3">
    <div class="checkbox">
      <div class="checkmark"></div>
      <p>Connecting businesses with sustainable brands</p>
    </div>
    <div class="checkbox">
      <div class="checkmark"></div>
      <p>Prioritizing social impact and environmental responsibility</p>
    </div>
    <div class="checkbox">
      <div class="checkmark"></div>
      <p>Empowering businesses to make ethical choices</p>
    </div>
  </div>
						<a href="#about" class="primary__btn" target="_blank">Learn More About Us</a>
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
    <div id="brands" class="rts-brand rts-brand__bg--section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-brand__wrapper pt-5 pb-5">
                        <div class="rts-brand__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="rts-brand__slider--single">
                                        <a href="#" aria-label="brand-link"><img src="{{asset('assets/images/brand/1.jpg')}}" alt=""></a>
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
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND AREA END-->
	
	
	
	<!-- SEARCH DOMAIN -->
    <div class=" rts-domain-finder">
        <div class="container">
            <div class="ourteam">
            <div class="row ">
                <div class="col-lg-1"></div>
				<div class="col-lg-6">
                    <div class="aboutsec">
                        <h3 class="mb-3" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">Join Our Team</h3>
                        <h4>Build a Career with Purpose</h4>
						<p>Are you passionate about driving positive change? At Exonvest, we believe in the power of people to make a difference. Join our team and become part of a movement that values innovation, collaboration, and ethical progress.</p>
						<a href="#about" class="primary__btn" target="_blank">Explore Opportunities</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- SEARCH DOMAIN END -->

	 <!-- HOSTING LATEST BLOG -->
    <section class="rts-blog section__rounded section__padding">
        <div class="container">
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-md-12 col-sm-10">
                    <div class="rts-section section-style-two">
                        <div class="rts-section__two">
                            <h2 class="title mb-0" data-sal="slide-down" data-sal-delay="100" data-sal-duration="800">
                                How We’re Making a Difference</h2>
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
                            
                            <a href="##" class="title">	Ethical Partnerships</a>
                            <div class="rts-blog__single--author">
                                <p>We collaborate with businesses that value transparency and sustainability to create a network of trust</p>
                            </div>
							<div class=" text-center">
								<a href="#about" class="primary__btn" target="_blank">See the Impact</a>
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
                            
                            <a href="##" class="title">	Community Engagement</a>
                            <div class="rts-blog__single--author">
                                <p>Together, we inspire a community dedicated to driving meaningful, lasting change.</p>
                            </div>
							<div class=" text-center">
								<a href="#about" class="primary__btn" target="_blank">See the Impact</a>
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
                            
                            <a href="##" class="title">Sustainable Choices</a>
                            <div class="rts-blog__single--author">
                                <p>Our initiatives empower individuals and businesses to embrace eco-friendly decisions with confidence.</p>
                            </div>
							<div class=" text-center">
								<a href="#about" class="primary__btn" target="_blank">See the Impact</a>
							</div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </section>	
			
			<!-- SEARCH DOMAIN -->
    <div id="Community" class=" rts-domain-finder">
        <div class="container">
            <div class="communitybg">
            <div class="row ">
                <div class="col-lg-1"></div>
				<div class="col-lg-6">
                    <div class="aboutsec">
                        <h3 class="mb-3" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">Join the Community </h3>
                        <h4>Be Part of the Change</h4>
						<p>Join the #ChooseImpact campaign and stand with brands that share a vision for a sustainable and ethical future. Together, we can make every choice matter.</p>
						<a href="#about" class="primary__btn" target="_blank">Join the Movement</a>
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
                                Our Latest Blog</h2>
                        </div>
                        <div class="rts-section-description">
                           <a href="#about" class="view__btn" target="_blank">View All <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog start -->
			<div class="newblog rts-brand__wrapper pt-5 pb-5">
				 <div class="rts-testimonial__slider testimonial__slider--first">
                        <div class="swiper-wrapper">
                            <!-- single testimonial -->
                            <div class="swiper-slide">
							<div class="rts-blog__single">
								<a href="##">
									<img class="blog__thumb" src="{{asset('assets/images/blog/post-1.jpg')}}" alt="blog post thumb">
								</a>
								<div class="rts-blog__single--meta">
									<div class="cat__date float-start text-left">
										<a href="#" class="cat">B2B</a>
									</div>
									<a href="##" class="title  pb-3">Stay Updated with Our Latest Brands</a>
									<hr>
									<div class="row">
										<div class="col-lg-6 col-6 author text-start">
											<span><i class="fa fa-user"></i></span> By John
										</div>
										<div class="col-lg-6 col-6  author__content text-end">
											 <span><i class="fa fa-calendar"></i></span> <span>August 25, 2024</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="rts-blog__single">
								<a href="##">
									<img class="blog__thumb" src="{{asset('assets/images/blog/post-2.jpg')}}" alt="blog post thumb">
								</a>
								<div class="rts-blog__single--meta">
									<div class="cat__date float-start text-left">
										<a href="#" class="cat">Digital</a>
									</div>
									<a href="##" class="title  pb-3">Explore What's New in Our online Website</a>
									<hr>
									<div class="row">
										<div class="col-lg-6 col-6 author text-start">
											<span><i class="fa fa-user"></i></span> By Natasha
										</div>
										<div class="col-lg-6 col-6  author__content text-end">
											 <span><i class="fa fa-calendar"></i></span> <span>August 25, 2024</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="rts-blog__single">
								<a href="##">
									<img class="blog__thumb" src="{{asset('assets/images/blog/post-3.jpg')}}" alt="blog post thumb">
								</a>
								<div class="rts-blog__single--meta">
									<div class="cat__date float-start text-left">
										<a href="#" class="cat">News</a>
									</div>
									<a href="##" class="title  pb-3">Discover Our Newest Features and Services</a>
									<hr>
									<div class="row">
										<div class="col-lg-6 col-6 author text-start">
											<span><i class="fa fa-user"></i></span> By William
										</div>
										<div class="col-lg-6 col-6  author__content text-end">
											 <span><i class="fa fa-calendar"></i></span> <span>August 25, 2024</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					 <div class="rts-dot__button slider-center"></div>
				</div>
            </div>
		</div>
    </section>

    
    <!-- WHY CHOOSE US -->
    <section class="rts-whychoose section__padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-change">
                    <div class="rts-whychoose__content">
						<div class="badgeview">
                            <div class="badge-bg-light ">Testimonials</div>
                        </div>
                        <h3 class="rts-whychoose__content--title text-white" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
                            What Our Client Says
                        </h3>
					</div>
                        <!-- single content-->
                        <div class="rts-testimonial__slider testimonial-slider-two">
                        <div class="swiper-wrapper">
                            <!-- single testimonial -->
                            <div class="swiper-slide">
                                <div class="rts-testimonial__single">
                                    <div class="content">
                                        <p>"Switching to Exonvest has been one of the best decisions I've made for my finances. Their customer service is exceptional, and their online banking platform is incredibly user-friendly."</p>
                                    </div>
                                    <div class="author__meta">
                                        <div class="author__meta--details">
                                            <a href="#">Fadi Ahmad</a>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial end -->
                            <!-- single testimonial -->
                            <div class="swiper-slide">
                                <div class="rts-testimonial__single">
                                    <div class="content">
                                        <p>"Switching to Exonvest has been one of the best decisions I've made for my finances. Their customer service is exceptional, and their online banking platform is incredibly user-friendly."</p>
                                    </div>
                                    <div class="author__meta">
                                        <div class="author__meta--details">
                                            <a href="#">Fadi Ahmad</a>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial end -->
                            <!-- single testimonial -->
                            <div class="swiper-slide">
                                <div class="rts-testimonial__single">
                                    <div class="content">
                                        <p>"Switching to Exonvest has been one of the best decisions I've made for my finances. Their customer service is exceptional, and their online banking platform is incredibly user-friendly."</p>
                                    </div>
                                    <div class="author__meta">
                                        <div class="author__meta--details">
                                            <a href="#">Fadi Ahmad</a>
                                            <span>Business Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial end -->
                            
                        </div>
                        <!-- pagination dot -->
                         <div class="pt-5 rts-slider__btn hosting-slider">
                            <div class="slide__btn rts-prev"><i class="fa-light fa-chevron-left"></i></div>
                            <div class="slide__btn rts-next"><i class="fa-light fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="rts-whychoose__image">
                       <div class="image-container" id="container-inside">
                           <div id="circle-xlarge"></div>
                           <div id="circle-xxlarge"></div>
                           <img src="{{asset('assets/images/team/testmoniyals.png')}}" alt="">
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