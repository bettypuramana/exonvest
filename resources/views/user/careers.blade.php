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

                                <img src="{{asset('assets/images/about/resized_image.png')}}" alt="">

                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-10">
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
                               {{-- <input type="text" class="input-form" name="position" id="position" placeholder="@lang('messages.career_position_placeholder')" required> --}}
                               <select name="experience_in" id="experience_in" class="input-form" onchange="getOtherExperience();">
                                <option value="">@lang('messages.experience_in')</option>
                                @if (!empty($departments))
                                    @foreach ($departments as $depart)
                                    <option value="{{$depart->department}}">{{$depart->department}}</option>
                                    @endforeach
                                @endif

                               </select>
                            </div>
                            <div class="form__control" style="display: none" id="experience_in_other_input">
                                <input type="text" class="input-form" name="experience_in_other" id="experience_in_other" placeholder="@lang('messages.experience_in')" required>

                            </div>
                            <div class="form__control">

                                <input type="file" class="input-form" name="cv" id="cv" placeholder="" required>

                                <select name="year_of_experience" id="year_of_experience" class="input-form">
                                    <option value="">@lang('messages.year_of_experience')</option>
                                    @if (!empty($experience_years))
                                    @foreach ($experience_years as $experience_year)
                                    <option value="{{$experience_year->experience_year}}">{{$experience_year->experience_year}}</option>
                                    @endforeach
                                @endif
                                   </select>


                            </div>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="@lang('messages.career_coverletter_placeholder')" required></textarea>
                            <div class="ab-rtl">
                                <label><input type="checkbox" name="checkbox" id="checkbox" value="1">
                                @lang('messages.career_appln_agreement_terms')</label>
                            </div>

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
        var experience_in=document.getElementById('experience_in').value;
        var experience_in_other=document.getElementById('experience_in_other').value;
        var year_of_experience=document.getElementById('year_of_experience').value;
        var cv=document.getElementById('cv');
        var message=document.getElementById('message').value;
        var checkbox_submit=document.getElementById('checkbox');

        var file = cv.files[0];




			if(name==""){

            document.getElementById("input_error").innerHTML  = 'Please enter your name';
            }else if(email==""){
                document.getElementById("input_error").innerHTML  = 'Please enter your email';
            }else if(phone==""){
                document.getElementById("input_error").innerHTML  = 'Please enter your phone';
            }else if(experience_in==""){
                document.getElementById("input_error").innerHTML  = 'Please enter your experience in';
            }else if((experience_in == 'Others (Write Below)' || experience_in == 'أخرى (اكتب أدناه)') && experience_in_other == "") {
            document.getElementById("input_error").innerHTML  = 'Please enter write your experience in';
            }else if(!file){
                document.getElementById("input_error").innerHTML  = 'Please upload your cv';
            }else if(file.type !== 'application/pdf'){
                document.getElementById("input_error").innerHTML  = 'Only PDF files are allowed.';
            }else if(file.size > 5 * 1024 * 1024){
                document.getElementById("input_error").innerHTML  = 'File size must be less than 5MB.';
            }else if(year_of_experience==""){
                document.getElementById("input_error").innerHTML  = 'Please enter your year of experience';
            }else if(message==""){
                document.getElementById("input_error").innerHTML  = 'Please enter cover letter';
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

    function getOtherExperience(){
        var experience_in=document.getElementById('experience_in').value;
        if (experience_in == 'Others (Write Below)' || experience_in == 'أخرى (اكتب أدناه)') {
            document.getElementById("experience_in_other_input").style.display = "block";
        }else{
            document.getElementById("experience_in_other_input").style.display = "none";
        }
    }
    </script>
    	@endsection
