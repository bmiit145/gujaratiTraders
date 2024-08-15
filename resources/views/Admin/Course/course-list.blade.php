@extends('Admin.admin-dashboard')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
        .form-select-custom {
            padding: 10px 15px 10px 15px;
            color: #fff;
            background-color: #202022;
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 16px 12px;
            border: 1px solid #69697A;
            border-radius: .5rem;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            box-sizing: border-box;
            display: inline-block;
            min-width: 1.5em;
            padding: 5px !important;
            margin-left: 2px;
            text-align: center;
            text-decoration: none !important;
            cursor: pointer;
            color: #333 !important;
            border: 1px solid transparent;
            border-radius: 2px;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: white !important;
            border: none;
            background-color: #fff !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: white !important;
            border: 1px solid #111;
            background-color: #585858;
        }

        .actions-icons {
            margin-top: 37px;
        }
    </style>
    <div class="container-fluid content-inner pb-0 mt-4">
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center"
                            style="background-color: #FF971D">
                            <h4 class="card-title text-white mb-0">Courses</h4>
                            <a href="{{ route('admin.add.course') }}" style="float: right;" class="add-btn-studet-list">Add
                                Course</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable">
                                    <thead class="text-black">
                                        <tr>
                                            <th class="text-nowrap">Name</th>
                                            <th class="text-nowrap">Rate</th>
                                            <th class="text-nowrap">Duration</th>
                                            <th class="text-nowrap">Start Date</th>
                                            <th class="text-nowrap">Expiry Date</th>
                                            <th class="text-nowrap">Description</th>
                                            <th class="text-nowrap">Image</th>
                                            <th class="text-nowrap">Status</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $course)
                                            <tr>
                                                <td>{{ $course->course_name }}</td>
                                                <td>{{ $course->course_rate }}</td>
                                                <td>{{ $course->course_duration }}</td>
                                                <td>{{ $course->course_start_date }}</td>
                                                <td>{{ $course->course_expiry_date }}</td>
                                                <td>{{ $course->course_description }}</td>
                                                <td>
                                                    <img src="{{ asset('images/course_image/' . $course->course_image) }}"
                                                        alt="Course Image"
                                                        style="width: 100px; height: 100px; border-radius: 50%;">
                                                </td>
                                                <td>
                                                    <button class="btn badge rounded-pill text-bg-primary fs-6 statusBtn"
                                                        data-id="{{ $course->id }}" title="You can change status">Active</button>
                                                </td>
                                                <td class="d-flex flex-no-wrap d-flex align-items-center actions-icons">
                                                    <a href="{{ route('admin.edit_course', $course->id) }}" title="Edit"
                                                        class="fa fa-edit fs-3 pe-2"></a>
                                                    <a href="" title="Delete" id="deleteBtn"
                                                        data-id="{{ $course->id }}"
                                                        class="fa fa-trash text-danger fs-3 mx-4"></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Courses Delete Modal -->
    <div class="modal fade" id="deleteCourse">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Course</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this course?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="closeCourseDeleteModalBtn">Close</button>
                    <button type="button" class="btn btn-danger" id="deleteCourseBtnModal">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
        $(document).ready(function() {
            // Course Delete Modal Hide
            $("#closeCourseDeleteModalBtn").click(function(e) {
                e.preventDefault();
                $("#deleteCourse").modal('hide');
            });

            // Course Modal Show And Delete
            $(document).on('click', '#deleteBtn', function(event) {
                event.preventDefault();
                var id = $(this).data('id');
                $('#deleteCourse').modal('show');
                $('#deleteCourseBtnModal').data('id', id);
            });

            $('#deleteCourseBtnModal').click(function() {
                var id = $(this).data('id');
                $.post("/nkckckkkwfgbf/" + id, {
                        _token: "{{ csrf_token() }}"
                    })
                    .done(function() {
                        $('#deleteCourse').modal('hide');
                        toastr.success('Course deleted successfully!', '', {
                            timeOut: 1000
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    })
                    .fail(function(xhr, status, error) {
                        toastr.error('Error deleting course: ' + error);
                    });
            });

            // Status change of course
            $(document).ready(function() {
                // Function to update status button text and store status in local storage
                function updateStatus(courseId, newStatus) {
                    var statusBtn = $('.statusBtn[data-id="' + courseId + '"]');
                    statusBtn.text(newStatus);

                    // Store the status in local storage
                    localStorage.setItem('courseStatus_' + courseId, newStatus);
                }

                // Click event handler for status button
                $('.statusBtn').click(function() {
                    var statusBtn = $(this);
                    var courseId = statusBtn.data('id');
                    var currentStatus = statusBtn.text().trim();

                    var newStatus = currentStatus === 'Active' ? 'Inactive' : 'Active';

                    // Update status button text and store status
                    updateStatus(courseId, newStatus);

                    $.post("/fdvfvdfvdfddf/" + courseId, {
                            _token: "{{ csrf_token() }}",
                            id: courseId,
                            status: newStatus === 'Active' ? 1 : 0
                        })
                        .done(function(response) {
                            toastr.success('Course status updated successfully!');
                            console.log(response, "status updated");
                        })
                        .fail(function(xhr, status, error) {
                            // Revert the status button text if update fails
                            updateStatus(courseId, currentStatus);

                            toastr.error('Failed to update course status: ' + error);
                            console.error(xhr.responseText, "status not updated");
                        });

                });

                // Restore status from local storage on page load
                $('.statusBtn').each(function() {
                    var statusBtn = $(this);
                    var courseId = statusBtn.data('id');

                    var storedStatus = localStorage.getItem('courseStatus_' + courseId);
                    if (storedStatus) {
                        statusBtn.text(storedStatus);
                    }
                });
            });


        });
    </script>
@endsection
