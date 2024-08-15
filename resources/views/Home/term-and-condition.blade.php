@extends('header-footer')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and condition</title>


    <!-- fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}">

    <style>
        .kap127-font {
            font-family: gujFont2;
            font-size: 20px;
        }

        @media screen and (max-width:425px){
            .kap127-font {
            font-family: gujFont2;
            font-size: 15px;
        }
        }
    </style>

</head>

<body>


    <!-- Navbar -->
    <section class="container d-flex align-items-center">
        <div>
            <div class="navbar-mobile-logo">
                <img src="{{ asset('images/home_image/Navbar mobile logo.png') }}" alt="" class="img-fluid">
            </div>
            <div class="navbar-tab-logo">
                <img src="{{ asset('images/home_image/Footer logo.png') }}" alt="" class="img-fluid">
            </div>
            <div class="d-xl-flex d-lg-flex d-md-flex d-sm-flex d-none">
                <img src="{{ asset('images/home_image/logo-main.png') }}" alt="" class="img-fluid">
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-body-transprent d-flex ms-auto">
            <div class="d-flex align-items-center ms-auto">
                <ul class="mb-0" style="list-style-type: none;display: contents;">
                    <li class="nav-item d-xl-none d-lg-none me-2">
                        <a class="nav-link" href="#"><button class="btn header-login-btn">LOGIN</button></a>
                    </li>
                </ul>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path d="M12 18H3V16H12V18ZM21 13H3V11H21V13ZM21 8H12V6H21V8Z" fill="#0C9146" />
                        </svg></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav d-flex ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link nav_items" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav_items" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav_items" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}"><button
                                    class="btn header-login-btn">LOGIN</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Offcanvas -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                    <img src="{{ asset('images/home_image/Footer logo.png') }}" alt="" class="img-fluid">
                </h5>
                <button type="button" class="btn-close text-reset close_btn" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="list-unstyled">
                    <li class="py-2 ps-3"><a href="#" class="offcanvas-items">Home</a></li>
                    <li class="py-2 ps-3"><a href="#" class="offcanvas-items">About Us</a></li>
                    <li class="py-2 ps-3"><a href="#" class="offcanvas-items">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <!-- Offcanvas -->
    </section>
    <!-- Navbar -->


    <!-- T & C -->

    <div class="container mt-5">
        <h2>Terms and Condition</h2>
        <div class="kap127-font">
            <div class="py-2">C]\ GLR[ ;CL SZGFZ •C[Z SÚ\ K]\ S[P</div>
            <div>
                C]\ <span class="fw-bold"><span style="font-family: Arial, Helvetica, sans-serif">"</span>U]HZFTL
                    8=[0Z<span style="font-family: Arial, Helvetica, sans-serif">"</span></span> H[VM VMG,F.G í VMO,F>G
                GF DFwID YL X[ZA•Z 8=[™0U G[ ,UT]\ V[þI]S[XG VF5L ZÑF K[
                H[DF\ C]\ DFZL DZ_ YL •[0F> ZÑM K]\P VG[ T[DF\ GLR[ H6FjIF ÔDF6[ OFINF VG[ G]SXFG 56 Y. XS[ K[ H[GL DG[
                •6 K[P VG[ T[GF HJFANFZ 56 C]\ 5MT[ H K]\P
            </div>
            <ul>
                <li class="py-2">VF SM;" DF8[ D¡ R]SJ[,L OL 5ZT D/JF 5F+ GYL H[GL DG[ •6 K[ </li>
                <li class="py-2">U]HZFTL 8=[0Z ‹FZF XLBJJFGF ;\5}6" ÔIF;M SIF" 5KL 56 •[ C]\ GYL XLBL XSTM TM T[GM HJFANFZ C]\ 5MT[ H
                    ZCLXP</li>
                <li class="py-2">S®,F; SIF" 5KL DFZF ‹FZF YTF GF6FSLI jIJCFZ GM HJFANFZ C]\ 5MT[ H ZCLXP</li>
                <li class="py-2">U]HZFTL 8=[0Z DF+ X[ZA•Z G[ ,UTL DFlCTL 5]ZL 5F0JFG]\ SFD SZ[ K[4 T[DH VD[ GF6FSLI jIJCFZ S[ BZLN
                    <J[RF6 S[ 5KL ZMSF6 VG[ 8=[™0U G[ ,UTF SM> 56 ;,FC S[ ;}RG VF5TF GYL H[GM DG[ ;\5}6"56[ bIF, K[
                </li>
                <li class="py-2">U]HZFTL 8=[0Z V[ NSE VG[ NISM ;FY[ VgI SM;" SIF" GF ;l8"—OS[8 WZFJ[ K[ T[DH T[DG]\ D]bI SFD
                    OF.GF—g;I, VJ[ZG[; O[,FJJFG]\ K[ H[GM DG[</li>
                <li class="py-2">
                    U]HZFTL 8=[0Z ;FY[ •[0F> G[ S®,F; SIF" 5KL C]\ H[ S> 56 8=[™0U, .gJ[:8D[g8 S[ OF.GF˜g;I, lG6"IM ,õ
                    K]\. T[DF\ HJFANFZ U]HZFTL 8=[0Z ZC[X[ GCš T[DH T[DF\ YTF ÔMlO8 S[ ,M; GL 56 U]HZFTL 8=[0Z GL SM>
                    HJFANFZL ZC[X[ GCš H[ OS®T DFZL HJFANFZL ZC[X[P
                </li>
                <li class="py-2">C]\ DFZL :J<;\DlT YL TDFZL A[R DF\ •[0F> ZÑM KMP</li>
            </ul>
            <div class="mb-5">
                VF 5+S DF\ H6FJ[, p5Z GL TDFD DFlCTL DFZL •6 D]HA ;FRL VG[ BZL K[ VG[ T[GFYL SM> 56 •T GM OFINM VYJF
                G]SXFG YFI TM T[GM ;\5}6" 56[ HJFANFZ C]\ 5MT[ ZCLXP
            </div>
        </div>
    </div>

    <!-- T & C -->




    <!-- footer -->
    <section>
        <footer>
            <div class="container">
                <div class="d-xl-none d-lg-none d-md-none d-sm-none d-block">
                    <a href="#"><img src="{{ asset('images/home_image/Footer logo.png') }}" alt=""
                            class="img-fluid footer-logo-2"></a>
                    <a href="#" class="d-flex align-items-center footer-item-3 text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" class="footer-icon">
                            <path
                                d="M3 8L10.8906 13.2604C11.5624 13.7083 12.4376 13.7083 13.1094 13.2604L21 8M5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19Z"
                                stroke="#0C9146" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        info@gujratitrader.com
                    </a>
                    <a href="#" class="d-flex align-items-center footer-item-4 text-decoration-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" class="footer-icon">
                            <path
                                d="M6.54 5C6.6 5.89 6.75 6.76 6.99 7.59L5.79 8.79C5.38 7.59 5.12 6.32 5.03 5H6.54ZM16.4 17.02C17.25 17.26 18.12 17.41 19 17.47V18.96C17.68 18.87 16.41 18.61 15.2 18.21L16.4 17.02ZM7.5 3H4C3.45 3 3 3.45 3 4C3 13.39 10.61 21 20 21C20.55 21 21 20.55 21 20V16.51C21 15.96 20.55 15.51 20 15.51C18.76 15.51 17.55 15.31 16.43 14.94C16.33 14.9 16.22 14.89 16.12 14.89C15.86 14.89 15.61 14.99 15.41 15.18L13.21 17.38C10.38 15.93 8.06 13.62 6.62 10.79L8.82 8.59C9.1 8.31 9.18 7.92 9.07 7.57C8.7 6.45 8.5 5.25 8.5 4C8.5 3.45 8.05 3 7.5 3Z"
                                fill="#0C9146" />
                        </svg>
                        +91 90812 23288
                    </a>

                    <div class="row">
                        <div class="footer-social">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="26"
                                    viewBox="0 0 30 30" fill="none">
                                    <rect x="1.875" y="1.875" width="26.25" height="26.25" rx="6"
                                        fill="url(#paint0_radial_1_702)" />
                                    <rect x="1.875" y="1.875" width="26.25" height="26.25" rx="6"
                                        fill="url(#paint1_radial_1_702)" />
                                    <rect x="1.875" y="1.875" width="26.25" height="26.25" rx="6"
                                        fill="#0C9146" />
                                    <path
                                        d="M21.5625 9.84375C21.5625 10.6204 20.9329 11.25 20.1562 11.25C19.3796 11.25 18.75 10.6204 18.75 9.84375C18.75 9.0671 19.3796 8.4375 20.1562 8.4375C20.9329 8.4375 21.5625 9.0671 21.5625 9.84375Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15 19.6875C17.5888 19.6875 19.6875 17.5888 19.6875 15C19.6875 12.4112 17.5888 10.3125 15 10.3125C12.4112 10.3125 10.3125 12.4112 10.3125 15C10.3125 17.5888 12.4112 19.6875 15 19.6875ZM15 17.8125C16.5533 17.8125 17.8125 16.5533 17.8125 15C17.8125 13.4467 16.5533 12.1875 15 12.1875C13.4467 12.1875 12.1875 13.4467 12.1875 15C12.1875 16.5533 13.4467 17.8125 15 17.8125Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.625 14.625C5.625 11.4747 5.625 9.89956 6.23809 8.6963C6.77738 7.63789 7.63789 6.77738 8.6963 6.23809C9.89956 5.625 11.4747 5.625 14.625 5.625H15.375C18.5253 5.625 20.1004 5.625 21.3037 6.23809C22.3621 6.77738 23.2226 7.63789 23.7619 8.6963C24.375 9.89956 24.375 11.4747 24.375 14.625V15.375C24.375 18.5253 24.375 20.1004 23.7619 21.3037C23.2226 22.3621 22.3621 23.2226 21.3037 23.7619C20.1004 24.375 18.5253 24.375 15.375 24.375H14.625C11.4747 24.375 9.89956 24.375 8.6963 23.7619C7.63789 23.2226 6.77738 22.3621 6.23809 21.3037C5.625 20.1004 5.625 18.5253 5.625 15.375V14.625ZM14.625 7.5H15.375C16.9811 7.5 18.0729 7.50146 18.9168 7.57041C19.7388 7.63757 20.1592 7.75931 20.4525 7.90873C21.1581 8.26825 21.7317 8.84193 22.0913 9.54754C22.2407 9.84079 22.3624 10.2612 22.4296 11.0832C22.4985 11.9271 22.5 13.0189 22.5 14.625V15.375C22.5 16.9811 22.4985 18.0729 22.4296 18.9168C22.3624 19.7388 22.2407 20.1592 22.0913 20.4525C21.7317 21.1581 21.1581 21.7317 20.4525 22.0913C20.1592 22.2407 19.7388 22.3624 18.9168 22.4296C18.0729 22.4985 16.9811 22.5 15.375 22.5H14.625C13.0189 22.5 11.9271 22.4985 11.0832 22.4296C10.2612 22.3624 9.84079 22.2407 9.54754 22.0913C8.84193 21.7317 8.26825 21.1581 7.90873 20.4525C7.75931 20.1592 7.63757 19.7388 7.57041 18.9168C7.50146 18.0729 7.5 16.9811 7.5 15.375V14.625C7.5 13.0189 7.50146 11.9271 7.57041 11.0832C7.63757 10.2612 7.75931 9.84079 7.90873 9.54754C8.26825 8.84193 8.84193 8.26825 9.54754 7.90873C9.84079 7.75931 10.2612 7.63757 11.0832 7.57041C11.9271 7.50146 13.0189 7.5 14.625 7.5Z"
                                        fill="white" />
                                    <defs>
                                        <radialGradient id="paint0_radial_1_702" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(11.25 21.5625) rotate(-55.3758) scale(23.9246)">
                                            <stop stop-color="#B13589" />
                                            <stop offset="0.79309" stop-color="#C62F94" />
                                            <stop offset="1" stop-color="#8A3AC8" />
                                        </radialGradient>
                                        <radialGradient id="paint1_radial_1_702" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(10.3125 29.0625) rotate(-65.1363) scale(21.1821)">
                                            <stop stop-color="#E0E8B7" />
                                            <stop offset="0.444662" stop-color="#FB8A2E" />
                                            <stop offset="0.71474" stop-color="#E2425C" />
                                            <stop offset="1" stop-color="#E2425C" stop-opacity="0" />
                                        </radialGradient>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="footer-social">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                    viewBox="0 0 30 30" fill="none">
                                    <path
                                        d="M15.0075 23.765H14.9825C14.905 23.765 7.15126 23.75 5.19501 23.2188C4.11928 22.929 3.27919 22.0884 2.99001 21.0125C2.63823 19.028 2.46836 17.0154 2.48251 15C2.47342 12.9813 2.64789 10.9659 3.00376 8.97875C3.30089 7.90189 4.13729 7.05744 5.21126 6.75C7.11376 6.25 14.6538 6.25 14.9738 6.25H15C15.0788 6.25 22.8525 6.265 24.7888 6.79625C25.8622 7.08751 26.7006 7.92637 26.9913 9C27.3542 10.9919 27.5246 13.0142 27.5 15.0387C27.5088 17.055 27.3339 19.0679 26.9775 21.0525C26.6846 22.127 25.844 22.9658 24.7688 23.2563C22.8688 23.76 15.3275 23.765 15.0075 23.765ZM12.5075 11.2563L12.5013 18.7563L19.0163 15.0063L12.5075 11.2563Z"
                                        fill="#0C9146" />
                                </svg>
                            </a>
                        </div>
                        <div class="footer-social">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                    viewBox="0 0 30 30" fill="none">
                                    <circle cx="15" cy="15" r="13.125" fill="#0C9146" />
                                    <path
                                        d="M21.5499 9.57074C21.6668 8.81561 20.9488 8.21958 20.2774 8.51437L6.90452 14.3858C6.42303 14.5972 6.45825 15.3265 6.95763 15.4855L9.71545 16.3638C10.2418 16.5314 10.8117 16.4447 11.2714 16.1272L17.489 11.8315C17.6765 11.702 17.8809 11.9686 17.7207 12.1337L13.2451 16.7481C12.8109 17.1957 12.8971 17.9542 13.4193 18.2817L18.4303 21.424C18.9923 21.7765 19.7153 21.4224 19.8205 20.7433L21.5499 9.57074Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </div>
                        <div class="footer-social">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                    viewBox="0 0 30 30" fill="none">
                                    <path
                                        d="M26.25 15C26.25 21.2132 21.2132 26.25 15 26.25C12.6302 26.25 10.4315 25.5172 8.61811 24.2659L4.77273 25.2273L5.7804 21.4485C4.50087 19.6225 3.75 17.3989 3.75 15C3.75 8.7868 8.7868 3.75 15 3.75C21.2132 3.75 26.25 8.7868 26.25 15Z"
                                        fill="#0C9146" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15 28.125C22.2487 28.125 28.125 22.2487 28.125 15C28.125 7.75126 22.2487 1.875 15 1.875C7.75126 1.875 1.875 7.75126 1.875 15C1.875 17.3539 2.49468 19.5632 3.57982 21.4734L1.875 28.125L8.73268 26.5348C10.595 27.5488 12.7302 28.125 15 28.125ZM15 26.1058C21.1335 26.1058 26.1058 21.1335 26.1058 15C26.1058 8.86645 21.1335 3.89423 15 3.89423C8.86645 3.89423 3.89423 8.86645 3.89423 15C3.89423 17.3682 4.63547 19.5632 5.8986 21.3658L4.90385 25.0962L8.69993 24.1471C10.49 25.3824 12.6605 26.1058 15 26.1058Z"
                                        fill="#0C9146" />
                                    <path
                                        d="M11.7188 8.90605C11.4067 8.27926 10.928 8.33475 10.4444 8.33475C9.58009 8.33475 8.23242 9.37002 8.23242 11.2967C8.23242 12.8758 8.92823 14.6043 11.2729 17.19C13.5357 19.6854 16.5088 20.9763 18.9771 20.9324C21.4453 20.8884 21.9531 18.7644 21.9531 18.0471C21.9531 17.7292 21.7559 17.5705 21.6199 17.5274C20.7788 17.1238 19.2275 16.3716 18.8745 16.2303C18.5215 16.089 18.3372 16.2801 18.2227 16.3841C17.9026 16.6891 17.268 17.5881 17.0508 17.7903C16.8335 17.9926 16.5096 17.8902 16.3748 17.8138C15.8788 17.6147 14.534 17.0165 13.462 15.9774C12.1362 14.6922 12.0584 14.25 11.8087 13.8564C11.6088 13.5416 11.7555 13.3484 11.8286 13.264C12.1143 12.9344 12.5087 12.4255 12.6856 12.1727C12.8624 11.9198 12.722 11.5359 12.6378 11.2967C12.2754 10.2684 11.9684 9.40749 11.7188 8.90605Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </div>
                        <div class="footer-social">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                    viewBox="0 0 30 30" fill="none">
                                    <path
                                        d="M24.9938 8.35999C26.1143 7.6901 26.9527 6.63528 27.3525 5.39249C26.2996 6.01724 25.1476 6.45733 23.9463 6.69374C22.2807 4.9319 19.6419 4.50314 17.5043 5.64706C15.3666 6.79097 14.2594 9.22435 14.8013 11.5875C10.4883 11.371 6.46998 9.33363 3.74627 5.98249C2.32482 8.43426 3.05121 11.5685 5.40627 13.145C4.55466 13.1176 3.72193 12.887 2.97752 12.4725C2.97752 12.495 2.97752 12.5175 2.97752 12.54C2.97801 15.0939 4.77798 17.2938 7.28127 17.8C6.49135 18.0149 5.66278 18.0465 4.85877 17.8925C5.56277 20.0766 7.57571 21.5728 9.87002 21.6175C7.96981 23.1089 5.62311 23.9177 3.20752 23.9137C2.77936 23.9144 2.35153 23.8897 1.92627 23.84C4.37926 25.4163 7.23423 26.2529 10.15 26.25C14.2066 26.2778 18.1051 24.6786 20.9734 21.81C23.8418 18.9414 25.4407 15.0428 25.4125 10.9862C25.4125 10.7537 25.4071 10.5225 25.3963 10.2925C26.4468 9.53324 27.3535 8.59267 28.0738 7.51499C27.095 7.94881 26.0569 8.23364 24.9938 8.35999Z"
                                        fill="#0C9146" />
                                </svg>
                            </a>
                        </div>
                        <div class="footer-social">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 30 30" fill="none">
                                    <path
                                        d="M27.5 15C27.5 8.1 21.9 2.5 15 2.5C8.1 2.5 2.5 8.1 2.5 15C2.5 21.05 6.8 26.0875 12.5 27.25V18.75H10V15H12.5V11.875C12.5 9.4625 14.4625 7.5 16.875 7.5H20V11.25H17.5C16.8125 11.25 16.25 11.8125 16.25 12.5V15H20V18.75H16.25V27.4375C22.5625 26.8125 27.5 21.4875 27.5 15Z"
                                        fill="#0C9146" />
                                </svg>
                            </a>
                        </div>
                    </div>



                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    Quick Links
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <ul style="list-style-type: none;display: contents;">
                                        <a href="#">
                                            <li class="footer-first-row">Market Information</li>
                                        </a>
                                        <a href="#">
                                            <li>Education</li>
                                        </a>
                                        <a href="#">
                                            <li>Support</li>
                                        </a>
                                        <a href="#">
                                            <li class="footer-last-row">Legal Docs</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Company
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <ul style="list-style-type: none;display: contents;">
                                        <a href="#">
                                            <li class="footer-first-row">Home</li>
                                        </a>
                                        <a href="#">
                                            <li>About Us</li>
                                        </a>
                                        <a href="#">
                                            <li class="footer-last-row">Contact Us</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    Legal
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <ul style="list-style-type: none;display: contents;">
                                        <a href="#">
                                            <li class="footer-first-row">Terms and Conditions</li>
                                        </a>
                                        <a href="#">
                                            <li class="footer-last-row">Privacy Policy</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="footer-copyright-mobile">GujaratiTraders © copyright 2024. All Rights Reserved.
                    </div>

                </div>











                <div class="row footer-main d-xl-flex d-lg-flex d-md-flex d-sm-flex d-none">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <a href="#"><img src="{{ asset('images/home_image/Footer logo.png') }}" alt=""
                                class="img-fluid footer-logo"></a>
                        <div class="d-flex align-items-center footer-item-1">
                            <a href="#" class="text-decoration-none text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" class="footer-icon">
                                    <path
                                        d="M3 8L10.8906 13.2604C11.5624 13.7083 12.4376 13.7083 13.1094 13.2604L21 8M5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19Z"
                                        stroke="#0C9146" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                info@gujratitrader.com
                            </a>
                        </div>
                        <div class="d-flex align-items-center footer-item-2">
                            <a href="#" class="text-decoration-none text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" class="footer-icon">
                                    <path
                                        d="M6.54 5C6.6 5.89 6.75 6.76 6.99 7.59L5.79 8.79C5.38 7.59 5.12 6.32 5.03 5H6.54ZM16.4 17.02C17.25 17.26 18.12 17.41 19 17.47V18.96C17.68 18.87 16.41 18.61 15.2 18.21L16.4 17.02ZM7.5 3H4C3.45 3 3 3.45 3 4C3 13.39 10.61 21 20 21C20.55 21 21 20.55 21 20V16.51C21 15.96 20.55 15.51 20 15.51C18.76 15.51 17.55 15.31 16.43 14.94C16.33 14.9 16.22 14.89 16.12 14.89C15.86 14.89 15.61 14.99 15.41 15.18L13.21 17.38C10.38 15.93 8.06 13.62 6.62 10.79L8.82 8.59C9.1 8.31 9.18 7.92 9.07 7.57C8.7 6.45 8.5 5.25 8.5 4C8.5 3.45 8.05 3 7.5 3Z"
                                        fill="#0C9146" />
                                </svg>
                                +91 90812 23288
                            </a>
                        </div>

                        <div class="row">
                            <a href="#" class="footer-social-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 30 30" fill="none">
                                    <rect x="1.875" y="1.875" width="26.25" height="26.25" rx="6"
                                        fill="url(#paint0_radial_1_702)" />
                                    <rect x="1.875" y="1.875" width="26.25" height="26.25" rx="6"
                                        fill="url(#paint1_radial_1_702)" />
                                    <rect x="1.875" y="1.875" width="26.25" height="26.25" rx="6"
                                        fill="#0C9146" />
                                    <path
                                        d="M21.5625 9.84375C21.5625 10.6204 20.9329 11.25 20.1562 11.25C19.3796 11.25 18.75 10.6204 18.75 9.84375C18.75 9.0671 19.3796 8.4375 20.1562 8.4375C20.9329 8.4375 21.5625 9.0671 21.5625 9.84375Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15 19.6875C17.5888 19.6875 19.6875 17.5888 19.6875 15C19.6875 12.4112 17.5888 10.3125 15 10.3125C12.4112 10.3125 10.3125 12.4112 10.3125 15C10.3125 17.5888 12.4112 19.6875 15 19.6875ZM15 17.8125C16.5533 17.8125 17.8125 16.5533 17.8125 15C17.8125 13.4467 16.5533 12.1875 15 12.1875C13.4467 12.1875 12.1875 13.4467 12.1875 15C12.1875 16.5533 13.4467 17.8125 15 17.8125Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.625 14.625C5.625 11.4747 5.625 9.89956 6.23809 8.6963C6.77738 7.63789 7.63789 6.77738 8.6963 6.23809C9.89956 5.625 11.4747 5.625 14.625 5.625H15.375C18.5253 5.625 20.1004 5.625 21.3037 6.23809C22.3621 6.77738 23.2226 7.63789 23.7619 8.6963C24.375 9.89956 24.375 11.4747 24.375 14.625V15.375C24.375 18.5253 24.375 20.1004 23.7619 21.3037C23.2226 22.3621 22.3621 23.2226 21.3037 23.7619C20.1004 24.375 18.5253 24.375 15.375 24.375H14.625C11.4747 24.375 9.89956 24.375 8.6963 23.7619C7.63789 23.2226 6.77738 22.3621 6.23809 21.3037C5.625 20.1004 5.625 18.5253 5.625 15.375V14.625ZM14.625 7.5H15.375C16.9811 7.5 18.0729 7.50146 18.9168 7.57041C19.7388 7.63757 20.1592 7.75931 20.4525 7.90873C21.1581 8.26825 21.7317 8.84193 22.0913 9.54754C22.2407 9.84079 22.3624 10.2612 22.4296 11.0832C22.4985 11.9271 22.5 13.0189 22.5 14.625V15.375C22.5 16.9811 22.4985 18.0729 22.4296 18.9168C22.3624 19.7388 22.2407 20.1592 22.0913 20.4525C21.7317 21.1581 21.1581 21.7317 20.4525 22.0913C20.1592 22.2407 19.7388 22.3624 18.9168 22.4296C18.0729 22.4985 16.9811 22.5 15.375 22.5H14.625C13.0189 22.5 11.9271 22.4985 11.0832 22.4296C10.2612 22.3624 9.84079 22.2407 9.54754 22.0913C8.84193 21.7317 8.26825 21.1581 7.90873 20.4525C7.75931 20.1592 7.63757 19.7388 7.57041 18.9168C7.50146 18.0729 7.5 16.9811 7.5 15.375V14.625C7.5 13.0189 7.50146 11.9271 7.57041 11.0832C7.63757 10.2612 7.75931 9.84079 7.90873 9.54754C8.26825 8.84193 8.84193 8.26825 9.54754 7.90873C9.84079 7.75931 10.2612 7.63757 11.0832 7.57041C11.9271 7.50146 13.0189 7.5 14.625 7.5Z"
                                        fill="white" />
                                    <defs>
                                        <radialGradient id="paint0_radial_1_702" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(11.25 21.5625) rotate(-55.3758) scale(23.9246)">
                                            <stop stop-color="#B13589" />
                                            <stop offset="0.79309" stop-color="#C62F94" />
                                            <stop offset="1" stop-color="#8A3AC8" />
                                        </radialGradient>
                                        <radialGradient id="paint1_radial_1_702" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(10.3125 29.0625) rotate(-65.1363) scale(21.1821)">
                                            <stop stop-color="#E0E8B7" />
                                            <stop offset="0.444662" stop-color="#FB8A2E" />
                                            <stop offset="0.71474" stop-color="#E2425C" />
                                            <stop offset="1" stop-color="#E2425C" stop-opacity="0" />
                                        </radialGradient>
                                    </defs>
                                </svg>
                            </a>
                            <a href="#" class="footer-social-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 30 30" fill="none">
                                    <path
                                        d="M15.0075 23.765H14.9825C14.905 23.765 7.15126 23.75 5.19501 23.2188C4.11928 22.929 3.27919 22.0884 2.99001 21.0125C2.63823 19.028 2.46836 17.0154 2.48251 15C2.47342 12.9813 2.64789 10.9659 3.00376 8.97875C3.30089 7.90189 4.13729 7.05744 5.21126 6.75C7.11376 6.25 14.6538 6.25 14.9738 6.25H15C15.0788 6.25 22.8525 6.265 24.7888 6.79625C25.8622 7.08751 26.7006 7.92637 26.9913 9C27.3542 10.9919 27.5246 13.0142 27.5 15.0387C27.5088 17.055 27.3339 19.0679 26.9775 21.0525C26.6846 22.127 25.844 22.9658 24.7688 23.2563C22.8688 23.76 15.3275 23.765 15.0075 23.765ZM12.5075 11.2563L12.5013 18.7563L19.0163 15.0063L12.5075 11.2563Z"
                                        fill="#0C9146" />
                                </svg>
                            </a>
                            <a href="#" class="footer-social-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 30 30" fill="none">
                                    <circle cx="15" cy="15" r="13.125" fill="#0C9146" />
                                    <path
                                        d="M21.5499 9.57074C21.6668 8.81561 20.9488 8.21958 20.2774 8.51437L6.90452 14.3858C6.42303 14.5972 6.45825 15.3265 6.95763 15.4855L9.71545 16.3638C10.2418 16.5314 10.8117 16.4447 11.2714 16.1272L17.489 11.8315C17.6765 11.702 17.8809 11.9686 17.7207 12.1337L13.2451 16.7481C12.8109 17.1957 12.8971 17.9542 13.4193 18.2817L18.4303 21.424C18.9923 21.7765 19.7153 21.4224 19.8205 20.7433L21.5499 9.57074Z"
                                        fill="white" />
                                </svg>
                            </a>
                            <a href="#" class="footer-social-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 30 30" fill="none">
                                    <path
                                        d="M26.25 15C26.25 21.2132 21.2132 26.25 15 26.25C12.6302 26.25 10.4315 25.5172 8.61811 24.2659L4.77273 25.2273L5.7804 21.4485C4.50087 19.6225 3.75 17.3989 3.75 15C3.75 8.7868 8.7868 3.75 15 3.75C21.2132 3.75 26.25 8.7868 26.25 15Z"
                                        fill="#0C9146" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15 28.125C22.2487 28.125 28.125 22.2487 28.125 15C28.125 7.75126 22.2487 1.875 15 1.875C7.75126 1.875 1.875 7.75126 1.875 15C1.875 17.3539 2.49468 19.5632 3.57982 21.4734L1.875 28.125L8.73268 26.5348C10.595 27.5488 12.7302 28.125 15 28.125ZM15 26.1058C21.1335 26.1058 26.1058 21.1335 26.1058 15C26.1058 8.86645 21.1335 3.89423 15 3.89423C8.86645 3.89423 3.89423 8.86645 3.89423 15C3.89423 17.3682 4.63547 19.5632 5.8986 21.3658L4.90385 25.0962L8.69993 24.1471C10.49 25.3824 12.6605 26.1058 15 26.1058Z"
                                        fill="#0C9146" />
                                    <path
                                        d="M11.7188 8.90605C11.4067 8.27926 10.928 8.33475 10.4444 8.33475C9.58009 8.33475 8.23242 9.37002 8.23242 11.2967C8.23242 12.8758 8.92823 14.6043 11.2729 17.19C13.5357 19.6854 16.5088 20.9763 18.9771 20.9324C21.4453 20.8884 21.9531 18.7644 21.9531 18.0471C21.9531 17.7292 21.7559 17.5705 21.6199 17.5274C20.7788 17.1238 19.2275 16.3716 18.8745 16.2303C18.5215 16.089 18.3372 16.2801 18.2227 16.3841C17.9026 16.6891 17.268 17.5881 17.0508 17.7903C16.8335 17.9926 16.5096 17.8902 16.3748 17.8138C15.8788 17.6147 14.534 17.0165 13.462 15.9774C12.1362 14.6922 12.0584 14.25 11.8087 13.8564C11.6088 13.5416 11.7555 13.3484 11.8286 13.264C12.1143 12.9344 12.5087 12.4255 12.6856 12.1727C12.8624 11.9198 12.722 11.5359 12.6378 11.2967C12.2754 10.2684 11.9684 9.40749 11.7188 8.90605Z"
                                        fill="white" />
                                </svg>
                            </a>
                            <a href="#" class="footer-social-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 30 30" fill="none">
                                    <path
                                        d="M24.9938 8.35999C26.1143 7.6901 26.9527 6.63528 27.3525 5.39249C26.2996 6.01724 25.1476 6.45733 23.9463 6.69374C22.2807 4.9319 19.6419 4.50314 17.5043 5.64706C15.3666 6.79097 14.2594 9.22435 14.8013 11.5875C10.4883 11.371 6.46998 9.33363 3.74627 5.98249C2.32482 8.43426 3.05121 11.5685 5.40627 13.145C4.55466 13.1176 3.72193 12.887 2.97752 12.4725C2.97752 12.495 2.97752 12.5175 2.97752 12.54C2.97801 15.0939 4.77798 17.2938 7.28127 17.8C6.49135 18.0149 5.66278 18.0465 4.85877 17.8925C5.56277 20.0766 7.57571 21.5728 9.87002 21.6175C7.96981 23.1089 5.62311 23.9177 3.20752 23.9137C2.77936 23.9144 2.35153 23.8897 1.92627 23.84C4.37926 25.4163 7.23423 26.2529 10.15 26.25C14.2066 26.2778 18.1051 24.6786 20.9734 21.81C23.8418 18.9414 25.4407 15.0428 25.4125 10.9862C25.4125 10.7537 25.4071 10.5225 25.3963 10.2925C26.4468 9.53324 27.3535 8.59267 28.0738 7.51499C27.095 7.94881 26.0569 8.23364 24.9938 8.35999Z"
                                        fill="#0C9146" />
                                </svg>
                            </a>
                            <a href="#" class="footer-social-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 30 30" fill="none">
                                    <path
                                        d="M27.5 15C27.5 8.1 21.9 2.5 15 2.5C8.1 2.5 2.5 8.1 2.5 15C2.5 21.05 6.8 26.0875 12.5 27.25V18.75H10V15H12.5V11.875C12.5 9.4625 14.4625 7.5 16.875 7.5H20V11.25H17.5C16.8125 11.25 16.25 11.8125 16.25 12.5V15H20V18.75H16.25V27.4375C22.5625 26.8125 27.5 21.4875 27.5 15Z"
                                        fill="#0C9146" />
                                </svg>
                            </a>
                        </div>
                    </div>


                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 ">
                        <div class="footer-heading">Quick Links</div>
                        <ul class="footer-list">
                            <a href="#">
                                <li>Market Information</li>
                            </a>
                            <a href="#">
                                <li>Education</li>
                            </a>
                            <a href="#">
                                <li>Support</li>
                            </a>
                            <a href="#">
                                <li>Legal Docs</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 footer-cols">
                        <div class="footer-heading">Company</div>
                        <ul class="footer-list">
                            <a href="#">
                                <li>Home</li>
                            </a>
                            <a href="#">
                                <li>About Us</li>
                            </a>
                            <a href="#">
                                <li>Contact Us</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 footer-cols">
                        <div class="footer-heading">Legal</div>
                        <ul class="footer-list">
                            <a href="#">
                                <li>Terms and Conditions</li>
                            </a>
                            <a href="#">
                                <li>Privacy Policy</li>
                            </a>
                        </ul>
                    </div>

                    <hr class="horizontal-row">
                    <div class="footer-copyright">GujaratiTraders © copyright 2024. All Rights Reserved.</div>

                </div>
            </div>
        </footer>
    </section>
    <!-- footer -->


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>