@extends('Admin.admin-dashboard')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <style>
        .error {
            color: red !important;
        }
        .form-control:focus {
            color: var(--bs-body-color);
            background-color: var(--bs-body-bg);
            border-color: #FF971D;
            outline: 0;
            box-shadow: none;
        }
        .iti--allow-dropdown{
            width: 100%;
        }
    </style>
    <div class="container-fluid content-inner pb-0 mt-4">
        <div>
            <div class="row d-flex; justify-content-center">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header p-2 px-3" style="background-color: #FF971D;">
                            <h4 class="card-title text-white mb-0">Edit Student</h4>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <form class="row" action="{{ route('admin.updateStudent') }}" method="POST">
                                    @csrf
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputEmail1" class="form-label">First Name</label>
                                        <input type="hidden" class="form-control" value="{{$student->id}}" placeholder="Enter First Name" name="id">
                                        <input type="text" class="form-control" value="{{$student->student_first_name}}" placeholder="Enter First Name" name="student_first_name">
                                        @error('student_first_name')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputPassword1" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" value="{{ $student->student_last_name }}" name="student_last_name" placeholder="Enter Last Name">
                                        @error('student_last_name')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputPassword1" class="form-label">Email</label>
                                        <input type="text" class="form-control" value="{{ $student->student_email }}" name="student_email" placeholder="Enter Email Address">
                                        @error('student_email')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputPassword1" class="form-label">Mobile Number</label><br>
                                        <input type="text" class="form-control" placeholder="Enter Mobile Number"
                                            minlength="12" maxlength="12" name="student_number[main]" id="student_number" style="width:100%" 
                                            value="{{ $student->student_number }}" required/>
                                        @error('student_number[main]')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputPassword1" class="form-label">Address</label>
                                        <input type="text" class="form-control"  value="{{ $student->student_address}}" name="student_address" placeholder="Enter Address">
                                        @error('student_address')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-center">
                                    <button type="submit" class="add-student-submit-btn">Update Student</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            var student_number = window.intlTelInput(document.querySelector("#student_number"), {
                separateDialCode: true,
                preferredCountries: ["in"],
                utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
            });
            $("form").submit(function() {
                var full_number = student_number.getNumber();
                $("input[name='student_number[main]'").val(full_number);
            });
        });
    </script>
@endsection







