@extends('header-footer-english')

@section('content')

<!doctype html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gujarati Traders</title>

{{-- 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Custom CSS --> --}}

    {{-- <link rel="stylesheet" href="{{ asset('css/home_emg.css') }}"> --}}

    <!-- Country Selector CSS -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-countryselector/1.0.0/jquery.countryselector.min.css"

        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css"

        rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    <style>

        input:focus-visible {

            outline: none;

        }



        .guj-label-register {

            font-family: gujFont2;

            font-size: 20px;

        }



        input::-webkit-outer-spin-button,

        input::-webkit-inner-spin-button {

            -webkit-appearance: none;

            margin: 0;

        }



        .form-control:focus {

            border: 1px solid #ddd;

            outline: 0;

            box-shadow: none;

            border-radius: 0;

        }



        .iti {

            width: 100%;

        }



        #profile_image[type="file"] {

            color: transparent;

            width: 35%;

            margin-left: 5px;

        }

    </style>



</head>



<body class="bg-light">



    <div class="col-12" style="margin-top: 100px;margin-bottom:100px">

        <!-- Register Form -->

        <h2>

            <div class="contact-register-form-heading">

               Registration form

            </div>

        </h2>



        <form action="{{ route('store_course_register_user_english') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="container">

                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                        <label for="" class="guj-label-register pt-3">Full Name</label>

                        <input type="text" name="full_name" value="{{ old('full_name') }}" class="w-100 p-2 border">

                        @error('full_name')

                            <div class="text-danger guj-label-register">{{ $message }}</div>

                        @enderror



                        <label for="country" class="form-label guj-label-register mt-3 mb-0">Country</label>

                        <select id="country" name="country" class="w-100 p-2 border">

                            <option value="">-- Choose Country --</option>

                        </select>

                        @error('country')

                            <div class="text-danger guj-label-register">{{ $message }}</div>

                        @enderror



                        <label for="" class="guj-label-register mt-3">Street address</label>

                        <input type="text" name="street_address" value="{{ old('street_address') }}"

                            class="w-100 p-2 border">

                        @error('street_address')

                            <div class="text-danger guj-label-register">{{ $message }}</div>

                        @enderror



                        <label for="" class="guj-label-register mt-3">City</label>

                        <input type="text" name="city" value="{{ old('city') }}" class="w-100 p-2 border">

                        @error('city')

                            <div class="text-danger guj-label-register">{{ $message }}</div>

                        @enderror



                        <div class="d-xl-flex d-lg-flex d-md-flex d-sm-none d-none align-items-center mt-3">

                            <input type="checkbox" value="1" name="terms_and_conditions"

                                style="width: 20px;

                                height: 20px;" class="me-3">

                            <label class="guj-label-register mb-0"><a href="{{ route('term_and_condition') }}">Term and Condition</a></label>

                        </div>

                        @error('terms_and_conditions')

                            <div class="text-danger guj-label-register">{{ $message }}</div>

                        @enderror



                    </div>

        </form>



        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">





            <label for="state" class="form-label guj-label-register mt-3 mb-0">State</label>

            <select id="state" name="state" class="w-100 p-2 border">

                <option value="">-- Choose State --</option>

                <option value="Andhra Pradesh" {{ old('state') == 'Andhra Pradesh' ? 'selected' : '' }}>Andhra

                    Pradesh</option>

                <option value="Arunachal Pradesh" {{ old('state') == 'Arunachal Pradesh' ? 'selected' : '' }}>

                    Arunachal Pradesh</option>

                <option value="Assam" {{ old('state') == 'Assam' ? 'selected' : '' }}>Assam</option>

                <option value="Bihar" {{ old('state') == 'Bihar' ? 'selected' : '' }}>Bihar</option>

                <option value="Chhattisgarh" {{ old('state') == 'Chhattisgarh' ? 'selected' : '' }}>

                    Chhattisgarh</option>

                <option value="Goa" {{ old('state') == 'Goa' ? 'selected' : '' }}>Goa</option>

                <option value="Gujarat" {{ old('state') == 'Gujarat' ? 'selected' : '' }}>Gujarat</option>

                <option value="Haryana" {{ old('state') == 'Haryana' ? 'selected' : '' }}>Haryana</option>

                <option value="Himachal Pradesh" {{ old('state') == 'Himachal Pradesh' ? 'selected' : '' }}>

                    Himachal Pradesh</option>

                <option value="Jharkhand" {{ old('state') == 'Jharkhand' ? 'selected' : '' }}>Jharkhand

                </option>

                <option value="Karnataka" {{ old('state') == 'Karnataka' ? 'selected' : '' }}>Karnataka

                </option>

                <option value="Kerala" {{ old('state') == 'Kerala' ? 'selected' : '' }}>Kerala</option>

                <option value="Madhya Pradesh" {{ old('state') == 'Madhya Pradesh' ? 'selected' : '' }}>Madhya

                    Pradesh</option>

                <option value="Maharashtra" {{ old('state') == 'Maharashtra' ? 'selected' : '' }}>Maharashtra

                </option>

                <option value="Manipur" {{ old('state') == 'Manipur' ? 'selected' : '' }}>Manipur</option>

                <option value="Meghalaya" {{ old('state') == 'Meghalaya' ? 'selected' : '' }}>Meghalaya

                </option>

                <option value="Mizoram" {{ old('state') == 'Mizoram' ? 'selected' : '' }}>Mizoram</option>

                <option value="Nagaland" {{ old('state') == 'Nagaland' ? 'selected' : '' }}>Nagaland</option>

                <option value="Odisha" {{ old('state') == 'Odisha' ? 'selected' : '' }}>Odisha</option>

                <option value="Punjab" {{ old('state') == 'Punjab' ? 'selected' : '' }}>Punjab</option>

                <option value="Rajasthan" {{ old('state') == 'Rajasthan' ? 'selected' : '' }}>Rajasthan

                </option>

                <option value="Sikkim" {{ old('state') == 'Sikkim' ? 'selected' : '' }}>Sikkim</option>

                <option value="Tamil Nadu" {{ old('state') == 'Tamil Nadu' ? 'selected' : '' }}>Tamil Nadu

                </option>

                <option value="Telangana" {{ old('state') == 'Telangana' ? 'selected' : '' }}>Telangana

                </option>

                <option value="Tripura" {{ old('state') == 'Tripura' ? 'selected' : '' }}>Tripura</option>

                <option value="Uttar Pradesh" {{ old('state') == 'Uttar Pradesh' ? 'selected' : '' }}>Uttar

                    Pradesh</option>

                <option value="Uttarakhand" {{ old('state') == 'Uttarakhand' ? 'selected' : '' }}>Uttarakhand

                </option>

                <option value="West Bengal" {{ old('state') == 'West Bengal' ? 'selected' : '' }}>West Bengal

                </option>

            </select>

            @error('state')

                <div class="text-danger guj-label-register">{{ $message }}</div>

            @enderror

            <label for="" class="guj-label-register mt-3">Pincode</label>

            <input type="text" name="pincode" value="{{ old('pincode') }}" class="w-100 p-2 border">

            @error('pincode')

                <div class="text-danger guj-label-register">{{ $message }}</div>

            @enderror



            <div class="col-12">

                <label for="phone" class="form-label guj-label-register mt-3 mb-0">Phone Number</label><br>

                <input type="tel" id="phone" minlength="10" maxlength="10" name="phone[main]"

                    class="form-control py-2" style="border-radius: 0">

                @error('phone.main')

                    <div class="text-danger guj-label-register">{{ $message }}</div>

                @enderror

            </div>



            <label for="" class="guj-label-register mt-3">Email</label>

            <input type="text" name="email" value="{{ old('email') }}" class="w-100 p-2 border">

            @error('email')

                <div class="text-danger guj-label-register">{{ $message }}</div>

            @enderror



            <div class="d-xl-none d-lg-none d-md-none d-sm-flex align-items-center mt-3">

                <input type="checkbox" value="1" name="terms_and_conditions"

                    style="width: 20px;

                    height: 20px;" class="me-3">

                <label class="guj-label-register mb-0"><a href="{{ url('term_and_condition_eng') }}">Term and Condition</a></label>

            </div>

        </div>

    </div>



    <div class="d-flex justify-content-center mt-5">

        <button type="submit" class="btn btn-success w-auto px-5 guj-label-register">Submit</button>

    </div>

