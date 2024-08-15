<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gujrati Traders</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_image/favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/home_eng.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}" />



        <!-- Country Selector CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-countryselector/1.0.0/jquery.countryselector.min.css"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css"
        rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        /* Otp Field */

        .otp-field {
            flex-direction: row;
            column-gap: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .otp-field input {
            height: 45px;
            width: 42px;
            border-radius: 6px;
            outline: none;
            font-size: 1.125rem;
            text-align: center;
            border: 1px solid #ddd;
        }

        .otp-field input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .otp-field input::-webkit-inner-spin-button,
        .otp-field input::-webkit-outer-spin-button {
            display: none;
        }

        .resend {
            font-size: 18px;
        }

        .resend a {
            font-size: 18px;
            text-decoration: none;
        }

        .resend a:hover {
            font-size: 18px;
            text-decoration: none;
            border-bottom: 1px solid rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1))
        }

        .card-main {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }

        @media screen and (max-width:425px){
            .card-main {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
        }
        }

        .card-body-main {
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            border-radius: 7px;
        }

        @media screen and (max-width:425px) {
            .card-main {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 95%;
            }
        }

        @media screen and (max-width:375px) {
            .resend {
                font-size: 15px;
                text-decoration: none;
            }

            .otp-field input {
                height: 35px;
                width: 35px;
                border-radius: 6px;
                outline: none;
                font-size: 1.125rem;
                text-align: center;
                border: 1px solid #ddd;
            }
        }

        /* Otp Field */
    </style>

</head>

<body class="bg-light">



    <!-- Otp -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-6 col-md-8 otp-field-size">
                <div class="card bg-white border-0 card-main" style="box-shadow: 0 12px 15px rgba(0, 0, 0, 0.02);">
                    <div class="card-body card-body-main px-5 py-4 text-center">
                        @if (session('success'))
                            <div class="d-flex justify-content-center mt-3">
                                <div class="alert alert-success w-100 text-center" style="font-family: gujFont2">
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif
                        <h4 style="font-family: gujFont2;" class="mb-4"><span
                                style="font-family: gujFont2;">Enter Phone Number</span>
                            </h4>
                        <form action="{{ route('get_alredy_register_english') }}" method="post">
                            @csrf
                       
                            <input type="text" class="form-control mb-3" id="phone" name="phone[main]">

                           
                            <button class="btn btn-success mt-3 mb-3" style="font-family: gujFont2;">
                                Check
                            </button>
                        </form>

                        @if (session('error'))
                            <div class="text-danger mb-2" style="font-family: gujFont2">
                                {{ session('error') }}
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Otp -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

 
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
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

            $('#sendOtpLink').on('click', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: '{{ url('resend_otp') }}',
                    type: "post",
                    data: {
                        id: id,
                    },
                    success: function(response) {
                        console.log(response, 'response');
                    },
                    error: function(error) {
                        console.log(error.responseText);
                    }
                });
            });
        });
    </script>


</body>

</html>
