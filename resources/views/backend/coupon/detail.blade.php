@extends('backend.layouts.app')
@section('title') Chi tiết đơn nhập hàng @endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-tools">
                            <a class="btn btn-success btn-sm" href="{{ route('counp.index') }}"><span
                                class="fas fa-plus"></span> Back </a>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap ">
                                <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Gía</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (!$couponDetail->coupoun_detail()->isEmpty())
                                    @php $i = 1 @endphp
                                    @foreach($couponDetail->coupoun_detail() as $counpDetail)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $counpDetail->product()->name }}</td>
                                            <td>{{ $counpDetail->quantities }}</td>
                                            <td>{{ $counpDetail->price }}</td>
                                        </tr>
                                        @php $i++ @endphp
                                    @endforeach
                                 @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        @if($coupons->hasPages())
                          <div class="pagination text-center mb-4">
                            {{ $coupons->links() }}
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
