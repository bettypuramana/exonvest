@extends('layouts.user.user_layout')
@section('title', 'Exonvest || About Us')
@section('content')

<html lang="en">
<head>
<title>Exonvest || About Us</title>
</head>
    
  <!-- shared hosting banner -->
  <div class="rts-hosting-banner rts-hosting-banner-bg banner-default-height">
        <div class="container">
            <div class="row">
                <div class="banner-area">
                    <div class="rts-hosting-banner rts-hosting-banner__content w-530 contact__banner">
                        <h4 class="text-white banner-title">
                            About Us
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- ABOUT US -->
    <div id="about" class="rts-about position-relative section__padding">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="rts-about__image">
                        <img src="{{asset('assets/images/about/about-big.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                <div class="p-5">
                <div class="p-5">
                    <h3>Connecting Ethical Values to Everyday Choices </h3>
                        
                        <h4 class="mb-3">Who We Are:</h4>
                        <p> At Exonvest, we believe that conscious consumerism is the foundation of a better
                            future. We are more than a network—we are a movement to support ethically sourced
                            brands and empower individuals to make choices that matter.
                            
                        </p>
                        
                        <h4  class="mb-3">What We Do:</h4>
                         <p>   We identify and partner with businesses that uphold the highest standards of
                            sustainability, transparency, and social responsibility. By building a network of trusted
                            brands, Exonvest simplifies the journey for consumers seeking to align their values with
                            their purchases.
                        </p>
                </div>
                </div>
                </div>
				
            </div>
        </div>
    </div>
    <!-- ABOUT US END -->


   <section id="about_v_m" class="rts-about position-relative bg-white section__padding">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="card bg-light">
                        <div class="card-body pt-3 text-center">
                             <h4  class="pt-3"  style="color: #191b3e;">Mission</h4>
                            <p>To empower people and businesses to drive meaningful change by fostering
                            connections built on trust, transparency, and shared values.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="card bg-light">
                        <div class="card-body pt-3 text-center">
                            <h4 class="pt-3" style="color: #191b3e;">Vision</h4>
                            <p>To create a global platform where every choice is rooted in purpose, and every partnership contributes to a more sustainable and ethical world.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	@endsection