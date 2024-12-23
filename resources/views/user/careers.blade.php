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
                        <form class="form__content" method="post" id="careers-from">
                            @csrf
                            <p class="text-danger" id="input_error"></p>
                            <div class="form__control">
                                <input type="text" class="input-form" name="name" id="name" placeholder="@lang('messages.career_name_placeholder')" required>
                                <input type="email" class="input-form" name="email" id="email" placeholder="@lang('messages.career_email_placeholder')" required>

                            </div>
                            <div class="form__control">
                                <input type="number" class="input-form" name="phone" id="phone" placeholder="@lang('messages.career_phno_placeholder')" required>
                               <input type="text" class="input-form" name="position" id="position" placeholder="@lang('messages.career_position_placeholder')" required>
                            </div>

                            <div class="form__control">
                                <input type="file" class="input-form" name="cv" id="cv" placeholder="" required>

                            </div>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="@lang('messages.career_coverletter_placeholder')" required></textarea>
                            <input type="checkbox" name="checkbox" id="checkbox" value="1">
                            <label for="checkbox">
                            @lang('messages.career_appln_agreement_terms')
                            </label>
                            <p class="text-danger" id="checkbox_submit_error"></p>
                            <button type="submit" class="submit__btn" onclick="submitCareers();">@lang('messages.Submit_Now')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT END -->


	@endsection
    @section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function submitCareers(){
			event.preventDefault();

        var name=document.getElementById('name').value;
        var email=document.getElementById('email').value;
        var phone=document.getElementById('phone').value;
        var position=document.getElementById('position').value;
        var cv=document.getElementById('cv').value;
        var message=document.getElementById('message').value;
        var checkbox_submit=document.getElementById('checkbox');
			if(name==""){

            document.getElementById("input_error").innerHTML  = 'Please enter your name';
            }else if(email==""){
                document.getElementById("input_error").innerHTML  = 'Please enter your Email';
            }else if(phone==""){
                document.getElementById("input_error").innerHTML  = 'Please enter your Phone';
            }else if(position==""){
                document.getElementById("input_error").innerHTML  = 'Please enter your Position';
            }else if(cv==""){
                document.getElementById("input_error").innerHTML  = 'Please upload your CV';
            }else if(message==""){
                document.getElementById("input_error").innerHTML  = 'Please enter Cover Letter';
            }else if(!checkbox_submit.checked){
                document.getElementById("checkbox_submit_error").innerHTML  = 'You must agree to the terms and conditions.';
            }else{
			var formElement = document.getElementById("careers-from");
            var formData = new FormData(formElement);
			$.ajax({
            type: "POST",
            url:  "{{route('user.submit_careers')}}", // Replace with your API endpoint or server route
            data: formData,
            processData: false, //add this
            contentType: false, //and this
            success: function (res) {
								if(res['status']==true){
                                    swal({ title: 'Success!',text: res['message'], icon: 'success'});
									swal({ title: 'Success!',text: res['message'], icon: 'success'}).then((result) => {
                                        if (result==true) {
                                            location.reload();
                                        }
                                    });

                                }
								else if(res['status']==false){
                                    swal({ title: 'Fail!',text: res['message'], icon: 'error'});
                                }
            },
            error: function (xhr, textStatus, errorThrown) {
                // Handle errors, if any
            }
        });

		}
	}
    </script>
    	@endsection
