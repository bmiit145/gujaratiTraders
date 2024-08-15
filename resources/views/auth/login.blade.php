<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gujrati Traders</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_image/favicon.png') }}">

    <!-- font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
     rel="stylesheet">
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <style>
        @font-face {
            font-family: gujFont2;
            src: url("../font/KAP127.TTF");
        }
        
        .toggle-password {
            float: right;
            cursor: pointer;
            margin-right: 10px;
            margin-top: -25px;
        }
    </style>

</head>

<body class="" data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->
    <div class="container-fluid">
        <div class="row login-main-row" style="background-color: #109246">
            <div class="col-xl-6 col-lg-6 col-md-6 side-login-img-main-div">
                <div class="d-flex justify-content-center m-auto left-img side-login-img-main">
                    <img src="{{ asset('images/sign in side img.png') }}" alt="side img" class="img-fluid">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 m-auto login-right">
                <div class="login-right-main">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('images/gujarati_logo.png') }}" alt="" class="img-fluid w-50 mb-5">
                    </div>
                    <h2 class="login-heading">Login</h2>
                    <div class="login-caption">Provide your login details to access your account</div>

                    @if (session('success'))
                        <div class="alert alert-success mb-0 mt-4 fs-5" style="font-family: gujFont2">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }} ">
                        @csrf
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible show mt-4 py-2"> {{ session('error') }} </div>
                        @endif

                        <div class="email-main">
                            <label class="input-labels-login">Email Address</label>
                            <input type="email" name="email" id="email"
                                class="form-control form-inputs input-field {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                placeholder="Enter Email Address">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="password-main">
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" placeholder="Enter Password" name="password" id="password" class="form-control form-inputs input-field {{ $errors->has('password') ? 'is-invalid' : '' }}">
                                <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                            </div>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="d-flex justify-content-between  align-items-center flex-wrap">
                            <div class="form-group">
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" id="Remember">
                                    <label class="form-check-label" for="Remember">Remember
                                        me?</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('forget.password.get') }}" class="forget-pass">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-warning w-75 login-btn"
                                style="border-radius: 50px;">Login</button>
                        </div>
                        <div class="mt-5">
                            <div class="text-center">Don't have account yet? <span><a
                                        href="{{ route('course.register.form') }}" class="sign-up-link">Sign
                                        Up</a></span></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    
    <script>
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            input = $(this).parent().find("input");
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>

</body>

</html>
