@extends('layouts.user.user_layout')
@section('content')
 <!-- shared hosting banner -->
 <div class="rts-hosting-banner rts-hosting-banner-bg banner-default-height">
        <div class="container">
            <div class="row">
                <div class="banner-area">
                    <div class="rts-hosting-banner rts-hosting-banner__content w-530 contact__banner">
                        <h4 class="text-white banner-title">
                            Careers
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shared hosting banner end-->

    <!-- CONTACT START -->
    <section class="rts-contact-form pt--120 pb--120" style="background-color: #f4f4f4;">
        <div class="container">
           
            <div class="row gy-30 justify-content-center">
                <div class="col-xl-6 col-lg-4 col-md-10">
                    <div class="contact-form">
                       
                                <img src="https://www.alhenzablaw.com/webassets/images/book/A7404203%20copy.jpg" alt="">
                           
                    </div>
                </div>
                <div class="col-xl-5 col-lg-8 offset-xl-1 col-md-10">
                    <div class="form">
                        <h5>If you didn’t find a suitable position available you can still submit your CV to a desired position using the form below</h5>
                        <form class="form__content" method="post" action="https://html.themewant.com/hostie/mailer.php">
                            <div class="form__control">
                                <input type="text" class="input-form" name="name" id="name" placeholder="what is your name?" required>
                                <input type="email" class="input-form" name="email" id="email" placeholder="Email Address" required>
                            </div>
                            <div class="form__control">
                                <input type="text" class="input-form" name="phone" id="phone" placeholder="Phone Number" required>
                               <input type="text" class="input-form" name="phone" id="phone" placeholder="Position Apply" required>
                            </div>

                            <div class="form__control">
                                <input type="file" class="input-form" name="" id="" placeholder="" required>
                               
                            </div>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Cover Letter*" required></textarea>
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <label for="checkbox">
                                By submitting your information you provide written consent
                                to hostie and its family of brands contacting you.
                            </label>
                            <button type="submit" class="submit__btn">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT END -->

   
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