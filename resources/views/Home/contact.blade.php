@extends('header-footer')

@section('content')





<style>

            .btn:first-child:active, :not(.btn-check)+.btn:active {

                 color: #fff; 

                 background-color: var(--02, #0C9146); 

                 border-color: #000;

                 border-left:1px solid transparent;

                 border-top:1px solid transparent;

            }

            .btn:first-child:active, :not(.btn-check)+.btn:hover {

                 border-left:1px solid transparent;

                 border-top:1px solid transparent;

            }

            

        .footer-list li:hover {

            color: var(--02, #0C9146);

            font-family: Archivo;

            font-style: normal;

            line-height: normal;

        }

        

        .footer-item{

            color:#000 !important;

        }

        .footer-item:hover{

            color:var(--02, #0C9146) !important;

        }



        .footer-item-3{

            color:#000 !important;

        }

        .footer-item-3:hover{

            color:var(--02, #0C9146) !important;

        }

        .footer-item-4{

            color:#000 !important;

        }

        .footer-item-4:hover{

            color:var(--02, #0C9146) !important;

        }

        

        .accordion-body li:hover{

            color:var(--02, #0C9146) !important;

        }

        

        .offcanvas-items:hover {

            text-decoration: none;

            color: #0C9146;

            font-family: Archivo;

        }

        

            @media screen and (max-width: 1400px){

            .nav_items:hover {

                white-space: nowrap;

                margin-left: 40px;

                color: #0C9146;

                font-family: Archivo;

                font-size: 18px;

                font-style: normal;

                font-weight: 700;

                line-height: normal;

            }

        }

        

        .error {

            color: red;

            font-size: 21px;

            font-family: gujFont2;

            margin-bottom:15px;

        }

        

        .join-bg {

            background-image: url(../images/home_image/Join\ bg.png);

            background-repeat: no-repeat;

            background-position: center;

            background-size: cover;

            padding-top: 69px;

            padding-bottom: 58px;

            margin-bottom: 50px;

        }

        

        @media screen and (max-width:768px){

            .join-bg {

                background-image: url(../images/home_image/Join\ bg.png);

                background-repeat: no-repeat;

                background-position: center;

                background-size: cover;

                padding-top: 69px;

                margin-bottom: 30px;

            }

            

            .contact-register-form-heading {

                color: var(--02, #0C9146);

                font-family: gujFont1;

                font-size: 52px;

                font-style: normal;

                font-weight: 400;

                line-height: normal;

                text-align: center;

                padding: 30px 0;

                text-shadow: 2px 2px 1px #000;

            }

            

            .register-btn {

                color: var(--05, #111);

                font-family: gujFont1;

                font-size: 20px;

                font-style: normal;

                font-weight: 400;

                line-height: normal;

                display: flex;

                padding: 14px 30px;

                justify-content: center;

                align-items: center;

                gap: 10px;

                border-radius: 10px;

                border-right: 2px solid #000;

                border-bottom: 2px solid #000;

                background: var(--04, #FFC520);

                margin-bottom: 30px;

            }

        }

        

        @media screen and (max-width:576px){

            .error {

                color: red;

                font-size: 21px;

                font-family: gujFont2;

                margin-bottom:0px;

            }

            

            .register-form-cheakbox {

                color: var(--06, #222);

                font-family: gujFont1;

                font-size: 18px;

                font-style: normal;

                font-weight: 400;

                line-height: normal;

            }

            

            .error {

                color: red;

                font-size: 18px;

                font-family: gujFont2;

                margin-bottom:6px;

            }

        }

        

        .join-bg{

            margin-top:-6px;

        }

        

        @media screen and (max-width: 425px){

            .form-group label:before {

                content: '';

                width: 20px;

                height: 20px;

                background-color: #fff;

                border: 2px solid #000;

                box-shadow: rgba(0, 0, 0, 1) 1.95px 1.95px 2.6px;

                align-items: center;

                display: inline-block;

                position: relative;

                vertical-align: middle;

                cursor: pointer;

                margin-right: 5px;

                border-radius: 5px;

                margin-right: 10px;

            }

            

            .form-group input:checked+label:after {

                content: '';

                display: block;

                position: absolute;

                top: 5px;

                left: 7px;

                width: 6px;

                height: 10px;

                border: solid #000;

                border-width: 0 2px 2px 0;

                transform: rotate(45deg);

            }

        }

        

        .register-btn:active {

            color: #fff !important;

            font-family: gujFont1;

            border-radius: 10px;

            border-top:none;

            border-left:none;

            border-right: 2px solid #000 !important;

            border-bottom: 2px solid #000 !important;

            background: var(--02, #0C9146) !important;

        }

        

        .register-form-cheakboxs-main {

            flex-wrap: wrap;

            justify-content: space-between;

            margin-bottom: 25px;

        }

        

        

        .map-main {

            margin-top: 0px;

            margin-bottom: 0;

            padding: 0;

        }

        

        .active{

            color:var(--02, #0C9146) !important;

        }

        

        .offcanvas.hiding, .offcanvas.show, .offcanvas.showing{

            width:250px;

        }

        

        .offcanvas-header{

            box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;

        }

        

        .join-now-btn{

            font-family:gujFont1 !important;

            font-weight:400 !important;

            text-decoration:none;

            background:var(--02, #0C9146);

            color:#fff;

            transition-duration:0.5s;

            padding:9px 20px;

            border-radius:5px;

        }

            

        .join-now-btn:hover{

            font-family:gujFont1;

            font-weight:400 !important;

            text-decoration:none;

            background:var(--04, #FFC520);

            color:#000;

            transition-duration:0.5s;

        }

        

        @media screen and (max-width:576px){

            .register-btn {

                color: var(--05, #000) !important;

                font-family: gujFont1;

                font-size: 16px;

                font-style: normal;

                font-weight: 400;

                line-height: normal;

                display: flex;

                padding: 9px 20px;

                justify-content: center;

                align-items: center;

                gap: 10px;

                border-radius: 10px;

                border-right: 2px solid #000;

                background: var(--02, #FFC520);

                margin-bottom: 30px;

            }

            .contact-register-form-heading {

                color: var(--02, #0C9146);

                font-family: gujFont1;

                font-size: 40px;

                font-style: normal;

                font-weight: 400;

                line-height: normal;

                text-align: center;

                padding: 30px 0;

                text-shadow: 2px 2px 1px #000;

            }

        }

            .register-btn:hover {

                font-family: gujFont1 !important;

                background: var(--04, #0C9146) !important;

                color: var(--09, #FFF) !important;

            }

    </style>







    <!-- Hero Image section -->



    <section class="about-hero-bg position-relative">

        <div class="text-light position-absolute about-text">

            <div>Contact Us</div>

        </div>

    </section>



    <!-- Hero Image section -->







    <!-- Register Form -->



    <section class="contact-register-form-main">

        <div class="contact-register-form-heading">

            Z_:8=[XG OMD"

        </div>

        @if (session('success'))

            <div class="d-flex justify-content-center">

                <div class="alert alert-success text-center"

                    style="font-size: 20px;width:51%; font-family: 'gujFont2'">

                    {{ session('success') }}

                </div>

            </div>

        @endif



        <div class="container">

            <form action="{{ route('register_user_store_in_site') }}" method="POST">

                @csrf

                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">

                        <label for="first" class="input-label">GFD</label>

                        <input type="text" name="first_name" value="{{ old('first_name') }}"  class="contact-register-form-input"

                            placeholder="TDFÚ\ GFD NFB, SZM">

                            @error('first_name')

                                <div class="error">{{ $message }}</div>

                            @enderror

                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">

                        <label for="surname" class="input-label">V8S</label>

                        <input type="text" name="last_surname" value="{{ old('last_surname') }}" class="contact-register-form-input"

                            placeholder="V8S NFB, SZM">

                            @error('last_surname')

                                <div class="error">{{ $message }}</div>

                            @enderror

                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">

                        <label for="mo.no" class="input-label">DMAF., G\AZ</label>

                        <input type="text" name="mobile_number" value="{{ old('mobile_number') }}" class="contact-register-form-input"

                            placeholder="TDFZM DMAF., G\AZ G\AZ NFB, SZM">

                            @error('mobile_number')

                                <div class="error">{{ $message }}</div>

                            @enderror

                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">

                        <label for="email" class="input-label"> .D[., </label>

                        <input type="email" name="email" class="contact-register-form-input" value="{{ old('email') }}"

                            placeholder="TDFÚ .D[., V[0=[; NFB, SZM">

                            @error('email')

                                <div class="error">{{ $message }}</div>

                            @enderror

                    </div>

                </div>



                <hr class="register-form-hr">



                <div class="row">

                    <div class="select-buttons-register-form">TD[ VDFZF lJQ[ S[JL ZLT[ ;F\E?I]\m</div>

                    <div class="d-flex register-form-cheakboxs-main">

                        <div class="form-group">

                            <input type="checkbox" name="is_reference[team_member]" value="team_member" id="team-member" {{ old('is_reference.team_member') ? 'checked' : '' }}>

                            <label for="team-member" class="register-form-cheakbox">8LD D[dAZ</label>

                        </div>

                        <div class="form-group">

                            <input type="checkbox" name="is_reference[online_search]" value="online_search" id="online-search" {{ old('is_reference.online_search') ? 'checked' : '' }}>

                            <label for="online-search" class="register-form-cheakbox">VMG,F.G ;R"</label>

                        </div>

                        <div class="form-group">

                            <input type="checkbox" name="is_reference[referral]" value="referral" id="referral" {{ old('is_reference.referral') ? 'checked' : '' }}>

                            <label for="referral" class="register-form-cheakbox">Z[OZ,</label>

                        </div>

                        <div class="form-group">

                            <input type="checkbox" id="social" name="is_reference[social_media]" value="social_media" {{ old('is_reference.social_media') ? 'checked' : '' }}>

                            <label for="social" class="register-form-cheakbox">;M˜xI, DLl0IF</label>

                        </div>

                        <div class="form-group">

                            <input type="checkbox" id="other" name="is_reference[other]" value="other" {{ old('is_reference.other') ? 'checked' : '' }}>

                            <label for="other" class="register-form-cheakbox">VgI</label>

                        </div>

                    </div>

                    @error('is_reference')

                    <div class="d-flex justify-content-center">

                        <div class="error mx-3 text-center mb-2" style="width: 48%">{{ $message }}</div>

                    </div>

                    @enderror

                </div>                          



                <div class="d-flex justify-content-center" style="text-decoration: none;">

                    <button class="btn register-btn" type="submit">OMD" ;AlD8 SZM</button>

                </div>

            </form>

        </div>

    </section>



    <!-- Register Form -->





    <!-- Map -->



    <section class="map-main">

        <iframe

            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.9701893460274!2d72.86729847600218!3d21.23303068072985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f7adffdd9f9%3A0x8e5947b84d098fd9!2sSilver%20Trade%20Center!5e0!3m2!1sen!2sin!4v1710327329550!5m2!1sen!2sin"

            class="map" style="border:0;" allowfullscreen="" loading="lazy"

            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>



    <!-- Map -->





    <!-- join section -->



  <form id="joinForm">

        @csrf

        <section class="join-bg">

            <div class="join-heading">

                :8MS GL AWL H V50[8 DF8[ <br class="breaking-rule"> •[0FI[,F ZCM

            </div>

    

            <!-- Hide the success message initially -->

            <div id="joinFormSuccess" style="display: none;">

                <div class="d-flex justify-content-center">

                    <div class="alert alert-success text-center joinMessage fs-5"

                        style="width: 49.6%;padding:10px;font-family: gujFont2"></div>

                </div>

            </div>

    

            <div class="container-fluid">

                <div class="field" id="searchform">

                    <input type="text" id="searchterm" name="mobile_number_or_email"

                        placeholder="DMAF., G\AZ S[ .D[., V[0=[; ,BM" />

                    <button type="submit" id="search" class="px-2" style="font-family: gujFont1">•[0FVM</button>

                </div>

                <div id="joinFormError" style="display:none;">

                    <div class="error joinError text-center" style="font-family: gujFont2"></div>

                </div>

            </div>

        </section>

    </form>



    <!-- join section -->

    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    

    <script>

        $(document).ready(function() {

            $('#joinForm').on('submit', function(event) {

                event.preventDefault();

    

                var formData = $(this).serialize();

    

                $.ajax({

                    url: '{{ route('admin.store_detail') }}',

                    method: 'POST',

                    data: formData,

                    success: function(response) {

                        if (response.success_detail) {

                            // Show success message only after successful form submission

                            $('#joinFormSuccess').show().find('.joinMessage').html(response.success_detail).css('color', 'green');

                            setTimeout(function() {

                                $('#joinFormSuccess').hide();

                            }, 6000);

                        }

                    },

                    error: function(xhr, status, error) {

                        var errors = xhr.responseJSON;

                        if (errors && errors.error) {

                            $('#joinFormError').show().find('.joinError').html(errors.error).css('color', 'red');

                            setTimeout(function() {

                                $('#joinFormError').hide();

                            }, 6000);

                        } else {

                            console.error(xhr.responseText);

                        }

                    }

                });

            });

        });

    </script>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"

        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="

        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"

        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

    </script>

    <script src="{{ asset('js/home.js') }}"></script>





@endsection