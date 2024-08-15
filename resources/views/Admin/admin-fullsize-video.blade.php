@extends('Admin.admin-dashboard')

@section('content')
    <style>
        .video-container video {
            width: 100%;
            height: 600px;;
            display: block;
            margin: 0 auto;
        }

        .comments-container {
            margin-top: 20px;
        }

        .comment {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
        }

        .profile-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .comment-details {
            flex: 1;
        }

        .comment-text {
            margin-bottom: 5px;
        }

        .comment-meta {
            font-size: 12px;
            color: #777;
        }
    </style>
    <div class="container-fluid mt-4" style="background-color: #ddd">
        <div class="video-container row p-xl-5 p-lg-5 p-md-5">
            <video controls class="col-12">
                <source src="{{ asset($video->video) }}" type="video/mp4" width="100%">
            </video>
            <div class="comments-container">
                <h3>Comments:</h3>
                @foreach ($video->comments as $comment)
                <div class="col-12 d-flex mb-2">
                        <img src="{{ $comment->student->student_profile_image ? asset('images/profile_image/' . $comment->student->student_profile_image) : asset('images/default_profile_image.jpg') }}"
                            alt="Profile Image" style="width: 50px; height: 50px; border-radius: 50%;">
                        <div class="fw-bold fs-6 text-black">
                            <div>
                                {{ $comment->student_name }}
                                <span class="comment-time-text" style="padding-left: 10px;font-weight:lighter">Commented on
                                    {{ $comment->created_at->format('M d, Y \a\t h:i A') }}</span>
                            </div>
                            <div class="comment-text" style="font-weight:lighter">{{ $comment->comment }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
