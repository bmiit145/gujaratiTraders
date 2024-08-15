<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password Link</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./index.css">

    <style>
        .form-control:focus {
            color: var(--bs-body-color);
            background-color: var(--bs-body-bg);
            border-color: #FF971D;
            outline: 0;
            box-shadow: none;
        }
    </style>

</head>

<body>


    <div class="container-fluid position-absolute w-100" style="top: 35%;left: 50%;transform: translate(-50%,-50%);">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-5 col-lg-10 col-md-11">
                <div class="d-flex justify-content-center mb-4"><img
                        src="{{ asset('images/home_image/logo-main.png') }}" alt="" class="img-fluid"></div>
                <div class="card">
                    <div class="card-header fw-bold fs-5 text-light" style="background-color:#ff961dde">Reset Password
                    </div>
                    <div class="card-body">
                        <form action="{{ route('reset.password.post') }}" method="POST">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="row">
                                <div class="col-md-2  col-sm-3 col-12 mb-2"><label for="" class="fw-bold fs-6"
                                        style="color: #000000b7">E-mail</label></div>
                                <div class="col-md-10 col-sm-9  col-12 mb-2"><input type="text" name="email"
                                        placeholder="Please enter your email address" class="form-control">
                                    @if ($errors->has('email'))
                                        <div class="text-danger my-2">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2  col-sm-3 col-12 mb-2"><label for="" class="fw-bold fs-6"
                                        style="color: #000000b7">Password</label></div>
                                <div class="col-md-10 col-sm-9  col-12 mb-2"><input type="text" name="password"
                                        placeholder="Please enter your new password" class="form-control">
                                    @if ($errors->has('password'))
                                        <div class="text-danger my-2">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2  col-sm-3 col-12 mb-2"><label for="" class="fw-bold fs-6"
                                        style="color: #000000b7">Confirm Password</label></div>
                                <div class="col-md-10 col-sm-9  col-12 mb-2"><input type="text"
                                        name="password_confirmation"
                                        placeholder="Please enter your confirmation password" class="form-control">
                                        @if ($errors->has('password_confirmation'))
                                            <div class="text-danger my-2">{{ $errors->first('password_confirmation') }}</div>
                                        @endif
                                </div>
                            </div>
                            <div class="mt-3 d-flex justify-content-center">
                                <button type="submit" class="btn btn-success">Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
