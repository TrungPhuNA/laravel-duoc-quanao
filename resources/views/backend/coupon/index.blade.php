@extends('backend.layouts.app')
@section('title') Phiếu nhập hàng @endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin nhập hàng</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap ">
                                <thead>
                                <tr>
                                    <th>Stt</th>
                                    <th>Mã phiếu</th>
                                    <th>Thời gian</th>
                                    <th>Nhân viên</th>
                                    <th>Chi tiết</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>        
                                @if (!$coupons->isEmpty())
                                    @php $i = 1 @endphp
                                    @foreach($coupons as $counp)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $counp->id }}</td>
                                            <td>{{ $counp->created_at }}</td>
                                            <td>{{ $counp->employee_id ? $counp->user()->name : ''}}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="{{ route('coupon.detail', $counp->id) }}">
                                                    <i class="fas fa-pencil-alt"></i> Chi tiết
                                                </a>
                                            </td>
                                            <td>
                                                <a id="{{$counp->id}}" class="btn btn-danger btn-sm btn-delete" href="#">
                                                    <i class="fas fa-trash"></i> Xóa
                                                    <form method="post" action="{{ route('coupon.destroy', $counp->id) }}"
                                                          id="form_{{$counp->id}}">
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
