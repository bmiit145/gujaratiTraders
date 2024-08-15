@extends('Student.student-dashboard')
@section('content')


  <style>
        .profile-container {
            max-width: 700px;
            margin: 0px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width:768px) {
          .profile-container {
            max-width: 100%;
            margin: 0px 25px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          }
        }

        @media screen and (max-width:375px) {
          .profile-container {
            max-width: 100%;
            margin: 0px 10px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          }
        }

        .profile-picture {
            margin: 0 auto 20px;
            border-radius: 50%;
            overflow: hidden;
        }
        .profile-picture img {
            width: 100%;
            height: auto;
        }
        .profile-info {
            text-align: center;
        }
        .profile-info h1 {
            margin: 0;
            font-size: 24px;
        }
        .profile-info p {
            margin: 10px 0;
            font-size: 16px;
        }
  </style>


    <h3 style="text-align: center;" class="mt-4">Student Profile</h3><br>
      <div class="profile-container">
        <div class="profile-picture">
        <div style="display: flex;justify-content: center;">
            <div id="imagePreview" 
                style="width: 100px; height: 100px;border-radius:50%; background: #bbb; padding: 10px; display: flex; justify-content: center; background-image: url('{{ asset('images/profile_image/' . $student->student_profile_image) }}'); background-size: cover; background-position: center;">
            </div>
          </div>
        </div>
        <div class="profile-info">
            <p><b style="font-weight:500">Name:</b> {{ $student->full_name }}</p>
            <p><b style="font-weight:500">Mobile Number:</b>{{ $student->phone }}</p>
            <p><b style="font-weight:500">Address:</b>{{ $student->street_address }}</p>
            <p><b style="font-weight:500">City:</b>{{ $student->city }}</p>
            <p><b style="font-weight:500">Pincode:</b>{{ $student->pincode }}</p>
            <p><b style="font-weight:500">State:</b>{{ $student->state }}</p>
            <p><b style="font-weight:500">Country:</b>{{ $student->country }}</p>
            <p><b style="font-weight:500">Email:</b>{{ $student->email }}</p>
            <p><b style="font-weight:500">Start Date:</b>{{ $student->course_start_date }}</p>
            <div class="d-flex justify-content-center">
              <div class="p-2">
                <a href="{{ route('student.edit.profile', $student->id) }}" class="btn btn-primary">Edit Profile</a>  
              </div>
            </div>
        </div>
    </div>





@endsection
