@extends('Admin.admin-dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container pt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center" style="background:rgb(16, 146, 70);color:#fff">
                        <h5 class="mb-0 p-2">Upload File</h5>
                    </div>

                    <div class="card-body">
                        <div id="upload-container" class="text-center">
                            <button id="browseFile" class="btn btn-default" style="background:orange;color:#fff">Upload File</button>
                        </div>
                        <div class="progress mt-3" style="display: none; height: 25px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; height: 100%;">75%</div>
                        </div>
                        <!-- Add video name input field -->
                        <div class="mb-3">
                            <label for="videoName" class="form-label text-black">Video Name</label>
                            <input type="text" class="form-control upload-video-form" id="videoName" value="{{ old('video_name') }}"
                                placeholder="Enter Video Name" name="video_name">
                        </div>
                        <!-- Add description input field -->
                        <div class="mb-3">
                            <label for="videoDescription" class="form-label text-black">Description (Optional)</label>
                            <textarea class="form-control upload-video-form" id="videoDescription" name="description" placeholder="Description">{{ old('description') }}</textarea>
                        </div>

                        <div style="text-align: center">
                            <button id="store_submit" class="btn"  style="background:rgb(16, 146, 70);color:#fff">Submit</button>
                        </div>
                        
                    </div>
                  
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Resumable.js -->
    <script src="https://cdn.jsdelivr.net/npm/resumablejs@1.1.0/resumable.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            let browseFile = $('#browseFile');
            let resumable = new Resumable({
                target: '{{ route('files.upload.large') }}',
                query:{_token:'{{ csrf_token() }}'} ,// CSRF token
                fileType: ['mp4'],
                chunkSize: 10*1024*1024, // default is 1*1024*1024, this should be less than your maximum limit in php.ini
                headers: {
                    'Accept' : 'application/json'
                },
                testChunks: false,
                throttleProgressCallbacks: 1,
            });
        
            resumable.assignBrowse(browseFile[0]);
        
            $('#store_submit').click(function(e){
                e.preventDefault(); // Prevent form submission
                
                // Pass additional data with the file
                resumable.opts.query.video_name = $('#videoName').val(); // Get video name from input field
                resumable.opts.query.description = $('#videoDescription').val(); // Get description from textarea
                
                // Start uploading the file
                resumable.upload();
                
            });
    
            resumable.on('fileAdded', function (file) { // trigger when file picked
                showProgress();
            });
        
            resumable.on('fileProgress', function (file) { // trigger when file progress update
                updateProgress(Math.floor(file.progress() * 100));
            });
        
            resumable.on('fileSuccess', function (file, response) { // trigger when file upload complete
                response = JSON.parse(response)
                $('#videoPreview').attr('src', response.path);
                $('.card-footer').show();
                
                   window.location.href = "{{ route('admin.showAllVideo') }}";
            });
        
            resumable.on('fileError', function (file, response) { // trigger when there is any error
                alert('file uploading error.')
            });
        
        
            let progress = $('.progress');
            function showProgress() {
                progress.find('.progress-bar').css('width', '0%');
                progress.find('.progress-bar').html('0%');
                progress.find('.progress-bar').removeClass('bg-success');
                progress.show();
            }
        
            function updateProgress(value) {
                progress.find('.progress-bar').css('width', `${value}%`)
                progress.find('.progress-bar').html(`${value}%`)
            }
        
            function hideProgress() {
                progress.hide();
            }
        });
    </script>
    
    
</body>
</html>
@endsection
