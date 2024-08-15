@extends('Admin.admin-dashboard')

@section('content')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <style>

        .error {

            color: red !important;

        }



        .form-control:focus {

            color: var(--bs-body-color);

            background-color: var(--bs-body-bg);

            border-color: #FF971D;

            outline: 0;

            box-shadow: none;

        }



        .iti--allow-dropdown {

            width: 100%;

        }

    </style>

    <div class="container-fluid content-inner pb-0 mt-4">

        <div>

            <div class="row d-flex; justify-content-center">

                <div class="col-sm-12">

                    <div class="card">

                        <div class="card-header p-2 px-3" style="background-color: #FF971D;">

                            <h4 class="card-title text-white mb-0">Edit Event</h4>

                        </div>

                        <div class="card-body">

                            <div class="container-fluid">

                                <form class="row" action="{{ route('admin.update_upcoming_event') }}" method="POST">

                                    @csrf

                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">

                                        <label for="exampleInputEmail1" class="form-label">Event Name</label>

                                         <input type="hidden" class="form-control" value="{{ $event->id }}" placeholder="Enter Event Name" name="event_id">

                                        <input type="text" class="form-control" value="{{ $event->event_name }}" placeholder="Enter Event Name" name="event_name">

                                        @error('event_name')

                                            <div class="error">{{ $message }}</div>

                                        @enderror

                                    </div>



                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">

                                        <label for="exampleInputPassword1" class="form-label">Start Date</label>

                                        <input type="text" id="start_datepicker" value="{{ $event->event_start_date }}" class="form-control"

                                             placeholder="-- Please select event start date --" name="event_start_date">

                                        @error('event_start_date')

                                            <div class="error">{{ $message }}</div>

                                        @enderror

                                    </div>



                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">

                                        <label for="exampleInputPassword1" class="form-label">End Date</label>

                                        <input type="text" id="end_datepicker" value="{{ $event->event_end_date }}" class="form-control"

                                         placeholder="-- Please select event end date --" name="event_end_date">

                                        @error('event_end_date')

                                            <div class="error">{{ $message }}</div>

                                        @enderror

                                    </div>



                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">

                                        <label for="exampleInputPassword1" class="form-label">Event Location</label>

                                        <input type="text" class="form-control"  value="{{ $event->event_location }}"

                                            name="event_location" placeholder="Enter Location">

                                        @error('event_location')

                                            <div class="error">{{ $message }}</div>

                                        @enderror

                                    </div>



                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">

                                        <label for="exampleInputPassword1" class="form-label">Event Description

                                            (Optional)</label>

                                        <input type="text" class="form-control" value="{{ $event->event_description }}"

                                            name="event_description" placeholder="Enter Description">

                                        @error('event_description')

                                            <div class="error">{{ $message }}</div>

                                        @enderror

                                    </div>



                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6">

                                        <label for="exampleInputPassword1" class="form-label">Total Registered Users</label>

                                        <input type="text" class="form-control" value="{{ old('total_registered_users') }}"

                                            name="total_registered_users" placeholder="Enter Total Registered Users">

                                        @error('total_registered_users')

                                            <div class="error">{{ $message }}</div>

                                        @enderror

                                    </div>



                                    <div class="d-flex justify-content-center">

                                        <button type="submit" class="add-student-submit-btn">Update Event</button>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>



    <script>

        $(document).ready(function() {

            $("#start_datepicker").datetimepicker({

                format: 'd-m-Y h:i A',

                step: 5,

                formatTime: 'h:i A' 

            });





            $("#end_datepicker").datetimepicker({

                format: 'd-m-Y h:i A',

                step: 5,

                formatTime: 'h:i A' 

            });

        });

    </script>

@endsection

