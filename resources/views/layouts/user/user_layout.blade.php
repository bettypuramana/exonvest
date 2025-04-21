<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="Partnering with responsible brands to create a future of integrity, trust, and impact.">
    <meta name="keywords" content="Empowering Ethical Choices, Building a Better World">
    <link rel="icon" href="{{asset('assets/images/favicon_48.png')}}">
    <link rel="canonical" href="#">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Exonvest">
    <meta property="og:description" content="Partnering with responsible brands to create a future of integrity, trust, and impact.">
    <meta property="og:image" content="Empowering Ethical Choices, Building a Better World">
    <meta property="og:url" content="index.html">
    <meta name="twitter:card" content="Exonvest">
    <meta name="twitter:title" content="Empowering Ethical Choices, Building a Better World">
    <meta name="twitter:description" content="Partnering with responsible brands to create a future of integrity, trust, and impact.">
    <meta name="twitter:image" content="">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,500;0,600;0,700;1,400;1,800&amp;display=swap" rel="stylesheet">
    <link rel="preload stylesheet" href="{{asset('assets/css/plugins.min.css')}}" as="style">
    <link rel="preload stylesheet" href="{{asset('assets/css/plugins/fontawesome.min.css')}}" as="style">
    <link rel="preload stylesheet" href="{{asset('assets/css/style.css')}}" as="style">
    @yield('css')
    <style>
        .header-sticky .logoname {
            color: #262323;
            padding-top: 10px;
            margin-bottom: 14px;
        }
    </style>
</head>

