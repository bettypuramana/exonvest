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
                            @lang('messages.about_us')
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
                    <h3>@lang('messages.about_heading')  </h3>

                        <h4 class="mb-3">@lang('messages.about_sub_head1') </h4>
                        <p>@lang('messages.about_sub1_para')  </p>

                        <h4  class="mb-3">@lang('messages.about_sub_head2') </h4>
                         <p>@lang('messages.about_sub2_para') </p>
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
                             <h4  class="pt-3"  style="color: #191b3e;">@lang('messages.Mission')</h4>
                            <p>@lang('messages.Mission_cnt')</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="card bg-light">
                        <div class="card-body pt-3 text-center">
                            <h4 class="pt-3" style="color: #191b3e;">@lang('messages.Vision')</h4>
                            <p>@lang('messages.Vision_cnt')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	@endsection
