@extends('backend.layouts.app')
@section('title') Chi tiết đơn hàng @endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-header">
                            <h3 class="card-title">Chi tiết đơn hàng</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap ">
                                <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th>Sản phẩm</th>
                                    <th>SỐ lượng</th>
                                    <th>Giá tiền</th>
                                    <th>Thành tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (!$orders->isEmpty())
                                    @php $i = 1 @endphp
                                    @foreach($orders as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $item->product->name ?? "" }}</td>
                                            <td>{{ $item->quantities }}</td>
                                            <td>{{ number_format($item->product->price ?? 0,0,',','.') }} VNĐ</td>
                                            <td>{{ number_format($item->quantities * $item->product->price ?? 0,0,',','.') }} VNĐ</td>
                                        </tr>
                                        @php $i++ @endphp
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    @include('backend.common.modal_delete', ['messageConfirm' => 'Bạn có muốn xóa'])
@endsection
