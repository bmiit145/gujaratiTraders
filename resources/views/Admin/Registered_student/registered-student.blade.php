@extends('Admin.admin-dashboard')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

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

    <style>
        .dt-search {
            display: flex;
            justify-content: flex-end;
        }

        .dt-info {
            display: flex;
            justify-content: flex-end;
        }

        .paging_full_numbers {
            display: flex;
            justify-content: flex-end;
        }

        .buttons-excel {
            background: #00713c;
        }

        .dt-paging-button {
            padding: 5px 12px;
            background: rgb(16, 146, 70);
            color: #FFF;
            border: 1px solid #fff;
            border-radius: 5px;
        }

        .buttons-excel {
            background: #df65eb !important;
            color: #FFF !important;
            border: 1px solid #fff !important;
            border-radius: 5px !important;
        }

        .buttons-pdf {
            background: rgb(78, 193, 255) !important;
            color: #000 !important;
            border: 1px solid #fff !important;
            border-radius: 5px !important;
        }

        .buttons-print {
            background: rgb(255, 230, 0) !important;
            color: #000 !important;
            border: 1px solid #fff !important;
            border-radius: 5px !important;
        }

        .modal-bg {
            background: #FF971D;
            color: #fff;
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
                            style="background-color: #FF971D;padding:13px !important">
                            <h4 class="card-title text-white mb-0">Registered Students</h4>
                        </div>
                        <input type="hidden" id="studentData" value="{{ json_encode($registered_students) }}">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable" class="">
                                    <thead class="text-black">
                                        <tr>
                                            <th class="text-nowrap">NO</th>
                                            <th class="text-nowrap">Student Full Name</th>
                                            <th class="text-nowrap">Mobile Number</th>
                                            <th class="text-nowrap">Email</th>
                                            <th class="text-nowrap">Course Start Date</th>
                                            <th class="text-nowrap">Course End Date</th>
                                            <th class="text-nowrap">Payment Status</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($registered_students as $registered_student)
                                            <tr>

                                                <td> {{ $loop->index + 1 }}</td>
                                                <td>{{ $registered_student->full_name }}</td>
                                                <td>{{ $registered_student->phone }}</td>
                                                <td>{{ $registered_student->email }}</td>
                                                <td>{{ \Carbon\Carbon::parse($registered_student->course_start_date)->format('d-m-Y') }}</td>
                                                <td>
                                                    @if($registered_student->course_name == 'Advance')
                                                    {{ \Carbon\Carbon::parse($registered_student->course_start_date)->addMonths(3)->format('d-m-Y') }}
                                                    @elseif($registered_student->course_name == 'Master')
                                                    {{ \Carbon\Carbon::parse($registered_student->course_start_date)->addYear()->format('d-m-Y') }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($registered_student->is_payment === "0")
                                                        <span class="badge bg-danger">Payment Not Done</span>
                                                    @elseif ($registered_student->is_payment === "1")
                                                        <span class="badge bg-success">Payment Done</span>
                                                    @endif
                                                </td>
                                                
                                                <td>
                                                    <a class="fs-4 view-details" data-index="{{ $loop->index }}"><i
                                                            class="fa-solid fa-eye"></i></a>
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

    {{-- View Modal --}}
    <div class="modal fade bd-example-modal-lg" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header modal-bg">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">View Student</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                                <label for="recipient-name" class="col-form-label">Full name</label>
                                <input type="text" id="full_name" class="form-control" id="recipient-name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                                <label for="recipient-name" class="col-form-label">Country</label>
                                <input type="text" id="country" class="form-control" id="recipient-name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                                <label for="recipient-name" class="col-form-label">Street
                                    Address</label>
                                <input type="text" id="street_address" class="form-control" id="recipient-name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                                <label for="recipient-name" class="col-form-label">City</label>
                                <input type="text" id="city" class="form-control" id="recipient-name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                                <label for="recipient-name" class="col-form-label">State</label>
                                <input type="text" id="state" class="form-control" id="recipient-name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                                <label for="recipient-name" class="col-form-label">Pincode</label>
                                <input type="text" id="pincode" class="form-control" id="recipient-name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                                <label for="recipient-name" class="col-form-label">Phone</label>
                                <input type="text" id="phone" class="form-control" id="recipient-name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <input type="text" id="email" class="form-control" id="recipient-name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                                <label for="recipient-name" class="col-form-label">Course Start Date</label>
                                <input type="text" id="course_start_date" class="form-control" id="recipient-name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-3">
                                <label for="recipient-name" class="col-form-label">Course End Date</label>
                                <input type="text" id="course_end_date" class="form-control" id="recipient-name">
                            </div>
                            <div>
                                <label for="">Payment Status</label><br>
                                <div class="badge px-4" id="is_payment"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excelHtml5',
                        title: 'Card list',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Card list',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }
                    },
                    'print'
                ],
                lengthMenu: [10, 20, 50, 100, 200, 500],
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.view-details').click(function() {

                var index = $(this).data('index');
                var studentData = JSON.parse($('#studentData').val())[index];
                console.log(studentData);

                $('#full_name').val(studentData.full_name);
                $('#country').val(studentData.country);
                $('#street_address').val(studentData.street_address);
                $('#city').val(studentData.city);
                $('#state').val(studentData.state);
                $('#pincode').val(studentData.pincode);
                $('#phone').val(studentData.phone);
                $('#email').val(studentData.email);
                $('#course_start_date').val(studentData.course_start_date);

                if (studentData.course_name === 'Advance') {
                    var courseEndDate = moment(studentData.course_start_date).add(3, 'months').format('YYYY-MM-DD');
                    $('#course_end_date').val(courseEndDate);
                } else if (studentData.course_name === 'Master') {
                    var courseEndDate = moment(studentData.course_start_date).add(1, 'year').format('YYYY-MM-DD');
                    $('#course_end_date').val(courseEndDate);
                }

                if (studentData.is_payment === "0") {
                    $('#is_payment').text('Payment Not Done').removeClass('bg-success').addClass(
                        'bg-danger');
                } else if (studentData.is_payment === "1") {
                    $('#is_payment').text('Payment Done').removeClass('bg-danger').addClass('bg-success');
                }

                $('#viewModal').modal('show');
            });
        });
    </script>
@endsection
