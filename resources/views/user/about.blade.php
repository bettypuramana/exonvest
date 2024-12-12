@extends('layouts.user.user_layout')
@section('content')
<style>
        
        .hero {
            text-align: center;
            padding: 50px 20px;
        }
        .hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #b19564;
        }
        .hero video {
            width: 100%;
            max-width: 800px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 20px 50px;
        }
        .content div {
            flex: 1;
            min-width: 250px;
            background: #f9f9f9;
            margin: 10px;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .content div h3 {
            color: #b19564;
            margin-bottom: 10px;
        }
        .footer {
            background: #f3f3f3;
            padding: 20px 50px;
        }
        .footer .contact-info, .footer .quick-links {
            display: inline-block;
            width: 48%;
            vertical-align: top;
        }
        .footer h4 {
            color: #333;
            margin-bottom: 10px;
        }
        .footer p, .footer a {
            font-size: 14px;
            color: #666;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer .copyright {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #999;
        }
        
    </style>
 <!-- HERO BANNER ONE -->
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
    
    
    <section id="about-us-section" style="background-color: #f4f4f4; padding-top: 100px; padding-bottom: 60px;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Video Section (Left) -->
                <div class="col-md-6">
          <!--              <a href="assets/images/about/about-big.png"-->
    						<!--data-fancybox-group="gdlr-gal-2"-->
    						<!--data-rel="fancybox">-->
    						<img src="{{asset('assets/images/about/about-big.png')}}"
    							alt="" width="300"	height="50"/>
					    <!--</a>-->
                </div>

                <!-- Description Section (Right) -->
                <div class="col-md-6">
                    <div class="gdlr-item gdlr-icon-with-list-item">
                        <div class="list-with-icon gdlr-left ">
                            <p class="about-us-text ">Connecting Ethical Values to Everyday Choices </p>
                            <p>
                                <b>Who We Are:</b>
                                At Exonvest, we believe that conscious consumerism is the foundation of a better
                                future. We are more than a network—we are a movement to support ethically sourced
                                brands and empower individuals to make choices that matter.
                                
                            </p>
                            <p>
                                <b>What We Do:</b>
                                We identify and partner with businesses that uphold the highest standards of
                                sustainability, transparency, and social responsibility. By building a network of trusted
                                brands, Exonvest simplifies the journey for consumers seeking to align their values with
                                their purchases.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cards">
        <div class="gdlr-color-wrapper gdlr-show-all no-skin" style="background-color: #ffffff; padding-bottom: 30px;">
            <div class="container-cards">
                <div class="columns-cards-wrapper">
                    <div class="content">
        
        <div>
            <h3>Mission</h3>
            <p>To empower people and businesses to drive meaningful change by fostering
connections built on trust, transparency, and shared values.</p>
        </div>
        <div>
            <h3>Vision</h3>
            <p>To create a global platform where every choice is rooted in purpose, and every
partnership contributes to a more sustainable and ethical world.</p>
        </div>
    </div>
                </div>
            </div>
        </div>
    </section>
	@endsection