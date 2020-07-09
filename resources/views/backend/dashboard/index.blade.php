@extends('backend.layouts.app')
@section('title') Dashboard @endsection
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title">Latest Orders</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer name</th>
                                    <th>Facility</th>
                                    <th>Status</th>
                                    <th>Registered date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>山田恭平（やまだきょうへい）</td>
                                    <td>F1</td>
                                    <td>
                                        <span class="badge badge-success">Shipped</span>
                                    </td>
                                    <td>2020/09/08</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>山田恭平（やまだきょうへい）</td>
                                    <td>F1</td>
                                    <td>
                                        <span class="badge badge-warning">Pending</span>
                                    </td>
                                    <td>2020/09/08</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>山田恭平（やまだきょうへい）</td>
                                    <td>F2</td>
                                    <td>
                                        <span class="badge badge-danger">Delivered</span>
                                    </td>
                                    <td>2020/09/08</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>山田恭平（やまだきょうへい）</td>
                                    <td>F2</td>
                                    <td>
                                        <span class="badge badge-success">Shipped</span>
                                    </td>
                                    <td>2020/09/08</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>山田恭平（やまだきょうへい）</td>
                                    <td>F1</td>
                                    <td>
                                        <span class="badge badge-success">Shipped</span>
                                    </td>
                                    <td>2020/09/08</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title">Lastest Customer</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer name</th>
                                    <th>Registered date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>山田恭平（やまだきょうへい）</td>
                                    <td>2020/09/08</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>山田恭平（やまだきょうへい）</td>
                                    <td>2020/09/08</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>山田恭平（やまだきょうへい）</td>
                                    <td>2020/09/08</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>山田恭平（やまだきょうへい）</td>
                                    <td>2020/09/08</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>山田恭平（やまだきょうへい）</td>
                                    <td>2020/09/08</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Customers</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title">Lastest Event</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Event name</th>
                                    <th>Registered date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>山田恭平（やまだきょうへい）</td>
                                    <td>2020/09/08</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>山田恭平（やまだきょうへい）</td>
                                    <td>2020/09/08</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>山田恭平（やまだきょうへい）</td>
                                    <td>2020/09/08</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>山田恭平（やまだきょうへい）</td>
                                    <td>2020/09/08</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>山田恭平（やまだきょうへい）</td>
                                    <td>2020/09/08</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Events</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Events</a>
                    </div>
                    <!-- /.card-footer -->
                </div>
            </div>
        </div>
    </div><!--/. container-fluid -->
</section>
@endsection
