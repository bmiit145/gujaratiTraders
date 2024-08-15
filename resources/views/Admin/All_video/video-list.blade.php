@extends('Admin.admin-dashboard')
@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <div class="d-flex justify-content-center mt-3">
        <a href="{{ route('admin.uploadVideo') }}" class="upload-video-btn">Upload Video</a>
    </div>
    <h3 class="ms-3">Video List</h3>
    @if (session('success'))
        <div class="d-flex justify-content-center mt-3">
            <div class="alert alert-success w-50 text-center">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <div>
        <div class="container-fluid">
            <div class="padd-class-video row">
                @isset($videos)
                    @foreach ($videos as $video)
                        <div class="video-item col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-12">
                            <video controls height="300px" width="100%">
                                <source src="{{ asset('storage/'.$video->video) }}" type="video/mp4">
                            </video>
                            <div style="display: flex;justify-content: space-between">
                                <form action="{{ route('admin.admin-fullsize-video', ['id' => $video->id]) }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $video->id }}">
                                    <button type="submit" class="view-fullsize-video-btn"><i
                                            class="fas fa-expand"></i></button>
                                </form>
                                <a class="btn btn-danger delete" data-id='{{$video->id}}'><i class="fa fa-trash-o"></i></a>
                            </div>
                            <div class="mt-3 mb-3">
                                <div class="fw-bold fs-4">{{ $video->video_name }}</div>
                                <div class="fs-6 ps-4">{{ $video->description }}</div>
                            </div>
                            <div class="row">
                            </div>
                            <form action="{{ route('admin.admin-fullsize-video', ['id' => $video->id]) }}" method="GET"
                                class="mb-5">
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
    <!--customer Delete Modal -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog" style="max-width: auto;">
            <div class="modal-content w-xl-50">
                <div class="modal-header" style="background-color: #dfe8eb">
                    <h5 class="modal-title" id="myModalLabel">Delete Video</h5>
                </div>
                <div class="modal-body">
                    <h5 class="text-center">Are you sure you want to delete Video?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        style="background-color:#356a7f " id="delete_close">Close</button>
                    <button type="button" id="deletemember" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).on('click', '.delete', function(event) {
            event.preventDefault();
            var id = $(this).data('id');
            $('#deletemodal').modal('show');
            $('#deletemember').val(id);
        });
        $('#deletemember').click(function() {
            console.log('hello');
            var id = $(this).val();
            console.log(id);
            $.post("{{ url('deleteVideo') }}", {
                id: id,
                _token: "{{ csrf_token() }}"
            }, function() {
                $('#deletemodal').modal('hide');
                location.reload();
            });
        });
    </script>
@endsection
