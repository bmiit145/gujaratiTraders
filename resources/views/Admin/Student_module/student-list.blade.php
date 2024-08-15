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
    </style>
    @if (session('success'))
            <div class="alert alert-success text-center fs-5" style="margin-top: 20px;margin: 20px 13px;padding: 7px;">
                {{ session('success') }}
            </div>
    @endif

    <div class="container-fluid content-inner pb-0 mt-4">
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center"
                            style="background-color: #FF971D">
                            <h4 class="card-title text-white mb-0">Students</h4>
                            <a href="#" style="float: right;" class="add-btn-studet-list import_show">Add
                                Import csv</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable" class="">
                                    <thead class="text-black">
                                        <tr>
                                            <th class="text-nowrap">First name</th>
                                            <th class="text-nowrap">Last Name</th>
                                            <th class="text-nowrap">Mobile Number</th>
                                            <th>Address</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                            @if ($student->is_delete == 1)
                                                <tr>
                                                    <td>{{ $student->student_first_name }}</td>
                                                    <td>{{ $student->student_last_name }}</td>
                                                    <td>{{ $student->student_number }}</td>
                                                    <td>{{ $student->student_address }}</td>
                                                    <td>{{ $student->student_email }}</td>
                                                    <td class="d-flex flex-no-wrap">
                                                        <a href="{{ route('admin.editStudent', $student->id) }}"
                                                            title="Edit" class="fa fa-edit fs-3 pe-2"></a>
                                                        <a href="#" title="Delete" id="deleteBtn"
                                                            data-id="{{ $student->id }}"
                                                            class="fa fa-trash text-danger fs-3 pe-2 mx-4"></a>
                                                        <a href="#" title="Lock" id="lockBtn"
                                                            data-id="{{ $student->id }}"
                                                            class="fa fa-lock text-warning fs-3"></a>
                                                    </td>
                                                </tr>
                                            @endif
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
    <!-- Import show -->
    <div class="modal fade" id="import_model_show">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload CSV file</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('ImportStudent') }}" method="POST" enctype="multipart/form-data" style="padding: 3%;">
                    @csrf <!-- CSRF protection -->
                    <input type="file" name="file" class="form-control">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Student Delete Modal -->
    <div class="modal fade" id="deleteStudent">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Student</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this student?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="closeStudentDeleteModalBtn">Close</button>
                    <button type="button" class="btn btn-danger" id="deleteStudentBtnModal">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Student Lock Modal -->
    <div class="modal fade" id="lockStudent">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Lock Student</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to lock this student?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="closeStudentLockModalBtn">Close</button>
                    <button type="button" class="btn btn-warning" id="lockStudentBtnModal">Lock</button>
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
            // Student Delete Modal Hide
            $("#closeStudentDeleteModalBtn").click(function(e) {
                e.preventDefault();
                $("#deleteStudent").modal('hide');
            });
            // Student Modal Show And Delete
            $(document).on('click', '.import_show', function(event) {
                event.preventDefault();
          
                $('#import_model_show').modal('show');
               
            });
            $(document).on('click', '#deleteBtn', function(event) {
                event.preventDefault();
                var id = $(this).data('id');
                $('#deleteStudent').modal('show');
                $('#deleteStudentBtnModal').val(id);
            });
            $(document).on('click', '#deleteStudentBtnModal', function(event) {
                event.preventDefault();
                var id = $(this).data('id');
                $('#deleteStudent').modal('show');
                $('#deleteStudentBtnModal').val(id);
            });
            $('#deleteStudentBtnModal').click(function() {
                var id = $(this).val();
                $.post("/ssssdfgggr/" + id, {
                        id: id,
                        _token: "{{ csrf_token() }}"
                    })
                    .done(function() {
                        $('#deleteStudent').modal('hide');
                        toastr.success('Student deleted successfully!', '', {
                            timeOut: 1000
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    })
                    .fail(function(xhr, status, error) {
                        toastr.error('Error deleting student: ' + error);
                    });
            });
            // Student Lock Modal Hide
            $("#closeStudentLockModalBtn").click(function(e) {
                e.preventDefault();
                $("#lockStudent").modal('hide');
            });
            // Student Modal Show And lock
            $(document).on('click', '#lockBtn', function(event) {
                event.preventDefault();
                var id = $(this).data('id');
                $('#lockStudent').modal('show');
                $('#lockStudentBtnModal').val(id);
            });
            $(document).on('click', '#lockStudentBtnModal', function(event) {
                event.preventDefault();
                var id = $(this).data('id');
                $('#lockStudent').modal('show');
                $('#lockStudentBtnModal').val(id);
            });
            $('#lockStudentBtnModal').click(function() {
                var id = $(this).val();
                $.post("/eeeeeertertr/" + id, {
                        id: id,
                        _token: "{{ csrf_token() }}"
                    })
                    .done(function() {
                        $('#lockStudent').modal('hide');
                        toastr.success('Student locked successfully!', '', {
                            timeOut: 1000
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    })
                    .fail(function(xhr, status, error) {
                        toastr.error('Error locking student: ' + error);
                    });
            });
        });
    </script>
@endsection
