@extends('backend.layouts.app')
@section('title') Danh sách Người dùng @endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-header">
                            <h3 class="card-title">Danh sách Người dùng</h3>

                            <div class="card-tools">
                                <a class="btn btn-success btn-sm" href="{{ route('order.create') }}"><span
                                    class="fas fa-plus"></span> Create </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap ">
                                <thead>
                                <tr>
                                    <th>Stt</th>
                                </tr>
                                </thead>
                                <tbody>        
                                @if (!$orders->isEmpty())
                                    @php $i = 1 @endphp
                                    @foreach($orders as $or)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="{{ route('order.edit', $or->id) }}">
                                                    <i class="fas fa-pencil-alt"></i> Sửa
                                                </a>
                                            </td>
                                            <td>
                                                <a id="{{$or->id}}" class="btn btn-danger btn-sm btn-delete" href="#">
                                                    <i class="fas fa-trash"></i> Xóa
                                                    <form method="post" action="{{ route('order.destroy', $or->id) }}"
                                                          id="form_{{$or->id}}">
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
                        @if($orders->hasPages())
                          <div class="pagination text-center mb-4">
                            {{ $orders->links() }}
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
