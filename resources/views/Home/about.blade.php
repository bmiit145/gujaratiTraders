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
        <img src="{{asset('images/home_image/About-center-img.png')}}" alt="" class="img-fluid imgg-our-target-1 about-middle-img-mb50">
        <img src="{{asset('images/home_image/About-main-mobile.png')}}" alt="" class="img-fluid imgg-our-target-2 about-middle-img-mb50">
        <div class="about-our-company-story-text-1">
            VDFZL S\5GLGL :8MZL
        </div>

        <div class="container-our-company-section d-xl-flex d-lg-flex d-md-flex d-none">
            <div class="column">
                <div class="what-we-do-about-heading">VD[ X]\ SZLV[ KLV[</div>
                <div class="what-we-do-about-text">
                    U]HZFTL 8=[0Z K[¾F NM- JQ" YL ,MSM G[ DFT'EFQF U]HZFTL DF\ X[ZA•Z G]\ IMuI VG[ ;RM8 7FG VF5L T[DG[
                    8=[0Z TZLS[ GL VFUJL VM/B VF5JF ;TT SFI"XL, K[P VF NM- JQ" GF ;DIUF/F DF\ U]HZFTL 8=[0Z V[ 200+ YL
                    JWFZ[ lJnFY› VM G[ 7FG 5ZM;[, K[P U]HZFTL 8=[0Z ‹FZF 8[˜S®GS, V[GFl,l;; G[ B]A H IMuI TZLS[ VG[ ;Z/
                    U]HZFTL EFQF DF\ ,MSM ;]WL 5CM\RF0JFG]\ SFD SZJFDF\ VFJ[ K[P
                </div>
            </div>
            <div class="divider"></div>
            <div class="column">
                <div class="what-we-do-about-heading">VD[ SM6 KLV[</div>
                <div class="what-we-do-about-text">
                    U]HZFTL 8=[0Z V[ 8=[™0U VJ[ZG[; VG[ OF.GF˜g;I, vL0D 5Z SFD SZTL U]HZFT GL V[SDF+ ;M˜xI, DLl0IF R[G,
                    K[ H[ ;M˜xI, DLl0IF 5Z X[ZA•Z G]\ IMuI 7FG DFT'EFQF U]HZFTL DF\ ,MSM ;]WL 5CM\RF0[ K[P U]HZFTL 8=[0Z
                    V[ 8=[™0U VJ[ZG[; VG[ OF.GF˜g;I, vL0D 5Z SFD SZTL U]HZFT GL V[SDF+ ;M˜xI, DLl0IF R[G, K[
                </div>
            </div>
        </div>

        <div class="d-xl-none d-lg-none d-md-none d-block container-our-company-section">
            <div class="what-we-do-about-heading">VD[ X]\ SZLV[ KLV[</div>
            <div class="what-we-do-about-text">
                U]HZFTL 8=[0Z K[¾F NM- JQ" YL ,MSM G[ DFT'EFQF U]HZFTL DF\ X[ZA•Z G]\ IMuI VG[ ;RM8 7FG VF5L T[DG[
                8=[0Z TZLS[ GL VFUJL VM/B VF5JF ;TT SFI"XL, K[P VF NM- JQ" GF ;DIUF/F DF\ U]HZFTL 8=[0Z V[ 200+ YL
                JWFZ[ lJnFY› VM G[ 7FG 5ZM;[, K[P U]HZFTL 8=[0Z ‹FZF 8[˜S®GS, V[GFl,l;; G[ B]A H IMuI TZLS[ VG[ ;Z/
                U]HZFTL EFQF DF\ ,MSM ;]WL 5CM\RF0JFG]\ SFD SZJFDF\ VFJ[ K[P
            </div>
            <div class="what-we-do-about-heading mt-3">VD[ SM6 KLV[</div>
            <div class="what-we-do-about-text">
                U]HZFTL 8=[0Z V[ 8=[™0U VJ[ZG[; VG[ OF.GF˜g;I, vL0D 5Z SFD SZTL U]HZFT GL V[SDF+ ;M˜xI, DLl0IF R[G,
                K[ H[ ;M˜xI, DLl0IF 5Z X[ZA•Z G]\ IMuI 7FG DFT'EFQF U]HZFTL DF\ ,MSM ;]WL 5CM\RF0[ K[P U]HZFTL 8=[0Z
                V[ 8=[™0U VJ[ZG[; VG[ OF.GF˜g;I, vL0D 5Z SFD SZTL U]HZFT GL V[SDF+ ;M˜xI, DLl0IF R[G, K[
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <a href="#" style="text-decoration: none;">
                <a href="{{ route('contact') }}" class="register-now-about-btn btn">Register Now</a>
            </a>
        </div>
    </div>

    <!-- our company stories section -->


    <!-- Our target Section -->

    <section class="about-our-target-bg">
        <div class="container">
            <div class="about-our-target-mini-heading">VDFZL S\5GLGL :8MZL
            </div>
            <div class="about-our-target-main-heading">VD[ S[JL ZLT[ TOFJT AGFJL ZÑF KLV[ T[ ;X˜S®TSZ6 GL ;O/TFP</div>
            <div class="row d-flex align-items-center">
                <div class="col-xl-6 col-lg-6 d-xl-none d-lg-none d-flex">
                    <img src="{{asset('images/home_image/About-center-img.png')}}" alt="" class="our-target-img imgg-our-target-1 img-fluid">
                    <img src="{{asset('images/home_image/About-main-mobile.png')}}" alt="" class="our-target-img imgg-our-target-2 img-fluid">
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-our-target-para1">
                        VD[ DFGLV[ KLV[ S[ ;O/TF lJX[QFlWS'T YM0F ,MSM DF8[ VFZl1T GYLP VF V[S V[JL ;OZ K[ H[ SM> 56
                        jI˜S®T IMuI DFU"NX"G ;FY[ X~ SZL XS[ KP[ VD[ DFGLV[ KLV[ S[ ;O/TF lJX[QFlWS'T YM0F ,MSM DF8[
                        VFZl1T GYLP VF V[S V[JL ;OZ K[ H[ SM> 56 jI˜S®T IMuI DFU"NX"G ;FY[ X~ SZL XS[ KP[

                    </div>
                    <div class="about-our-target-para2">
                        VD[ DFGLV[ KLV[ S[ ;O/TF lJX[QFlWS'T YM0F ,MSM DF8[ VFZl1T GYLP VF V[S V[JL ;OZ K[ H[ SM> 56
                        jI˜S®T IMuI DFU"NX"G ;FY[ X~ SZL XS[ KP[
                    </div>
                    <div class="about-our-target-para3">
                        VD[ DFGLV[ KLV[ S[ ;O/TF lJX[QFlWS'T YM0F ,MSM DF8[ VFZl1T GYLP VF V[S V[JL ;OZ K[ H[ SM> 56
                        jI˜S®T IMuI DFU"NX"G ;FY[ X~ SZL XS[ KP[ VD[ DFGLV[ KLV[ S[ ;O/TF lJX[QFlWS'T YM0F ,MSM DF8[
                        VFZl1T GYLP VF V[S V[JL ;OZ K[ H[ SM> 56 jI˜S®T IMuI DFU"NX"G ;FY[ X~ SZL XS[ KP[
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-xl-flex d-lg-flex d-none">
                    <img src="{{asset('images/home_image/Our target main img.png')}}" alt="" class="our-target-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Our target Section -->


    <!-- gujrti treders main -->

    <section>
        <div class="bg-img-main">
            <div class="container px-3">
                <div class="main-section-heading text-center">U]HZFTL 8=[0Z H X]\ SFD m</div>
                <div class="main-section-content text-center">U]HZFTL 8=[0Z K[¾F NM- JQ" YL ,MSM G[ DFT'EFQF U]HZFTL DF\
                    X[ZA•Z G]\ IMuI VG[ ;RM8 7FG VF5L T[DG[
                    8=[0Z TZLS[ GL VFUJL VM/B VF5JF ;TT SFI"XL, K[P VF NM- JQ" GF ;DIUF/F DF\ U]HZFTL 8=[0Z V[ 200+ YL
                    JWFZ[ lJnFY› VM G[ 7FG 5ZM;[, K[P U]HZFTL 8=[0Z ‹FZF 8[˜S®GS, V[GFl,l;; G[ B]A H IMuI TZLS[ VG[ ;Z/
                    U]HZFTL EFQF DF\ ,MSM ;]WL 5CM\RF0JFG]\ SFD SZJFDF\ VFJ[ K[P</div>
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-xl-0 mb-lg-0 mb-4">
                        <div class="d-flex justify-content-center home-main-card-img"><img
                                src="{{asset('images/home_image/Home-card-1.png')}}" alt="" class="img-fluid"></div>
                        <div class="home-main-card-text">pÅT ;FWGM</div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-xl-0 mb-lg-0 mb-4">
                        <div class="d-flex justify-content-center home-main-card-img"><img
                                src="{{asset('images/home_image/Home-card-2.png')}}" alt="" class="img-fluid"></div>
                        <div class="home-main-card-text">8=[™0U DFU"NlX"SFVM</div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-xl-0 mb-lg-0 mb-4">
                        <div class="d-flex justify-content-center home-main-card-img"><img
                                src="{{asset('images/home_image/Home-card-3.png')}}" alt="" class="img-fluid"></div>
                        <div class="home-main-card-text">h05L VD,</div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-xl-0 mb-lg-0 mb-4">
                        <div class="d-flex justify-content-center home-main-card-img"><img
                                src="{{asset('images/home_image/Home-card-4.png')}}" alt="" class="img-fluid"></div>
                        <div class="home-main-card-text"><span class="home-main-card-text2">0%</span> SlDXG</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- gujrti treders main -->

    <!--join sectioin-->
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
                    <button type="submit" id="search" class="px-2" style="font-family:gujFont2">•[0FVM</button>
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
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="{{asset('js/home.js')}}"></script>



@endsection