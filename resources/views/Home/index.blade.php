



@extends('header-footer')

@section('content')





<style>

        #joinFormSuccess {

            display: none;

        }



        .slick-dots li {

            position: relative;

            display: inline-block;

            width: 20px;

            height: 20px;

            margin: 0 !important;

            padding: 0;

            cursor: pointer;

        }



        .slick-dots li button:before {

            font-family: slick;

            font-size: 8px;

            line-height: 20px;

            position: absolute;

            top: 0;

            left: 0;

            width: 20px;

            height: 20px;

            content: '•';

            text-align: center;

            opacity: .25;

            color: var(--02, #0C9146);

            -webkit-font-smoothing: antialiased;

            -moz-osx-font-smoothing: grayscale;

        }



        .footer-list li:hover {

            color: var(--02, #0C9146);

            font-family: Archivo;

            font-style: normal;

            line-height: normal;

        }



        .footer-item {

            color: #000 !important;

        }



        .footer-item:hover {

            color: var(--02, #0C9146) !important;

        }



        .footer-item-3 {

            color: #000 !important;

        }



        .footer-item-3:hover {

            color: var(--02, #0C9146) !important;

        }



        .footer-item-4 {

            color: #000 !important;

        }



        .footer-item-4:hover {

            color: var(--02, #0C9146) !important;

        }



        .accordion-body li:hover {

            color: var(--02, #0C9146) !important;

        }



        .custom-prev {

            background-color: #0C9146;

            border-radius: 50%;

            padding: 10px 9px;

            display: flex;

            justify-content: center;

            align-items: center;

            border: none;

        }



        .custom-next {

            background-color: #0C9146;

            border-radius: 50%;

            padding: 10px 9px;

            display: flex;

            justify-content: center;

            align-items: center;

            border: none;

        }



        .offcanvas-items:hover {

            text-decoration: none;

            color: #0C9146;

            font-family: Archivo;

            font-size: 16px;

            font-style: normal;

            font-weight: 700;

            line-height: normal;

        }





        @media screen and (max-width: 1400px) {

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



        @media screen and (max-width:768px) {

            .custom-prev {

                background-color: #0C9146;

                border-radius: 50%;

                padding: 5px 5px;

                display: flex;

                justify-content: center;

                align-items: center;

                border: none;

            }



            .custom-next {

                background-color: #0C9146;

                border-radius: 50%;

                padding: 5px 5px;

                display: flex;

                justify-content: center;

                align-items: center;

                border: none;

            }

        }



        .buttons-main {

            top: 55%;

            left: 0;

        }



        .buttons-main-2 {

            top: 55%;

            right: 0;

        }



        .slider-text-1 {

            color: #000;

            text-align: center;

            font-family: gujFont2;

            font-size: 24px;

            font-style: normal;

            font-weight: 400;

            line-height: 32px;

            margin-bottom: 20px;

            padding: 10px 50px;

        }



        .accordion-item input[type="checkbox"]~.accordion-item-title .icon:after {

            content: "+";

            font-size: 30px;

        }



        .accordion-item input[type="checkbox"]:checked~.accordion-item-title .icon:after {

            content: "-";

            font-size: 30px;

        }



        .contact-us {

            transition-duration: 0.5s;

        }



        .contact-us:active {

            border-radius: 10px;

            border-left: none;

            border-top: none;

            border-right: 2px solid #000;

            border-bottom: 2px solid #000;

            background: #fff !important;

            display: flex;

            padding: 14px 30px;

            justify-content: center;

            align-items: center;

            gap: 10px;

            color: var(--05, #111);

            font-family: Archivo;

            font-size: 20px;

            font-style: normal;

            font-weight: 700;

            line-height: normal;

        }



        .contact-us:hover {

            border-radius: 10px;

            border-right: 2px solid #000;

            border-bottom: 2px solid #000;

            background: #fff !important;

            display: flex;

            padding: 14px 30px;

            justify-content: center;

            align-items: center;

            gap: 10px;

            color: #000 !important;

            font-family: Archivo;

            font-size: 20px;

            font-style: normal;

            font-weight: 700;

            line-height: normal;

            transition-duration: 0.5s;

        }



        @media screen and (max-width:992px) {

            .contact-us:hover {

                border-radius: 10px;

                border-right: 2px solid #000;

                border-bottom: 2px solid #000;

                background: #fff;

                display: flex;

                padding: 9px 20px;

                justify-content: center;

                align-items: center;

                gap: 10px;

                color: #000 !important;

                font-family: Archivo;

                font-size: 16px;

                font-style: normal;

                font-weight: 700;

                line-height: normal;

                transition-duration: 0.5s;

            }



            .contact-us:active {

                border-radius: 10px;

                border-right: 2px solid #000;

                border-bottom: 2px solid #000;

                background: #fff;

                display: flex;

                padding: 9px 20px;

                justify-content: center;

                align-items: center;

                gap: 10px;

                color: #000 !important;

                font-family: Archivo;

                font-size: 16px;

                font-style: normal;

                font-weight: 700;

                line-height: normal;

            }

        }



        @media screen and (max-width:425px) {

            .slider-text-1 {

                color: #000;

                text-align: center;

                font-family: gujFont2;

                font-size: 18px;

                font-style: normal;

                font-weight: 400;

                line-height: 24px;

                margin-bottom: 20px;

                padding: 10px 50px;

            }

        }



        @media screen and (max-width:375px) {

            .slider-text-1 {

                color: #000;

                text-align: center;

                font-family: gujFont2;

                font-size: 16px;

                font-style: normal;

                font-weight: 400;

                line-height: 22px;

                margin-bottom: 20px;

                padding: 10px 30px;

            }



            .custom-prev {

                background-color: #0C9146;

                border-radius: 50%;

                padding: 3px 3px;

                display: flex;

                justify-content: center;

                align-items: center;

                border: none;

            }



            .custom-next {

                background-color: #0C9146;

                border-radius: 50%;

                padding: 3px 3px;

                display: flex;

                justify-content: center;

                align-items: center;

                border: none;

            }

        }







        .upcoming-section-btn {

            color: #fff;

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

            background: var(--02, #0C9146) !important;

            margin-top: 30px;

        }



        .upcoming-section-btn:hover {

            color: #000;

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

            background: #fff !important;

            margin-top: 30px;

        }



        .upcoming-section-btn:active {

            color: #000 !important;

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

            background: #fff !important;

            margin-top: 30px;

        }



        .upcoming-section-btn {

            transition-duration: 0.5s;

        }



        .upcoming-section-btn:hover {

            transition-duration: 0.5s;

        }



        .offline-class-btn {

            transition-duration: 0.5s;

        }



        .offline-class-btn:hover {

            transition-duration: 0.5s;

        }



        .v-btn1 {

            transition-duration: 0.5s;

        }



        .v-btn1:hover {

            transition-duration: 0.5s;

        }



        .v-btn1 svg path {

            transition-duration: 0.5s;

        }



        .v-btn1:hover svg path,

        .v-btn1:focus svg path {

            stroke: #fff;

            transition-duration: 0.5s;

        }



        @media screen and (max-width:1400px) {

            .upcoming-section-btn {

                color: #fff;

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

                background: var(--02, #0C9146) !important;

                margin-top: 30px;

                margin-bottom: 30px;

            }



            .upcoming-section-btn:hover {

                color: #fff;

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

                background: #fff !important;

                margin-top: 30px;

                margin-bottom: 30px;

            }



            .upcoming-section-btn:active {

                color: #000 !important;

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

                background: #fff !important;

                margin-top: 30px;

                margin-bottom: 30px;

            }

        }



        @media screen and (max-width:1200px) {

            .upcoming-section-btn {

                color: #fff;

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

                background: var(--02, #0C9146) !important;

                margin-top: 30px;

                margin-bottom: 30px;

            }



            .upcoming-section-btn:hover {

                color: #000;

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

                background: #fff !important;

                margin-top: 30px;

                margin-bottom: 30px;

            }



            .upcoming-section-btn:active {

                color: #000 !important;

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

                background: #fff !important;

                margin-top: 30px;

                margin-bottom: 30px;

            }

        }



        @media screen and (max-width:992px) {

            .upcoming-section-btn {

                color: #fff;

                font-family: gujFont1;

                font-size: 20px;

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

                border-bottom: 2px solid #000;

                background: var(--02, #0C9146) !important;

                margin-top: 30px;

                margin-bottom: 30px;

            }



            .upcoming-section-btn:hover {

                color: #000;

                font-family: gujFont1;

                font-size: 20px;

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

                border-bottom: 2px solid #000;

                background: #fff !important;

                margin-top: 30px;

                margin-bottom: 30px;

            }



            .upcoming-section-btn:active {

                color: #000 !important;

                font-family: gujFont1;

                font-size: 20px;

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

                border-bottom: 2px solid #000;

                background: #fff !important;

                margin-top: 30px;

                margin-bottom: 30px;

            }

        }



        .bg-img-main {

            background-image: url("../images/bg-middle.png");

            background-position: center;

            background-size: cover;

            padding: 113px 0px;

        }



        .btn:first-child:active,

        :not(.btn-check)+.btn:active {

            color: #fff;

            background-color: var(--02, #0C9146);

            border-color: #000;

            border-left: 1px solid transparent;

            border-top: 1px solid transparent;

        }



        .btn:first-child:active,

        :not(.btn-check)+.btn:hover {

            border-left: 1px solid transparent;

            border-top: 1px solid transparent;

            transition-duration: 0.5s;

        }







        .slick-dots {

            position: relative;

            bottom: -5px;

            display: block;

            width: 100%;

            padding: 0;

            margin: 0;

            list-style: none;

            text-align: center;

        }



        .slider-buttons-main {

            top: 40%;

            left: -4%;

        }



        .slider-buttons-main-2 {

            top: 40%;

            right: -4%;

        }



        @media screen and (max-width:1450px) {

            .slider-buttons-main {

                top: 40%;

                left: -3%;

            }



            .slider-buttons-main-2 {

                top: 40%;

                right: -3%;

            }

        }



        @media screen and (max-width:1400px) {

            .slider-buttons-main {

                top: 40%;

                left: -2.5%;

            }



            .slider-buttons-main-2 {

                top: 40%;

                right: -2.5%;

            }

        }



        @media screen and (max-width:1250px) {

            .slider-buttons-main {

                top: 40%;

                left: -2%;

            }



            .slider-buttons-main-2 {

                top: 40%;

                right: -1.9%;

            }

        }



        @media screen and (max-width:1200px) {



            .slider-buttons-main {

                top: 40%;

                left: -2%;

            }



            .slider-buttons-main-2 {

                top: 40%;

                right: -2.5%;

            }

        }



            @media screen and (max-width:1024px) {



                .slider-buttons-main {

                    top: 40%;

                    left: -0% !important;

                }



                .slider-buttons-main-2 {

                    top: 40%;

                    right: -0% !important;

                }



                .custom-next-2 {

                    background-color: #0C9146;

                    border-radius: 50%;

                    padding: 3px !important;

                    display: flex;

                    justify-content: center;

                    align-items: center;

                    border: none;

                    margin-left: auto;

                }



                .custom-prev-2 {

                    background-color: #0C9146;

                    border-radius: 50%;

                    padding: 3px;

                    display: flex;

                    justify-content: center;

                    align-items: center;

                    border: none;

                }



                .custom-next {

                    background-color: #0C9146;

                    border-radius: 50%;

                    padding: 3px;

                    display: flex;

                    justify-content: center;

                    align-items: center;

                    border: none;

                }



                .custom-prev {

                    background-color: #0C9146;

                    border-radius: 50%;

                    padding: 3px;

                    display: flex;

                    justify-content: center;

                    align-items: center;

                    border: none;

                }

            }



            @media screen and (max-width:1023px) {

                .slider-buttons-main {

                    top: 40%;

                    left: -2%;

                }



                .slider-buttons-main-2 {

                    top: 40%;

                    right: -2%;

                }

            }



            @media screen and (max-width:992px) {

                .slider-buttons-main {

                    top: 40%;

                    left: -4%;

                    display: none !important;

                }



                .slider-buttons-main-2 {

                    top: 40%;

                    right: -4%;

                    display: none !important;

                }

            }



            .register-now-about-btn:active {

                border-right: 2px solid #000;

                border-bottom: 2px solid #000;

                background: var(--04, #FFC520) !important;

                color: var(--05, #111) !important;

            }



            @media screen and (max-width:768px) {

                .accordion {

                    display: flex;

                    flex-direction: column;

                    font-family: "Sora", sans-serif;

                    width: 100%;

                    margin: auto;

                    margin-bottom: 50px;

                }

            }









            .accordion-item-desc {

                display: none;

            }



            input[type="checkbox"] {

                display: none;

            }



            input[type="checkbox"]+.accordion-item-desc {

                display: none;

            }



            input[type="checkbox"]:checked+.accordion-item-desc {

                display: block;

            }



            .offcanvas {

                width: 300px !important;

            }



            @media screen and (max-width: 425px) {

                .v-btn1 {

                    color: var(--06, #333);

                    text-align: center;

                    font-family: gujFont1;

                    font-size: 15px;

                    font-style: normal;

                    font-weight: 400;

                    line-height: normal;

                    border-radius: 10px;

                    border-right: 2px solid #000;

                    border-bottom: 2px solid #000;

                    display: flex;

                    padding: 8px 20px;

                    justify-content: center;

                    align-items: center;

                    gap: 10px;

                    border-radius: 10px;

                    background: var(--08, #F5F5F5);

                    text-wrap: nowrap;

                }

            }



            @media screen and (max-width: 576px) {

                .video {

                    margin-bottom: 30px;

                    margin-top: 30px;

                    width: 100%;

                    height: 100%;

                }

            }



            @media screen and (max-width:992px) {

                .bg-img-main {

                    background-image: url(../images/bg-middle.png);

                    background-position: center;

                    background-size: cover;

                    padding: 50px 0px 26px;

                }

            }



            @media screen and (max-width: 768px) {

                .v-btn1 {

                    color: var(--06, #333);

                    text-align: center;

                    font-family: gujFont1;

                    font-size: 16px;

                    font-style: normal;

                    font-weight: 400;

                    line-height: normal;

                    border-radius: 10px;

                    border-right: 2px solid #000;

                    border-bottom: 2px solid #000;

                    display: flex;

                    padding: 9px 20px;

                    justify-content: center;

                    align-items: center;

                    gap: 10px;

                    border-radius: 10px;

                    background: var(--08, #F5F5F5);

                    text-wrap: nowrap;

                }

            }



            @media screen and (max-width: 768px) {

                .v-btn1:hover {

                    color: var(--06, #fff);

                    text-align: center;

                    font-family: gujFont1;

                    font-size: 16px;

                    font-style: normal;

                    font-weight: 400;

                    line-height: normal;

                    border-radius: 10px;

                    border-right: 2px solid #000;

                    border-bottom: 2px solid #000;

                    display: flex;

                    padding: 9px 20px;

                    justify-content: center;

                    align-items: center;

                    gap: 10px;

                    border-radius: 10px;

                    background: var(--02, #0C9146);

                    text-wrap: nowrap;

                }



                .v-main {

                    margin-top: 50px;

                }



                .upcoming-section-btn {

                    color: #fff;

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

                    border-bottom: 2px solid #000;

                    background: var(--02, #0C9146) !important;

                    margin-top: 30px;

                    margin-bottom: 30px;

                }



                .upcoming-section-btn:hover {

                    color: #000;

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

                    border-bottom: 2px solid #000;

                    background: var(--02, #fff) !important;

                    margin-top: 30px;

                    margin-bottom: 30px;

                }

            }



            .offcanvas {

                width: 250px !important;

            }



            .active {

                color: var(--02, #0C9146) !important;

            }



            .offcanvas.hiding,

            .offcanvas.show,

            .offcanvas.showing {

                width: 250px;

            }



            .offcanvas-header {

                box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;

            }



            iframe {

                height: 750px !important;

            }



            @media screen and (max-width:1400px) {

                iframe {

                    height: 650px !important;

                }

            }



            @media screen and (max-width:1200px) {

                iframe {

                    height: 550px !important;

                }

            }



            @media screen and (max-width:992px) {

                iframe {

                    height: 450px !important;

                }

            }



            @media screen and (max-width:768px) {

                iframe {

                    height: 350px !important;

                }

            }



            @media screen and (max-width:576px) {

                iframe {

                    height: 280px !important;

                }

            }



            @media screen and (max-width:425px) {

                iframe {

                    height: 250px !important;

                }

            }

            

            .course-btn{

                font-family:gujFont1;

                font-weight:400 !important;

                text-decoration:none;

                background:var(--02, #0C9146);

                color:#fff;

                transition-duration:0.5s;

                padding:9px 20px;

                border-radius:5px;

                border-bottom:2px solid black;

                border-right:2px solid black;

            }

            

            .course-btn:hover{

                font-family:gujFont1;

                font-weight:400 !important;

                text-decoration:none;

                background:var(--04, #FFC520);

                color:#000;

                transition-duration:0.5s;

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



<!-- Hero section -->



    <section class="hero_bg">

        <div class="container">

            <div class="row d-flex align-items-center hero-main-row">

                <div class="col-xl-6 col-lg-6 col-md-7">

                    <div class="d-flex justify-content-center"><img

                            src="{{ asset('images/home_image/Heder mobile-img.png') }}" alt=""

                            class="img-fluid d-xl-none d-lg-none d-md-none d-flex hero-img-mobile"></div>

                    <div class="d-xl-block d-lg-block d-md-block d-none">

                        <h2 class="hero-section-heading">XLBM X[ZA•Z CJ[ U]HZFTL DF\</h2>

                        <div class="hero-section-content">

                            U]HZFTL 8=[0Z GL VMlOlXI, J[A;F>8 5Z TDFÚ\ CFlN"S :JFUT K[P U]HZFTL 8=[0Z V[ 8=[™0U VJ[ZG[;

                            VG[

                            OF.GF˜g;I, vL0D 5Z SFD SZTL U]HZFT GL V[SDF+ ;M˜xI, DLl0IF R[G, K[ H[ ;M˜xI, DLl0IF 5Z

                            X[ZA•Z

                            G]\ IMuI 7FG DFT'EFQF U]HZFTL DF\ ,MSM ;]WL 5CM\RF0[ K[P

                        </div>

                        <a href="{{ route('contact') }}" style="text-decoration:none"><button class="btn contact-us" style="font-family:gujFont1;font-weight:400">VDFZM ;\5S" SZM</button></a>

                    </div>

                </div>

                <div class="col-xl-6 col-lg-6 col-md-5">

                    <div class="d-xl-block d-lg-block d-md-block d-none">

                        <img src="{{ asset('images/home_image/Hero section img.png') }}" alt=""

                            class="img-fluid hero-img">

                    </div>

                    <div class="d-xl-none d-lg-none d-md-none d-block">

                        <div class="hero-section-heading-mobile">U]HZFTL 8=[0Z GL VMlOlXI, J[A;F>8 5Z TDFÚ\ CFlN"S

                            :JFUT

                            K[P</div>

                        <div class="hero-section-content-mobile">

                            U]HZFTL 8=[0Z V[ 8=[™0U VJ[ZG[; VG[ OF.GF˜g;I, vL0D 5Z SFD SZTL U]HZFT GL V[SDF+ ;M˜xI,

                            DLl0IF R[G, K[ H[ ;M˜xI, DLl0IF 5Z X[ZA•Z G]\ IMuI 7FG DFT'EFQF U]HZFTL DF\ ,MSM ;]WL

                            5CM\RF0[ K[P

                        </div>

                        <a href="{{ route('contact') }}" class="text-decoration-none"><button class="btn contact-us" style="font-family:gujFont1;font-weight:400">VDFZM ;\5S" SZM</button></a>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- Hero section -->



    <!-- gujrti treders main -->



    <section>

        <div class="bg-img-main">

            <div class="container px-3">

                <div class="main-section-heading text-center">U]HZFTL 8=[0Z H X]\ SFD m</div>

                <div class="main-section-content text-center">U]HZFTL 8=[0Z K[¾F NM- JQ" YL ,MSM G[ DFT'EFQF U]HZFTL

                    DF\

                    X[ZA•Z G]\ IMuI VG[ ;RM8 7FG VF5L T[DG[

                    8=[0Z TZLS[ GL VFUJL VM/B VF5JF ;TT SFI"XL, K[P VF NM- JQ" GF ;DIUF/F DF\ U]HZFTL 8=[0Z V[ 200+ YL

                    JWFZ[ lJnFY› VM G[ 7FG 5ZM;[, K[P U]HZFTL 8=[0Z ‹FZF 8[˜S®GS, V[GFl,l;; G[ B]A H IMuI TZLS[ VG[ ;Z/

                    U]HZFTL EFQF DF\ ,MSM ;]WL 5CM\RF0JFG]\ SFD SZJFDF\ VFJ[ K[P</div>

                <div class="row d-flex justify-content-center">

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-xl-0 mb-lg-0 mb-4">

                        <div class="d-flex justify-content-center home-main-card-img"><img

                                src="{{ asset('images/home_image/Home-card-1.png') }}" alt=""

                                class="img-fluid"></div>

                        <div class="home-main-card-text">pÅT ;FWGM</div>

                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-xl-0 mb-lg-0 mb-4">

                        <div class="d-flex justify-content-center home-main-card-img"><img

                                src="{{ asset('images/home_image/Home-card-2.png') }}" alt=""

                                class="img-fluid"></div>

                        <div class="home-main-card-text">8=[™0U DFU"NlX"SFVM</div>

                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-xl-0 mb-lg-0 mb-4">

                        <div class="d-flex justify-content-center home-main-card-img"><img

                                src="{{ asset('images/home_image/Home-card-3.png') }}" alt=""

                                class="img-fluid"></div>

                        <div class="home-main-card-text">h05L VD,</div>

                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mb-xl-0 mb-lg-0 mb-4">

                        <div class="d-flex justify-content-center home-main-card-img"><img

                                src="{{ asset('images/home_image/Home-card-4.png') }}" alt=""

                                class="img-fluid"></div>

                        <div class="home-main-card-text"><span class="home-main-card-text2">0%</span> SlDXG</div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- gujrti treders main -->





    <!-- Upcoming event section -->



    <section class="upcoming-section-bg">

        <div class="upcoming-section-heading text-center">

            V5S™DU >J[g8;

        </div>

        <div class="container">

            <div class="row d-flex align-items-center">

                <div class="col-xl-6 col-lg-6 col-md-12">

                    <div class="upcoming-section-content1">

                        U]HZFTL 8=[0Z K[¾F NM- JQ" YL ,MSM G[ DFT'EFQF U]HZFTL DF\ X[ZA•Z G]\ IMuI VG[ ;RM8 7FG VF5L

                        T[DG[ 8=[0Z TZLS[ GL VFUJL VM/B VF5JF ;TT SFI"XL, K[P VF NM- JQ" GF ;DIUF/F DF\ U]HZFTL 8=[0Z V[

                        200+ YL JWFZ[ lJnFY› VM G[ 7FG 5ZM;[, K[P U]HZFTL 8=[0Z ‹FZF 8[˜S®GS, V[GFl,l;; G[ B]A H IMuI

                        TZLS[ VG[ ;Z/ U]HZFTL EFQF DF\ ,MSM ;]WL 5CM\RF0JFG]\ SFD SZJFDF\ VFJ[ K[P

                    </div>

                    <div class="upcoming-section-content2">

                        .J[g8 SFpg80FpG

                    </div>





                    @foreach ($events as $event)

                    {{-- @if($event->event_end_date >= now()) --}}

                        <div class="row d-flex align-items-center">

                            <div class="col-xl-2 col-lg-3 col-md-2 col-sm-3 col-3 cols-space">

                                <div class="timer-main">

                                    <div id="days_{{ $event->id }}" class="timer-text-1"></div>

                                    <div class="timer-text-2">lNJ;</div>

                                </div>

                            </div>

                            <div

                                class="col-xl-1 col-lg-0 col-md-1 col-sm-1 timer-dots d-xl-flex d-lg-none d-md-flex d-sm-none d-none justify-content-center">

                                :</div>

                            <div class="col-xl-2 col-lg-3 col-md-2 col-sm-3 col-3 cols-space">

                                <div class="timer-main">

                                    <div id="hours_{{ $event->id }}" class="timer-text-1"></div>

                                    <div class="timer-text-2">S,FS</div>

                                </div>

                            </div>

                            <div

                                class="col-xl-1 col-lg-0 col-md-1 col-sm-1 timer-dots d-xl-flex d-lg-none d-md-flex d-sm-none d-none justify-content-center">

                                :</div>

                            <div class="col-xl-2 col-lg-3 col-md-2 col-sm-3 col-3 cols-space">

                                <div class="timer-main">

                                    <div id="minutes_{{ $event->id }}" class="timer-text-1"></div>

                                    <div class="timer-text-2">lDlG8</div>

                                </div>

                            </div>

                            <div

                                class="col-xl-1 col-lg-0 col-md-1 col-sm-1 timer-dots d-xl-flex d-lg-none d-md-flex d-sm-none d-none justify-content-center">

                                :</div>

                            <div class="col-xl-2 col-lg-3 col-md-2 col-sm-3 col-3 cols-space">

                                <div class="timer-main">

                                    <div id="seconds_{{ $event->id }}" class="timer-text-1"></div>

                                    <div class="timer-text-2">;[Sg0</div>

                                </div>

                            </div>

                        </div>

                        {{-- @endif --}}

                    @endforeach







                    <div>

                        <button class="btn upcoming-section-btn">JW] •6M</button>

                    </div>

                </div>

                <div class="col-xl-6 col-lg-6 col-md-12">

                    <img src="{{ asset('images/home_image/Upcoming-section-img.png') }}" alt=""

                        class="img-fluid">

                </div>

            </div>

        </div>

    </section>



    <!-- Upcoming event section -->





    <!-- offline class section -->



    <section>

        <div class="container px-xl-3 px-lg-5 px-md-5 position-relative">

            <div class="row slider2 d-xl-flex d-lg-flex d-md-flex">

                <div class="col-12">

                    <div class="row d-flex align-items-center">

                        <div class="col-xl-6 col-lg-6 col-md-12">

                            <img src="{{ asset('images/home_image/Offline class image.png') }}" alt=""

                                class="img-fluid slider-image">

                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12">

                            <div class="offline-heading">VMO,F.G S,F; GL ;]lJWF</div>

                                    <div class="offline-content">

                                        <ul>

                                            <li> <i class="pe-2">✓</i>;JFZ[ <span class="list-number-gujtext">9</span> YL ;F\H[

                                                <span class="list-number-gujtext">5</span> S,FS ;]WL

                                                <span class="list-number-gujtext">2</span> lNJ; S,F;

                                            </li>

                                            <li><i class="pe-2">✓</i>DGL D[G[HD[g8 TYF ;FISM,M_ 5Z :5[xI, VMG,F>G ;[XG </li>

                                            <li><i class="pe-2">✓</i>VMG W :5M8 ÔÇí0Fp8 ;MÿI]XG</li>

                                            <li><i class="pe-2">✓</i>VMO,F.G S,F; GF lJnFY›VM G[ S,F; SIF" AFN VMG,F>G S,F; DF\ vL

                                                V[g8=L

                                                ZC[X[ </li>

                                            <li><i class="pe-2">✓</i>,F>O8F>D ;5M8"</li>

                                            <li><i class="pe-2">✓</i>VMO,F.G S,F; DF\ VFJGFZ lJnFY›VM DF8[ ZC[JFHDJFGL ;]lJWF SZL

                                                    VF5JFDF\ VFJX[ </li>

                                            <li><i class="pe-2">✓</i>lZlJHG DF8[ vL VMG,F>G S,F; V[g8=L TYF Z[SMl0©U D/X[</li>

                                        </ul>

                                    </div>

                                    <a href="#" class="text-decoration-none"><button

                                            class="btn offline-class-btn">JW]

                                            DFlCTL

                                            DF8[ SM, SZM</button></a>

                            </div>

                        </div>

                    </div>

                    <div class="col-12">

                        <div class="row d-flex align-items-center">

                            <div class="col-xl-6 col-lg-6 col-md-12">

                                <img src="{{ asset('images/home_image/Offline class image.png') }}" alt=""

                                    class="img-fluid slider-image">

                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12">

                                <div class="offline-heading">VMO,F.G S,F; GL ;]lJWF</div>

                                        <div class="offline-content">

                                            <ul>

                                                <li> <i class="pe-2">✓</i>;JFZ[ <span class="list-number-gujtext">9</span> YL ;F\H[

                                                    <span class="list-number-gujtext">5</span> S,FS ;]WL

                                                    <span class="list-number-gujtext">2</span> lNJ; S,F;

                                                </li>

                                                <li><i class="pe-2">✓</i>DGL D[G[HD[g8 TYF ;FISM,M_ 5Z :5[xI, VMG,F>G ;[XG </li>

                                                <li><i class="pe-2">✓</i>VMG W :5M8 ÔÇí0Fp8 ;MÿI]XG</li>

                                                <li><i class="pe-2">✓</i>VMO,F.G S,F; GF lJnFY›VM G[ S,F; SIF" AFN VMG,F>G S,F; DF\

                                                    vL

                                                    V[g8=L

                                                    ZC[X[ </li>

                                                <li><i class="pe-2">✓</i>,F>O8F>D ;5M8"</li>

                                                <li><i class="pe-2">✓</i>VMO,F.G S,F; DF\ VFJGFZ lJnFY›VM DF8[ ZC[JFHDJFGL ;]lJWF

                                                        SZL VF5JFDF\ VFJX[ </li>

                                                <li><i class="pe-2">✓</i>lZlJHG DF8[ vL VMG,F>G S,F; V[g8=L TYF Z[SMl0©U D/X[</li>

                                            </ul>

                                        </div>

                                        <a href="#" class="text-decoration-none"><button

                                                class="btn offline-class-btn">JW]

                                                DFlCTL

                                                DF8[ SM, SZM</button></a>

                                </div>

                            </div>

                        </div>

    

                        <div class="col-12">

                            <div class="row d-flex align-items-center">

                                <div class="col-xl-6 col-lg-6 col-md-12">

                                    <img src="{{ asset('images/home_image/Offline class image.png') }}"

                                        alt="" class="img-fluid slider-image">

                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12">

                                    <div class="offline-heading">VMO<,F.G S,F; GL ;]lJWF</div>

                                            <div class="offline-content">

                                                <ul>

                                                    <li> <i class="pe-2">✓</i>;JFZ[ <span class="list-number-gujtext">9</span> YL

                                                        ;F\H[

                                                        <span class="list-number-gujtext">5</span> S,FS ;]WL

                                                        <span class="list-number-gujtext">2</span> lNJ; S,F;

                                                    </li>

                                                    <li><i class="pe-2">✓</i>DGL D[G[HD[g8 TYF ;FISM,M_ 5Z :5[xI, VMG,F>G ;[XG </li>

                                                    <li><i class="pe-2">✓</i>VMG W :5M8 ÔÇí0Fp8 ;MÿI]XG</li>

                                                    <li><i class="pe-2">✓</i>VMO,F.G S,F; GF lJnFY›VM G[ S,F; SIF" AFN VMG,F>G S,F;

                                                        DF\

                                                        vL

                                                        V[g8=L

                                                        ZC[X[ </li>

                                                    <li><i class="pe-2">✓</i>,F>O8F>D ;5M8"</li>

                                                    <li><i class="pe-2">✓</i>VMO,F.G S,F; DF\ VFJGFZ lJnFYVM DF8[ ZC[JFHDJFGL

                                                            ;]lJWF SZL VF5JFDF\ VFJX[ </li>

                                                    <li><i class="pe-2">✓</i>lZlJHG DF8[ vL VMG,F>G S,F; V[g8=L TYF Z[SMl0©U D/X[

                                                    </li>

                                                </ul>

                                            </div>

                                            <a href="#" class="text-decoration-none"><button

                                                    class="btn offline-class-btn">JW]

                                                    DFlCTL

                                                    DF8[ SM, SZM</button></a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="d-flex position-absolute slider-buttons-main">

                            <button class="custom-prev-2">

                                <img src="{{ asset('images/home_image/Slider-left arrow.png') }}" alt="" width="22px"

                                    height="22px">

                            </button>

                        </div>

                        <div class="d-flex position-absolute slider-buttons-main-2">

                            <button class="custom-next-2">

                                <img src="{{ asset('images/home_image/slider right arrow.png') }}" alt="" width="22px"

                                    height="22px">

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- offline class section -->



    <!-- online class section -->



    <section>

        <div class="container online-main px-xl-3 px-lg-5 px-md-5 position-relative">

            <div class="row slider3 d-xl-flex px-3 d-lg-flex d-md-flex">

                <div class="col-12">

                    <div class="row d-flex align-items-center">

                        <div class="col-xl-6 col-lg-6 col-md-12">

                            <div class="online-heading">VMG<,F.G S,F; GL ;]lJWF</div>

                                    <div class="offline-content">

                                        <ul>

                                            <li> <i class="pe-2">✓</i>VMG,F>G S,F; S], 7 lNJ; GF ZC[X[ H[DF\ NZZMH 2 S,FS GF U}U, DL8

                                                YL ,F>J S,F; ZC[X[</li>

                                            <li><i class="pe-2">✓</i>VMG,F>G S,F; GM ;DI A[R D]HA ;JFZ[ VYJF ;F\H[ ZC[X[ </li>

                                            <li><i class="pe-2">✓</i>VMG W :5M8 ÔÇí0Fp8 ;MÿI]XG</li>

                                            <li><i class="pe-2">✓</i>VMG,F.G S,F; GF lJnFY›VM G[ S,F; SIF" AFN ElJqI DF\ YTF VMO,F>G

                                                S,F; DF\ vL V[g8=L ZC[X[</li>

                                            <li><i class="pe-2">✓</i>,F>O8F>D ;5M8</li>

                                            <li><i class="pe-2">✓</i>lZlJHG DF8[ vL VMG,F>G S,F; V[g8=L TYF Z[SMl0©U D/X[</li>

                                        </ul>

                                    </div>

                                    <a href="#" class="text-decoration-none"><button

                                            class="btn offline-class-btn mb-3">JW]

                                            DFlCTL

                                            DF8[ SM, SZM</button></a>

                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12">

                                <img src="{{ asset('images/home_image/Online class.png') }}" alt=""

                                    class="img-fluid slider-image">

                            </div>

                        </div>

                    </div>

                    <div class="col-12">

                        <div class="row d-flex align-items-center">

                            <div class="col-xl-6 col-lg-6 col-md-12">

                                <div class="online-heading">VMG<,F.G S,F; GL ;]lJWF</div>

                                        <div class="offline-content">

                                            <ul>

                                                <li> <i class="pe-2">✓</i>VMG,F>G S,F; S], 7 lNJ; GF ZC[X[ H[DF\ NZZMH 2 S,FS GF U}U,

                                                    DL8

                                                    YL ,F>J S,F; ZC[X[</li>

                                                <li><i class="pe-2">✓</i>VMG,F>G S,F; GM ;DI A[R D]HA ;JFZ[ VYJF ;F\H[ ZC[X[ </li>

                                                <li><i class="pe-2">✓</i>VMG W :5M8 ÔÇí0Fp8 ;MÿI]XG</li>

                                                <li><i class="pe-2">✓</i>VMG,F.G S,F; GF lJnFY›VM G[ S,F; SIF" AFN ElJqI DF\ YTF

                                                    VMO,F>G

                                                    S,F; DF\ vL V[g8=L ZC[X[</li>

                                                <li><i class="pe-2">✓</i>,F>O8F>D ;5M8</li>

                                                <li><i class="pe-2">✓</i>lZlJHG DF8[ vL VMG,F>G S,F; V[g8=L TYF Z[SMl0©U D/X[</li>

                                            </ul>

                                        </div>

                                        <a href="#" class="text-decoration-none"><button

                                                class="btn offline-class-btn mb-3">JW]

                                                DFlCTL

                                                DF8[ SM, SZM</button></a>

                                </div>



                                <div class="col-xl-6 col-lg-6 col-md-12">

                                    <img src="{{ asset('images/home_image/Online class.png') }}" alt=""

                                        class="img-fluid slider-image">

                                </div>

                            </div>

                        </div>



                        <div class="col-12">

                            <div class="row d-flex align-items-center">

                                <div class="col-xl-6 col-lg-6 col-md-12">

                                    <div class="online-heading">VMG<,F.G S,F; GL ;]lJWF</div>

                                            <div class="offline-content">

                                                <ul>

                                                    <li> <i class="pe-2">✓</i>VMG,F>G S,F; S], 7 lNJ; GF ZC[X[ H[DF\ NZZMH 2 S,FS GF

                                                        U}U,

                                                        DL8

                                                        YL ,F>J S,F; ZC[X[</li>

                                                    <li><i class="pe-2">✓</i>VMG,F>G S,F; GM ;DI A[R D]HA ;JFZ[ VYJF ;F\H[ ZC[X[

                                                    </li>

                                                    <li><i class="pe-2">✓</i>VMG W :5M8 ÔÇí0Fp8 ;MÿI]XG</li>

                                                    <li><i class="pe-2">✓</i>VMG,F.G S,F; GF lJnFY›VM G[ S,F; SIF" AFN ElJqI DF\ YTF

                                                        VMO,F>G

                                                        S,F; DF\ vL V[g8=L ZC[X[</li>

                                                    <li><i class="pe-2">✓</i>,F>O8F>D ;5M8</li>

                                                    <li><i class="pe-2">✓</i>lZlJHG DF8[ vL VMG,F>G S,F; V[g8=L TYF Z[SMl0©U D/X[

                                                    </li>

                                                </ul>

                                            </div>

                                            <a href="#" class="text-decoration-none"><button

                                                    class="btn offline-class-btn mb-3">JW]

                                                    DFlCTL

                                                    DF8[ SM, SZM</button></a>

                                    </div>



                                    <div class="col-xl-6 col-lg-6 col-md-12">

                                        <img src="{{ asset('images/home_image/Online class.png') }}" alt=""

                                            class="img-fluid slider-image">

                                    </div>

                                </div>

                            </div>

                        </div>

                    <div class="d-flex position-absolute slider-buttons-main">

                        <button class="custom-prev-3">

                            <img src="{{ asset('images/home_image/Slider-left arrow.png') }}" alt="">

                        </button>

                    </div>

                    <div class="d-flex position-absolute slider-buttons-main-2">

                        <button class="custom-next-3">

                            <img src="{{ asset('images/home_image/slider right arrow.png') }}" alt="">

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- online class section -->









    <!-- Ame tamne shikhvshu section -->



    <section class="atsc-main">

        <div class="container">

            <div class="atsc-head">VD[ TDG[ XLBJX]\</div>

            <div class="row d-flex justify-content-center">

                <div class="col-xl col-lg col-md-4 col-sm-4 col-4">

                    <div class="d-flex justify-content-center"><img src="{{ asset('images/home_image/Atsc1.png') }}"

                            alt="" class="img-fluid">

                    </div>

                    <div class="atsc-text-content text-center">RF8" ZL™0U</div>

                </div>

                <div class="col-xl col-lg col-md-4 col-sm-4 col-4">

                    <div class="d-flex justify-content-center"><img src="{{ asset('images/home_image/Atsc2.png') }}"

                            alt="" class="img-fluid">

                    </div>

                    <div class="atsc-text-content text-center">VM5XG R[G ZL™0U</div>

                </div>

                <div class="col-xl col-lg col-md-4 col-sm-4 col-4">

                    <div class="d-flex justify-content-center"><img src="{{ asset('images/home_image/Atsc3.png') }}"

                            alt="" class="img-fluid">

                    </div>

                    <div class="atsc-text-content text-center">DGL í lZ:S D[G[HD[g8</div>

                </div>

                <div class="col-xl col-lg col-md-4 col-sm-4 col-4" style="text-wrap: nowrap;">

                    <div class="d-flex justify-content-center"><img src="{{ asset('images/home_image/Atsc4.png') }}"

                            alt="" class="img-fluid">

                    </div>

                    <div class="atsc-text-content text-center">8=[™0U ;FISM,M_</div>

                </div>

                <div class="col-xl col-lg col-md-4 col-sm-4 col-4">

                    <div class="d-flex justify-content-center"><img src="{{ asset('images/home_image/Atsc5.png') }}"

                            alt="" class="img-fluid">

                    </div>

                    <div class="atsc-text-content text-center">DFS¢8 :S[d;</div>

                </div>

            </div>

        </div>

    </section>



    <!-- Ame tamne shikhvshu section -->





    <!-- viswbhar section -->



    <section class="v-main">

        <div class="v-mini-head">,MSM VDFZF 5Z lJÆF; SZ[ K[</div>

        <div class="v-main-head">lJÆEZDF\ ,FBM lJnFY›VM</div>

        <div class="container v-main-content">X[ZA•ZGF pNIYL X[ZA•ZGF J[5FZ DF8[ VF lXBFp DF6;GL DFU"NlX"SFV [ <br

                class="breaking-line"> GJF J[5FZ BMÿIF K[</div>

        <div class="container">

            <div class="d-xl-flex d-lg-flex d-none justify-content-center">

                <div class="mx-2">

                    <a href="#" class="text-decoration-none"><button class="btn v-btn1">

                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"

                                viewBox="0 0 25 24" fill="none">

                                <path

                                    d="M15.5 10L20.0528 7.72361C20.7177 7.39116 21.5 7.87465 21.5 8.61803V15.382C21.5 16.1253 20.7177 16.6088 20.0528 16.2764L15.5 14M5.5 18H13.5C14.6046 18 15.5 17.1046 15.5 16V8C15.5 6.89543 14.6046 6 13.5 6H5.5C4.39543 6 3.5 6.89543 3.5 8V16C3.5 17.1046 4.39543 18 5.5 18Z"

                                    stroke="#333333" stroke-width="2" stroke-linecap="round"

                                    stroke-linejoin="round" />

                            </svg>

                            TDFZF 7FGG]\ 5ZL16

                            SZM</button></a>

                </div>

                <div class="mx-2">

                    <a href="#" class="text-decoration-none"><button class="btn v-btn1">

                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"

                                viewBox="0 0 25 24" fill="none">

                                <path

                                    d="M15.5 10L20.0528 7.72361C20.7177 7.39116 21.5 7.87465 21.5 8.61803V15.382C21.5 16.1253 20.7177 16.6088 20.0528 16.2764L15.5 14M5.5 18H13.5C14.6046 18 15.5 17.1046 15.5 16V8C15.5 6.89543 14.6046 6 13.5 6H5.5C4.39543 6 3.5 6.89543 3.5 8V16C3.5 17.1046 4.39543 18 5.5 18Z"

                                    stroke="#333333" stroke-width="2" stroke-linecap="round"

                                    stroke-linejoin="round" />

                            </svg>

                            8Õ]8MZLI, lJl0VMh</button></a>

                </div>

                <div class="mx-2">

                    <a href="#" class="text-decoration-none"><button class="btn v-btn1">

                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"

                                viewBox="0 0 25 24" fill="none">

                                <path

                                    d="M15.5 10L20.0528 7.72361C20.7177 7.39116 21.5 7.87465 21.5 8.61803V15.382C21.5 16.1253 20.7177 16.6088 20.0528 16.2764L15.5 14M5.5 18H13.5C14.6046 18 15.5 17.1046 15.5 16V8C15.5 6.89543 14.6046 6 13.5 6H5.5C4.39543 6 3.5 6.89543 3.5 8V16C3.5 17.1046 4.39543 18 5.5 18Z"

                                    stroke="#333333" stroke-width="2" stroke-linecap="round"

                                    stroke-linejoin="round" />

                            </svg>

                            ,F>J SMD[g8=L</button></a>

                </div>

            </div>

        </div>



        <section class="d-xl-none d-lg-none d-flex">

            <div class="container">

                <div class="row slider4">

                    <div class="col-12 mx-2">

                        <a href="#" class="text-decoration-none"><button class="btn v-btn1">

                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"

                                    viewBox="0 0 25 24" fill="none">

                                    <path

                                        d="M15.5 10L20.0528 7.72361C20.7177 7.39116 21.5 7.87465 21.5 8.61803V15.382C21.5 16.1253 20.7177 16.6088 20.0528 16.2764L15.5 14M5.5 18H13.5C14.6046 18 15.5 17.1046 15.5 16V8C15.5 6.89543 14.6046 6 13.5 6H5.5C4.39543 6 3.5 6.89543 3.5 8V16C3.5 17.1046 4.39543 18 5.5 18Z"

                                        stroke="#333333" stroke-width="2" stroke-linecap="round"

                                        stroke-linejoin="round" />

                                </svg>

                                TDFZF 7FGG]\ 5ZL16

                                SZM</button></a>

                    </div>

                    <div class="col-12 mx-2">

                        <a href="#" class="text-decoration-none"><button class="btn v-btn1">

                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"

                                    viewBox="0 0 25 24" fill="none">

                                    <path

                                        d="M15.5 10L20.0528 7.72361C20.7177 7.39116 21.5 7.87465 21.5 8.61803V15.382C21.5 16.1253 20.7177 16.6088 20.0528 16.2764L15.5 14M5.5 18H13.5C14.6046 18 15.5 17.1046 15.5 16V8C15.5 6.89543 14.6046 6 13.5 6H5.5C4.39543 6 3.5 6.89543 3.5 8V16C3.5 17.1046 4.39543 18 5.5 18Z"

                                        stroke="#333333" stroke-width="2" stroke-linecap="round"

                                        stroke-linejoin="round" />

                                </svg>

                                8Õ]8MZLI, lJl0VMh</button></a>

                    </div>

                    <div class="col-12 mx-2">

                        <a href="#" class="text-decoration-none"><button class="btn v-btn1">

                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"

                                    viewBox="0 0 25 24" fill="none">

                                    <path

                                        d="M15.5 10L20.0528 7.72361C20.7177 7.39116 21.5 7.87465 21.5 8.61803V15.382C21.5 16.1253 20.7177 16.6088 20.0528 16.2764L15.5 14M5.5 18H13.5C14.6046 18 15.5 17.1046 15.5 16V8C15.5 6.89543 14.6046 6 13.5 6H5.5C4.39543 6 3.5 6.89543 3.5 8V16C3.5 17.1046 4.39543 18 5.5 18Z"

                                        stroke="#333333" stroke-width="2" stroke-linecap="round"

                                        stroke-linejoin="round" />

                                </svg>

                                ,F>J SMD[g8=L</button></a>

                    </div>

                </div>

            </div>

        </section>



        <div class="container">

            <video class="video"  poster="{{ asset('images/home_image/Videoplayer img.png') }}" controls style="border-radius:7px">

                <source src="movie.mp4" type="video/mp4">

                <source src="movie.ogg" type="video/ogg">

            </video>

        </div>



        <div>



        </div>



    </section>



    <!-- viswbhar section -->











    <!-- Slider -->



    <section class="slider-bg">

        <div class="container position-relative">

            <div class="d-xl-none d-lg-none d-md-none d-flex">

                <img src="{{ asset('images/home_image/slider logo icon-2.1.png') }}" alt=""

                    class="img-fluid">

            </div>

            <div class="d-xl-flex d-lg-flex d-md-flex d-none">

                <img src="{{ asset('images/home_image/Slider logo img-1.png') }}" alt="" class="img-fluid">

            </div>

            <div class="row slider d-flex">

                <div class="col-md-4">

                    <div class="details">

                        <div class="d-flex justify-content-center slider-main-img"><img

                                src="{{ asset('images/home_image/Slider image.png') }}" alt="slider-img-1">

                        </div>

                        <p class="slider-text-1">36LAWL AFATM V[JL CTL S[ H[ BAZ G CTL

                            5Z\T] VF 8=[™GUDF\ DFZL AWL H E},M ;]WZLP

                            8=[™GU B]A D• ;FY[ GM,[H D[/jI]\P </p>

                        <div class="slider-text-2">ÔNL5™;CP V[DP 5ZDFZ</div>

                        <div class="slider-text-2">

                            <span>- </span>VDNFJFN

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="details">

                        <div class="d-flex justify-content-center slider-main-img"><img

                                src="{{ asset('images/home_image/Slider image.png') }}" alt="slider-img-1">

                        </div>

                        <p class="slider-text-1">36LAWL AFATM V[JL CTL S[ H[ BAZ G CTL

                            5Z\T] VF 8=[™GUDF\ DFZL AWL H E},M ;]WZLP

                            8=[™GU B]A D• ;FY[ GM,[H D[/jI]\P </p>

                        <div class="slider-text-2">ÔNL5™;CP V[DP 5ZDFZ</div>

                        <div class="slider-text-2">

                            <span>- </span>VDNFJFN

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="details">

                        <div class="d-flex justify-content-center slider-main-img"><img

                                src="{{ asset('images/home_image/Slider image.png') }}" alt="slider-img-1">

                        </div>

                        <p class="slider-text-1">36LAWL AFATM V[JL CTL S[ H[ BAZ G CTL

                            5Z\T] VF 8=[™GUDF\ DFZL AWL H E},M ;]WZLP

                            8=[™GU B]A D• ;FY[ GM,[H D[/jI]\P </p>

                        <div class="slider-text-2">ÔNL5™;CP V[DP 5ZDFZ</div>

                        <div class="slider-text-2">

                            <span>- </span>VDNFJFN

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="details">

                        <div class="d-flex justify-content-center slider-main-img"><img

                                src="{{ asset('images/home_image/Slider image.png') }}" alt="slider-img-1">

                        </div>

                        <p class="slider-text-1">36LAWL AFATM V[JL CTL S[ H[ BAZ G CTL

                            5Z\T] VF 8=[™GUDF\ DFZL AWL H E},M ;]WZLP

                            8=[™GU B]A D• ;FY[ GM,[H D[/jI]\P </p>

                        <div class="slider-text-2">ÔNL5™;CP V[DP 5ZDFZ</div>

                        <div class="slider-text-2">

                            <span>- </span>VDNFJFN

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="details">

                        <div class="d-flex justify-content-center slider-main-img"><img

                                src="{{ asset('images/home_image/Slider image.png') }}" alt="slider-img-1">

                        </div>

                        <p class="slider-text-1">36LAWL AFATM V[JL CTL S[ H[ BAZ G CTL

                            5Z\T] VF 8=[™GUDF\ DFZL AWL H E},M ;]WZLP

                            8=[™GU B]A D• ;FY[ GM,[H D[/jI]\P </p>

                        <div class="slider-text-2">ÔNL5™;CP V[DP 5ZDFZ</div>

                        <div class="slider-text-2">

                            <span>- </span>VDNFJFN

                        </div>

                    </div>

                </div>

            </div>



            <div class="d-flex position-absolute buttons-main">

                <button class="custom-prev">

                    <img src="{{ asset('images/home_image/Slider-left arrow.png') }}" alt="">

                </button>

            </div>

            <div class="d-flex justify-content-end position-absolute buttons-main-2">

                <button class="custom-next">

                    <img src="{{ asset('images/home_image/slider right arrow.png') }}" alt="">

                </button>

            </div>





            <div class="slider-right-img d-flex justify-content-end d-xl-none d-lg-none d-md-none d-flex">

                <img src="{{ asset('images/home_image/slider logo icon-2.2.png') }}" alt=""

                    class="img-fluid">

            </div>

            <div class="slider-right-img d-flex justify-content-end d-xl-flex d-lg-flex d-md-flex d-none">

                <img src="{{ asset('images/home_image/Slider logo img-2.png') }}" alt="" class="img-fluid">

            </div>

        </div>

    </section>



    <!-- Slider -->









    <!-- Faq section -->



    <div class="accordion container">

        <h1 class="faq-heading">TDFZF ;JF,M GF HJFA </h1>

        <div class="accordion-item">

            <input type="checkbox" id="accordion1">

            <label for="accordion1" class="accordion-item-title"><span class="icon"></span>

                <div class="d-flex align-items-baseline"><span class="faq-accordian-number me-3">1.</span>VMO,F.G A[R

                    SZJF ,[58M5 S[ SMdI]8Z ;[8 V5 GL SF\> H~Z 50[ BZLmm</div>

            </label>

            <div class="accordion-item-desc">GF4 SF¬%I]8Z S[ ,[58M5 GL XLBJF DF8[ SM> H~Z GYLP TD[ :DF8"OMG YL 56

                SFD

                SZL XSM KMP VG[ •[ VF5GL 5F;[ ,[58M5 CMI TM S,F; SZTL JBT[ XLBJF DF8[ ,> G[ VFJL XSM KMP</div>

        </div>



        <div class="accordion-item">

            <input type="checkbox" id="accordion2">

            <label for="accordion2" class="accordion-item-title"><span class="icon"></span>

                <div class="d-flex align-items-baseline"><span class="faq-accordian-number me-3">2.</span>+6 lNJ; GL

                    VMO,F.G A[R DF\ TD[ X]\X]\ XLBJXMm</div>

            </label>

            <div class="accordion-item-desc">GF4 SF¬%I]8Z S[ ,[58M5 GL XLBJF DF8[ SM> H~Z GYLP TD[ :DF8"OMG YL

                56 SFD SZL XSM KMP VG[ •[ VF5GL 5F;[ ,[58M5 CMI TM S,F; SZTL JBT[ XLBJF DF8[ ,> G[ VFJL XSM KMP

            </div>

        </div>



        <div class="accordion-item">

            <input type="checkbox" id="accordion3">

            <label for="accordion3" class="accordion-item-title"><span class="icon"></span>

                <div class="d-flex align-items-baseline"><span class="faq-accordian-number me-3">3.</span>+6 lNJ; DF\

                    AW]\ VFJ0L

                    HX[mm</div>

            </label>

            <div class="accordion-item-desc">GF4 SF¬%I]8Z S[ ,[58M5 GL XLBJF DF8[ SM> H~Z GYLP TD[ :DF8"OMG YL

                56 SFD SZL XSM KMP VG[ •[ VF5GL 5F;[ ,[58M5 CMI TM S,F; SZTL JBT[ XLBJF DF8[ ,> G[ VFJL XSM KMP

            </div>

        </div>



        <div class="accordion-item">

            <input type="checkbox" id="accordion4">

            <label for="accordion4" class="accordion-item-title"><span class="icon"></span>

                <div class="d-flex align-items-baseline"><span class="faq-accordian-number me-3">4.</span>+6 lNJ; DF\

                    GCš VFJ0[ TM

                    X]\mm</div>

            </label>

            <div class="accordion-item-desc">GF4 SF¬%I]8Z S[ ,[58M5 GL XLBJF DF8[ SM> H~Z GYLP TD[ :DF8"OMG YL

                56 SFD SZL XSM KMP VG[ •[ VF5GL 5F;[ ,[58M5 CMI TM S,F; SZTL JBT[ XLBJF DF8[ ,> G[ VFJL XSM KMP

            </div>

        </div>



        <div class="accordion-item">

            <input type="checkbox" id="accordion5">

            <label for="accordion5" class="accordion-item-title"><span class="icon"></span>

                <div class="d-flex align-items-baseline"><span class="faq-accordian-number me-3">5.</span>AL• ,MSM ૩

                    DlCGF ;]WL XLBJ[ VG[ TD[ ૩ lNJ; H VFJ]\ S[Dm</div>

            </label>

            <div class="accordion-item-desc">GF4 SF¬%I]8Z S[ ,[58M5 GL XLBJF DF8[ SM> H~Z GYLP TD[ :DF8"OMG YL

                56 SFD SZL XSM KMP VG[ •[ VF5GL 5F;[ ,[58M5 CMI TM S,F; SZTL JBT[ XLBJF DF8[ ,> G[ VFJL XSM KMP

            </div>

        </div>



        <div class="accordion-item">

            <input type="checkbox" id="accordion6">

            <label for="accordion6" class="accordion-item-title"><span class="icon"></span>

                <div class="d-flex align-items-baseline"><span class="faq-accordian-number me-3">6.</span>VMO,F.G S,F;

                    DF\ AL_ S>

                    ;]lJWFVM VF5XMm</div>

            </label>

            <div class="accordion-item-desc">GF4 SF¬%I]8Z S[ ,[58M5 GL XLBJF DF8[ SM> H~Z GYLP TD[ :DF8"OMG YL

                56 SFD SZL XSM KMP VG[ •[ VF5GL 5F;[ ,[58M5 CMI TM S,F; SZTL JBT[ XLBJF DF8[ ,> G[ VFJL XSM KMP

            </div>

        </div>



        <div class="accordion-item">

            <input type="checkbox" id="accordion7">

            <label for="accordion7" class="accordion-item-title"><span class="icon"></span>

                <div class="d-flex align-items-baseline"><span class="faq-accordian-number me-3">7.</span>U]HZFT DF\

                    S>

                    HuIF V[

                    TDFZF S,F; RF,[ K[mm</div>

            </label>

            <div class="accordion-item-desc">GF4 SF¬%I]8Z S[ ,[58M5 GL XLBJF DF8[ SM> H~Z GYLP TD[ :DF8"OMG YL

                56 SFD SZL XSM KMP VG[ •[ VF5GL 5F;[ ,[58M5 CMI TM S,F; SZTL JBT[ XLBJF DF8[ ,> G[ VFJL XSM KMP

            </div>

        </div>

    </div>



    <!-- Faq section -->



    <!-- Video Section -->

    <div class="container accordion">

        <iframe width="100%" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;border-radius:7px" src="https://www.youtube.com/embed/b-K9-RcvE8A?si=CbYV5kW_ePFRjZ2h"

            title="YouTube video player" frameborder="0"

            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"

            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>

        </iframe>

        <div class="mt-3">

            <a href="{{ route('course.register.form') }}" class="course-btn fw-bold"

                target="_blank">

                SM;" BZLNM 

            </a>
            &nbsp; &nbsp; 
              <a href="{{ route('student_course_purchase_test') }}" class="course-btn fw-bold"

                target="_blank">

                VeIF;@D IMHGF 

            </a>

        </div>

    </div>

    <!-- Video Section -->



    <!-- join section -->





    <form id="joinForm">

        @csrf

        <section class="join-bg">

            <div class="join-heading">

                :8MS GL AWL H V50[8 DF8[ <br class="breaking-rule"> •[0FI[,F ZCM

            </div>



            <div id="joinFormSuccess">

                <div class="d-flex justify-content-center">

                    <div class="alert alert-success text-center joinMessage fs-5"

                        style="width: 49.6%;padding:10px;font-family: gujFont2"></div>

                </div>

            </div>



            <div class="container-fluid">

                <div class="field" id="searchform">

                    <input type="text" id="searchterm" name="mobile_number_or_email"

                        placeholder="DMAF., G\AZ S[ .D[., V[0=[; ,BM" />

                    <button type="submit" id="search" class="px-2">Join Now</button>

                </div>

                <div id="joinFormError" style="display:none;">

                    <div class="error joinError text-center" style="font-family: gujFont2"></div>

                </div>

            </div>

        </section>

    </form>



    <!-- join section -->





    @php

        use Illuminate\Support\Carbon;

    @endphp



    @foreach ($events as $event)

        <script>

            var startDate_{{ $event->id }} = new Date(

                "{{ Carbon::parse($event->event_start_date)->setTimezone('Asia/Kolkata')->toIso8601String() }}").getTime();



            var countdown_{{ $event->id }} = setInterval(function() {

                var now = new Date().getTime();

                var distance = startDate_{{ $event->id }} - now;



                if (distance < 0) {

                    clearInterval(countdown_{{ $event->id }});

                    return;

                }



                var days = Math.floor(distance / (1000 * 60 * 60 * 24));

                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

                var seconds = Math.floor((distance % (1000 * 60)) / 1000);



                document.getElementById('days_{{ $event->id }}').innerHTML = days;

                document.getElementById('hours_{{ $event->id }}').innerHTML = ('0' + hours).slice(-2);

                document.getElementById('minutes_{{ $event->id }}').innerHTML = ('0' + minutes).slice(-2);

                document.getElementById('seconds_{{ $event->id }}').innerHTML = ('0' + seconds).slice(-2);



            }, 1000);

        </script>

    @endforeach



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    <script>

        document.addEventListener("DOMContentLoaded", function() {

            const accordionItems = document.querySelectorAll('.accordion-item');

        

            accordionItems.forEach(function(item) {

              const checkbox = item.querySelector('input[type="checkbox"]');

              checkbox.addEventListener('change', function() {

                if (this.checked) {

                  // Close all other accordions

                  accordionItems.forEach(function(otherItem) {

                    if (otherItem !== item) {

                      otherItem.querySelector('input[type="checkbox"]').checked = false;

                    }

                  });

                }

              });

            });

          });

    

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

                            $('#joinFormSuccess').show().find('.joinMessage').html(response

                                .success_detail).css('color', 'green');

                            setTimeout(function() {

                                $('#joinFormSuccess').hide();

                            }, 6000);

                        }

                    },

                    error: function(xhr, status, error) {

                        var errors = xhr.responseJSON;

                        if (errors && errors.error) {

                            $('#joinFormError').show().find('.joinError').html(errors.error)

                                .css('color', 'red');

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="{{ asset('js/home.js') }}"></script>











@endsection



