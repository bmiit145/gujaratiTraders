@extends('header-footer')

@section('content')



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<meta name="csrf-token" content="{{ csrf_token() }}">

    <!doctype html>

    <html lang="en">



    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cart</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"

            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"

            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="

            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="{{ asset('css/home.css') }}">



        <style>

            input::-webkit-input-placeholder {

                font-family: gujFont2;

            }



            .form-control:focus {

                color: var(--bs-body-color);

                background-color: var(--bs-body-bg);

                border-color: #86b7fe;

                outline: 0;

                box-shadow: none;

            }



            .form-control {

                border: none

            }



            .coupen:focus {

                color: var(--bs-body-color);

                background-color: var(--bs-body-bg);

                border-color: #86b7fe;

                outline: 0;

                box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, .25);

            }

        </style>



    </head>



    <body>







        <div class="container py-5 px-3 card-total-bg">

            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

                    <div class="d-flex justify-content-center">

                     

                        <img src="{{ asset('images/course_image/' . $data->course_image) }}" class="img-fluid">

                    </div>

                </div>

                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 px-0 mx-auto">



                    <form action="{{ route('process')}}" method="post"> 
                        @csrf
                        <div class="card">

                            <h4 class="p-3 text-bg-success" style="font-family: gujFont2;">SF8" 8M8,</h4>

                            <div class="row pt-3 pb-0 px-3">

                                <div class="col-4 fs-5" style="font-family: gujFont2;">

                                    5[8F8M8,

                                </div>

                                <div class="col-8 fs-5">

                                    <input type="hidden" name="id" value="{{$reg_id}}">

                                    <input type="hidden" name="plan" value="{{$data->course_name}}" id="plan" class="form-control" readonly>

                                    <input type="text" value="₹{{ $data->course_rate }}" id="courec_rate" name="course_rate" class="form-control" readonly>

                                </div>

                            </div>

                            <hr>

                            <div class="row pb-0 px-3">

                                <div class="col-4 fs-5" style="font-family: gujFont2;">

                                    JCF6 5lZJCG

                                </div>

                                <div class="col-8 fs-5" style="font-family: gujFont2;">

                                    DOT lX™5UP <br>

                                </div>

                            </div>

                            <hr>

                            <div class="row pt-0 px-3">

                                <div class="col-4 fs-5" style="font-family: gujFont2;">

                                    S],

                                </div>

                                <div class="col-8 fs-5">

                                    <input type="text" value="₹{{ $data->course_rate }}" id="total_rate" class="form-control" readonly>

                                </div>

                            </div>

                            <hr>

                            <div class="row pt-0 pb-3 px-3 d-flex align-items-center">

                                <div class="col-4 fs-5" style="font-family: gujFont2;">

                                    S}5G SM0 NFB, SZM

                                </div>

                                <div class="col-8 fs-5">

                                    <div class="input-group border" style="border-radius: 7px">

                                        <input type="text" placeholder="S}5G SM0" class="form-control coupen border" id="cupan_code">

                                        <a class="btn btn-success cupan_code" style="font-family: gujFont2">VZ_

                                            SZM</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="d-flex justify-content-end mt-4">

                            <button class="btn btn-success px-5 py-2 ms-auto fs-5"  style="font-family: gujFont2;">CD6F\ H

                                BZLNM</button>

                        </div>

                    </form>

                </div>

            </div>



        </div>







        <!-- <script src="./script.js"></script> -->

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"

            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

        </script>

    </body>



    </html>



    <script>

        $(document).ready(function() {



            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

            });



            $('.cupan_code').on('click', function() {

                var cupan_code = $('#cupan_code').val();

                console.log(cupan_code);

             

                $.ajax({

                    url: "{{ url('cupancode_mach') }}",

                    type: "post",

                    data: {

                        cupan_code: cupan_code, // Use from_date instead of fromDate

                       

                    },

                    success: function(response) {

                        console.log(response, 'response');

                        if (response === 'code is expired') {

                                alert('The coupon code is expired.');

                            } else {

                                // Assuming the discount_amount is returned in percentage format like "100%"

                                var discount = parseFloat(response.discount_amount) / 100;

                                var courseRate = parseFloat($('#courec_rate').val().replace('₹', ''));

                                var discountedRate = courseRate - (courseRate * discount);



                                var total_rate = parseFloat($('#total_rate').val().replace('₹', ''));

                                var discountedR = total_rate - (total_rate * discount);

                                // Update the value of the course rate input field with the discounted rate

                                $('#courec_rate').val('₹' + discountedRate.toFixed(2));

                                $('#total_rate').val('₹' + discountedR.toFixed(2));

                            }

                    },

                    error: function(error) {

                        console.log(error.responseText);

                    }

                });

            });

        });

    </script>

@endsection

