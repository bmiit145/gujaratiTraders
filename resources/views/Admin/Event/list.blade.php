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
    </style>
    <div class="container-fluid content-inner pb-0 mt-4">
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center"
                            style="background-color: #FF971D">
                            <h4 class="card-title text-white mb-0">Events</h4>
                            <a href="{{ route('admin.upcoming_event_form') }}" style="float: right;"
                                class="add-btn-studet-list">Add
                                Events</a>
                        </div>
                        @if (session('success'))
                            <div class="d-flex justify-content-center mt-3">
                                <div class="alert alert-success w-50 text-center">
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable" class="">
                                    <thead class="text-black">
                                        <tr>
                                            <th class="text-nowrap">Event name</th>
                                            <th class="text-nowrap">Start Date</th>
                                            <th class="text-nowrap">End Date</th>
                                            <th class="text-nowrap">Location</th>
                                            <th class="text-nowrap">Description</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($events as $event)
                                            @if ($event->is_delete == 1)
                                                <tr>
                                                    <td>{{ $event->event_name }}</td>
                                                    <td>{{ $event->event_start_date }}</td>
                                                    <td>{{ $event->event_end_date }}</td>
                                                    <td>{{ $event->event_location }}</td>
                                                    <td>{{ $event->event_description }}</td>
                                                    <td class="d-flex flex-no-wrap">
                                                        <a href="{{ route('admin.edit_upcoming_event', $event->id) }}"
                                                            title="Edit" class="fa fa-edit fs-3 pe-2"></a>
                                                        <a href="#" title="Delete" id="deleteBtn"
                                                            data-id="{{ $event->id }}"
                                                            class="fa fa-trash text-danger fs-3 pe-2 mx-4"></a>
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
    <!-- Event Delete Modal -->
    <div class="modal fade" id="deleteEvent">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Event</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this Event?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="closeEventDeleteModalBtn">Close</button>
                    <button type="button" class="btn btn-danger" id="deleteEventBtnModal">Delete</button>
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
            // Event Delete Modal Hide
            $("#closeEventDeleteModalBtn").click(function(e) {
                e.preventDefault();
                $("#deleteEvent").modal('hide');
            });

            // Event Modal Show And Delete
            $(document).on('click', '#deleteBtn', function(event) {
                event.preventDefault();
                var id = $(this).data('id');
                $('#deleteEvent').modal('show');
                $('#deleteEventBtnModal').data('id',id);
            });
        
            $('#deleteEventBtnModal').click(function() {
                var id = $(this).data('id');
                $.post("/njkasnxsxkjxq/" + id, {
                        id: id,
                        _token: "{{ csrf_token() }}"
                    })
                    .done(function() {
                        $('#deleteEvent').modal('hide');
                        toastr.success('Event deleted successfully!', '', {
                            timeOut: 1000
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    })
                    .fail(function(xhr, status, error) {
                        toastr.error('Error deleting event: ' + error);
                    });
            });
        });
    </script>
@endsection
