@extends('Student.student-dashboard')

@section('content')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha384-U3pTlX7kSTLB6P3f5IcnKp6IuTpzAaVB8dEOYQX9l4ZqEwovtH6kSWPUP3klfJfP" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>

<div class="d-flex justify-content-center mt-4"></div>
<h3 class="ms-3">Video List</h3>

@if (session('success'))
    <div class="alert alert-danger">
        {{ session('success') }}
    </div>
@endif

<div>
    <div class="container-fluid">
        <div class="padd-class-video row">
            @isset($videos)
                @foreach ($videos as $video)
                    <div class="video-item col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-12">
                        <video class="lazyload" controls height="300px" width="100%" controlslist="nodownload" data-src="{{ asset('storage/' . $video->video) }}">
                            <source type="video/mp4">
                        </video>

                        <form action="{{ route('student.student_show_full_screen_video', ['id' => $video->id]) }}" method="GET">
                            @csrf
                            <input type="hidden" name="id" value="{{ $video->id }}">
                            <button type="submit" class="view-fullsize-video-btn">
                                <svg fill="#fff" height="40px" version="1.1" viewBox="0 0 36 36" width="40px">
                                    <path d="m 10,16 2,0 0,-4 4,0 0,-2 L 10,10 l 0,6 0,0 z"></path>
                                    <path d="m 20,10 0,2 4,0 0,4 2,0 L 26,10 l -6,0 0,0 z"></path>
                                    <path d="m 24,24 -4,0 0,2 L 26,26 l 0,-6 -2,0 0,4 0,0 z"></path>
                                    <path d="M 12,20 10,20 10,26 l 6,0 0,-2 -4,0 0,-4 0,0 z"></path>
                                </svg>
                            </button>
                        </form>

                        <div class="row"></div>

                        <form action="{{ route('student.student_show_full_screen_video', ['id' => $video->id]) }}" method="GET" class="mb-5">
                            @csrf
                            <input type="hidden" name="id" value="{{ $video->id }}">
                            <button type="submit" class="view-comments ms-1">View Comments</button>
                        </form>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/secure-web/dist/secure-web.js"></script>
    
    <script>
        window.onload = function() {
            noScreenshot(
                {
                    mouseLeave:true,
                }
            );
        };
    </script>  

@endsection

