@extends('Admin.admin-dashboard')
@section('content')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <style>
        .error {
            color: red !important;
        }

        .otp-head-bg{
            background-color:#FF971D;
        }

        .otp-input:focus {
            color: var(--bs-body-color);
            background-color: var(--bs-body-bg);
            border-color: #FF971D;
            outline: 0;
            box-shadow: none;
        }

        .otp-submir-btn{
            background-color:#FF971D;
            color:#fff;
            border:none;
            padding:8px 20px;
            border-radius:5px
        }
    </style>

    <div class="container-fluid content-inner pb-0 mt-4 px-4">
        <div>
            <div class="row d-flex; justify-content-center">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header otp-head-bg">
                            <h4 class="card-title text-white mb-0">Otp</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="{{url('vxcvxcvdcxds')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$student->id}}">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Enter the otp which we just sent you to your registered mobile number</label>
                                        <input type="text" class="form-control otp-input" name="student_otp" value="{{ old('student_otp') }}" placeholder="Enter otp">
                                    </div>
                                    @error('student_otp')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                    
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="otp-submir-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

@endsection
