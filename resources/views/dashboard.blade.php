@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Patients</h4>
                        <div class="d-inline-block align-items-center">
                        </div>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="productorder" class="table table-hover no-wrap product-order"
                                        data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>Time</th>
                                                <th>Pateint Name</th>
                                                <th>Severity</th>
                                                <th>Patient Type</th>
                                                <th>Mobile</th>
                                                <th>Emergency Number</th>
                                                <th>Location</th>
                                                <th>Battery</th>
                                                <th>Connection Status</th>
                                                {{-- <th>Ack By</th>
                                                <th>Ack Time</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody id="patient_data">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
    <script>
        // Call patients api
        patients();

        setInterval(patients, 30000);
    </script>
@endsection
