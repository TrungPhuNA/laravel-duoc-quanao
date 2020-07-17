@extends('backend.layouts.app')
@section('title') Danh sách đơn hàng @endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-header">
                            <h3 class="card-title">Danh sách đơn hàng</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap ">
                                <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th>Tên KH</th>
                                    <th>Tổng tiền</th>
                                    <th>Ngày tạo</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (!$transactions->isEmpty())
                                    @php $i = 1 @endphp
                                    @foreach($transactions as $item)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $item->user->name ?? "" }}</td>
                                            <td>{{ number_format($item->tr_total,0,',','.') }} VNĐ</td>
                                            <td>{{ $item->created_at }}</td>
                                        </tr>
                                        @php $i++ @endphp
                                    @endforeach
                                 @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        @if($transactions->hasPages())
                          <div class="pagination text-center mb-4">
                            {{ $transactions->links() }}
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
