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
    <div class="container-fluid content-inner pb-0 mt-4">
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center"
                            style="background-color: #FF971D">
                            <h4 class="card-title text-white mb-0">Coupon</h4>
                            {{-- <a href="" style="float: right;" class="add-btn-studet-list">Add
                                Coupon</a> --}}
                            <a href="#" style="float: right;" class="add-btn-studet-list import_show">Add
                                Import CSV</a>
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
                                            <th class="text-nowrap">Sr NO</th>
                                            <th class="text-nowrap">Coupon Code</th>
                                            <th class="text-nowrap">Discount</th>
                                            <th class="text-nowrap">Expired</th>
                                            <th class="text-nowrap">Coupon Code Provided or Not</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($coupan as $item)
                                            <tr>
                                                <td> {{ $loop->index + 1 }}</td>
                                                <td>{{ $item->cupan_code }}</td>
                                                <td>{{ $item->discount_amount }}</td>
                                                <td>
                                                    @if ($item->is_expire == '1')
                                                        <a href="#" class="btn btn-danger">Expired</a>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item->is_share == '0')
                                                        <a data-id='{{$item->id}}' href="#" class="btn btn-danger close"><i
                                                                class="fa fa-close"></i></a>
                                                    @else
                                                        <a data-id='{{$item->id}}'  href="#" class="btn btn-success check"><i
                                                                class="fa fa-check"></i></a>
                                                    @endif
                                                </td>

                                                <td class="d-flex flex-no-wrap">
                                                        <a href="#" class="edit" data-id='{{$item->id}}' data-cupan_code='{{$item->cupan_code}}' data-discount_amount='{{$item->discount_amount}}'><i class="fa fa-edit" style="font-size: 25px"></i></a>
                                                        <a href="#" class="delete" data-id='{{$item->id}}' style="margin-left:7px;color:red"><i class="fa fa-trash" style="font-size: 25px"></i></a>
                                                   
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

 
    <!-- Import show -->
    <div class="modal fade" id="impoer_model_show">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Upload CSV file</h4>
                </div>
                <form action="{{ url('ImportCoupan') }}" method="POST" enctype="multipart/form-data" style="padding: 3%;">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Import Edit Modal -->
    <div class="modal fade" id="editmodel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit</h4>
                </div>
                <form action="{{ url('coupan_update') }}" method="POST" enctype="multipart/form-data" style="padding: 3%;">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <strong>Cupan Code</strong>
                    <input type="text"  class="form-control" id="cupan_code" name="cupan_code">
                    <strong>Discount</strong>
                    <input type="text"  class="form-control" id="discount_amount" name="discount_amount">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- check model -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-content-delete">
                <div class="modal-header" style="background-color: #dfe8eb">
                    <h5 class="modal-title" id="myModalLabel">Provide Coupan</h5>

                </div>
                <div class="modal-body">
                    <h5 class="text-center" style="margin:auto ">Are you sure you want to Coupan Provide?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                      >NO</button>
                        <button type="button" id="deletemember" class="btn btn-primary">YES</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- rong model -->
    <div class="modal fade" id="wrongemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-content-delete">
                <div class="modal-header" style="background-color: #dfe8eb">
                    <h5 class="modal-title" id="myModalLabel">Provide Coupan</h5>

                </div>
                <div class="modal-body">
                    <h5 class="text-center" style="margin:auto ">Are you sure you want to Coupan Remove Provide?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                        >NO</button>
                    <button type="button" id="wrongmember" class="btn btn-secondary">YES</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- rong model -->
    <div class="modal fade" id="delete_code_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-content-delete">
                <div class="modal-header" style="background-color: #dfe8eb">
                    <h5 class="modal-title" id="myModalLabel">Delete</h5>

                </div>
                <div class="modal-body">
                    <h5 class="text-center" style="margin:auto ">Are you sure you want to delete Entry?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                        >NO</button>
                    <button type="button" id="delete_codemember" class="btn btn-secondary">YES</button>
                    </form>
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
            $(document).on('click', '.import_show', function(event) {
                event.preventDefault();
                $('#impoer_model_show').modal('show');

            });

            $(document).on('click', '.delete', function(event){
                event.preventDefault();
                var id = $(this).data('id');
                $('#delete_code_modal').modal('show');
                $('#delete_codemember').val(id);
            });

            $('#delete_codemember').click(function() {
                var id = $(this).val();
                $.post("{{ url('coupan_code_delete') }}", {
                    id: id,
                    _token: "{{ csrf_token() }}"
                }, function() {
                    $('#delete_code_modal').modal('hide');
                    location.reload();
                });
            });

            $(document).on('click', '.close', function(event) {
                event.preventDefault();
                var id = $(this).data('id');
                $('#deletemodal').modal('show');
                $('#deletemember').val(id);
            });

            $('#deletemember').click(function() {
                var id = $(this).val();
                console.log(id);
                $.post("{{ url('provide_coupan') }}", {
                    id: id,
                    _token: "{{ csrf_token() }}"
                }, function() {
                    $('#deletemodal').modal('hide');
                    location.reload();
                });
            });
            
            $(document).on('click', '.check', function(event) {
                event.preventDefault();
                var id = $(this).data('id');
                $('#wrongemodal').modal('show');
                $('#wrongmember').val(id);
            });

            $('#wrongmember').click(function() {
                var id = $(this).val();
                console.log(id);
                $.post("{{ url('provide_coupan') }}", {
                    id: id,
                    _token: "{{ csrf_token() }}"
                }, function() {
                    $('#wrongemodal').modal('hide');
                    location.reload();
                });
            });

            $(document).on('click', '.edit', function(event){
                event.preventDefault();
                 var id = $(this).data('id');
                 var cupan_code = $(this).data('cupan_code');
                 var discount_amount = $(this).data('discount_amount');

                 $('#editmodel').modal('show');
                 $('#cupan_code').val(cupan_code);
                 $('#discount_amount').val(discount_amount);
                 $('#id').val(id);
            })




        });
    </script>
@endsection
