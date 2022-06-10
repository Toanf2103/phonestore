@extends('admin.layout', ['title' => 'Edit Brand'])
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chỉnh sửa thương hiệu {{ $br -> TenLSP }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Brand</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="{{ route("admin.brand.edit", $br -> id ) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin thương hiệu</h3>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="inputName">Tên thương hiệu</label>
                                <input value="{{ $br -> TenLSP }}" name="TenLSP" type="text" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Hình ảnh</label>
                                <input title="{{ $br -> HinhAnh }}" name="HinhAnh" type="file">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Mô tả</label>
                                <textarea name="Mota" id="inputDescription" class="form-control" rows="4">{{ $br -> Mota }}</textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{route('admin.brand.index')}}" class="btn btn-secondary">Hủy</a>
                    <input type="submit" value="Thêm" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
@endsection
