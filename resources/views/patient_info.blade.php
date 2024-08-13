@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Heart-Rate History</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('dashboard') }}"><i class="mdi mdi-home-outline"></i></a>
                                    </li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-8">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Trend-Week</h4>
                            </div>
                            <div class="box-body">
                                <div id="axis-timezone"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 connectedSortable">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Style 3</h4>

                                <ul class="box-controls pull-right">
                                    <li><a class="box-btn-close" href="#"></a></li>
                                    <li><a class="box-btn-slide" href="#"></a></li>
                                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                                </ul>
                            </div>
                            <div class="box-body p-10">
                                <ul class="todo-list">
                                    <li class="bg-light p-0 mb-15">
                                        <div class="position-relative p-20">
                                            <!-- drag handle -->
                                            <div class="handle handle2"></div>
                                            <!-- checkbox -->
                                            <input type="checkbox" id="basic_checkbox_10" class="filled-in" />
                                            <label for="basic_checkbox_10" class="mb-0 h-15 ms-15"></label>
                                            <!-- todo text -->
                                            <span class="text-line fs-18">Phasellus interdum</span>
                                            <!-- General tools such as edit or delete-->
                                            <div class="pull-right d-block text-dark flexbox">
                                                <a href="" data-bs-toggle="tooltip" data-container="body"
                                                    title="" data-bs-original-title="Edit"><i
                                                        class="fa fa-edit"></i></a>
                                                <a href="" data-bs-toggle="tooltip" data-container="body"
                                                    title="" data-bs-original-title="Remove"><i
                                                        class="fa fa-trash-o"></i></a>
                                            </div>
                                            <div class="mt-5 ms-50 ps-5">
                                                Sed ut perspiciatis unde omnis iste natus error sit.
                                            </div>
                                            <div class="mt-5 ms-50 ps-5"><em>21/06/2018</em></div>
                                        </div>
                                    </li>
                                    <li class="bg-light p-0 mb-15">
                                        <div class="position-relative p-20">
                                            <!-- drag handle -->
                                            <div class="handle handle2"></div>
                                            <!-- checkbox -->
                                            <input type="checkbox" id="basic_checkbox_11" class="filled-in" />
                                            <label for="basic_checkbox_11" class="mb-0 h-15 ms-15"></label>
                                            <!-- todo text -->
                                            <span class="text-line fs-18">Floor cool cinders</span>
                                            <!-- General tools such as edit or delete-->
                                            <div class="pull-right d-block text-dark flexbox">
                                                <a href="" data-bs-toggle="tooltip" data-container="body"
                                                    title="" data-bs-original-title="Edit"><i
                                                        class="fa fa-edit"></i></a>
                                                <a href="" data-bs-toggle="tooltip" data-container="body"
                                                    title="" data-bs-original-title="Remove"><i
                                                        class="fa fa-trash-o"></i></a>
                                            </div>
                                            <div class="mt-5 ms-50 ps-5">
                                                Sed ut perspiciatis unde omnis iste natus error sit.
                                            </div>
                                            <div class="mt-5 ms-50 ps-5"><em>21/06/2018</em></div>
                                        </div>
                                    </li>
                                    <li class="bg-light p-0 mb-15">
                                        <div class="position-relative p-20">
                                            <!-- drag handle -->
                                            <div class="handle handle2"></div>
                                            <!-- checkbox -->
                                            <input type="checkbox" id="basic_checkbox_12" class="filled-in" />
                                            <label for="basic_checkbox_12" class="mb-0 h-15 ms-15"></label>
                                            <!-- todo text -->
                                            <span class="text-line fs-18">Floor cool cinders</span>
                                            <!-- General tools such as edit or delete-->
                                            <div class="pull-right d-block text-dark flexbox">
                                                <a href="" data-bs-toggle="tooltip" data-container="body"
                                                    title="" data-bs-original-title="Edit"><i
                                                        class="fa fa-edit"></i></a>
                                                <a href="" data-bs-toggle="tooltip" data-container="body"
                                                    title="" data-bs-original-title="Remove"><i
                                                        class="fa fa-trash-o"></i></a>
                                            </div>
                                            <div class="mt-5 ms-50 ps-5">
                                                Sed ut perspiciatis unde omnis iste natus error sit.
                                            </div>
                                            <div class="mt-5 ms-50 ps-5"><em>21/06/2018</em></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="box-title">Trend- Last 7 min</h4>
                            </div>
                            <div class="box-body">
                                <div id="axis-timezone1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->

    <!-- Include D3.js and C3.js JavaScript files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.16.0/d3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.js"></script>
    <script>
        // Convert PHP data to JavaScript
        var chartData = @json($data);

        // Extract dates and values
        var dates = chartData.map(item => item.date);
        var values = chartData.map(item => item.value);

        // Add 'x' label to dates array
        dates.unshift('x');

        // Add 'data1' label to values array
        values.unshift('Heart Rate');
    </script>

    <script>
        var t = c3.generate({
            bindto: "#axis-timezone",
            size: {
                height: 350
            },
            color: {
                pattern: ["#673ab7", "#4974e0"]
            },
            data: {
                x: "x",
                xFormat: "%Y-%m-%d",
                columns: [
                    dates,
                    values,
                ],
            },
            axis: {
                x: {
                    type: "timeseries",
                    localtime: false,
                    tick: {
                        format: "%Y-%m-%d"
                    },
                },
            },
            grid: {
                y: {
                    show: true
                }
            },
        });
    </script>

    <script>
        // Convert PHP data to JavaScript
        var chartData = @json($dataLast7min);

        // Extract times and values
        var times = chartData.map(item => item.time);
        var values = chartData.map(item => item.value);

        // Add 'x' label to times array
        times.unshift('x');

        // Add 'Heart Rate' label to values array
        values.unshift('Heart Rate');

        var t = c3.generate({
            bindto: "#axis-timezone1",
            size: {
                height: 350
            },
            color: {
                pattern: ["#673ab7", "#4974e0"]
            },
            data: {
                x: "x",
                xFormat: "%H:%M",
                columns: [
                    times,
                    values,
                ],
            },
            axis: {
                x: {
                    type: "timeseries",
                    localtime: false,
                    tick: {
                        format: "%H:%M"
                    },
                },
            },
            grid: {
                y: {
                    show: true
                }
            },
        });
    </script>
@endsection
