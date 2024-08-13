@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Lab Reports</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Lab Reports</li>
                                </ol>
                            </nav>
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
                                <h4 class="box-title">Radiology List</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="bb-2">No.</th>
                                                <th class="bb-2">Test</th>
                                                <th class="bb-2">Lab</th>
                                                <th class="bb-2">Priority</th>
                                                <th class="bb-2">Cost</th>
                                                <th class="bb-2">Handling</th>
                                                <th class="bb-2">Coll. By</th>
                                                <th class="bb-2">Status</th>
                                                <th class="bb-2">Result</th>
                                                <th class="bb-2">Signed</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Blood Count</td>
                                                <td>Microbiology</td>
                                                <td><span class="badge badge-warning">Law</span></td>
                                                <td>N500</td>
                                                <td>Johen Doe</td>
                                                <td>5.45pm 11/05</td>
                                                <td><span class="badge badge-success">Result Added</span></td>
                                                <td>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#result"
                                                        class="text-info">Result </a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#comment-dialog" class="text-info">Comment </a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-toggle"
                                                        data-bs-toggle="button" aria-pressed="false">
                                                        <span class="handle"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>CMS</td>
                                                <td>Microbiology</td>
                                                <td><span class="badge badge-danger">High</span></td>
                                                <td>N500</td>
                                                <td>Johen Doe</td>
                                                <td>5.45pm 11/05</td>
                                                <td><span class="badge badge-success">Result Added</span></td>
                                                <td>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#result"
                                                        class="text-info">Result </a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#comment-dialog" class="text-info">Comment </a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-toggle"
                                                        data-bs-toggle="button" aria-pressed="false">
                                                        <span class="handle"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Covid</td>
                                                <td>Microbiology</td>
                                                <td><span class="badge badge-warning">Law</span></td>
                                                <td>N500</td>
                                                <td>Johen Doe</td>
                                                <td>5.45pm 11/05</td>
                                                <td><span class="badge badge-success">Result Added</span></td>
                                                <td>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#result"
                                                        class="text-info">Result </a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#comment-dialog" class="text-info">Comment </a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-toggle"
                                                        data-bs-toggle="button" aria-pressed="false">
                                                        <span class="handle"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Urin</td>
                                                <td>Microbiology</td>
                                                <td><span class="badge badge-danger">High</span></td>
                                                <td>N500</td>
                                                <td>Johen Doe</td>
                                                <td>5.45pm 11/05</td>
                                                <td><span class="badge badge-success">Result Added</span></td>
                                                <td>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#result"
                                                        class="text-info">Result </a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#comment-dialog" class="text-info">Comment </a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-toggle"
                                                        data-bs-toggle="button" aria-pressed="false">
                                                        <span class="handle"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Blood Count</td>
                                                <td>Microbiology</td>
                                                <td><span class="badge badge-danger">High</span></td>
                                                <td>N500</td>
                                                <td>Johen Doe</td>
                                                <td>5.45pm 11/05</td>
                                                <td><span class="badge badge-success">Result Added</span></td>
                                                <td>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#result"
                                                        class="text-info">Result </a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#comment-dialog" class="text-info">Comment </a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-toggle"
                                                        data-bs-toggle="button" aria-pressed="false">
                                                        <span class="handle"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>HB</td>
                                                <td>Microbiology</td>
                                                <td><span class="badge badge-warning">Law</span></td>
                                                <td>N500</td>
                                                <td>Johen Doe</td>
                                                <td>5.45pm 11/05</td>
                                                <td><span class="badge badge-success">Result Added</span></td>
                                                <td>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#result"
                                                        class="text-info">Result </a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#comment-dialog" class="text-info">Comment </a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-toggle"
                                                        data-bs-toggle="button" aria-pressed="false">
                                                        <span class="handle"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>MD</td>
                                                <td>Microbiology</td>
                                                <td><span class="badge badge-warning">Law</span></td>
                                                <td>N500</td>
                                                <td>Johen Doe</td>
                                                <td>5.45pm 11/05</td>
                                                <td><span class="badge badge-success">Result Added</span></td>
                                                <td>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#result"
                                                        class="text-info">Result </a>
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#comment-dialog" class="text-info">Comment </a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-toggle"
                                                        data-bs-toggle="button" aria-pressed="false">
                                                        <span class="handle"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
