@extends('header-footer-english')
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
        
        .register-now-about-btn{
            transition-duration:0.5s;
        }
        .register-now-about-btn:hover{
            transition-duration:0.5s;
        }
        
        .header-login-btn{
            transition-duration:0.5s;
        }
        .header-login-btn:hover{
            transition-duration:0.5s;
        }
    
        .register-now-about-btn:active {
            border-top:none;
            border-left:none;
            border-right: 2px solid #000;
            border-bottom: 2px solid #000;
            background: var(--04, #FFC520) !important;
            color: var(--05, #111) !important;
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
        
        .about-our-company-story-text-1 {
            color: var(--06, #333);
            font-family: Archivo;
            font-size: 28px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            text-align: center;
        }
        
        .what-we-do-about-heading,
        .what-we-do-about-text,.main-section-content,
        .main-section-heading,.home-main-card-text,
        .join-heading{
            font-family: Archivo;
        }
        
        .field>input[type=text]::-webkit-input-placeholder {
            font-family: Archivo;
        }
        
        .field>input[type=text]::-moz-placeholder {
            font-family: Archivo;
        }
        
        .field>input[type=text]:-ms-input-placeholder {
            font-family: Archivo;
        }
        
        .field>input[type=text]::placeholder {
            font-family: Archivo;
        }
    </style>


    <!-- Hero Image section -->

    <section class="about-hero-bg position-relative">
        <div class="about-hero-bg2">
            <div class="text-light position-absolute about-text">
                <div>About Us</div>
            </div>
        </div>
    </section>

    <!-- Hero Image section -->



    <!-- our company stories section -->

    <div class="container about-main-img-section">
        <img src="{{ asset('images/home_image/About-center-img.png') }}" alt=""
            class="img-fluid imgg-our-target-1 about-middle-img-mb50">
        <img src="{{ asset('images/home_image/About-main-mobile.png') }}" alt=""
            class="img-fluid imgg-our-target-2 about-middle-img-mb50">
        <div class="about-our-company-story-text-1">
            The story of our company
        </div>

        <div class="container-our-company-section d-xl-flex d-lg-flex d-md-flex d-none">
            <div class="column">
                <div class="what-we-do-about-heading">What we do</div>
                <div class="what-we-do-about-text">
                    Gujarati Trader has been continuously working since past two years to give proper and accurate knowledge
                    of the stock market to people in their regional language Gujarati and give them a unique identity as how
                    they can grab knowledge of being a trader. In this time period, Gujarati Trader has imparted knowledge
                    to more than 1300 students.
                </div>
            </div>
            <div class="divider"></div>
            <div class="column">
                <div class="what-we-do-about-heading">Who we are</div>
                <div class="what-we-do-about-text">
                    Gujarati traders work to convey technical analysis to the public in a very appropriate and simple
                    Gujarati language. As also we provide basic to advance technical analysis and financial knowledge to
                    people who wants to learn. We are available on different social Media to share our knowledge to people.
                </div>
            </div>
        </div>

        <div class="d-xl-none d-lg-none d-md-none d-block container-our-company-section">
            <div class="what-we-do-about-heading">What we do</div>
            <div class="what-we-do-about-text">
                Gujarati Trader has been continuously working since past two years to give proper and accurate knowledge
                of the stock market to people in their regional language Gujarati and give them a unique identity as how
                they can grab knowledge of being a trader. In this time period, Gujarati Trader has imparted knowledge
                to more than 1300 students.
            </div>
            <div class="what-we-do-about-heading mt-3">Who we are</div>
            <div class="what-we-do-about-text">
                Gujarati traders work to convey technical analysis to the public in a very appropriate and simple
                Gujarati language. As also we provide basic to advance technical analysis and financial knowledge to
                people who wants to learn. We are available on different social Media to share our knowledge to people.
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <a href="#" style="text-decoration: none;">
                <a href="{{ route('contact') }}" class="register-now-about-btn btn">Register Now</a>
            </a>
        </div>
    </div>

    <!-- our company stories section -->



    <!-- gujrti treders main -->

    <section>
        <div class="bg-img-main">
            <div class="container px-3">
                <div class="main-section-heading text-center">What is the work of a Gujarati trader?</div>
                <div class="main-section-content text-center">Gujarati Trader has been continuously working for the last one
                    and a half years to give the people proper and accurate knowledge of the stock market in their mother
                    tongue Gujarati and give them a unique identity as a trader. In this period of one and a half years,
                    Gujarati Traders grew by leaps and bounds</div>
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-xl-0 mb-lg-0 mb-4">
                        <div class="d-flex justify-content-center home-main-card-img"><img
                                src="{{ asset('images/home_image/Home-card-1.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="home-main-card-text">Advanced tools</div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-xl-0 mb-lg-0 mb-4">
                        <div class="d-flex justify-content-center home-main-card-img"><img
                                src="{{ asset('images/home_image/Home-card-2.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="home-main-card-text">Trading Guides</div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-xl-0 mb-lg-0 mb-4">
                        <div class="d-flex justify-content-center home-main-card-img"><img
                                src="{{ asset('images/home_image/Home-card-3.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="home-main-card-text">Fast execution</div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-xl-0 mb-lg-0 mb-4">
                        <div class="d-flex justify-content-center home-main-card-img"><img
                                src="{{ asset('images/home_image/Home-card-4.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="home-main-card-text"><span class="home-main-card-text2">0%</span>Commision</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- gujrti treders main -->

    <!-- join section -->
    <form id="joinForm">
        @csrf
        <section class="join-bg">
            <div class="join-heading">
                Stay tuned for all stock updates
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
                        placeholder="Enter email or password" />
                    <button type="submit" id="search" class="px-2">Join Now</button>
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
                    url: '{{ route('admin.store_detail_english') }}',
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


    <!-- join section -->




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
