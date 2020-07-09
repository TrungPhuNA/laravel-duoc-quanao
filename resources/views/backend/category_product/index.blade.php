@extends('backend.layouts.app')
@section('title') Danh sách loại sản phẩm @endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-header">
                            <h3 class="card-title">Danh sách loại sản phẩm</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                                        title="Remove">
                                    <i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap ">
                                <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Hiển thị</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="checkbox" name="item"></td>
                                    <td>name</td>
                                    <td>slug</td>
                                    <td>
                                        <span class="badge bg-success">có</span>
                                    </td>
                                    <td><a class="btn btn-primary" href="{{ route('category_product.edit', 1) }}"><i
                                                    class="fa fa-pencil"></i>Edit</a></td>
                                    <td><a id="1" class="btn btn-danger btn-sm btn-delete" href="#"><i
                                        class="fas fa-trash"></i>Delete
                                        <form method="post" action="{{ route('category_product.destroy', 1) }}"
                                              id="form_1">
                                          {{ csrf_field() }}
                                        </form>
                                    </a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    @include('backend.common.modal_delete', ['messageConfirm' => 'bạn có muốn xóa'])
@endsection