<div class="text-center pt-2">

    <a href="" style="font-family: gujFont2;text-decoration: none;color:#000">If you are already registered ?</a>

    <a href="{{url('sbsjfh_sdfhsdf_rnjdvbdo')}}" style="font-family: gujFont2">Click here</a>

</div>

    </div>



    <!-- Register Form -->

    </div>



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"

        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countryselector/1.0.0/jquery.countryselector.min.js">

    </script>





    <script> 

        $(document).ready(function() {

            $.ajax({

                url: 'https://restcountries.com/v3.1/all',

                method: 'GET',

                success: function(response) {

                    response.forEach(function(country) {

                        $('#country').append(

                            `<option value="${country.name.common}">${country.name.common}</option>`

                        );

                    });



                    // Set old selected country value

                    let oldCountry = "{{ old('country') }}";

                    if (oldCountry) {

                        $('#country').val(oldCountry);

                    }

                }

            });



            $('#country').countrySelector({

                showFlag: true,

                showCountryName: false

            });

        });



        var phone_number = window.intlTelInput(document.querySelector("#phone"), {

            separateDialCode: true,

            preferredCountries: ["in"],

            utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"

        });

        $("form").submit(function() {

            var full_number = phone_number.getNumber();

            $("input[name='phone[main]'").val(full_number);

        });













        $(document).ready(function() {

            $("#profile_image").change(function() {

                readURL(this);

            });



            function readURL(input) {

                if (input.files && input.files[0]) {

                    var reader = new FileReader();



                    reader.onload = function(e) {

                        $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');

                        $('#imagePreview').hide();

                        $('#imagePreview').fadeIn(650);

                    };



                    reader.readAsDataURL(input.files[0]);

                }

            }



            $("#update_image").click(function() {

                var formData = new FormData();

                var file = $('#profile_image')[0].files[0];

                formData.append('profile_image', file);



                $.ajax({

                    url: '/cvxcxcvxcvxc',

                    method: 'POST',

                    data: formData,

                    processData: false,

                    contentType: false,

                    headers: {

                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                    },



                    success: function(response) {

                        console.log('Image uploaded successfully');

                    },

                    error: function(xhr, status, error) {

                        console.error('Error uploading image:', error);

                    }

                });



            });

        });

    </script>

</body>



</html>

@endsection