<body class="{{ request()->segment(1) == 'arabic' ? 'arclass' : 'enclass' }}">

    <!-- HEADER AREA -->
    <header class="rts-header style-one header__default">
        <!-- HEADER TOP AREA END -->
        <div class="container">
            <div class="row">
                <div class="rts-header__wrapper">
                    <!-- FOR LOGO -->
                    <div class="rts-header__logo">
                        <a href="{{url(empty(app()->getLocale())?'english'.'/':request()->segment(1).'/')}}" class="site-logo">
                            <img class="logo-white" src="{{asset('assets/images/logo/EXONWEST white.png')}}" alt="Hostie">
                            <img class="logo-dark" src="{{asset('assets/images/logo/EXONWEST BLUE.png')}}" alt="Hostie">
							{{-- <h3 class="logoname">@lang('messages.exonvest')</h3> --}}

                        </a>
                    </div>
                    <!-- FOR NAVIGATION MENU -->

                    <nav class="rts-header__menu" id="mobile-menu">
                        <div class="hostie-menu">
                            <ul class="list-unstyled hostie-desktop-menu">
                                <li class="menu-item"><a href="{{url(empty(app()->getLocale())?'english'.'/':request()->segment(1).'/')}}">@lang('messages.home')</a></li>
                                <li class="menu-item"><a href="{{url(empty(app()->getLocale())?'english'.'/'.'about':request()->segment(1).'/'.'about')}}">@lang('messages.about_us')</a></li>
                                <li class="menu-item"><a href="{{url(empty(app()->getLocale())?'english'.'/'.'brands':request()->segment(1).'/'.'brands')}}">@lang('messages.brands')</a></li>
                                {{-- <!-- <li class="menu-item"><a href="{{url(empty(app()->getLocale())?'english'.'/'.'community':request()->segment(1).'/'.'community')}}">@lang('messages.Community')</a></li> --}}
                                <li class="menu-item"><a href="{{url(empty(app()->getLocale())?'english'.'/'.'careers':request()->segment(1).'/'.'careers')}}">@lang('messages.Careers')</a></li>
                                <li class="menu-item"><a href="{{url(empty(app()->getLocale())?'english'.'/'.'blog':request()->segment(1).'/'.'blog')}}">@lang('messages.Blog')</a></li>
                                <li class="menu-item"><a href="{{url(empty(app()->getLocale())?'english'.'/'.'contact_us':request()->segment(1).'/'.'contact_us')}}">@lang('messages.contact')</a></li>

                            </ul>
                        </div>
                    </nav>
                    <!-- FOR HEADER RIGHT -->
                    <div class="rts-header__right">

                        <?php
                        $url= url()->current();
                        ?>
                        <ul class="list-inline d-flex  hours align-items-center">
                            <li class="list-inline-item lang mr-5"><a href="@if(empty(app()->getLocale())){{url('english')}}@else{!! str_replace('arabic', 'english', $url) !!}@endif" class="fs-15 lh-1" style="font-family: 'Poppins';">English </a> </li> <span class="text-white"> / </span>
                            <li class="list-inline-item lang mr-5"><a href="@if(empty(app()->getLocale())){{url('arabic')}}@else{!! str_replace('english', 'arabic', $url) !!}@endif" class="fs-15 lh-1" style="font-family: 'Poppins';">عربي</a></li>
                        </ul>

                        {{-- <a href="##" class="login__btn" target="_blank">@lang('messages.Explore_Now')</a> --}}

                        <button id="menu-btn" aria-label="Menu" class="mobile__active menu-btn"><i class="fa-sharp fa-solid fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER AREA END -->
    @yield('content')


    <!-- CTA AREA -->
    <div id="contact" class="rts-cta bg-white">
        <div class="container">
            <div class="row">
				<div class="col-lg-7">
					<h3 class="cta__title" data-sal="slide-down" data-sal-delay="300" data-sal-duration="800">
					@lang('messages.cta')</h3>
					<p data-sal="slide-down" data-sal-delay="400" data-sal-duration="800">@lang('messages.cta_Subtext1')</p>
				</div>
				<div class="col-lg-5">
					<div class="cta-image rts-footer__widget footer__widget">
						<form action="#" class="newsletter mx-40">
                            <input type="email" class="home-one" name="newsletter_email" id="newsletter_email" placeholder="@lang('messages.Enter_mail')" required>
                            <span class="icon"><i class="fa-regular fa-envelope-open"></i></span>

                            <button type="submit" class="view__btn" aria-label="Submit" onclick="insertNewsletter()">@lang('messages.cta_btn')</button>
                        </form>
                        <p id="newsletter_response"></p>
					</div>
				</div>
            </div>
        </div>
    </div>
    <!-- CTA AREA END  -->
    <footer class="rts-footer site-footer-one section__padding">
        <div class="container">
            <div class="row">
                <!-- widget -->
                <div class="col-lg-2 col-md-5 col-sm-6 rts-footer__widget--column">
                    <div class="rts-footer__widget footer__widget extra-padding">
                        <h5 class="widget-title">@lang('messages.menu')</h5>
                        <div class="rts-footer__widget--menu ">
                            <ul>
                                 <li class="menu-item"><a href="{{url(empty(app()->getLocale())?'en'.'/':app()->getLocale().'/')}}">@lang('messages.home')</a></li>
                                <li class="menu-item"><a href="{{url(empty(app()->getLocale())?'en'.'/'.'about':app()->getLocale().'/'.'about')}}">@lang('messages.about_us')</a></li>
                                <li class="menu-item"><a href="{{url(empty(app()->getLocale())?'english'.'/'.'brands':request()->segment(1).'/'.'brands')}}">@lang('messages.brands')</a></li>
                                {{-- <li class="menu-item"><a href="{{url(empty(app()->getLocale())?'english'.'/'.'community':request()->segment(1).'/'.'community')}}">@lang('messages.Community')</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- widget end -->
                <!-- widget -->
                <div class="col-lg-2 col-md-5 col-sm-6 rts-footer__widget--column">
                    <div class="rts-footer__widget footer__widget extra-padding">
                        <h5 class="widget-title">@lang('messages.Quick_Links')</h5>
                        <div class="rts-footer__widget--menu ">
                            <ul>
                                <li class="menu-item"><a href="{{url(empty(app()->getLocale())?'en'.'/'.'careers':app()->getLocale().'/'.'careers')}}">@lang('messages.Careers')</a></li>
                                <li class="menu-item"><a href="{{url(empty(app()->getLocale())?'en'.'/'.'blog':app()->getLocale().'/'.'blog')}}">@lang('messages.Blog')</a></li>
                                <li class="menu-item"><a href="{{url(empty(app()->getLocale())?'en'.'/'.'contact_us':app()->getLocale().'/'.'contact_us')}}">@lang('messages.contact')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- widget end -->
                <!-- widget -->
                <div class="col-lg-4 col-md-4 col-sm-6 rts-footer__widget--column">
                    <div class="rts-footer__widget footer__widget extra-padding">
                        <h5 class="widget-title">@lang('messages.Contact_Information')</h5>
                        <div class="rts-footer__widget--menu ">
                            <ul class="list-unstyled widget--menu-j">
							  <li><i class="fa fa-phone"> </i> <a href="tel:+97444112536">+97444112536</a></li>
							  <li><i class="fa fa-envelope-open"> </i>  <a href="mailto:hi@exonvest.com"> hi@exonvest.com</a></li>
							  <li><i class="fa fa-map-marker"> </i>@lang('messages.address')</li>
							</ul>
                        </div>
                    </div>
                </div>
                <!-- widget end -->
                <!-- widget -->
                <div class="col-lg-4 col-md-6 col-sm-6 rts-footer__widget--column">
                    <div class="rts-footer__widget footer__widget">
                        <h5>@lang('messages.subcription')</h5>
						<p>@lang('messages.subcription_p')</p>
						<div class="social__media--list">
						  <a href="https://www.linkedin.com/company/exonvest/" aria-label="social-link" target="_blank" class="media"><i class="fa-brands fa-linkedin"></i></a>

						 <a href="https://www.instagram.com/exonvest/" aria-label="social-link" target="_blank" class="media"><i class="fa-brands fa-instagram"></i></a>

						 <a href="https://www.facebook.com/Exonvest/" aria-label="social-link" target="_blank" class="media"><i class="fa-brands fa-facebook"></i></a>

						   <a href="https://x.com/exonvest" aria-label="social-link" target="_blank" class="media"><i class="fa-brands fa-x-twitter"></i></a>

						   <a href="https://www.youtube.com/channel/UCmguIwVbySkY92UZroDXySw" aria-label="social-link" target="_blank" class="media"><i class="fa-brands fa-youtube"></i></a>
                           <a href="https://www.tiktok.com/@exonvest" aria-label="social-link" target="_blank" class="media"><i class="fa-brands fa-tiktok"></i></a>
						</div>
                    </div>
                </div>
                <!-- widget end -->
            </div>
        </div>

    </footer>
	<div class="bg-theam">
		<div class="container">
			<div class="row">
				<div class="rts-footer__copyright text-center">
					<p>&copy; @lang('messages.copyright')</p>
				</div>
			</div>
		</div>
	</div>
    <!-- FOOTER AREA END -->

    <div id="anywhere-home" class="">
    </div>

    <!-- side bar area  -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu" aria-label="Close Menu"><i class="fa-sharp fa-thin fa-xmark"></i></button>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li class="main"><a href="{{url(empty(app()->getLocale())? '/':request()->segment(1).'/')}}">@lang('messages.home')</a></li>
                                <li class="main"><a href="{{url(empty(app()->getLocale())?'english'.'/'.'about':request()->segment(1).'/'.'about')}}">@lang('messages.about_us')</a></li>
                                <li class="main"><a href="{{url(empty(app()->getLocale())?'english'.'/'.'brands':request()->segment(1).'/'.'brands')}}">@lang('messages.brands')</a></li>
                                {{-- <li class="main"><a href="{{url(empty(app()->getLocale())?'english'.'/'.'community':request()->segment(1).'/'.'community')}}">@lang('messages.Community')</a></li> --}}
                                <li class="main"><a href="{{url(empty(app()->getLocale())?'english'.'/'.'careers':request()->segment(1).'/'.'careers')}}">@lang('messages.Careers')</a></li>
                                <li class="main"><a href="{{url(empty(app()->getLocale())?'english'.'/'.'blog':request()->segment(1).'/'.'blog')}}">@lang('messages.Blog')</a></li>
                                <li class="main"><a href="{{url(empty(app()->getLocale())?'english'.'/'.'contact_us':request()->segment(1).'/'.'contact_us')}}">@lang('messages.contact')</a></li>
   </ul>
            </nav>

            <ul class="social-area-one pl--20 mt--100">
                <li><a href="https://www.linkedin.com/" aria-label="social-link" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="https://www.x.com/" aria-label="social-link" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="https://www.youtube.com/" aria-label="social-link" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="https://www.facebook.com/" aria-label="social-link" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
            </ul>
        </div>
        <!-- mobile menu area end -->
    </div>

    <!-- side abr area end -->


    <!-- THEME PRELOADER START -->
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- THEME PRELOADER END -->
    <!-- BACK TO TOP AREA START -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- BACK TO TOP AREA EDN -->

    <!-- All Plugin -->
    <script defer src="{{asset('assets/js/plugins.min.js')}}"></script>
    <!-- main js -->
    <script defer src="{{asset('assets/js/main.js')}}"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C89scichPD02hX1v7vAxqUQ0WRs94tn+4Z9YpqpgqT6k5D8ayGVRApAHm6ktPBzUg"
 crossorigin="anonymous"></script>
<script>
function insertNewsletter(){

event.preventDefault()
var email=$("#newsletter_email").val();
var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(email==""){
        document.getElementById("newsletter_response").className = "text-danger";
        document.getElementById("newsletter_response").innerHTML  = 'This field is required';
    }else if(!emailRegex.test(email)) {
    document.getElementById("newsletter_response").className = "text-danger";
    document.getElementById("newsletter_response").innerHTML = 'Please enter a valid email address';
    }else{
        $.ajax({
                url: "{{route('user.insertnewsletter')}}",
                type: "POST",
                data: {
                        "_token": "{{ csrf_token() }}",
                        email: email,
                    },
                    dataType: 'json',
                    success: function(res)
                        {
                            if(res['status']==true){
                                document.getElementById("newsletter_response").className = "text-success";
                                document.getElementById("newsletter_response").innerHTML  = res['message'];

                            }else if(res['status']==false){
                                document.getElementById("newsletter_response").className = "text-danger";
                                document.getElementById("newsletter_response").innerHTML  = res['message'];
                            }

                        },
                        error: function(e)
                        {
                        //    loader_off();
                        }
                });
            }
}

</script>
<script>

const emailInput = document.getElementById("newsletter_email");
const responseElement = document.getElementById("newsletter_response");

emailInput.addEventListener("input", function () {
    responseElement.textContent = "";
});
</script>
 @yield('js')
</body>
</html>
