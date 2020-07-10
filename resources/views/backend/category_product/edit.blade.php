@extends('backend.layouts.app')
@section('title') Chỉnh sửa danh mục sản phẩm @endsection
@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('category_product.update',$categoryProduct->id)}}" accept-charset="UTF-8" class="form-horizontal">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Tên <span class="note">*</span></label>

                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="name" id="name" value="{{ $categoryProduct->name }}">
                            @if ($errors && $errors->has('name'))
                                <p class="text-danger text-xs error-message">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Thể loại cha</label>
                        <div class="input-group date col-sm-4">
                            <select name="parent_id" id="parent_id" value="{{old('parent_id')}}" class="form-control">
                                <option value="">Thể loại cha</option>
                                @if (!$categoryProductAll->isEmpty())
                                    @foreach($categoryProductAll as $cat)
                                        @if($cat->id == $categoryProduct->parent_id)
                                            <option value="{{ $cat->id }}" selected="selected">{{ $cat->name }}</option>
                                        @elseif($cat->name != $categoryProduct->name)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endif
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Hiển thị</label>

                        <div class="col-sm-10">
                            <input name="status" type="checkbox" id="status" {{ $categoryProduct->status == 1 ? 'checked' : ''}}>
                        </div>
                    </div>
                    <input type="hidden" name="category_product_id" value="{{ $categoryProduct->id }}">
                    <!-- <div class="form-group row"> -->
                        <div class="form-group row">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-1">
                                <button class="btn btn-default float-left"><a style="color:black" href="{{ route('category_product.index') }}">Cancel</a></button>
                            </div>
                            <div class="col-sm-1">
                                <button type="submit" class="btn btn-info">Confirm</button>
                            </div>
                        </div>
                    <!-- </div> -->
                </form>
            </div>
        </div>
        <!-- /.card -->
    </section>
@endsection