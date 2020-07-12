@extends('backend.layouts.app')
@section('title') Danh sách sản phẩm @endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-header">
                            <h3 class="card-title">Danh sách sản phẩm</h3>

                            <div class="card-tools">
                                <a class="btn btn-success btn-sm" href="{{ route('product.create') }}"><span
                                    class="fas fa-plus"></span> Create </a>
                            </div>
                            <div class="form-search">
                                <form class="form-inline" action="{{ route('product.index') }}" method="get">
                                  <div class="form-row align-items-center margin-auto">
                                    <div class="form-group mr-2 mb-2">
                                      <label for="name" class="sr-only">Tên sản phẩm</label>
                                      <input type="text" name="name" value="{{ $request->get('name') }}" class="form-control" id="name"
                                             placeholder="Tên sản phẩm">
                                    </div>
                                    <button type="submit" class="btn-search btn btn-primary mb-2"><span
                                          class="fas fa-search"></span> Tìm kiếm </button>
                                  </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap ">
                                <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th>Image</th>
                                    <th>Tên</th>
                                    <th>Thể loại cha</th>
                                    <th>Nhà cung cấp</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Trạng thái</th>
                                    <th>Chỉnh sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (!$products->isEmpty())
                                    @php $i = 1 @endphp
                                    @foreach($products as $pro)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td width="150" height="100px">
                                                <img src="{{Storage::url('images/'.$pro->image)}}" width="150px" height="100px">
                                            </td>
                                            <td>{{ $pro->name }}</td>
                                            <td>{{ $pro->category_product_id ? $pro->category_product->name : '' }}</td>
                                            <td>{{ $pro->supplier_id ? $pro->supplier->name : '' }}</td>
                                            <td>{{ $pro->price }}</td>
                                            <td>{{ $pro->quantities }}</td>
                                            <td>
                                                <span class="badge bg-success">
                                                    @if ($pro->status)
                                                        Có
                                                    @else
                                                        Không
                                                    @endif
                                                </span>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="{{ route('product.edit', $pro->id) }}">
                                                    <i class="fas fa-pencil-alt"></i> Sửa
                                                </a>
                                            </td>
                                            <td>
                                                <a id="{{$pro->id}}" class="btn btn-danger btn-sm btn-delete" href="#">
                                                    <i class="fas fa-trash"></i> Xóa
                                                    <form method="post" action="{{ route('product.destroy', $pro->id) }}"
                                                          id="form_{{$pro->id}}">
                                                      @csrf
                                                      @method('DELETE')
                                                    </form>
                                                </a>
                                            </td>
                                        </tr>
                                        @php $i++ @endphp
                                    @endforeach    
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        @if($products->hasPages())
                          <div class="pagination text-center mb-4">
                            {{ $products->links() }}
                          </div>
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
