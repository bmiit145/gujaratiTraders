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
    <link rel="stylesheet" href="./index.css">


    <style>
        body {
            background-image: url("https://img.freepik.com/free-vector/white-abstract-wallpaper_23-2148830026.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        :root {
            --card-line-height: 1.2em;
            --card-padding: 1em;
            --card-radius: 0.5em;
            --color-gray: #E2EBF6;
            --color-dark-gray: #C4D1E1;
            --radio-border-width: 2px;
            --radio-size: 1.5em;
        }

        .radio {
            font-size: inherit;
            margin: 0;
            position: absolute;
            right: calc(var(--card-padding) + var(--radio-border-width));
            top: calc(var(--card-padding) + var(--radio-border-width));
        }

        @supports (-webkit-appearance: none) or (-moz-appearance: none) {
            .radio {
                -webkit-appearance: none;
                -moz-appearance: none;
                background: #fff;
                border: var(--radio-border-width) solid var(--color-gray);
                border-radius: 50%;
                cursor: pointer;
                height: var(--radio-size);
                outline: none;
                transition: background 0.2s ease-out, border-color 0.2s ease-out;
                width: var(--radio-size);
            }

            .radio::after {
                border: var(--radio-border-width) solid #fff;
                border-top: 0;
                border-left: 0;
                content: '';
                display: block;
                height: 0.75rem;
                left: 25%;
                position: absolute;
                top: 50%;
                transform: rotate(45deg) translate(-50%, -50%);
                width: 0.375rem;
            }

            .radio:checked {
                background: #0C9146;
                border-color: #0C9146;
            }
        }

        /* pricing */
        .buy-btn {
            background-color: #0C9146;
            color: #fff;
            padding: 8px 50px;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.7s all;
            border-radius: 50px;
        }

        .card-main {
            border: 1px solid #0C9146;
            padding: 50px 10px;
        }

        .card-main:hover {
            box-shadow: rgba(12, 145, 70, 0.3) 0px 5px 15px;
            cursor: pointer;
        }

        .pring-icon {
            transition: 0.7s all;
            color: #0C9146;
        }

        .international-pay-btn {
            background-color: #0C9146;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
        }

        .selected-border {
            border: 4px solid #0C9146;
            transform: scale(1.03);
            box-shadow: rgba(12, 145, 70, 0.3) 0px 5px 15px;
        }

        /* pricing */
    </style>

</head>

<body>
    <h1 class="text-center my-5">Pricing Plan</h1>

    @if (Session::has('success'))
        <div class="container">
            <div class="text-center alert alert-success" style="font-family: gujFont2;">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        </div>
    @endif

    <form  method="GET" id="paymentForm">
        @csrf
        <input type="hidden" name="course_rate" id="totalAmountInput">
        <div class="container">
            <div class="row pb-2">
                @foreach ($courses as $course)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mx-auto my-3">
                        <label class="card card-main">
                            <input name="plan" class="radio" type="radio" value="{{ $course->course_name }}">
        
                            <img src="{{ asset('images/course_image/' . $course->course_image) }}" >
                        
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    @if ($course->course_name === 'Basic')
                                        <i class="fa-solid fa-suitcase fs-1 pring-icon"></i>
                                    @elseif($course->course_name === 'Medium')
                                        <i class="fa-solid fa-atom fs-1 pring-icon"></i>
                                    @elseif($course->course_name === 'Pro')
                                        <i class="fa-solid fa-award fs-1 pring-icon"></i>
                                    @endif
                                </div>

                                <h5 style="display: none" class="text-center py-3 fw-normal">{{ $course->course_name }}</h5>
                                <h1 class="text-center course-rate">₹ {{ $course->course_rate }}</h1>
                                <div class="text-center my-3">
                                    <div class="card-text fw-normal text-secondary">{{ $course->course_description }}
                                    </div>
                                </div>
                                
                            </div>
                        </label>
                        <div class="d-flex justify-content-center mt-4">
                            <a href="{{ route('Cupan_code_view', ['id' => $course->id, 'reg_id' => $id]) }}" class="buy-btn">Make payment</a>
                        </div>
                    </div>
                @endforeach
                <div class="my-3">
                    <div class="d-flex fw-bold fs-4">Total<div id="totalAmount" class="fs-4 ms-auto">₹ 0/Year</div>
                    </div>
                    <div class="d-flex justify-content-end" style="white-space: nowrap;">(Tax Excl.)</div>
                </div>
            
                <div id="planError" class="alert alert-danger fs-4 text-center mt-3" style="display: none;">Please select a
                    plan 
                    before proceeding.</div>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        const radioButtons = document.querySelectorAll('input[name="plan"]');
        radioButtons.forEach(radioButton => {
            radioButton.addEventListener('change', function() {
                document.querySelectorAll('.card-main').forEach(card => {
                    card.classList.remove('selected-border');
                });
                if (this.checked) {
                    this.closest('.card-main').classList.add('selected-border');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('input[name="plan"]').on('change', function() {
                const selectedPlan = $(this).closest('.card-main').find('h5').text().trim();
                $('.buy-btn').show();
                $(this).closest('.card-main').find('.buy-btn').show().text('Choosen Plan: ' +
                    selectedPlan);
                const price = $(this).closest('.card-main').find('.course-rate').text().trim().replace('₹',
                    '');
                let totalAmount = 0;
                let duration = '';
                if (selectedPlan === 'Smart') {
                    totalAmount = price;
                    duration = '/Month';
                } else if (selectedPlan === 'Advance') {
                    totalAmount = price;
                    duration = '/3 Month';
                } else if (selectedPlan === 'Master') {
                    totalAmount = price;
                    duration = '/1 Year';
                }
                $('#totalAmountInput').val(totalAmount);
                $('#totalAmount').text('₹' + totalAmount + duration);
            });

            $('input[name="plan"]').on('change', function() {
                $('#planError').hide();
            });

            $('.buy-btn').submit(function(event) {
                if (!$('input[name="plan"]:checked').val()) {
                    event.preventDefault();
                    $('#planError').show();
                } else {
                    $('#planError').hide();
                }
            });
        });
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
