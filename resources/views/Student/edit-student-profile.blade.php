@extends('Student.student-dashboard')
@section('content')
    <style>
        #upload_image[type="file"] {
            color: transparent;
            width: 35%;
            margin-left: 15px;
        }

        /* Optionally, style the file input */
        .custom-file-input {
            cursor: pointer;
        }

        .edit-profile-input:focus {
            color: var(--bs-body-color);
            background-color: var(--bs-body-bg);
            border-color: #FF971D;
            outline: 0;
            box-shadow: none;
        }

        .update-profile-btn {
            background-color: #FF971D;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 20px;
        }

        .back-profile-btn {
            background-color: #109226;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 20px;
            text-decoration: none;
        }
    </style>

    <h3 style="text-align: center;">Edit Student Profile</h3><br>

    <div style="display: flex;
    justify-content: center;">
        <div id="imagePreview"
            style="width: 100px; height: 100px;border-radius:50%; background: #bbb; padding: 10px; display: flex; justify-content: center; background-image: url('{{ asset('images/profile_image/' . $student->profile_image) }}'); background-size: cover; background-position: center;">
        </div>
    </div><br>

    <div style="display: flex; justify-content: center; margin-bottom: 5px;">
        <div class="d-flex justify-content-center">
            <input type="file"name="upload_image" id="upload_image"><br><br>
        </div>
    </div>

    <div style="display: flex; justify-content: center;">
        <button id="update_image" name="update_image" class="update-profile-btn">Update Profile</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="successModalLabel">Success!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            Image uploaded successfully.
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Okay</button>
            </div>
        </div>
        </div>
    </div>

    <form method="POST" action="{{ route('student.update.profile') }}">
        @csrf
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="mb-3 col-xl-6 col-lg-6 col-md-6 col-12">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control edit-profile-input" name="student_first_name"
                        value="{{ $student->student_first_name }}">
                </div>
                <div class="mb-3 col-xl-6 col-lg-6 col-md-6 col-12">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control edit-profile-input" name="student_last_name"
                        value="{{ $student->student_last_name }}">
                </div>
                <div class="mb-3 col-xl-6 col-lg-6 col-md-6 col-12">
                    <label class="form-label">Mobile Number</label>
                    <input type="text" class="form-control edit-profile-input" name="student_number"
                        value="{{ $student->student_number }}">
                </div>
                <div class="mb-3 col-xl-6 col-lg-6 col-md-6 col-12">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control edit-profile-input" name="student_address"
                        value="{{ $student->student_address }}">
                </div>
                <div class="mb-3 col-xl-6 col-lg-6 col-md-6 col-12">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control edit-profile-input" name="student_email"
                        value="{{ $student->student_email }}">
                </div>
            </div>
        </div>

        <a type="submit" href="{{ route('student.profile') }}" class="back-profile-btn ms-3">Back</a>
        <button type="submit" class="update-profile-btn">Update</button>
    </form>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        $("#upload_image").change(function() {
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
            var file = $('#upload_image')[0].files[0];
            formData.append('upload_image', file);

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
                    $('#successModal').modal('show'); 
                },
                error: function(xhr, status, error) {
                    console.error('Error uploading image:', error);
                }
            });

        });
    });
</script>
