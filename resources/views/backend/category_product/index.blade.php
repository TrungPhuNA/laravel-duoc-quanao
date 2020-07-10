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
                                <a class="btn btn-success btn-sm" href="{{ route('category_product.create') }}"><span
                                    class="fas fa-plus"></span> Create </a>
                            </div>
                            @if (!$categoryProduct->isEmpty())
                            <div class="form-search">
                                <form class="form-inline" action="{{ route('category_product.index') }}" method="get">
                                  <div class="form-row align-items-center margin-auto">
                                    <div class="form-group mr-2 mb-2">
                                      <label for="name" class="sr-only">Tên thể loại</label>
                                      <input type="text" name="name" value="ahaa" class="form-control" id="name"
                                             placeholder="Tên thể loại">
                                    </div>
                                    <button type="submit" class="btn-search btn btn-primary mb-2"><span
                                          class="fas fa-search"></span> Tìm kiếm </button>
                                  </div>
                                </form>
                            </div>
                            @endif
                        </div>
                        @if (!$categoryProduct->isEmpty())
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap ">
                                    <thead>
                                    <tr>
                                        <th>Stt</th>
                                        <th>Tên</th>
                                        <th>Slug</th>
                                        <th>Thể loại cha</th>
                                        <th>Hiển thị</th>
                                        <th>Chỉnh sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                   @foreach($categoryProduct as $category)
                                        <tr>
                                            <td><input type="checkbox" id="check_{{$category->id}}" name="check"></td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>{{ $category->parent_id ? $category->category_product_parent->name : '' }}</td>
                                            <td>
                                                <span class="badge bg-success">
                                                    @if ($category->status)
                                                        Có
                                                    @else
                                                        Không
                                                    @endif
                                                </span>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="{{ route('category_product.edit', $category->id) }}">
                                                    <i class="fas fa-pencil-alt"></i> Sửa
                                                </a>
                                            </td>
                                            <td>
                                                <a id="{{$category->id}}" class="btn btn-danger btn-sm btn-delete" href="#">
                                                    <i class="fas fa-trash"></i> Xóa
                                                    <form method="post" action="{{ route('category_product.destroy', $category->id) }}"
                                                          id="form_{{$category->id}}">
                                                      @csrf
                                                      @method('DELETE')
                                                    </form>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            @if($categoryProduct->hasPages())
                              <div class="pagination text-center mb-4">
                                {{ $categoryProduct->links() }}
                              </div>
                            @endif
                        @endif
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    @include('backend.common.modal_delete', ['messageConfirm' => 'Bạn có muốn xóa'])
@endsection
