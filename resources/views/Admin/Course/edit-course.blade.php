@extends('Admin.admin-dashboard')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
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

        .iti--allow-dropdown {
            width: 100%;
        }
    </style>
    <div class="container-fluid content-inner pb-0 mt-4">
        <div>
            <div class="row d-flex; justify-content-center">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header p-2 px-3" style="background-color: #FF971D;">
                            <h4 class="card-title text-white mb-0">Edit Course</h4>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <form class="row" action="{{ route('admin.update_course') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputEmail1" class="form-label">Course Name</label>
                                        <input type="hidden" class="form-control" value="{{ $course->id }}"
                                            placeholder="Enter Course Name" name="c_id">
                                        <input type="text" class="form-control" value="{{ $course->course_name }}"
                                            placeholder="Enter Course Name" name="course_name">
                                        @error('course_name')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputPassword1" class="form-label">Rate</label>
                                        <input type="text" class="form-control" value="{{ $course->course_rate }}"
                                            name="course_rate">
                                        @error('course_rate')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputPassword1" class="form-label">Duration</label>
                                        <input type="text" class="form-control" value="{{ $course->course_duration }}"
                                            name="course_duration">
                                        @error('course_duration')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputPassword1" class="form-label">Start Date</label>
                                        <input type="date" class="form-control" value="{{ $course->course_start_date }}"
                                            name="course_start_date">
                                        @error('course_start_date')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputPassword1" class="form-label">Expiry Date</label>
                                        <input type="date" class="form-control"
                                            value="{{ $course->course_expiry_date }}" name="course_expiry_date">
                                        @error('course_expiry_date')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputPassword1" class="form-label">Description (Optional)</label>
                                        <input type="text" class="form-control"
                                            value="{{ $course->course_description }}" name="course_description"
                                            placeholder="Enter Description">
                                        @error('course_description')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputPassword1" class="form-label">Course Image</label>
                                        <input type="file" class="form-control" id="course_image" name="course_image"
                                            onchange="previewImage(event)"><br>
                                        <img id="image_preview"
                                            src="{{ asset('images/course_image/' . $course->course_image) }}"
                                            alt="Course Image" style="width: 100px; height: 100px; border-radius: 50%;">
                                        @error('course_image')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="add-student-submit-btn">Update Course</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
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

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('image_preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
