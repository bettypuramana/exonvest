@extends('layouts.user.user_layout')
@section('title', 'Exonvest || Careers')
@section('content')
 <!-- shared hosting banner -->
 <div class="rts-hosting-banner rts-hosting-banner-bg banner-default-height">
        <div class="container">
            <div class="row">
                <div class="banner-area">
                    <div class="rts-hosting-banner rts-hosting-banner__content w-530 contact__banner">
                        <h4 class="text-white banner-title">
                            @lang('messages.Careers')
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
                        <h5>@lang('messages.Careers_form_para')</h5>
                        <form class="form__content" method="post" action="https://html.themewant.com/hostie/mailer.php">
                            <div class="form__control">
                                <input type="text" class="input-form" name="name" id="name" placeholder="@lang('messages.career_name_placeholder')" required>
                                <input type="email" class="input-form" name="email" id="email" placeholder="@lang('messages.career_email_placeholder')" required>
                            </div>
                            <div class="form__control">
                                <input type="text" class="input-form" name="phone" id="phone" placeholder="@lang('messages.career_phno_placeholder')" required>
                               <input type="text" class="input-form" name="phone" id="phone" placeholder="@lang('messages.career_position_placeholder')" required>
                            </div>

                            <div class="form__control">
                                <input type="file" class="input-form" name="" id="" placeholder="" required>

                            </div>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="@lang('messages.career_coverletter_placeholder')" required></textarea>
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <label for="checkbox">
                            @lang('messages.career_appln_agreement_terms')
                            </label>
                            <button type="submit" class="submit__btn">@lang('messages.Submit_Now')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT END -->


	@endsection
