<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./index.css">

    <style>
        .email-card {
            border-radius: 7px;
            padding: 30px 25px;
            background: whitesmoke !important;
            width: 30%;
            box-shadow: 1px 1px 10px !important;
        }

        @media screen and (max-width:1400px) {
            .email-card {
                border-radius: 7px;
                padding: 10px;
                background: whitesmoke !important;
                width: 40%;
                box-shadow: 1px 1px 10px !important;
            }
        }

        @media screen and (max-width:1200px) {
            .email-card {
                border-radius: 7px;
                padding: 10px;
                background: whitesmoke !important;
                width: 50%;
                box-shadow: 1px 1px 10px !important;
            }
        }

        .reset-btn {
            background: rgb(64, 140, 255);
            border: none;
            padding: 8px 20px;
            text-decoration: none;
            color: white !important;
            border-radius: 5px;
        }
    </style>

</head>

<body>


    <div class="container">
        <div class="row">
            <div style="display: flex;justify-content: center;padding:20px">
                <div class="email-card" style="margin: auto;">
                    <div class="card-body">
                        <h1 style="text-align:center">Password Reset</h1>
                        <div class="text-center" style="margin-bottom: 10px;text-align: center;font-weight: bold">If
                            you've lost your
                            password or wish to reset it,use the link below to get started</div>
                        <div style="display: flex;">
                            <a href="{{ route('reset.password.get', $token) }}" class="reset-btn mt-3"
                                style="margin-bottom: 20px;margin:auto;margin-top:10px">Reset Password</a>
                        </div>
                        <div class="text-center" style="margin-bottom: 10px;margin-top:20px;text-align: center">
                            If you did not request a password reset, you can safely ignore this email. Only a person
                            with
                            access to your email can reset your account password.
                        </div>
                        <h2 style="font-weight: 400;text-align: center">Thank You!</h2>
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
