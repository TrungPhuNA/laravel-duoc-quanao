@extends('backend.layouts.app')
@section('title') Danh mục sản phẩm @endsection
@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create</h3>

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
                <form method="POST" action="{{route('category_product.store')}}" accept-charset="UTF-8" class="form-horizontal">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name <span class="note">*</span></label>

                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                            @if ($errors && $errors->has('name'))
                                <p class="text-danger text-xs error-message">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="slug" class="col-sm-2 col-form-label">Slug <span class="note">*</span></label>

                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="slug" id="slug" value="{{old('slug')}}">
                        @if ($errors && $errors->has('slug'))
                            <p class="text-danger text-xs error-message">{{ $errors->first('slug') }}</p>
                        @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Thể loại cha</label>
                        <div class="input-group date col-sm-4">
                            <select name="parent_id" id="parent_id" value="{{old('parent_id')}}" class="form-control">
                                <option value="">Thể loại cha</option>
                                @foreach($categoryProduct as $categories)
                                    <option value="{{$categories->id}}">{{$categories->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Hiển thị</label>

                        <div class="col-sm-10">
                            <input name="status" type="checkbox" id="active" />
                        </div>
                    </div>

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