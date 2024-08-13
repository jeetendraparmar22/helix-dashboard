@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Patient Details</h4>

                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-8 col-12">
                        <div class="box">
                            <div class="box-body wed-up position-relative">
                                <div class="d-md-flex align-items-center">
                                    <div class="me-20 text-center text-md-start">
                                        <img src="../images/avatar/2.jpg" class="bg-success-light rounded10"
                                            alt="" />
                                        <div class="text-center my-10">
                                            <p class="mb-0"></p>
                                            <h4>{{ $data->condition }}</h4>
                                        </div>
                                    </div>
                                    <div class="mt-40">
                                        <h4 class="fw-600 mb-5">{{ $data->full_name }}</h4>
                                        <h5 class="fw-500 mb-5">#p- {{ $data->id }}</h5>
                                        <p>
                                            <i class="fa fa-clock-o"></i> Admitted on {{ $admintted_date }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="flexbox bb-1 mb-15">
                                    <div>
                                        <p>
                                            <span class="text-mute">Doctor Name:</span>
                                            <strong>Jonsahn</strong>
                                        </p>
                                    </div>
                                    <div>
                                        <p>
                                            <span class="text-mute">Patient Id:</span>
                                            <strong>{{ $data->id }}</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row bb-1 pb-10">
                                            <div class="col-4">
                                                <img class="img-fluid float-start w-30 mt-10 me-10"
                                                    src="../images/weight.png" alt="" />
                                                <div>
                                                    <p class="mb-0"><small>Weight</small></p>
                                                    <h5 class="mb-0"><strong>{{ $data->weight }}</strong></h5>
                                                </div>
                                            </div>
                                            <div class="col-4 bs-1 be-1">
                                                <img class="img-fluid float-start w-30 mt-10 me-10"
                                                    src="../images/human.png" alt="" />
                                                <div>
                                                    <p class="mb-0"><small>Height</small></p>
                                                    <h5 class="mb-0"><strong>{{ $data->height }}</strong></h5>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <img class="img-fluid float-start w-30 mt-10 me-10" src="../images/bmi.png"
                                                    alt="" />
                                                <div>
                                                    <p class="mb-0"><small>BMI</small></p>
                                                    <h5 class="mb-0"><strong>30.34</strong></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body pt-0">
                                <p><small>Recorded on {{ $admintted_date }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxxl-4 col-xl-4 col-lg-6 col-12">
                        <div class="box box-body pull-up" href="#">
                            <div>
                                <h4 class="box-title mb-0">Heart Rate(BPM)</h4>

                            </div>
                            <div class="d-flex align-items-center">
                                <img class="me-10 avatar avatar-lg" src="../images/svg-icon/medical/heart.png"
                                    alt="..." />
                                <div class="text-start">
                                    <h3 class="text-lightgreen mb-0">{{ $data->latestHeartRate->value }}</h3>
                                    <p class="text-light">Ref-60-90</p>
                                </div>
                            </div>
                            <div class="mt-10">
                                <a href="{{ url('more-info', ['id' => $data->id]) }}"
                                    class="waves-effect waves-light w-p100 btn text-start btn-warning-light">History
                                    <i class="ti-arrow-right pull-right fs-20"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxxl-4 col-xl-4 col-lg-6 col-12">
                        <div class="box box-body pull-up" href="#">
                            <div>
                                <h4 class="box-title mb-0">Blood Glucose (mg/dl)</h4>
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="me-10 avatar avatar-lg" src="../images/petri-dish.svg" alt="..." />
                                <div class="text-start">
                                    <h3 class="text-lightgreen mb-0">25</h3>
                                    <p class="text-light">Ref-140</p>
                                </div>
                            </div>
                            <div class="mt-10">
                                <a href=""
                                    class="waves-effect waves-light w-p100 btn text-start btn-warning-light">Illness
                                    History
                                    <i class="ti-arrow-right pull-right fs-20"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxxl-4 col-xl-4 col-lg-6 col-12">
                        <div class="box box-body pull-up" href="#">
                            <div>
                                <h4 class="box-title mb-0">SPO2(%)</h4>

                            </div>
                            <div class="d-flex align-items-center">
                                <img class="me-10 avatar avatar-lg" src="../images/svg-icon/medical/liver.png"
                                    alt="..." />
                                <div class="text-start">
                                    <h3 class="text-lightgreen mb-0">98</h3>
                                    <p class="text-light">Ref-95-100</p>
                                </div>
                            </div>
                            <div class="mt-10">
                                <a href="reports.html"
                                    class="waves-effect waves-light w-p100 btn text-start btn-warning-light">Illness
                                    History
                                    <i class="ti-arrow-right pull-right fs-20"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxxl-4 col-xl-4 col-lg-6 col-12">
                        <div class="box box-body pull-up" href="#">
                            <div>
                                <h4 class="box-title mb-0">Uric Acid(mg/dl)</h4>

                            </div>
                            <div class="d-flex align-items-center">
                                <img class="me-10 avatar avatar-lg" src="../images/svg-icon/medical/stomach.png"
                                    alt="..." />
                                <div class="text-start">
                                    <h3 class="text-lightgreen mb-0">4.52</h3>
                                    <p class="text-light">Ref-4-8.5</p>
                                </div>
                            </div>
                            <div class="mt-10">
                                <a href="reports.html"
                                    class="waves-effect waves-light w-p100 btn text-start btn-warning-light">Illness
                                    History
                                    <i class="ti-arrow-right pull-right fs-20"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxxl-4 col-xl-4 col-lg-6 col-12">
                        <div class="box box-body pull-up" href="#">
                            <div>
                                <h4 class="box-title mb-0">Respiratory Rate(bpm)</h4>

                            </div>
                            <div class="d-flex align-items-center">
                                <img class="me-10 avatar avatar-lg" src="../images/svg-icon/medical/liver.png"
                                    alt="..." />
                                <div class="text-start">
                                    <h3 class="text-lightgreen mb-0">25</h3>
                                    <p class="text-light">Ref-12-20</p>
                                </div>
                            </div>
                            <div class="mt-10">
                                <a href="reports.html"
                                    class="waves-effect waves-light w-p100 btn text-start btn-warning-light">Illness
                                    History
                                    <i class="ti-arrow-right pull-right fs-20"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxxl-4 col-xl-4 col-lg-6 col-12">
                        <div class="box box-body pull-up" href="#">
                            <div>
                                <h4 class="box-title mb-0">Blood Fat(mg/dl)</h4>

                            </div>
                            <div class="d-flex align-items-center">
                                <img class="me-10 avatar avatar-lg" src="../images/svg-icon/medical/brain.png"
                                    alt="..." />
                                <div class="text-start">
                                    <h3 class="text-lightgreen mb-0">207</h3>
                                    <p class="text-light">Ref-< 200 </p>
                                </div>
                            </div>
                            <div class="mt-10">
                                <a href="reports.html"
                                    class="waves-effect waves-light w-p100 btn text-start btn-warning-light">Illness
                                    History
                                    <i class="ti-arrow-right pull-right fs-20"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxxl-4 col-xl-4 col-lg-6 col-12">
                        <div class="box box-body pull-up" href="#">
                            <div>
                                <h4 class="box-title mb-0">Latest Diagnosis</h4>
                                <ul class="box-controls pull-right">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="#" class="px-10 pt-0"><i
                                                class="ti-more-alt rotate-90 px-0"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                            <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                            <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="ti-settings"></i>
                                                Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="me-10 avatar avatar-lg" src="../images/svg-icon/medical/icon-heart.svg"
                                    alt="..." />
                                <div class="text-start">
                                    <h3 class="text-lightgreen mb-0">Heart Disease</h3>
                                    <p class="text-light">Dilate Cardiomyopathy</p>
                                </div>
                            </div>
                            <div class="mt-10">
                                <a href="reports.html"
                                    class="waves-effect waves-light w-p100 btn text-start btn-warning-light">Illness
                                    History
                                    <i class="ti-arrow-right pull-right fs-20"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxxl-4 col-xl-4 col-lg-6 col-12">
                        <div class="box box-body pull-up" href="#">
                            <div>
                                <h4 class="box-title mb-0">Latest Diagnosis</h4>
                                <ul class="box-controls pull-right">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="#" class="px-10 pt-0"><i
                                                class="ti-more-alt rotate-90 px-0"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                            <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                            <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="ti-settings"></i>
                                                Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="me-10 avatar avatar-lg" src="../images/svg-icon/medical/icon-heart.svg"
                                    alt="..." />
                                <div class="text-start">
                                    <h3 class="text-lightgreen mb-0">Heart Disease</h3>
                                    <p class="text-light">Dilate Cardiomyopathy</p>
                                </div>
                            </div>
                            <div class="mt-10">
                                <a href="reports.html"
                                    class="waves-effect waves-light w-p100 btn text-start btn-warning-light">Illness
                                    History
                                    <i class="ti-arrow-right pull-right fs-20"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxxl-4 col-xl-4 col-lg-6 col-12">
                        <div class="box box-body pull-up" href="#">
                            <div>
                                <h4 class="box-title mb-0">Latest Diagnosis</h4>
                                <ul class="box-controls pull-right">
                                    <li class="dropdown">
                                        <a data-bs-toggle="dropdown" href="#" class="px-10 pt-0"><i
                                                class="ti-more-alt rotate-90 px-0"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                            <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                            <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="ti-settings"></i>
                                                Settings</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center">
                                <img class="me-10 avatar avatar-lg" src="../images/svg-icon/medical/icon-heart.svg"
                                    alt="..." />
                                <div class="text-start">
                                    <h3 class="text-lightgreen mb-0">Heart Disease</h3>
                                    <p class="text-light">Dilate Cardiomyopathy</p>
                                </div>
                            </div>
                            <div class="mt-10">
                                <a href="reports.html"
                                    class="waves-effect waves-light w-p100 btn text-start btn-warning-light">Illness
                                    History
                                    <i class="ti-arrow-right pull-right fs-20"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
