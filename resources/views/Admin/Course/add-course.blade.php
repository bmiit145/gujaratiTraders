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

        .form-select:focus {
            color: var(--bs-body-color) !important;
            background-color: var(--bs-body-bg) !important;
            border-color: #FF971D !important;
            outline: 0 !important;
            box-shadow: none !important;
        }
        
        .form-control:focus {
            color: var(--bs-body-color) !important;
            background-color: var(--bs-body-bg) !important;
            border-color: #FF971D !important;
            outline: 0 !important;
            box-shadow: none !important;
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
                            <h4 class="card-title text-white mb-0">Add Course</h4>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <form class="row" action="{{ route('admin.store_course') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputEmail1" class="form-label">Course Name</label>
                                        <select name="course_name" id="duration" class="form-select">
                                            <option value="">-- Select Duration --</option>
                                            <option value="Advance" {{ old('course_name') == 'Advance' ? 'selected' : '' }}>Advance</option>
                                            <option value="Master" {{ old('course_name') == 'Master' ? 'selected' : '' }}>Master</option>
                                            <option value="Smart" {{ old('course_name') == 'Smart' ? 'selected' : '' }}>Smart</option>
                                        </select>
                                        @error('course_name')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>                                    
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputPassword1" class="form-label">Rate</label>
                                        <input type="text" class="form-control" value="{{ old('course_rate') }}"
                                            name="course_rate">
                                        @error('course_rate')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="row">
                                            <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                                <label for="duration" class="form-label">Duration</label>
                                                <select name="course_duration" id="duration" class="form-select">
                                                    <option value="">-- Select Duration --</option>
                                                    @for ($i = 1; $i <= 12; $i++)
                                                        <option value="{{ $i }}" {{ old('course_duration') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                    @endfor
                                                </select>
                                                @error('course_duration')
                                                    <div class="error">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            
                                            <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                                <label for="duration" class="form-label">Month/Year</label>
                                                <select name="course_month_year" id="duration" class="form-select">
                                                    <option value="">-- Select Month/Year --</option>
                                                    <option value="1" {{ old('course_month_year') == '1' ? 'selected' : '' }}>Month</option>
                                                    <option value="2" {{ old('course_month_year') == '2' ? 'selected' : '' }}>Year</option>
                                                </select>
                                                @error('course_month_year')
                                                    <div class="error">{{ $message }}</div>
                                                @enderror
                                            </div>
                                                                                        
                                        </div>
                                    </div>
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputPassword1" class="form-label">Start Date</label>
                                        <input type="date" class="form-control" value="{{ old('course_start_date') }}"
                                            name="course_start_date">
                                        @error('course_start_date')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputPassword1" class="form-label">Expiry Date</label>
                                        <input type="date" class="form-control" value="{{ old('course_expiry_date') }}"
                                            name="course_expiry_date">
                                        @error('course_expiry_date')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputPassword1" class="form-label">Description (Optional)</label>
                                        <input type="text" class="form-control" value="{{ old('course_description') }}"
                                            name="course_description" placeholder="Enter Description">
                                        @error('course_description')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">
                                        <label for="exampleInputPassword1" class="form-label">Course Image</label>
                                        <input type="file" class="form-control" value="{{ old('course_image') }}"
                                            name="course_image">
                                        @error('course_image')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="add-student-submit-btn">Submit Course</button>
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
@endsection
