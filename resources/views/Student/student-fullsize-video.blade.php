@extends('Student.student-dashboard')



@section('content')
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
<script src="https://cdn.plyr.io/3.6.8/plyr.polyfilled.js"></script>
<style>
    .video-container video {

        width: 100%;

        height: auto;

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



    .add-comment-input {

        border: none;

        border-bottom: 1px solid black;

        width: 100%;

        background: transparent;

        margin-bottom: 5px;

    }



    .add-comment-input:focus-visible {

        border: none;

        border-bottom: 1px solid black;

        margin-bottom: 5px;

        width: 100%;

        outline: none;

    }



    .comment-btn {

        background: #FF971D;

        color: #fff;

        padding: 8px 20px;

        border: none;

        border-radius: 5px;

    }



    .cancel-btn {

        background: #8d8d8d;

        color: #fff;

        padding: 8px 20px;

        border: none;

        border-radius: 5px;

    }
</style>

<div class="container-fluid mt-4" style="background-color: #ddd">

    <div class="video-container row p-xl-5 p-lg-5 p-md-5">

        <video controls id="player" class="col-12" controlslist="nodownload">

            <source src="{{ asset('storage/' . $video->video) }}" width="100%">

        </video>

        <h5 class="mt-3">Add Comment</h5>

        <div class="px-3">

            <input type="text" name="comment" id="comment_{{ $video->id }}" class="add-comment-input"
                placeholder="Do your comment here">

        </div>

        <div class="d-flex justify-content-end mt-1">

            <button class=" mx-1 border-none cancel-btn" id="cancel-btn">Cancel</button>

            <button type="submit" data-id='{{ $video->id }}'
                class="comment-btn border-none commentBtn me-1">Comment</button>

        </div>

        <div>

            <h3>Comments</h3>

            @foreach ($video->comments as $comment)

                <div class="col-12 d-flex mb-2">

                    <img src="{{ $comment->student->student_profile_image ? asset('images/profile_image/' . $comment->student->student_profile_image) : asset('images/default_profile_image.jpg') }}"
                        alt="Profile Image" style="width: 50px; height: 50px; border-radius: 50%;">

                    <div class="fw-bold fs-6 text-black ps-2">

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



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script>

    $(document).ready(function () {

        $('.commentBtn').on('click', function () {

            var vid = $(this).data('id');

            var comment = $('#comment_' + vid).val();

            console.log(comment);



            $.ajax({

                type: 'POST',

                url: '{{ route('student.student_comment') }}',

                data: {

                    _token: '{{ csrf_token() }}',

                    vid: vid,

                    comment: comment

                },

                success: function (response) {

                    console.log(response);

                    location.reload();

                },

                error: function (error) {

                    console.error(error);

                }

            });

        });


        $('#cancel-btn').on('click', function () {

            $('.add-comment-input').val('');

        });

    });

</script>

<script src="https://cdn.jsdelivr.net/npm/secure-web@1.2.4/dist/secure-web.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/gh/bmiit145/secure-web/dist/secure-web.js"></script> -->

<script>
        window.onload = function() {
            noScreenshot(
                {
                    mouseLeave:false,
                }
            );
        };
</script>

<script>
    const player = new Plyr('#player', {
        controls: [
            'play-large', // The large play button in the center
            'play', // Play/pause playback
            'progress', // The progress bar and scrubber for playback and buffering
            'current-time', // The current time of playback
            'duration', // The full duration of the media
            'mute', // Toggle mute
            'volume',
            'captions',
            'settings',
            'fullscreen',
        ],
        disableContextMenu: true, // Optionally disable the context menu
        settings: ['captions', 'quality', 'speed'], // Custom settings menu options
        pip: false,
    });

    // enable pointer event after load
    player.on('ready', event => {
        player.elements.container.style.pointerEvents = 'auto';
    });
</script>

<script>
    // Prevent certain keyboard shortcuts
    // document.addEventListener('keydown', event => {
    //     if ((event.ctrlKey && event.shiftKey && event.key === 'I') ||
    //         (event.metaKey && event.shiftKey && event.key === 'I') ||
    //         (event.ctrlKey && event.shiftKey && event.key === 'C') ||
    //         (event.metaKey && event.shiftKey && event.key === 'C') ||
    //         event.key === 'F12') {
    //         event.preventDefault();
    //     }
    // });

    // document.addEventListener('contextmenu', event => event.preventDefault());
</script>
<!-- <script>
    var checkStatus;
    var element = document.createElement('any');
    element.__defineGetter__('id', function () {
        checkStatus = 'on';
    });

    setInterval(function () {
        checkStatus = 'off';
        console.log(element);
        console.clear();
    }, 1000);


    (function () {
        let devtoolsOpen = false;

        const detectDevTools = () => {
            const threshold = 160;
            const isDevToolsOpen = () => {
                // Detect if the developer tools are open by checking dimensions
                const widthDiff = window.outerWidth - window.innerWidth;
                const heightDiff = window.outerHeight - window.innerHeight;
                return widthDiff > threshold || heightDiff > threshold;
            };

            if (isDevToolsOpen()) {
                if (!devtoolsOpen) {
                    devtoolsOpen = true;
                    alert('Developer tools are open!');
                }
            } else {
                if (devtoolsOpen) {
                    devtoolsOpen = false;
                }
            }
        };

        // Run the check every second
        setInterval(detectDevTools, 1000);
    })();
</script> -->

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
@endsection


@push('scripts')
<script>
$(document).ready(function() {
    function checkIpStatus() {
        $.ajax({
            url: '{{ route('check-ip') }}',
            type: 'GET',
            success: function(response) {
                console.log(response.allowed); // Log response for debugging
                if (!response.allowed) {
                    window.location.href = '/not-allow';
                }
            },
            error: function(xhr, status, error) {
                console.error('Error checking IP status:', error);
            }
        });
    }

    // Initial request
    checkIpStatus();

    // Subsequent requests every 50 seconds
    setInterval(checkIpStatus, 50000); // 50 seconds
});
</script>
@endpush
