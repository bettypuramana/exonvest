@extends('layouts.user.user_layout')
@section('title', 'Exonvest || Brand Detail')
@section('css')
<style>.brand-button {
    display: block;
    width: 100%;
    padding: 10px 15px;
    text-align: center;
    background-color: #000;
    color: #fff;
    border: 1px solid #000;
    border-radius: 5px;
    text-decoration: none;
}

.brand-button:hover {
    background-color: #333;
    color: #fff;
}
.logo-small {
    max-width: 150px; /* Limit the maximum width */
    height: auto;     /* Maintain the aspect ratio */
}

</style>
@endsection
@section('content')
<div class="rts-hosting-banner rts-hosting-banner-bg banner-default-height">
        <div class="container">
            <div class="row">
                <div class="banner-area">
                    <div class="rts-hosting-banner rts-hosting-banner__content w-530 contact__banner">
                        <h4 class="text-white banner-title">
                        {{ $brands->brand }}
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shared hosting banner end-->

   <div class="rts-blog-details section__padding">
        <div class="container">
            <div class="row g-40">
                <div class="col-lg-12">
                   <article class="blog-details">
    <div class="blog-details__featured-image">
        <img 
            src="{{ asset('uploads/brand/'.$brands->image) }}" 
            alt="Foot Locker logo" 
            class="img-fluid logo-small"
        />

        <div class="button-container row mt-5 mb-5">
        @if (!empty($categories))
        @foreach ($categories as $category)
            <div class="col-lg-2 col-6 pl-0">
                <a class="btn brand-button" name="Locate Store" >
                    {{$category->category}}
                </a>
            </div>
        @endforeach
        @endif
            <!-- <div class="col-lg-2 col-6 pl-0">
                <a class="btn brand-button" name="Locate Store" onclick="brandCountries('Locate Store')">
                    Locate stores
                </a>
            </div>
            <div class="col-lg-2 col-6 pl-0">
                <a class="btn brand-button" name="Shop Online" onclick="brandCountries('Shop Online')">
                    Shop online
                </a>
            </div>
            <div class="col-lg-2 col-6 pl-0">
                <a class="btn brand-button" name="Mobile Apps" onclick="brandCountries('Mobile Apps')">
                    Mobile Apps
                </a>
            </div>
            <div class="col-lg-2 col-6 pl-0">
                <a class="btn brand-button" name="eGift Card" onclick="brandCountries('eGift Card')">
                    eGift Cards
                </a>
            </div> -->
        </div>
    </div>

    <p>
    {!!$brands->description!!}
    </p>
   
</article>

                    <div class="blog-info">
                        <div class="blog-share">
                            <div class="share">Share:</div>
                            <div class="social__media--list">
                                <!-- Facebook -->
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" class="media">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <!-- Instagram (Redirect to platform) -->
                                <a href="https://www.instagram.com/?url={{ urlencode(request()->fullUrl()) }}" target="_blank" class="media">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <!-- LinkedIn -->
                                <!-- <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->fullUrl()) }}" target="_blank" class="media">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a> -->
                                <!-- Twitter -->
                                <a href="https://twitter.com/share?url={{ urlencode(request()->fullUrl()) }}" target="_blank" class="media">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="https://api.whatsapp.com/send?text={{ urlencode(request()->fullUrl()) }}" target="_blank" class="media">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                                <!-- Behance (Redirect to platform) -->
                                <!-- <a href="https://www.behance.net" target="_blank" class="media">
                                    <i class="fa-brands fa-behance"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- BLOG DETAILS END -->





	@endsection
